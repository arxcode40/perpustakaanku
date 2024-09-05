"use strict";

$.fn.replaceClass = function(oldClass, newClass) {
  return this.removeClass(oldClass).addClass(newClass);
};

function showPassword() {
  const toggler = $(event.target);
  const target = $("#password");

  $(target).attr("type", $(target).attr("type") === "text" ? "password" : "text");
}

$("#dataTable").DataTable({
  fixedColumns: true,
  language: {
    url: "https://cdn.datatables.net/plug-ins/2.1.5/i18n/id.json"
  },
  scrollX: true,
});

$(document).on("scroll", function() {
  if ($(document).scrollTop() > 20) {
    $("#scrollToTop").fadeIn("fast");
  } else {
    $("#scrollToTop").fadeOut("fast");
  }
});