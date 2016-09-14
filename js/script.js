$(document).ready(function() {
   $('#dataTables-example').DataTable({
           responsive: true
   });
});

$('#myModal').appendTo("body");
$('#myModal1').appendTo("body");

// apply to remove bootstrap defult nav manu click effect
$(document).ready(function() {
   $(".nav li.disabled a").click(function() {
     return false;
   });
});

var onResize = function() {
// apply dynamic padding at the top of the body according to the fixed navbar height
  $("body").css("padding-top", $(".navbar-fixed-top").height());
};
// attach the function to the window resize event
$(window).resize(onResize);
// call it also when the page is ready after load or reload
$(function() {
  onResize();
});
