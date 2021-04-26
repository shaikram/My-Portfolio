@include('inc/admin/rnavbar')
<div class="alert alert-primary alert-dismissible fade show" role="alert">
  Hi, <strong>{{ session('email') }}!</strong> welcome to admin dashboard.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<section class="content">
  <br><br>
  <div class="container inbox-container">
    <div class="row inbox-head">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <h2 class="text-white">Messages</h2>

      </div>
    </div>
    @foreach ($messages as $message)
        <div class="row y-message-container justify-content-center">
          <h4>{{ ucwords($message->username) }}</h4>
          <input type="hidden" id="messageId" name="msgId" value="{{ $message->msgId }}">
          <span class="d-time">{{ $message->email }} | {{ date('F d, Y | h:i:s a', strtotime($message->created_at)) }}</span>
          <span class="m-time">{{ $message->email }} <br>{{ date('F d, Y | h:i:s a', strtotime($message->created_at)) }}</span>
          <br><br>
          <div class="col-sm-10 col-md-10 col-lg-10 y_div_msg">
            <p class="p_msg pre_wrap">
              {{ $message->description }}
            </p>
          </div>
          <br><br>
        </div>
        <ul class="reply_ul" id="reply_ul">

        </ul>


        <br><br><br>
        <div class="row justify-content-center align-items-center div_send">
          <div class="col-sm-10 col-md-10 col-lg-10 col_send">

            <form id="mail_form" data-route="" method="post">
              {{ csrf_field() }}
              @csrf
              <input type="hidden" id="username" name="username" value="{{ $message->username }}">
              <input type="hidden" id="email" name="email" value="{{ $message->email }}">
              <input type="hidden" id="msgId" name="msgId" value="{{ $message->msgId }}">
              <textarea class="form-textarea" id="myreply" placeholder="Type your message here" name="myreply" rows="5" cols="50"></textarea><br>
              <input class="btn btn-primary" type="submit" value="Send">
            </form>
          </div>
        </div>
    @endforeach


  </div>
</section>
<br><br><br>

<script type="text/javascript">
var nav_item = document.getElementById('nav_item2');
nav_item.classList.add("active");
</script>
