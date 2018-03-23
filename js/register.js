<!--Code adapted from http://www.the-art-of-web.com/javascript/validate-password/-->  

function checkForm(form)
{
if(form.pwd1.value != "" && form.pwd1.value == form.pwd2.value) {
  if(form.pwd1.value.length < 6) {
    alert("Error: Password must contain at least six characters!");
    form.pwd1.focus();
    return false;
  }
  if(form.pwd1.value.length < 12) {
    alert("Error: Password cannot contain more than 12 characters!");
    form.pwd1.focus();
    return false;
  }
  var re = /[0-9]/;
  if(!re.test(form.pwd1.value)) {
    alert("Error: password must contain at least one number (0-9)!");
    form.pwd1.focus();
    return false;
  }
  re = /[a-z]/;
  if(!re.test(form.pwd1.value)) {
    alert("Error: password must contain at least one lowercase letter (a-z)!");
    form.pwd1.focus();
    return false;
  }
  re = /[A-Z]/;
  if(!re.test(form.pwd1.value)) {
    alert("Error: password must contain at least one uppercase letter (A-Z)!");
    form.pwd1.focus();
    return false;
  }
  re = /[~!#$]/;
  if(!re.test(form.pwd1.value)) {
    alert("Error: password must contain at least one of the following special characters ~ ! # $");
    form.pwd1.focus();
    return false;
  } 
} else {
  alert("Error: Your passwords do not match!");
  form.pwd1.focus();
  return false;
}

alert("You entered a valid password: " + form.pwd1.value);
return true;
}
