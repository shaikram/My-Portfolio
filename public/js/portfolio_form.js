$(document).ready(function(){
  $('#portfolio_form').submit(function(e){
    e.preventDefault();
    // var input = $('#port');

    for(var input = 1; input <= 10; input++){
      var port = 'port'+input;
      var focus = document.getElementById(port);
      var field = document.getElementById(port).value;
      var ext = ["jpg", "jpeg", "png"];
      var inp = [
                  "",
                  "Website Name",
                  "Website Url",
                  "Github Repository",
                  "Kind of system",
                  "Description",
                  "Cover Photo",
                  "Picture 1",
                  "Picture 2",
                  "Picture 3",
                  "Picture 4"
                ];
       // alert(fied.value);

       switch(true){

         case field.length == 0:
              alert(inp[input] + ' is required!');
              focus.focus();

          return false;
          break;

          case field.length <= 4:
              alert(inp[input] + ' must be 5 string or more!');
              focus.focus();

          return false;
          break;
       }
       if(input >= 6){
         var pos = field.indexOf('.') + 1;
         var res = field.substr(pos, 3);

             switch(true){

               case field.length == 0:
                    alert(inp[input] + ' is required!');
                    focus.focus();

                return false;
                break;

                case field.length <= 4:
                    alert(inp[input] + ' must be 5 string or more!');
                    focus.focus();

                return false;
                break;
             }

             for(var a = 0; res != ext[a]; a++){
               if(a > 2){
                 alert("The uploaded file must be in .jpg, .jpeg or .png extention!");
                 focus.focus();
                 return false;
               }
             }
             // alert("The uploaded file must be in .jpg, .jpeg or .png extention!");
             //     focus.focus();
       }

    }

    // alert('all goods');
    // =======After passing Validation send the data to server========/
          $.ajax({
                url:"/upload-portfolio",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type:"post",
                async:false,
                data:new FormData(this),
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function(data){
                   // console.log(Response);
                  alert(data.message);

                      for(var i = 1; i <= 10; i++){
                        var a = 'port'+i;
                        var input = document.getElementById(a);
                        input.value = "";
                      }
                }
           });
     //=================================================================================//

  });
});


// ===============================WORK DIV============================================

  function dlgLogIn(){
   var whitebg = document.getElementById('wbg');
   var dlg = document.getElementById('dlgbox');

   whitebg.style.display = "none";
   dlg.style.display = "none";


 }

 function showDialog(x){
   var id = x;
   var whitebg = document.getElementById('wbg');
   var dlg = document.getElementById('dlgbox');

   whitebg.style.display = "block";
   dlg.style.display = "block";
   dlg.classList.add('dlgBoxAn');

   $(document).ready(function(){

     $.ajax({
        url:"/ajax-request",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type:"post",
        async:false,
        data:{
          "port_id":id
        },
        success: function(Response){
           $('#dlgbox').html(Response);
        }
      });


   });

 }

 function hoverFunc(x){
   var img_id = x;
   if($(window).width() >= 1000){
     var work_img = document.getElementById("work_img"+img_id);
     var work_hover = document.getElementById("work_hover"+img_id);


     work_hover.style.marginTop = "0%";
     work_img.style.display = "none";


   }
 }
 function leaveFunc(x){
   var img_id = x;
   if($(window).width() >= 1000){
     var work_img = document.getElementById("work_img"+img_id);
     var work_hover = document.getElementById("work_hover"+img_id);

     work_hover.style.marginTop = "-100%";
     work_img.style.display = "block";


   }
 }
 function clickFunc(x){
   var img_id = x;
   if($(window).width() <= 768 || $(window).width() >= 768){
     var work_img = document.getElementById("work_img"+img_id);
     var work_hover = document.getElementById("work_hover"+img_id);

     work_hover.style.marginTop = "0%";
     work_img.style.display = "none";

    }
 }
 function closeFunc(x){
   var img_id = x;
   if($(window).width() <= 768 || $(window).width() >= 768){
     var work_img = document.getElementById("work_img"+img_id);
     var work_hover = document.getElementById("work_hover"+img_id);

     work_hover.style.marginTop = "-100%";
     work_img.style.display = "block";


   }
 }


 $(document).ready(function(){
   var all_div = document.getElementById('all_div');
   var portfolio_div = document.getElementById('portfolio_div');
   var functional_div = document.getElementById('functional_div');
   var others_div = document.getElementById('others_div');

   $('#wrk_all').click(function(){
     all_div.style.display = "block";
     portfolio_div.style.display = "none";
     functional_div.style.display = "none";
     others_div.style.display = "none";
   });
   $('#wrk_port').click(function(){
     all_div.style.display = "none";
     portfolio_div.style.display = "block";
     functional_div.style.display = "none";
     others_div.style.display = "none";
   });
   $('#wrk_func').click(function(){
     all_div.style.display = "none";
     portfolio_div.style.display = "none";
     functional_div.style.display = "block";
     others_div.style.display = "none";
   });
   $('#wrk_oth').click(function(){
     all_div.style.display = "none";
     portfolio_div.style.display = "none";
     functional_div.style.display = "none";
     others_div.style.display = "block";
   });

 });
