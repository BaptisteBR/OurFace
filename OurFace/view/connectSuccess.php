
<style> 

#template_login{
	margin-left: 5px;
}

#submit_login{
	margin-top: 3px;
}

</style>

<div id="template_login">
	<form action="OurFace.php?action=submit" target="_self" method="post">
		Identifiant:<br>
		<input type="text" name="identifiant"><br>
		Mot de Passe:<br>
		<input type="text" name="motdepasse">
		<br>
		<input type="submit" value="Submit" id="submit_login" class="btn btn-primary">
	</form> 
</div>