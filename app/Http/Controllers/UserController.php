<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Hobby;
class UserController extends Controller
{
    //
    public function getHobby(Request $request){

        // Get the currently authenticated user's ID...
        $id = Auth::id();
       // $params= $request->all();
        $data = Hobby::getListOfHobby($id);
      //  return view("listOfHobby")->with(compact('data'));
        return response()->json(
            array(
                'result'=>$data,
            )
        );

    }
}
