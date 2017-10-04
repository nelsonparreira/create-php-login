$(document)
.on("submit", "form.js-register", function(event){
	event.preventDefault();

	// this variable contains all the code inside <form>
	var _form = $(this);
	var _error = $(".js-error", _form);
	//let's take the data that we wont from the _form, and put it on a obj
	var dataObj = {
		email: $("input[type='email']", _form).val(),
		password: $("input[type='password']", _form).val()
	};

	if (dataObj.email.length < 6) {
		_error
				.text("Please enter a valid email address")
				.show();
		return false;
	} else if (dataObj.password.length < 11) {
		_error
				.text("Please enter a passphrase that is at least 11 charactes long.")
				.show();
		return false;
	}

	// Assuming  the code gat this far, we can start the AJAX process...

	//clean the error message
	_error.hide();

	// AJAX 
	$.ajax({
		type:'POST',
		url: './ajax/register.php',
		data:'dataObj',
		dataType:'json',
		async: 'true'
	})
	.done(function ajaxDone(data){
		//Whatever data is
		console.log(data);
		if(data.redirect !== undefined){
			window.location = data.redirect;
		}

		alert(data.name);
	})
	.fail(function ajaxFailed(e){
		// this failed
		// console.log(e);
	})
	.always(function ajaxAlwaysDoThis(data){
		//always do this
		//console.log('always');
	})


	//console.log(data);
	// alert("YES Form was submited");
	return false;
})

