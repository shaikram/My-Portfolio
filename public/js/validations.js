function validate(){
  var cont_inp = document.forms['contForm']['cont_inp'].value;
  var cont_email = document.forms['contForm']['cont_email'].value;
  var cont_text = document.forms['contForm']['cont_text'].value;
  var cont_error = document.getElementById('cont_error');
  var regex = new RegExp("^[0-9a-zA-Z\b ]+$");

  if(regex.exec(cont_inp) == null){
    cont_error.innerHTML += "Avoid using special symbol on name field(#,@,$,^...i.e)"
    cont_error.style.display = "block";
    return false;
  }if(cont_inp <= 6){
    cont_error.innerHTML += "Atleast put 6 or more string";
    cont_error.style.display = "block";
    return false;
  }else{
    return false;
  }
}
