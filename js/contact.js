$(document).ready(function() {
	$('#contact_form').submit(function() {
		try {
			var rf = new Array('email', 'message');
			var i;
			for (i in rf) {
				var f = rf[i];
				var x = $('#contact_form #' + f).val();
				if (x == null || x == '') {
					$('#' + f + '_lbl').css('color', 'red');
					throw 1;
				}
			}
			x = $('#contact_form #email').val();
			var atpos = x.indexOf('@');
			var dotpos = x.lastIndexOf('.');
			if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
				throw 2;
			}
			return true;
		} catch (err) {
			switch (err) {
				case 1:
					err_msg = 'You must fill out all required fields.';
					break;
				case 2:
					err_msg = 'You must enter a valid email address.';
					break;			
			}
			$('#msg').html(err_msg).css({'display': 'block'});
			return false;
		}
	});	
});

