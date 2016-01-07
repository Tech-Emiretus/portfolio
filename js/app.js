$(function() {
	function wordsFlash() {
		var sentence = $('#wordFlash').text();
		$('#wordFlash').html('');

		words = sentence.split(' ');

		words.each(function (i) {
			('#wordFlash').animate({
				append
			});
		});
	}

	/**
	 * This is the function that is used to make the drop down flashing
	 */
	function dropdownFlash() {
		// Animate by reducing the height to 30px
		$('img#dropdown').animate({height: '30px', width: '70px'}, 3000, function() {
			// Give it back its full height
			$('img#dropdown').animate({height: '70px', width: '70px'}, 3000, function() {
				// Call the function again (recursive)
				dropdownFlash();
			});
		});
	}

	$(window).load(dropdownFlash);
});