$(document).ready(function(){

  $("#cont_send").click(function(){
    var cont_name = $("#cont_name").val();
    var cont_email = $("#cont_email").val();
    var cont_text = $("#cont_text").val();
    var cont_error = document.getElementById('cont_error');
    var cont_error1 = document.getElementById('cont_error1');
    var cont_error2 = document.getElementById('cont_error2');
    var cont_error3 = document.getElementById('cont_error3');
    var regex = new RegExp("^[0-9a-zA-Z\b ]+$");

    if(regex.exec(cont_name) == null){
      cont_error.style.display = "block";
      cont_error1.style.display = "none";
      cont_error2.style.display = "none";
      cont_error3.style.display = "none";
      return false;
    }if(cont_name <= 6){
      cont_error2.style.display = "block";
      cont_error1.style.display = "none";
      cont_error.style.display = "none";
      cont_error3.style.display = "none";
      return false;
    }if(cont_name == ""){
      cont_error3.style.display = "block";
      cont_error1.style.display = "none";
      cont_error2.style.display = "none";
      cont_error.style.display = "none";
      return false;
    }if(cont_email == ""){
      cont_error3.style.display = "block";
      cont_error1.style.display = "none";
      cont_error2.style.display = "none";
      cont_error.style.display = "none";
      return false;
    }if(cont_text == ""){
      cont_error3.style.display = "block";
      cont_error1.style.display = "none";
      cont_error2.style.display = "none";
      cont_error.style.display = "none";
      return false;
    }else{

     $.ajax({
        url:"mysqli/contact.func.php",
        type:"post",
        async:false,
        data:{
          "cont_done": 1,
          "username":cont_name,
          "email":cont_email,
          "text":cont_text
        },
        success: function(){
          $("#cont_name").val('');
          $("#cont_email").val('');
          $("#cont_text").val('');
          cont_error.style.display = "none";
          cont_error3.style.display = "none";
          cont_error2.style.display = "none";
          cont_error1.style.display = "block";
        }
      });
      return true;
    }



  });
});
