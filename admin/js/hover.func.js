function hoverFunc(x){
  var img_id = x;
  if($(window).width() >= 1000){
    var work_img = document.getElementById("work_img"+img_id);
    var work_hover = document.getElementById("work_hover"+img_id);
    var work_img1 = document.getElementById("work_img_1"+img_id);
    var work_hover1 = document.getElementById("work_hover_1"+img_id);


    work_hover.style.marginTop = "0%";
    work_img.style.display = "none";
    work_hover1.style.marginTop = "0%";
    work_img1.style.display = "none";


  }
}
function leaveFunc(x){
  var img_id = x;
  if($(window).width() >= 1000){
    var work_img = document.getElementById("work_img"+img_id);
    var work_hover = document.getElementById("work_hover"+img_id);
    var work_img1 = document.getElementById("work_img_1"+img_id);
    var work_hover1 = document.getElementById("work_hover_1"+img_id);


    work_hover.style.marginTop = "-100%";
    work_img.style.display = "block";
    work_hover1.style.marginTop = "-100%";
    work_img1.style.display = "block";


  }
}
function clickFunc(x){
  var img_id = x;
  if($(window).width() <= 768 || $(window).width() >= 768){
    var work_img = document.getElementById("work_img"+img_id);
    var work_hover = document.getElementById("work_hover"+img_id);
    var work_img1 = document.getElementById("work_img_1"+img_id);
    var work_hover1 = document.getElementById("work_hover_1"+img_id);

    work_hover.style.marginTop = "0%";
    work_img.style.display = "none";
    work_hover1.style.marginTop = "0%";
    work_img1.style.display = "none";

   }
}
function closeFunc(x){
  var img_id = x;
  if($(window).width() <= 768 || $(window).width() >= 768){
    var work_img = document.getElementById("work_img"+img_id);
    var work_hover = document.getElementById("work_hover"+img_id);
    var work_img1 = document.getElementById("work_img_1"+img_id);
    var work_hover1 = document.getElementById("work_hover_1"+img_id);


    work_hover.style.marginTop = "-100%";
    work_img.style.display = "block";
    work_hover1.style.marginTop = "-100%";
    work_img1.style.display = "block";


  }
}
