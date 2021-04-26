<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Validator;

class portfolioController extends Controller
{
    public function list(){
      // echo "This is the list page";
      // return Portfolio::all();

      $data = Portfolio::where('projectType', 'FUNCTIONAL')->get();
      return view('list', ['data' => $data]);
    }
    public function home(){
      $data = Portfolio::all();
      $data1 = Portfolio::where('projectType', 'FUNCTIONAL')->get();
      $data2 = Portfolio::where('projectType', 'PORTFOLIO')->get();

      return view('index', ['data' => $data, 'data1' => $data1, 'data2' => $data2]);
    }
    public function upload(Request $request){
      $name = $request->port1;
      echo "yey";
      // $image = $request->file('file1');
      // $new_name = rand().".".$image->getClientOriginalExtension();
      // $image->move(public_path('work'), $new_name);


      // $rules = array(
      //   'file1' => 'required|image|max:2048'
      // );
      //
      // $error = Validator::make($request->all(), $rules);
      //
      // if($error->fails()){
      //     return response()->json()(['errors' => $error->errors()->all()]);
      // }
      //
      // $output = array('success' => 'Portfolio uploadded successfully');
      //
      // return response()->json($output);
    }
}
