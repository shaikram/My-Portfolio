$(document).ready(function(){
  $('#inq-data').submit(function(e){
    e.preventDefault();
    var uname = $('#cont_name').val();
    var email = $('#cont_email').val();
    var message = $('#cont_text').val();
    var regex = new RegExp("^[0-9a-zA-Z\b ]+$");
    var cont_error = document.getElementById('cont_error');
    var cont_error1 = document.getElementById('cont_error1');

    if(regex.exec(uname) == null){
      cont_error.style.display = "block";
      cont_error1.style.display = "none";
      return false;
    }else{
      $.ajax({
         url:"/ajax-message",
         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
         type:"post",
         async:false,
         data:{
           "name":uname,
           "email":email,
           "message":message
         },
         success: function(Response){
            // console.log(Response);
            $("#cont_name").val('');
            $("#cont_email").val('');
            $("#cont_text").val('');
            cont_error.style.display = "none";
            cont_error1.style.display = "block";
         }
       });
    }


  });
});
