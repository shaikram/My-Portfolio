function mobilebar(){
  var mob_menu = document.getElementById('mob_menu');
  $("#mob_menu").animate({marginLeft:"0%"},350);
  mob_menu.style.display = "block";

}
function closemenu(){
  var mob_menu = document.getElementById('mob_menu');
  var ham_bar = document.getElementById('ham_bar');

  $("#mob_menu").animate({marginLeft:"-100%"},350);
  /*mob_menu.style.display = "none";
  ham_bar.style.color = "#fff";
  ham_bar.style.background = "none";*/

}
