

function isElementInViewPort(el){
  if(typeof jQuery == "function" && el instanceof jQuery){
    el = el[0];
  }
  var rect = el.getBoundingClientRect();
  return (
    (rect.top <= 0 && rect.bottom >= 0)
    ||
    (rect.bottom >= (window.innerHeight || document
      .documentElement.clientHeight) &&
      rect.top <= (window.innerHeight ||
        document.documentElement.clientHeight))
        ||
        (rect.top >= 0 &&
         rect.bottom <= (window.innerHeight || document.documentElement.clientHeight))
  );
}

var scroll = window.requestAnimationFrame || function(callback){window.setTimeout(callback,1000/60);}
var elementsToShow = document.querySelectorAll('.skillsetdiv');
var load_bar = document.getElementById('load_bar');
var load_bar2 = document.getElementById('load_bar2');
var load_bar3 = document.getElementById('load_bar3');
var load_bar4 = document.getElementById('load_bar4');
var load_bar5 = document.getElementById('load_bar5');
var load_bar6 = document.getElementById('load_bar6');
var load_bar7 = document.getElementById('load_bar7');
var load_bar8 = document.getElementById('load_bar8');
var load_bar9 = document.getElementById('load_bar9');

function loop(){
  elementsToShow.forEach(function(element){

    if(isElementInViewPort(element)){
      load_bar.classList.add("visible");
      load_bar2.classList.add("visible2");
      load_bar3.classList.add("visible3");
      load_bar4.classList.add("visible4");
      load_bar5.classList.add("visible5");
      load_bar6.classList.add("visible6");
      load_bar7.classList.add("visible7");
      load_bar8.classList.add("visible8");
      load_bar9.classList.add("visible9");

      load_bar.classList.remove("invisible");
      load_bar2.classList.remove("invisible2");
      load_bar3.classList.remove("invisible3");
      load_bar4.classList.remove("invisible4");
      load_bar5.classList.remove("invisible5");
      load_bar6.classList.remove("invisible6");
      load_bar7.classList.remove("invisible7");
      load_bar8.classList.remove("invisible8");
      load_bar9.classList.remove("invisible9");



    }else{
      load_bar.classList.add("invisible");
      load_bar2.classList.add("invisible2");
      load_bar3.classList.add("invisible3");
      load_bar4.classList.add("invisible4");
      load_bar5.classList.add("invisible5");
      load_bar6.classList.add("invisible6");
      load_bar7.classList.add("invisible7");
      load_bar8.classList.add("invisible8");
      load_bar9.classList.add("invisible9");

      load_bar.classList.remove("visible");
      load_bar2.classList.remove("visible2");
      load_bar3.classList.remove("visible3");
      load_bar4.classList.remove("visible4");
      load_bar5.classList.remove("visible5");
      load_bar6.classList.remove("visible6");
      load_bar7.classList.remove("visible7");
      load_bar8.classList.remove("visible8");
      load_bar9.classList.remove("visible9");
    }
  });
   scroll(loop);
}
loop();


//home requestAnimationFrame
var homeToShow = document.querySelectorAll('.home-scroll');
var side_nav = document.getElementById('side_nav');
var hex = document.getElementById('hex');
var hex1 = document.getElementById('hex1');
var hex2 = document.getElementById('hex2');
var hex3 = document.getElementById('hex3');
var hex4 = document.getElementById('hex4');
var hex5 = document.getElementById('hex5');
var img_hex = document.getElementById('img_hex');

function loop1(){
  homeToShow.forEach(function(element){

    if(isElementInViewPort(element)){
      side_nav.classList.add("s_activate");
      side_nav.classList.remove("s_deactivate");

      if($(window).width() < 1000){
        hex.classList.remove("flipHorizontal");
        hex1.classList.remove("flipHorizontal1");
        hex2.classList.remove("flipHorizontal2");
        hex3.classList.remove("flipHorizontal3");
        hex4.classList.remove("flipHorizontal4");
        hex5.classList.remove("flipHorizontal5");
        img_hex.classList.remove("flipHorizontal");
      }


    }else{
      side_nav.classList.remove("s_activate");
      side_nav.classList.add("s_deactivate");

    }
  });
   scroll(loop1);
}
loop1();


//Profile requestAnimationFrame
var profileToShow = document.querySelectorAll('.profile-scroll');
var hex = document.getElementById('hex');
var hex1 = document.getElementById('hex1');
var hex2 = document.getElementById('hex2');
var hex3 = document.getElementById('hex3');
var hex4 = document.getElementById('hex4');
var hex5 = document.getElementById('hex5');
var img_hex = document.getElementById('img_hex');

