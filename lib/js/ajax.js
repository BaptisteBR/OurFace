function sendRequest(type, data, successCallback, errorCallback){

	$.ajax({
		type: type,
		url: "OurFace_Ajax.php",
		data: data
	}).done(function(request){
		//successCallback(request);
	}).fail(function(request){
		//errorCallback(request);
	});

}

