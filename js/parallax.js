const parallax = document.getElementById('parallax');
const parallax1 = document.getElementById('parallax1');
const parallax2 = document.getElementById('parallax2');

window.addEventListener("scroll", function(){

//=====set the screen size condition========/
  if($(window).width() >= 1000){
    let offset = window.pageYOffset;
    parallax.style.backgroundPositionY = offset * -0.06 + "px";
    parallax1.style.backgroundPositionY = offset * -0.02 + "px";
    parallax2.style.backgroundPositionY = offset * -0.02 + "px";
  }else{

  }

});
