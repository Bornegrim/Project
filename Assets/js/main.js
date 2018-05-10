function checkLogin() {
  var email = document.getElementById("emailreg").value;
  var password = document.getElementById("passwordreg").value;
  var firstName = document.getElementById("firstnamereg").value;
  var checkEmail = email.trim();
  var checkPassword = password.trim();
  var checkFirstName = firstName.trim();
  var atpos = email.indexOf("@");
  var dotpos = email.lastIndexOf(".");

  if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) {
    alert("Not a valid e-mail address");
    return false;
  }
  else if (checkPassword === null || checkPassword === " " || checkPassword === "") {
    alert("Please Fill in a password");
    return false;
    }
    else if (checkFirstName === null || checkFirstName === " " || checkFirstName === "") {
      alert("Please Fill in a first name");
      return false;
    }
  else {
    return true;
  }
}
