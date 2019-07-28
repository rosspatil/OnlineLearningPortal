



$(function() {

function getXMLHttpRequest() {
	var xmlHttpReq;
	// to create XMLHttpRequest object in non-Microsoft browsers
	if (window.XMLHttpRequest) {
		xmlHttpReq = new XMLHttpRequest();
	} else if (window.ActiveXObject) {
		try {
			// to create XMLHttpRequest object in later versions of Internet
			// Explorer
			xmlHttpReq = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (exp1) {
			try {
				// to create XMLHttpRequest object in later versions of Internet
				// Explorer
				xmlHttpReq = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (exp2) {
				// xmlHttpReq = false;
				alert("Exception in getXMLHttpRequest()!");
			}
		}
	}
	return xmlHttpReq;
}

 	function checkUser(data) {

 		var xmlHttpRequest = new getXMLHttpRequest();
 		xmlHttpRequest.onreadystatechange = function() {

 			if (xmlHttpRequest.readyState == 4) {

 				if (xmlHttpRequest.status == 200) {
 					var status = xmlHttpRequest.responseText;
 					if(status.toString().trim()=="available"){
 						$('.signup_email').addClass('has-success');
 					}else{
 						$('.signup_email').addClass('has-error');
 					}
 				} else {
 					$('.signup_email').addClass('has-warning');
 				}
 			}
 		};
 		/*xmlHttpRequest
 		.open(
 			"GET",
 			"http://www.webrootsinfotech.com/Nextmetric/navigationController.php?q=checkUser&email=faiz@gmail.com"
 			, true);*/
		xmlHttpRequest
 		.open(
 			"GET",
 			"http://localhost/Nexmetric/controllers/navigationController.php"
 			, true);
 		xmlHttpRequest.setRequestHeader("Content-Type",
 			"application/x-www-form-urlencoded");
 		xmlHttpRequest.send(null);

 	}

 	var data = document.getElementById("signup_email");


 	data.oninput = function() {
 		checkUser(this.value);
 		
 	};

 	var data = document.getElementById("signup");
 	data.onclick = function() {
 		registerUser();
 	};


	function registerUser() {

		var arrayUser={};
		arrayUser.name=document.getElementById('name').value;
		arrayUser.email=document.getElementById('signup_email').value;
		arrayUser.password=document.getElementById('signup_password').value;
		var classs=$('.signup_email').hasClass('has-success');
		alert(classs);
		if(classs === false){
			alert("jks");
			return;
		}
		
 		var xmlHttpRequest = new getXMLHttpRequest();
 		xmlHttpRequest.onreadystatechange = function() {
 			if (xmlHttpRequest.readyState == 4) {
 				if (xmlHttpRequest.status == 200) {
 					var status = xmlHttpRequest.responseText;
 					window.location = "http://localhost/Nexmetric/index.php?email="+arrayUser.email;
 					
 				} else {
 					$('.signup_email').addClass('has-warning');
 				}
 			}
 		};
 		/*xmlHttpRequest
 		.open(
 			"GET",
 			"http://www.webrootsinfotech.com/Nextmetric/navigationController.php?q=registerUser&data="+JSON.stringify(array)
 			, true);*/
		xmlHttpRequest
 		.open(
 			"GET",
 			"http://localhost/Nexmetric/controllers/navigationController.php?data"+JSON.stringify(arrayUser)
 			, true);
 		xmlHttpRequest.setRequestHeader("Content-Type",
 			"application/x-www-form-urlencoded");
 		xmlHttpRequest.send(null);

 	}


	var login = document.getElementById("login");
 	login.onclick = function() {
 		checkLogin();
 	};


 	function checkLogin() {

		var arrayUser={};
		
		arrayUser.email=document.getElementById('login_email').value;
		arrayUser.password=document.getElementById('login_email').value;
		
		
 		var xmlHttpRequest = new getXMLHttpRequest();
 		xmlHttpRequest.onreadystatechange = function() {
 			if (xmlHttpRequest.readyState == 4) {
 				if (xmlHttpRequest.status == 200) {
 					var status = xmlHttpRequest.responseText;
 					window.location = "?email="+arrayUser.email;
 					
 				} else {
 					$('.signup_email').addClass('has-warning');
 				}
 			}
 		};
 		/*xmlHttpRequest
 		.open(
 			"GET",
 			"http://www.webrootsinfotech.com/Nextmetric/navigationController.php?q=checkLogin&data="+JSON.stringify(array)
 			, true);*/
		xmlHttpRequest
 		.open(
 			"GET",
 			"http://localhost/Nexmetric/controllers/navigationController.php?data"+JSON.stringify(arrayUser)
 			, true);
 		xmlHttpRequest.setRequestHeader("Content-Type",
 			"application/x-www-form-urlencoded");
 		xmlHttpRequest.send(null);

 	}

 });