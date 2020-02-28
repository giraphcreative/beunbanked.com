

$(function(){

	$(".calculator.auto").accrue({
		mode: "compare",
		response_output_div: ".result.auto",
		response_compare: "<p>Save up to <strong>$%savings%</strong> in interest!</p>",
		error_text: "<p>Enter loan information to calculate savings.</p>",
		callback: function( elem, data ) {
			if ( data.loan_1 != 0 ) {
				$('.result.auto').addClass('calculated');
			} else {
				$('.result.auto').removeClass('calculated');
			}
		}
	});
	
	$(".calculator.home").accrue({
		mode: "compare",
		response_output_div: ".result.home",
		response_compare: "<p>Save up to <strong>$%savings%</strong> in interest!</p>",
		error_text: "<p>Enter loan information to calculate savings.</p>",
		callback: function( elem, data ) {
			if ( data.loan_1 != 0 ) {
				$('.result.home').addClass('calculated');
			} else {
				$('.result.home').removeClass('calculated');
			}
		}
	});
	
	$(".calculator.personal").accrue({
		mode: "compare",
		response_output_div: ".result.personal",
		response_compare: "<p>Save up to <strong>$%savings%</strong> in interest!</p>",
		error_text: "<p>Enter loan information to calculate savings.</p>",
		callback: function( elem, data ) {
			if ( data.loan_1 != 0 ) {
				$('.result.personal').addClass('calculated');
			} else {
				$('.result.personal').removeClass('calculated');
			}
		}
	});

});

