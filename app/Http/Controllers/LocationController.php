<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Dog;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class LocationController extends Controller
{
    public function location()
    {
        return view('location.location');
    }

    public function location_create()
    {
        return view('location.create');
    }

    public function location_edit($id)
    {
        $item = Location::where("id",$id)->first();
        if($item == null){
            return redirect()->route('location');
        }
        return view('location.edit',compact('item'));
    }

    public function location_store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' =>'required|min:1|max:191',
        ]);
        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }
        else{
            $save = new Location();
            $save->name = $request->name;
            $save->save();
            return redirect()->route('location')->with("success","Successfully Updated");
        }
    }

    public function location_update(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' =>'required|min:1|max:191',
            'id' =>'required|min:1|numeric',
        ]);
        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }
        else{
            $id = $request->id;
            $item = Location::where("id",$id)->first();
            if($item == null){
                return redirect()->route('location');
            }
            $item->name = $request->name;
            $item->save();
            return redirect()->route('location')->with("success","Successfully Deleted");
        }
    }

    public function location_delete(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'id' =>'required|min:1|numeric',
        ]);
        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }
        else{
            $id = $request->id;
            $item = Location::where("id",$id)->first();
            if($item == null){
                return redirect()->route('location');
            }
            $item->delete();
            return redirect()->route('location')->with("success","Successfully Created");
        }
    }

    /*
     AJAX request
     */
    public function location_ajax(Request $request){

        ## Read value
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length"); // Rows display per page

        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $order_arr = $request->get('order');
        $search_arr = $request->get('search');

        $columnIndex = $columnIndex_arr[0]['column']; // Column index
        $columnName = $columnName_arr[$columnIndex]['data']; // Column name
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc
        $searchValue = $search_arr['value']; // Search value

        // Total records
        $totalRecords = Location::select('count(*) as allcount')->count();
        $totalRecordswithFilter = Location::select('count(*) as allcount')->where('name', 'like', '%' .$searchValue . '%')->count();

        // Fetch records
        $records = Location::orderBy($columnName,$columnSortOrder)
            ->where('location.name', 'like', '%' .$searchValue . '%')
            ->select('location.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();

        foreach($records as $record){
            $id = $record->id;
            $name = $record->name;

            $edit_route = route('location_edit',['id'=>$id]);
            $edit = "<a href='$edit_route' class='btn btn-success'>Edit</a>";

            $delete = " <button type=\"button\" data-id='$id' data-name='$name' class=\"btn_delete btn btn-danger\" data-toggle=\"modal\" data-target=\"#staticBackdrop\">
                      Delete
                    </button>";

            $data_arr[] = array(
                "id" => $id,
                "name" => $name,
                "option" => $edit . $delete,
            );
        }

        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordswithFilter,
            "aaData" => $data_arr
        );

        echo json_encode($response);
        exit;
    }
}
