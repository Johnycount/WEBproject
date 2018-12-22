
const boss1 = "john";
const boss2 = "beka";
const pass1 = "potter";
const pass2 = "superbeka";
var button = document.getElementById('knopka');


var name = document.getElementById('loginbox');
var pass = document.getElementById('passwordbox');


function check(form) {

	if (form.loginbox.value == boss1 && form.passwordbox.value == pass1){

		window.open("http://localhost/webphp/Project/johnycount/");
	}
	else if (form.loginbox.value == boss2 && form.passwordbox.value == pass2){

		window.open("http://localhost/webphp/Project/johnycount/");
	}
	else{
		alert("Error! Wrong Login or Password!");
	}
}

