$(document).ready(function(){
  var dwn_fnc = document.getElementById('dwn_fnc');
  var hd_arr = document.getElementById('hd_arr').value;
  dwn_fnc.addEventListener("click", function(){
    $("html, body").animate({
      scrollTop:$("#scroll-" + hd_arr).offset().top + 10
    },1000);


  });

  var up_fnc = document.getElementById('up_fnc');
  var hd_arrup = document.getElementById('hd_arrup').value;
  up_fnc.addEventListener("click", function(){
    $("html, body").animate({
      scrollTop:$("#scroll-" + hd_arrup).offset().top + 10
    },1000);


  });

});
