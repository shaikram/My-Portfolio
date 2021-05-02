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
      $portfolio->github = $request->input("input3");
      $portfolio->systemKind = $request->input("input4");
      $portfolio->projectType = $request->input("input5");
      $portfolio->description = $request->input("input6");
      $photo = $request->file("cover");
      $new_name = rand().'.'. $photo->getClientOriginalExtension();
      $photo->move(public_path('work'), $new_name);
      $portfolio->coverPhoto = $new_name;

          for($i = 1; $i <= 4; $i++){
            $name = $request->file('file'.$i);
            $image = rand().'.'.$name->getClientOriginalExtension();
            $name->move(public_path('work'), $image);
            $tb_name = 'photo'.$i;
            $portfolio->$tb_name = $image;
          }

          if($portfolio->save()){
            return response()->json([
              'message' => 'Success Uploading'
            ]);
          }else{
            return response()->json([
              'message' => 'There is a problem'
            ]);
          }

    }
}
