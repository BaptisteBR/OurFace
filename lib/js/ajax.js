<<<<<<< HEAD
function sendRequest(type, action, data){

	$.ajax({
		type: type,
		url: "OurFace_Ajax.php?action=" + action,
		data: data,
		dataType: 'html'
	}).done(function(request){
}
