

$(".open-community-modal").on("click", function(){
	$(".modal-newsletter").fadeIn();
});

$(".close-modal, .bg-modal-newsletter").click(function(){
	$(".modal-newsletter").fadeOut();
});

$("#Hform_submit").on('click', function() {
	var name= $('#Hform_name').val();
	var last_name= $('#Hform_last_name').val();
	var email= $('#Hform_email').val();
	var phone= $('#Hform_phone').val();

	$.ajax({
			url: 'http://hands.ai:8080/connect',
			type: 'POST',
			data: { first_name: name ,  phone: phone, email : email , last_name: last_name},
		})
		.done(function() {
			console.log("success");
		})
		.fail(function(error) {
			console.log(error);
		});
$(".modal-newsletter").fadeOut();
});
