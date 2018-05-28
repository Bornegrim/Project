$(document).ready(function () {
  $("#PostFormButton").click(function(e) {
    var url = "posts-create.php";
    $.ajax ({
      type: "POST",
      url: url,
      data: $("#postForm").serialize(),
      success: function (data) {
        $.ajax({
          url: "index.php",
          data: {},
          type: "POST",
          dataType: "html",
          success: function (data) {
            var result = $('<div />').append(data).find('#updateAjax').html();
            $('#updateAjax').html(result);
          },
        });
      }
    });
    e.stopImmediatePropagation();
    e.preventDefault();
  });
});

$(document).ready(function () {
  $('body').on('click', '.deletebutton', function(e) {
    var form = $(this).closest('form');
    $.ajax({
      type: "POST",
      url: 'delete-posts-process.php',
      data: form.serialize(),
      success: function (data) {
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
      },
    });
    e.preventDefault();
  });
});

$(document).ready(function () {
  $('body').on('click', '#forumbt', function(e) {

    $.ajax({
      type: "POST",
      url: 'forum-process.php',
      data: $("#forumTopic").serialize(),
      success: function (data) {
        $.ajax({
          url: "forum.php",
          data: {
          },
          type: "POST",
          dataType: "html",
          success: function (data) {
            var result = $('<div />').append(data).find('#forum').html();
            $('#forum').html(result);
          },
        });
      },
    });
    e.preventDefault();
  });
});

$(document).ready(function () {
  $('body').on('click', '#delete', function(e) {
    var form = $(this).closest('form');

    $.ajax({
      type: "POST",
      url: 'forum-delete-process.php',
      data: form.serialize(),
      success: function (data) {
        $.ajax({
          url: "forum.php",
          data: {
          },
          type: "POST",
          dataType: "html",
          success: function (data) {
            var result = $('<div />').append(data).find('#forum').html();
            $('#forum').html(result);
          },
        });
      },
    });
    e.preventDefault();
  });
});

$(document).ready(function () {
  $('body').on('click', '#forumPostbb', function(e) {
    var form = $('#forumPost');
    var topicID = $('#topicID').val();
    $.ajax({
      type: "POST",
      url: 'forum-post-process.php',
      data: form.serialize(),

      success: function (data) {
        $.ajax({
          url: "forum-posts.php",
          data: {
            'topicID': topicID
          },
          type: "POST",
          dataType: "html",
          success: function (data) {
            var result = $('<div />').append(data).find('#forumtest').html();
            $('#forumtest').html(result);
          },
        });
      },
    });
    e.preventDefault();
  });
});

$(document).ready(function () {
  $('body').on('click', '#delete', function(e) {
    var form = $(this).closest('form');
    var topicID = $('#topicID').val();
    $.ajax({
      type: "POST",
      url: 'delete-forum-posts-process.php',
      data: form.serialize(),

      success: function (data) {
        $.ajax({
          url: "forum-posts.php",
          data: {
            'topicID': topicID
          },
          type: "POST",
          dataType: "html",
          success: function (data) {
            var result = $('<div />').append(data).find('#forumtest').html();

            $('#forumtest').html(result);
          },
        });
      },
    });
    e.preventDefault();
  });
});

$(document).ready(function () {
  $('body').on('click', '#cancel', function(e) {
    var form = $(this).closest('form');
    $.ajax({
      type: "POST",
      url: 'cancel-booking-process.php',
      data: form.serialize(),

      success: function (data) {
        $.ajax({
          url: "cancel-booking.php",
          data: {
          },
          type: "POST",
          dataType: "html",
          success: function (data) {
            var result = $('<div />').append(data).find('#canceltest').html();
            console.log(result);
            $('#canceltest').html(result);
          },
        });
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
