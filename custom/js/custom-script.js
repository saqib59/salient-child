(function($){
	$("#register_user_form").submit(function(event) {
		event.preventDefault();
		$(this).validate();
		var valid = $(this).valid();
		if (valid) {
			$("#register_submit").append('<i class="fa fa-circle-o-notch fa-spin" style="font-size:20px"></i>');
			$("#register_submit").prop("disabled",true);
			var serialize_form = $(this).serialize();

			$.ajax({
				type:"POST",
				url: the_ajax_script.ajaxurl,
				data: new FormData(this),
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
				success: function (response) {
					$("#register_submit").children().remove();
					$("#register_submit").prop("disabled",false);
					var status = response.status;
                        //console.log(response);
                        if (status) { 
                        	Swal.fire({
                    		icon: 'success',
                    		text: response.message,
                    	        }).then((result) => {
                    		if (result.value) {
                    			window.location.href = response.redirect_url;
                    		}
                    	});
                        
                        } else {
                            	Swal.fire({
                        		icon: 'error',
                        		text: response.message,
                        	});
                        
                        }
                    },
                    error: function (errorThrown) {
                    	alert('error');
                    	console.log(errorThrown);
                    },
                });
		}

	});
})(jQuery);