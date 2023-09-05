$(document).ready(function () {
	if($('#contact-form').length){
		$('#contact-form').validate({ // initialize the plugin
			rules: {
				name: {
					required: true
				},
				
				email: {
					required: true,
					email: true
				},
				phone: {
					required: true
				},
				services: {
					required: true
				},
				message: {
					required: true
				}
				
			},
			messages: {
				captcha: "Correct captcha is required. Click the captcha to generate a new one"
			},
			submitHandler: function (form) { 
				// sending value with ajax request
				$.post($(form).attr('action'), $(form).serialize(), function (response) {
					$('.form-response').append(response);
					$("input[type=text], textarea").val("");
				});
				return false;
				
			}
		});
	}
	});
