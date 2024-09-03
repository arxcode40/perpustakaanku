"use strict";

$.fn.replaceClass = function(oldClass, newClass) {
  return this.removeClass(oldClass).addClass(newClass)
};

function showPassword() {
  const toggler = $(event.target), target = $(toggler).prev()
  if ($(target).attr("type") === "text") {
    $(target).attr("type", "password");
    $(toggler).children().replaceClass("bi-eye", "bi-eye-slash");
  } else {
    $(target).attr("type", "text");
    $(toggler).children().replaceClass("bi-eye-slash", "bi-eye");
  }
}

$(document).on("scroll", function() {
  if ($(document).scrollTop() > 20) {
    $("#scrollToTop").fadeIn("fast");
  } else {
    $("#scrollToTop").fadeOut("fast");
  }
});