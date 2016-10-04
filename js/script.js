// Default bootstrap js
$(document).ready(function() {
   $('#dataTables-example').DataTable({
           responsive: true
   });
});

// apply to attach bootstrap model
$('#myModal').appendTo("body");
$('#myModal1').appendTo("body");

// apply to remove bootstrap defult nav manu click effect
$(document).ready(function() {
   $(".nav li.disabled a").click(function() {
     return false;
   });
});

// Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut(2000);
	});
