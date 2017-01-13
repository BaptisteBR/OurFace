function sendRequest(type, data, successCallback, errorCallback){

	console.log('sendRequest');

	$.ajax({
		type: type,
		url: "OurFace_Ajax.php",
		data: data,
		dataType: 'html'
	}).done(function(request){
		//successCallback(request);
	}).fail(function(request){
		//errorCallback(request);
	});

}

