$(document)
.on("submit", "form.js-register", function(event){
	event.preventDefault();

	// this variable contains all the code inside <form>
	var _form = $(this);
	//let's take the data that we wont from the _form, and put it on a obj
	var data = {
		email: $("input[type='email']", _form).val(),
		password: $("input[type='password']", _form).val()
	};

	console.log(data);
	// alert("YES Form was submited");
	return false;
})

