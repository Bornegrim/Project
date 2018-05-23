$(document).ready(function () {

$('.date-picker-2').popover({
    html : true,
    content: function() {
      return $("#example-popover-2-content").html();
    },
    title: function() {
      return $("#example-popover-2-title").html();
    }
  });

$(".date-picker-2").datepicker({
  onSelect: function(dateText) {
    $('#example-popover-2-title').html('<b>Avialable Appiontments</b>');
    var html = '<form action="booking-progress.php" method="post" id="bookingForm"> <input name="block1"  type="submit" class="btn btn-success" value="07:00 – 10:00" </input><br><input  name="block2"  type="submit" class="btn btn-success" value="10:00 – 13:00"</input><br><input name="block3" type="submit" class="btn btn-success" value="13:00 – 16:00"</input><br><input  name="block4" type="submit" class="btn btn-success" value="16:00 – 19:00"</input><br><input  name="block5" type="submit" class="btn btn-success" value="19:00 – 22:00"</input></form>';
    $('#example-popover-2-content').html('Avialable Appiontments On <strong>'+dateText+'</strong><br>'+html);
    $('.date-picker-2').popover('show');
    }
  })

});

$(document).ready(function () {

  $('#bookingForm').submit(function () {
    var dateAsString = dateText;
    var dateAsObject = $(this).datepicker('getDate');
    console.log(dateAsString);
    $.post("booking-progress.php", {
      datetester: dateAsString
    }, function() {
        });
  });
});

$(document).ready(function () {
  $('#postForm').submit(function(){
     if($.trim($('#message').val()) == ""){
        alert('Post can not be left blank');
        return false;
     } else {
       return true;
     }
 })
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
