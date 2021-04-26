@include('inc/admin/navbar')
<div class="alert alert-primary alert-dismissible fade show" role="alert">
  Hi, <strong>{{ session('email') }}!</strong> welcome to admin dashboard.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<section class="content">
  <br><br>
  <div class="container inbox-container" id="inbox_div">
    <div class="row inbox-head">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <h2 class="text-white">Messages</h2>
        <span class="text-light span-notif align-top">
          Inquiries: {{ $unread."/".$msgCount }}
        </span>
      </div>
    </div>
    <ul class="message-ul" id="inboxDiv">

    </ul>

    <br><br><br><br><br><br><br><br>
    <div class="row justify-content-center align-items-center div_paginate">
      <div class="col-sm-12 col-md-12 col-lg-12">
        {{-- {{ $messages->links("pagination::bootstrap-4") }} --}}
      </div>
    </div>

  </div>
</section>
<br><br><br>

<script type="text/javascript">
      var nav_item = document.getElementById('nav_item2');
      nav_item.classList.add("active");

      
</script>
{{-- <script type="text/javascript">
   $(document).ready(function(){
       $('#inbox_div').load({{ '' }});
   });
</script> --}}
