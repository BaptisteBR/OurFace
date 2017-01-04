<!-- By Aurelien -->
<style> 


#template_login{
	width: 40%;
	margin-right: 30%;
	margin-left: 30%;
	margin-top: 15%;

	/*background-image: url(images/brushlogin.png);
	background-size: 100% 100%;
	background-repeat: no-repeat;*/

	-moz-box-shadow: 10px 10px 5px 0px #656565;
	-webkit-box-shadow: 10px 10px 5px 0px #656565;
	-o-box-shadow: 10px 10px 5px 0px #656565;
	box-shadow: 10px 10px 5px 0px #656565;

}

#submit_login {
	margin-top: 3px;
}

#form_login{
	margin-left: 20%;
	margin-right: 20%;
	width: 60%;
}

</style>

<div id="template_login" class="jumbotron">
	<form action="OurFace.php?action=submit" target="_self" method="post" id="form_login">
		Identifiant :<br>
		<input type="text" name="identifiant"><br>
		Mot de passe :<br>
		<input type="password" name="motdepasse" >
		<br>
		<input type="submit" value="Submit" id="submit_login" class="btn btn-primary">
	</form> 
</div>




