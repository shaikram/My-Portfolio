$(document).ready(function(){
  //====Web Navigation Variables
  var sec1 = document.getElementById('sec1');
  var sec2 = document.getElementById('sec2');
  var sec3 = document.getElementById('sec3');
  var sec4 = document.getElementById('sec4');
  var sec5 = document.getElementById('sec5');

  var s1 = document.getElementById('s1').value;
  var s2 = document.getElementById('s2').value;
  var s3 = document.getElementById('s3').value;
  var s4 = document.getElementById('s4').value;
  var s5 = document.getElementById('s5').value;

  var fa1 = document.getElementById('fa1');
  var fa2 = document.getElementById('fa2');
  var fa3 = document.getElementById('fa3');
  var fa4 = document.getElementById('fa4');
  var fa5 = document.getElementById('fa5');

  sec1.addEventListener("click", function(){
    $("html, body").animate({
      scrollTop:$("#scroll-" + s1).offset().top
    },1000);



  });
  sec2.addEventListener("click", function(){
    $("html, body").animate({
      scrollTop:$("#scroll-" + s2).offset().top + 10
    },1000);


  });
  sec3.addEventListener("click", function(){
    $("html, body").animate({
      scrollTop:$("#scroll-" + s3).offset().top
    },1000);


  });
  sec4.addEventListener("click", function(){
    $("html, body").animate({
      scrollTop:$("#scroll-" + s4).offset().top
    },1000);


  });
  sec5.addEventListener("click", function(){
    $("html, body").animate({
      scrollTop:$("#scroll-" + s5).offset().top
    },1000);

  });

  //===Mobile Navigation Scroll Functions
  var msec1 = document.getElementById('msec1');
  var msec2 = document.getElementById('msec2');
  var msec3 = document.getElementById('msec3');
  var msec4 = document.getElementById('msec4');
  var msec5 = document.getElementById('msec5');
  var arr_dwn = document.getElementById('arr_dwn');

  var ms1 = document.getElementById('ms1').value;
  var ms2 = document.getElementById('ms2').value;
  var ms3 = document.getElementById('ms3').value;
  var ms4 = document.getElementById('ms4').value;
  var ms5 = document.getElementById('ms5').value;
  var hd_arr = document.getElementById('hd_arr').value;

  msec1.addEventListener("click", function(){
    $("html, body").animate({
      scrollTop:$("#scroll-" + ms1).offset().top
    },1000);
    closemenu();
  });
  msec2.addEventListener("click", function(){
    $("html, body").animate({
      scrollTop:$("#scroll-" + ms2).offset().top
    },1000);
    closemenu();

  });
  msec3.addEventListener("click", function(){
    $("html, body").animate({
      scrollTop:$("#scroll-" + ms3).offset().top
    },1000);
    closemenu();

  });
  msec4.addEventListener("click", function(){
    $("html, body").animate({
      scrollTop:$("#scroll-" + ms4).offset().top
    },1000);
    closemenu();

  });
  msec5.addEventListener("click", function(){
    $("html, body").animate({
      scrollTop:$("#scroll-" + ms5).offset().top
    },1000);
    closemenu();

  });


  /*if(page_id == "section3"){
    $("html, body").animate({
      scrollTop:$("#scroll-" + page_id).offset().top
    },1000);
  }*/

});
