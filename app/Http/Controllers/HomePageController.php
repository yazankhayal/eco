<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class HomePageController extends Controller
{
    public function part_3()
    {
        return view('part_3');
    }

    public function index()
    {
        return view('index');
    }

    public function api_1()
    {
        return view('api_1');
    }

    public function api_2()
    {
        return view('api_2');
    }

    public function api_3()
    {
        return view('api_3');
    }

    public function api_4()
    {
        $items = parent::curl("https://dog.ceo/api/breeds/list/all");
        $msg = "error";
        if($items->status == "success"){
            foreach ($items->message as $key => $value){
                //Check if exsists
                $ex = Dog::where("name",$key)->first();
                if($ex == null){
                    $save = new Dog();
                    $save->name = $key;
                    $save->save();
                }
                $msg = "success";
            }
        }
        return view('api_4',compact('msg'));
    }

    public function api_5()
    {
        $items = Dog::orderby("id",'desc')->paginate();
        return view('api_5',compact('items'));
    }

}
