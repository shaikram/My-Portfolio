
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
        url:"mysqli/portfolio.func.php",
        type:"post",
        async:false,
        data:{
          "port_done": 1,
          "port_id":id
        },
        success: function(data){
          //alert(data);
          $('#dlgbox').html(data);
        }
      });



   });


   //dlg.style.left = (winWidth/2) - 480/2 +"px";
   //dlg.style.top = "150px";

 }
 $(document).ready(function(){
   var rdct_btn = $('#rdct_btn');
   var rdct_inp = $('#rdct_inp');
   var redrctError = $('#redrctError');
   var code = "iloveprogramming11";

   rdct_btn.click(function(){
     if(rdct_inp.val() == "" || rdct_inp.val() != code){
       redrctError.css("display", "block");
       //redrctError.style.display="block";
     }else{
       window.location = "http://localhost/my_website/admin/config.php";
       redrctError.css("display", "none");
     }
   });

 });

 /*
 $("#showDialog"+id).load(function(){

   $.ajax({
      url:"mysqli/portfolio.func.php",
      type:"post",
      async:false,
      data:{
        "port_done": 1,
        "port_id":id
      },
      success: function(){
        alert("datasend");
        //$('#dlgbox').load('mysqli/portfolio.func.php');
      }
    });
 });*/
