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
    var html = '<form action="booking-progress.php" method="post" id="bookingForm"> <input name="block1"  type="submit" class="btn btn-success" value="07:00 – 10:00" ><br><input  name="block2"  type="submit" class="btn btn-success" value="10:00 – 13:00"><br><input name="block3" type="submit" class="btn btn-success" value="13:00 – 16:00"><br><input  name="block4" type="submit" class="btn btn-success" value="16:00 – 19:00"><br><input  name="block5" type="submit" class="btn btn-success" value="19:00 – 22:00"></form>';
    $('#example-popover-2-content').html('Avialable Appiontments On <strong>'+dateText+'</strong><br>'+html);
    $('.date-picker-2').popover('show');
    }
    });
});

$(document).ready(function() {
  $("#bookingForm").submit(function() {
    alert("plz");
  })
});
