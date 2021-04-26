$(document).ready(function(){


  $('#mail_form').submit(function(e){
    e.preventDefault();
    // action="/messages"
    var username = $('#username').val();
    var email = $('#email').val();
    var msgId = $('#msgId').val();
    var myreply = $('#myreply').val();

    if(myreply !== ""){
      $.ajax({
         url:"/messages",
         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
         type:"post",
         async:false,
         data:{
           "username":username,
           "email":email,
           "msgId":msgId,
           "myreply":myreply
         },
         success: function(data){
            // console.log(Response);
            $("#myreply").val('');
            $("html, body").animate({
              scrollTop:$("#reply_ul").offset().top - 60
            },1000);
            alert("Message sent");
         }
       });
    }else{
      alert("Message cannot be empty!");
    }

  });
  setInterval(function(){
    var messageId = $('#messageId').val();
      $.ajax({
         url:"/ajax-reply",
         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
         type:"post",
         async:false,
         data:{
           "messageId":messageId
         },
         success: function(data){
           $('#reply_ul').html(data);
         }
       });
  },1000);

});