function loop2(){
  profileToShow.forEach(function(element){

    if(isElementInViewPort(element)){

      if($(window).width() >= 1000){
        hex.classList.add("flipHorizontal");
        hex1.classList.add("flipHorizontal1");
        hex2.classList.add("flipHorizontal2");
        hex3.classList.add("flipHorizontal3");
        hex4.classList.add("flipHorizontal4");
        hex5.classList.add("flipHorizontal5");
        img_hex.classList.add("flipHorizontal");
      }



      fa1.style.fontWeight ="normal";
      fa2.style.fontWeight ="bold";
      fa3.style.fontWeight ="normal";
      fa4.style.fontWeight ="normal";
      fa5.style.fontWeight ="normal";

      sec1.style.marginLeft ="0";
      sec2.style.marginLeft ="8px";
      sec3.style.marginLeft ="0";
      sec4.style.marginLeft ="0";
      sec5.style.marginLeft ="0";
    }else{
      if($(window).width() >= 1000){
        hex.classList.remove("flipHorizontal");
        hex1.classList.remove("flipHorizontal1");
        hex2.classList.remove("flipHorizontal2");
        hex3.classList.remove("flipHorizontal3");
        hex4.classList.remove("flipHorizontal4");
        hex5.classList.remove("flipHorizontal5");
        img_hex.classList.remove("flipHorizontal");
      }


    }
  });
   scroll(loop2);
}
loop2();

//Skill requestAnimationFrame
var skillToShow = document.querySelectorAll('.skill-scroll');
var hex = document.getElementById('hex');
var hex1 = document.getElementById('hex1');
var hex2 = document.getElementById('hex2');
var hex3 = document.getElementById('hex3');
var hex4 = document.getElementById('hex4');
var hex5 = document.getElementById('hex5');
var img_hex = document.getElementById('img_hex');

function loop3(){
  skillToShow.forEach(function(element){

    if(isElementInViewPort(element)){
      fa1.style.fontWeight ="normal";
      fa2.style.fontWeight ="normal";
      fa3.style.fontWeight ="bold";
      fa4.style.fontWeight ="normal";
      fa5.style.fontWeight ="normal";

      sec1.style.marginLeft ="0";
      sec2.style.marginLeft ="0";
      sec3.style.marginLeft ="8px";
      sec4.style.marginLeft ="0";
      sec5.style.marginLeft ="0";

      if($(window).width() >= 1000){
        hex.classList.remove("flipHorizontal");
        hex1.classList.remove("flipHorizontal1");
        hex2.classList.remove("flipHorizontal2");
        hex3.classList.remove("flipHorizontal3");
        hex4.classList.remove("flipHorizontal4");
        hex5.classList.remove("flipHorizontal5");
        img_hex.classList.remove("flipHorizontal");
      }

    }else{


    }
  });
   scroll(loop3);
}
loop3();

//Work requestAnimationFrame
var workToShow = document.querySelectorAll('.work-scroll');

function loop4(){
  workToShow.forEach(function(element){

    if(isElementInViewPort(element)){
      fa1.style.fontWeight ="normal";
      fa2.style.fontWeight ="normal";
      fa3.style.fontWeight ="normal";
      fa4.style.fontWeight ="bold";
      fa5.style.fontWeight ="normal";

      sec1.style.marginLeft ="0";
      sec2.style.marginLeft ="0";
      sec3.style.marginLeft ="0";
      sec4.style.marginLeft ="8px";
      sec5.style.marginLeft ="0";
    }else{


    }
  });
   scroll(loop4);
}
loop4();

//Contact requestAnimationFrame
var contactToShow = document.querySelectorAll('.contact-scroll');
var div_form = document.getElementById('div_form');

function loop5(){
  contactToShow.forEach(function(element){

    if(isElementInViewPort(element)){
      fa1.style.fontWeight ="normal";
      fa2.style.fontWeight ="normal";
      fa3.style.fontWeight ="normal";
      fa4.style.fontWeight ="normal";
      fa5.style.fontWeight ="bold";

      sec1.style.marginLeft ="0";
      sec2.style.marginLeft ="0";
      sec3.style.marginLeft ="0";
      sec4.style.marginLeft ="0";
      sec5.style.marginLeft ="8px";

      div_form.classList.add("form_animation");
    }else{
      div_form.classList.remove("form_animation");
      cont_error.style.display = "none";
      cont_error1.style.display = "none";
      cont_error2.style.display = "none";
      cont_error3.style.display = "none";
      $("#cont_name").val('');
      $("#cont_email").val('');
      $("#cont_text").val('');
    }
  });
   scroll(loop5);
}
loop5();
