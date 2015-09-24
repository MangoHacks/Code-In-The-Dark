$(function () {

	var editor = CodeMirror.fromTextArea(document.getElementById('code'), {
		lineNumbers: false,
		theme: 'mangodark'
	});

	var $assets_panel = $('.assets_panel');
	var $open_btn = $('a.open-assets');
	var $clost_btn = $('a.close-button');
	var active_class = 'active';

	$open_btn.on('click', function(e){
		e.preventDefault();
		$assets_panel.addClass(active_class);
	});

	$clost_btn.on('click', function(e){
		e.preventDefault();
		$assets_panel.removeClass(active_class);
	});

	window.submittedForm = false;

	$("#code").focus();

	$("#code").keydown(function (e) {
		if(e.keyCode === 9) {
			e.preventDefault();
		}
	});

	$("#logo").dblclick(function (e) {
		$("#code").focus();

		var c = confirm("Are you sure you want to submit your code?\n\nYou will not be able to come back to it.");
		if(c == false) {
			e.preventDefault();
		} else {
			var n = prompt("What's your name?", "", "");

			if(n === null || n === "") {
				e.preventDefault();
			} else {
				window.submittedForm = true;
				
				$("input#name").val(n);
				$("form").submit();
			}
		}
	});

	window.addEventListener("beforeunload", function(e) {
		if(window.submittedForm === true) { return; }

		var confirmationMessage = "Are you sure you want to leave the page? All your code will be lost!";

		(e || window.event).returnValue = confirmationMessage;     //Gecko + IE
		return confirmationMessage;                                //Gecko + Webkit, Safari, Chrome etc.
	});
});