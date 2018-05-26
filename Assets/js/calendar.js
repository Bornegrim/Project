
function showSelected(value) {
  if (value == "1") {
    document.getElementById("bookingForm1").setAttribute("class", "show");
    document.getElementById("bookingForm2").setAttribute("class", "hide");
    document.getElementById("bookingForm3").setAttribute("class", "hide");
  } else if (value == "2") {
      document.getElementById("bookingForm1").setAttribute("class", "hide");
      document.getElementById("bookingForm2").setAttribute("class", "show");
      document.getElementById("bookingForm3").setAttribute("class", "hide");
  } else if (value == "3") {
      document.getElementById("bookingForm1").setAttribute("class", "hide");
      document.getElementById("bookingForm2").setAttribute("class", "hide");
      document.getElementById("bookingForm3").setAttribute("class", "show");
  } else {
  }
}


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
    minDate: 0,
    maxDate: 30,

    onSelect: function(dateText) {
      $('#example-popover-2-title').html('<b>Tvättider</b>');
      var html = "";
      var date = dateText;
      $.post("booked-times.php", {
        date: date
      }, function(data) {
        var html = data;
        $('#example-popover-2-content').html('Tvättider <strong>'+dateText+'</strong><br>'+html);
        $('.date-picker-2').popover('show');
        //confirm("du kommer att boka" + dateText);
      });
    }


  });
});
