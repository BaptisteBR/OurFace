function clickOnFriend(data) {

  $.ajax({
    type: "POST",
    url: "OurFace_Ajax.php?action=profil",
    data: data,
    dataType: 'html'
  }).done(function(request){
    document.getElementById("profil").innerHTML = request;
  }).fail(function(request){

  });

  $.ajax({
    type: "POST",
    url: "OurFace_Ajax.php?action=mur",
    data: data,
    dataType: 'html'
  }).done(function(request){
    document.getElementById("mur").innerHTML = request;
  }).fail(function(request){

  });

}