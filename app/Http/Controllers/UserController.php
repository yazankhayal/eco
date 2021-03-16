<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\UserModel;
use App\Models\Dog;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

    class UserController extends Controller
{
    public function user()
    {
        return view('user.user');
    }

    public function user_create()
    {
        $location_id = Location::get();
        $dog_id = Dog::get();
        return view('user.create',compact('dog_id','location_id'));
    }

    public function user_edit($id)
    {
        $item = UserModel::where("id",$id)->first();
        if($item == null){
            return redirect()->route('user');
        }
        $location_id = Location::get();
        $dog_id = Dog::get();
        return view('user.edit',compact('item','location_id','dog_id'));
    }

    public function user_store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'location_id' =>'required|min:1|numeric',
            'dog_id' =>'required|min:1|numeric',
            'name' =>'required|min:1|max:191',
        ]);
        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }
        else{

            $location = Location::where("id",$request->location_id)->first();
            if($location == null){
                return redirect()->route('user');
            }

            $dog_id = Dog::where("id",$request->dog_id)->first();
            if($dog_id == null){
                return redirect()->route('user');
            }

            $save = new UserModel();
            $save->location_id = $request->location_id;
            $save->dog_id = $request->dog_id;
            $save->name = $request->name;
            $save->save();
            return redirect()->route('user')->with("success","Successfully Updated");
        }
    }

    public function user_update(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'id' =>'required|min:1|numeric',
            'location_id' =>'required|min:1|numeric',
            'name' =>'required|min:1|max:191',
            'dog_id' =>'required|min:1|numeric',
        ]);
        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }
        else{

            $location = Location::where("id",$request->location_id)->first();
            if($location == null){
                return redirect()->route('user');
            }

            $dog_id = Dog::where("id",$request->dog_id)->first();
            if($dog_id == null){
                return redirect()->route('user');
            }

            $id = $request->id;
            $item = UserModel::where("id",$id)->first();
            if($item == null){
                return redirect()->route('user');
            }
            $item->location_id = $request->location_id;
            $item->dog_id = $request->dog_id;
            $item->name = $request->name;
            $item->save();
            return redirect()->route('user')->with("success","Successfully Deleted");
        }
    }

    public function user_delete(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'id' =>'required|min:1|numeric',
        ]);
        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }
        else{
            $id = $request->id;
            $item = UserModel::where("id",$id)->first();
            if($item == null){
                return redirect()->route('user');
            }
            $item->delete();
            return redirect()->route('user')->with("success","Successfully Created");
        }
    }

    /*
     AJAX request
     */
    public function user_ajax(Request $request){

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
        $totalRecords = UserModel::select('count(*) as allcount')->count();
        $totalRecordswithFilter = UserModel::select('count(*) as allcount')
            ->whereHas("Location",function ($q) use($searchValue){
                $q->where('name', 'like', '%' .$searchValue . '%');
            })
            ->orwhereHas("Dog",function ($q) use($searchValue){
                $q->where('name', 'like', '%' .$searchValue . '%');
            })
        ->count();

        // Fetch records
        $records = UserModel::orderBy($columnName,$columnSortOrder)
            ->whereHas("Location",function ($q) use($searchValue){
                $q->where('name', 'like', '%' .$searchValue . '%');
            })
            ->orwhereHas("Dog",function ($q) use($searchValue){
                $q->where('name', 'like', '%' .$searchValue . '%');
            })
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();

        foreach($records as $record){
            $id = $record->id;
            $name = $record->name;
            $location = $record->Location->name;
            $dog = $record->Dog->name;

            $edit_route = route('user_edit',['id'=>$id]);
            $edit = "<a href='$edit_route' class='btn btn-success'>Edit</a>";

            $delete = " <button type=\"button\" data-name='$name' data-id='$id' class=\"btn_delete btn btn-danger\" data-toggle=\"modal\" data-target=\"#staticBackdrop\">
                      Delete
                    </button>";

            $data_arr[] = array(
                "id" => $id,
                "name" => $name,
                "location_id" => $location,
                "dog_id" => $dog,
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
