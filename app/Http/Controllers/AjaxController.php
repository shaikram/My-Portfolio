<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\Message;
use App\Models\Reply;
use DB;




class AjaxController extends Controller
{
    //
    public function postId(Request $request){

      // return response()->json(['message'=>'Success', 'id'=>$request->port_id]);
      // return $request->port_id;
      $id = $request->port_id;
      if($id != ""){
      $data = DB::table('portfolios')->where('portId', $id)->get();
      foreach ($data as $res) {
      ?>

      <div class="pic_frame">

        <img src="work/<?php echo $res->coverPhoto;?>" class="pt_images">
        <div class="divBtn">
          <div class="btnLeft" onclick="prev()">
            <i class="fa fa-angle-double-left fa-2x"></i>
          </div>
          <div class="btnRight" onclick="next()">
            <i class="fa fa-angle-double-right fa-2x"></i>
          </div>
        </div>
      </div>

      <div class="descDiv">
        <div class="ptd1">
          <h1><?php echo $res->webName;?></h1>
          <h3><?php echo $res->systemKind;?></h3>
        </div>
        <div class="ptd2">
          <p>
            <?php echo $res->description;?>
          </p>
        </div>
        <div class="ptd3">
          <a href="<?php echo $res->webURL;?>">
            <div class="dsite">
              <i class="fa fa-location-arrow"></i> &nbsp;&nbsp;VIEW SITE
            </div>
          </a>
          <div class="cls2" onclick="dlgLogIn()">
            <i class="fa fa-times fa-3x"></i>
          </div>
        </div>
      </div>
      <script type="text/javascript">
        var slider_img = document.querySelector('.pt_images');
        var images = ['<?php echo $res->coverPhoto;?>', '<?php echo $res->photo1;?>', '<?php echo $res->photo2;?>', '<?php echo $res->photo3;?>', '<?php echo $res->photo4;?>'];
        var i = 0;

        function prev(){
          if(i <= 0)
            i = images.length;
            i--;
            return setImage();


        }
        function next(){
          if(i >= images.length - 1)
            i = -1;
            i++;
            return setImage();

        }
        function setImage(){
          return slider_img.setAttribute('src','work/' + images[i]);
          //alert(i);
        }

      </script>


      <?php
      }
      }

    }
    public function postMessage(Request $request){
      $name = $request->name;


      $message = new Message();
      $message->username = $request->name;
      $message->email = $request->email;
      $message->description = $request->message;
      $message->status = 1;
      $message->save();
      // echo "The Message reach this";





      // $validator = $request->validate([
      //   "name" => "required|min:5|max:30|string",
      //   "email" => "required|min:5|max:200|email",
      //   'message' => 'required|max:200|min:5'
      // ]);

      // $validator = Validate::make(
      //   request()->all(),
      //   [
      //     'name' => 'required|string|max:30|min:5',
      //     'email' => 'required|email|max:30|min:5',
      //     'message' => 'required|max:200|min:5'
      //   ]
      //  );

      //  if($validator->fails()){
      //    $Response = $validator->messages();
      //    // echo $response;
      //  }else{
      //    // For Success do codes here (Insert data)
      //    $Response = ['Success' => 'Your Action has been successfully done'];
      //    // echo "Success";
      //  }
      //
      // return response()->json(["Success"=>]);


    }

    public function postReply(Request $request){
      $msgId = $request->messageId;

      $reply = Reply::where('msgId', $msgId)->orderBy('replyId', 'DESC')->get();


     foreach ($reply as $data) {
      ?>
        <li>
          <div class="row z-message-container justify-content-center">
            <h4>Shaikram Abdulguro Jr</h4>
            <span class="d-time"><b>From:</b> <?php echo "shaikram02@gmail.com"; ?></span><br>
            <span class="d-time"><b>To:</b> <?php echo $data->email; ?> | <?php echo date('F d, Y | h:i:s a', strtotime($data->created_at)); ?></span>
            <span class="m-time"><b>From:</b> <?php echo "shaikram02@gmail.com"; ?></span><br>
            <span class="m-time"><b>To:</b> <?php echo $data->email; ?> <br><?php echo date('F d, Y | h:i:s a', strtotime($data->created_at)); ?></span>
            <br><br>
            <center>
              <h3><b>Shaikram Abdulguro Jr</b></h3>
            </center>
            <div class="col-sm-10 col-md-10 col-lg-10 z_div_msg">
              <br><h4 style="color:#2a2c2d"><b>Hi <?php echo ucwords($data->username); ?>, Good day!</b></h4><br>
              <p class="p_msg pre_wrap">
                <?php echo $data->message; ?>
                <br><br>Sincerely yours,<br>Shaikram Abdulguro Jr
              </p>

            </div>
            <br><br>
          </div>
        </li>
      <?php
     }

    }















}
