$(document).ready(function () {
    $('select#sort').change(function () {
        $(this).parent().submit();
    });
	//Show Page AJAX
    $('form#add_to_cart').submit(function () {
        $('p.success').css('display', 'block').delay(300).fadeOut(2500);
        $.post($(this).attr('action'), $(this).serialize(), function (res) {
            $('a#cart_quantity').replaceWith(res);
        });
        return false;
    });
	//Cart Items page, when same as shipping info checkbox is clicked
    $('#same').click(function () {
		$('#billing_first_name').prop("readonly",true).val($("#shipping_first_name").val());
		$('#billing_last_name').prop("readonly",true).val($("#shipping_last_name").val());
		$('#billing_address').prop("readonly",true).val($("#shipping_address").val());
		$('#billing_address2').prop("readonly",true).val($("#shipping_address2").val());
		$('#billing_city').prop("readonly",true).val($("#shipping_city").val());
		$('#billing_state').prop("readonly",true).val($("#shipping_state").val());
		$('#billing_zip_code').prop("readonly",true).val($("#shipping_zip_code").val());
	});
    // Stripe API
    $(function () {
		var $stripeForm = $(".form-validation");
		$('form.form-validation').bind('submit', function (e) {
			if (!$stripeForm.data('cc-on-file')) {
				e.preventDefault();
				Stripe.setPublishableKey($stripeForm.data('stripe-publishable-key'));
				Stripe.createToken({
					number: $('.card-number').val(),
					cvc: $('.card-cvc').val(),
					exp_month: $('.card-expiry-month').val(),
					exp_year: $('.card-expiry-year').val()
				}, stripeResponseHandler);
			}
		});
		function stripeResponseHandler(status, res) {
			if (res.error) {
				$('.error')
					.removeClass('hide')
					.find('.alert')
					.text(res.error.message);
			} else {
				var token = res['id'];
				$stripeForm.find('input[type=text]').empty();
				$stripeForm.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
				$stripeForm.get(0).submit();
			}
		}
	});
});
