
$(document).ready(function () {
  $('#test123').click(function(){
    alert("test");
  });
});


$(document).ready(function () {
  $("#PostFormButton").click(function(e) {

    var url = "posts-create.php";
    $.ajax({
           type: "POST",
           url: url,
           data: $("#postForm").serialize(),
         });

    $.ajax({
        url: "index.php",
        data: {
        },
        type: "POST",
        dataType: "html",
        success: function (data) {

            var result = $('<div />').append(data).find('#updateAjax').html();
            $('#updateAjax').html(result);
        },
    });

    e.preventDefault();
});
});

$(document).ready(function () {
  $('body').on('click', '.deletebutton', function(e) {

    var url = "delete-posts-process.php";
    $.ajax({
           type: "POST",
           url: url,

           data: $("#deletePost").serialize(),
         });

    $.ajax({
        url: "index.php",
        data: {
        },
        type: "POST",

        dataType: "html",
        success: function (data) {

            var result = $('<div />').append(data).find('#updateAjax').html();
            $('#updateAjax').html(result);
        },
    });

    e.preventDefault();
});
});



function validateEmail(x) {
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        return false;
    } else {
      return true;
    }

}

$(document).ready(function() {
  $('#loginForm').submit(function(){
    if(!validateEmail($.trim($('#email').val())))  {

      alert('Please enter a valid email!');
      return false;
    }
     else if($.trim($('#password').val()) == "") {
        alert('Please enter a password!');
        return false;
      }

    })
});

function checkedChanged(element) {
    var myLayer = document.getElementById('reg');
    if (element.checked === true) {
        myLayer.className = "blue_button";
        myLayer.disbled = "";
    }
    else {
        myLayer.className = "gray_button";
        myLayer.disabled = "disabled";
    }
};
