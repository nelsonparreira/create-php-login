$(document)
.on("submit", "form.js-register", function(event){
	event.preventDefault();

	// this variable contains all the code inside <form>
	var _form = $(this);
	var _error = $(".js-error", _form);
	//let's take the data that we wont from the _form, and put it on a obj
	var data = {
		email: $("input[type='email']", _form).val(),
		password: $("input[type='password']", _form).val()
	};

	if (data.email.length < 6) {
		_error
				.text("Please enter a valid email address")
				.show();
		return false;
	}


	console.log(data);
	// alert("YES Form was submited");
	return false;
})

