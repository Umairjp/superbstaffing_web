$(document).ready(function () {
  $(".venobox").venobox({
    share: !1,
  });
});
if ($(window).width() < 768) {
  $(".venobox").venobox({
    frameheight: "400px",
  });
}
// password show hide

$(".toggle-password").click(function () {
  $(this).toggleClass("icon-eye_icon icon-hidden_eye_icon");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});

// checkbox

// collapse
var width = $(document).width();
if (width > 767) {
  $(document).mouseup(function (e) {
    var container = $(".filter-dropdown");
    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) {
      container.collapse("hide");
    }
  });
}

// filter sidebar

function fsidebar_open() {
  var element = document.getElementById("filterSidebar");
  element.classList.add("show");
  if ($("#filterSidebar").hasClass("show")) {
    $(".body-wrapper").addClass("bg-overlay-full");
  }
}

function fsidebar_close() {
  var element = document.getElementById("filterSidebar");
  element.classList.remove("show");
  $(".body-wrapper").removeClass("bg-overlay-full");
}

$(function () {
  $(".wall-toggle").on("click", function () {
    $(".wall-none").toggleClass("d-none");
    $(".icon-plus-border").toggleClass("icon-minus-border");
  });
});
// sidebar
// toggle button sidebar
$(function () {
  $(".toggle-btn").on("click", function () {
    $(".toggle-btn .icon-menu").toggleClass("active");
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");
      $(".sidebar").css("left", "-100%");
      $(".body-wrapper").css("margin-left", "0px").removeClass("bg-overlay");
    } else {
      $(this).addClass("active");
      $(".sidebar").css("left", "0px");
      $(".body-wrapper").addClass("bg-overlay");
    }
  });
});

// sidebar dropdown toggle button
$(".sidebar .dropdown-toggle").on("click", function () {
  if ($(".sidebar .dropdown-menu").hasClass("show")) {
    $(".sidebar").removeClass("active-submenu");
  } else {
    $(".sidebar").addClass("active-submenu");
  }
});

// do load window rezise sub menu
window.onresize = doALoadOfStuff;

function doALoadOfStuff() {
  if (width < 768) {
    console.log("test");
    $(".menu-dropdown .sub-menu").slideUp(200);
    $(".menu-dropdown ").removeClass("active");
  } else {
    $(".menu-dropdown ").removeClass("active");
    $(".right-submenu").removeClass("active");
  }
}
// right-submenu & down submenu
var width = $(document).width();
if (width < 768) {
  $(document).on("click", ".menu-dropdown .dropDown", function () {
    if ($(this).parent().hasClass("active")) {
      $(this).parent().find(".sub-menu").slideUp(200);
      $(this).parent().removeClass("active");
    } else {
      $(".menu-dropdown").removeClass("active");
      $(".sub-menu").slideUp(200);
      $(this).parent().find(".sub-menu").slideDown(200);
      $(this).parent().addClass("active");
    }
  });
} else {
  $(".menu-dropdown .dropDown").on("click", function () {
    var getAttr = $(this).data("submenu");
    if (getAttr) {
      if ($(this).parent().hasClass("active")) {
        $("." + getAttr).removeClass("active");
        $(".menu-dropdown").removeClass("active");
      } else {
        $(".menu-dropdown").removeClass("active");
        $(".right-submenu").removeClass("active");
        $(this).parent().addClass("active");
        $("." + getAttr).addClass("active");
      }
    }
  });
}

// modal slick
$(".modal").on("shown.bs.modal", function (e) {
  $(".modal-slider").slick("setPosition");
});

// label input
$(".form-group .form-control").blur(function () {
  // alert($(this).val());
  var input = $(this).val();
  var thisvar = $(this);
  if (input) {
    thisvar.next("label").addClass("label-old");
    thisvar.next("label").removeClass("label");
  } else {
    thisvar.next("label").addClass("label");
    thisvar.next("label").removeClass("label-old");
  }
});

// otp
$(".digit-group")
  .find("input")
  .each(function () {
    $(this).attr("maxlength", 1);
    $(this).on("keyup", function (e) {
      var parent = $($(this).parent());

      if (e.keyCode === 8 || e.keyCode === 37) {
        var prev = parent.find("input#" + $(this).data("previous"));

        if (prev.length) {
          $(prev).select();
        }
      } else if (
        (e.keyCode >= 48 && e.keyCode <= 57) ||
        (e.keyCode >= 65 && e.keyCode <= 90) ||
        (e.keyCode >= 96 && e.keyCode <= 105) ||
        e.keyCode === 39
      ) {
        var next = parent.find("input#" + $(this).data("next"));

        if (next.length) {
          $(next).select();
        } else {
          if (parent.data("autosubmit")) {
            parent.submit();
          }
        }
      }
    });
  });

// malihu scroll
$(function () {
  ($.mCustomScrollbar.defaults.theme = "light-1"),
    $(".card .card-body .list-group").mCustomScrollbar({
      scrollButtons: { enable: !0 },
      callbacks: {
        onTotalScroll: function () {
          addContent(this);
        },
        onTotalScrollOffset: 100,
        alwaysTriggerOffsets: !1,
      },
    });
});
