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
