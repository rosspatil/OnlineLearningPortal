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

/*
 * AJAX call starts with this function
 */
 function newCompanyRegistration(data) {
 	var xmlHttpRequest = new getXMLHttpRequest();
 	xmlHttpRequest.onreadystatechange = function() {
 		if (xmlHttpRequest.readyState == 4) {
 			if (xmlHttpRequest.status == 200) {
 				alert('Successfully registered company!');
 			} else {
 				alert("error");
 			}
 		}
 	};
 	xmlHttpRequest
 	.open(
 		"POST",
 		"http://localhost:8080/Epitome/Controller?q=marketing&department=newCustomerEntry&data="
 		+ data, true);
 	xmlHttpRequest.setRequestHeader("Content-Type",
 		"application/x-www-form-urlencoded");
 	xmlHttpRequest.send();
 }



 $(function() {

 	var src = [ "Epitome" ];

 	function checkCustomer(data) {

 		var xmlHttpRequest = new getXMLHttpRequest();

 		xmlHttpRequest.onreadystatechange = function() {
 			if (xmlHttpRequest.readyState == 4) {

 				if (xmlHttpRequest.status == 200) {
 					var status = xmlHttpRequest.responseText;
 					var array = JSON.parse(status);
 					for (i in array) {
 						src.push(array[i]);
 					}

 				} else {
 					alert("error");
 				}
 			}
 		};
 		xmlHttpRequest
 		.open(
 			"POST",
 			"http://localhost:8080/Epitome/Controller?q=marketing&department=checkCustomer&data="
 			+ data.value, true);
 		xmlHttpRequest.setRequestHeader("Content-Type",
 			"application/x-www-form-urlencoded");
 		xmlHttpRequest.send();

 	}

 	var data = document.getElementById("customer");

 	var awsm = new Awesomplete(data, {
 		minChar : 1,
 		list : src,
 		maxItems : 3,
 		filter : Awesomplete.FILTER_CONTAINS
 	});

 	$("#customer").on('awesomplete-selectcomplete', function() {

 		$('.customer').removeClass('has-error');
 		$('.customer').addClass('has-success');

 	});

 	data.oninput = function() {
 		if (this.value == "") {
 			awsm.evaluate();
 			return;
 		}
 		if (src.indexOf(this.value.trim()) > 0) {
 			$('.customer').removeClass('has-error');
 			$('.customer').addClass('has-success');
 			return;
 		}

 		checkCustomer(data);
 		$('.customer').removeClass('has-success');
 		$('.customer').addClass('has-error');
 	};

 });
