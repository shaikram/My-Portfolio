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
      //Insert the data to Database
      $portfolio = new Portfolio();
      $portfolio->webName = $request->input("input1");
      $portfolio->webURL = $request->input("input2");
      $portfolio->systemKind = $request->input("input3");
      $portfolio->projectType = $request->input("input4");
      $portfolio->description = $request->input("input5");

          if($portfolio->save()){
            echo "Message sent";
          }else{
            echo "There's a problem";
          }

    }
}
