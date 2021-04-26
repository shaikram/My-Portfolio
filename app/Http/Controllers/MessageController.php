<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Message;
use App\Models\Reply;
use DB;

class MessageController extends Controller
{
  //Show all the data "Messages"
  public function index(){
    // $messages = Message::where('status', 1)->orderBy('msgId', 'DESC')->paginate(15);
    $messages = Message::where('status', 1)->orderBy('msgId', 'DESC')->get();
    $read = Message::where('status', 0)->orderBy('msgId', 'DESC')->get();
    $messagesCount = Message::all();
    $msgCount = $messagesCount->count();
    $unreadCount = $messages->count();
    return view('message')->with(
      [
        'messages' => $messages,
        'msgCount' => $msgCount,
        'read' => $read,
        'unread' => $unreadCount
      ]
    );
  }
  public function showInbox(){
    // $messages = Message::where('status', 1)->orderBy('msgId', 'DESC')->paginate(15);
    $messages = Message::where('status', 1)->orderBy('msgId', 'DESC')->get();
    $read = Message::where('status', 0)->orderBy('msgId', 'DESC')->get();
    $messagesCount = Message::all();
    $msgCount = $messagesCount->count();
    $unreadCount = $messages->count();
    return view('inc/inbox')->with(
      [
        'messages' => $messages,
        'msgCount' => $msgCount,
        'read' => $read,
        'unread' => $unreadCount
      ]
    );
  }
  //Add data
  public function store(Request $request){
    //Insert the data to Database
    $reply = new Reply();
    $reply->username = $request->input("username");
    $reply->email = $request->input("email");
    $reply->message = $request->input("myreply");
    $reply->msgId = $request->input("msgId");
    $messages = Message::where('msgId', $reply->msgId)->first();

   // for passing data to mailer
    $data = array(
      'username' => $request->input("username"),
      'message' => $request->input("myreply")
    );


    if ($reply->save()) {
      // Reply::create(
      //   [
      //     "username" => $request->username,
      //     "email" => $request->email,
      //     "message" => $request->myreply,
      //     "msgId" => $request->msgId
      //   ]
      // );
      echo "Message sent";
      Mail::to($messages->email)->send(new WelcomeMail($data));
    }
    // echo $request->input("email")." | ".$request->input("myreply");


  }
  //Showing add form
  public function create(){

  }
  //Show Message data
  public function show($id){
    $messages = Message::where('msgId', $id)->get();
    $reply = Reply::where('msgId', $id)->orderBy('replyId', 'DESC')->get();

    return view('reply')->with(
      [
        'messages'=> $messages
      ]
    );
  }
  //Update data
  public function update($id){
    $messages = Message::where('msgId', $id)->first();
    $messages->status = 0;

    $messages->save();
     return redirect("/messages/$id");

    // foreach ($messages as $message) {
    //   $message = Message::where('msgId', $id)->first();
    //   $message->status = 0;
    //   $message->save();
    // }


    // return redirect()->action('MessageController@show');
    // return redirect()->route("'/messages/$id'");
  }
  //destroy or delete data
  public function destroy($id){

  }
  //Edit data
  public function edit($id){

  }
}
