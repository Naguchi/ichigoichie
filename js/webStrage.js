$(document).ready(function(){

	$('#saveButton').click(function(){

		if(window.localStorage){
			var s = $('#text1').val();
			localStorage.setItem("key1", s);
		}

	});

	$('#readButton').click(function(){

		if(window.localStorage){
			alert( localStorage.getItem("key1") );
		}

	});
});
