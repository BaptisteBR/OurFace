<div id="profil" style="position: absolute; left: 0; width: 30%; margin-left: 10px; height:20%">
	<span class="label label-primary">Profil : </span>
	<ul class="list-group">
		<li class="list-group-item"><button type="button" class="btn btn-default">Nom</button> <?php echo context::getSessionAttribute('user')->nom ?> </li>
		<li class="list-group-item"><button type="button" class="btn btn-default">Prenom</button> <?php echo context::getSessionAttribute('user')->prenom ?> </li>
		<li class="list-group-item"><button type="button" class="btn btn-default">Statut</button>  <?php echo context::getSessionAttribute('user')->statut ?> </li>
		<li class="list-group-item"><button type="button" class="btn btn-default">Avatar</button>  <?php echo context::getSessionAttribute('user')->avatar ?> </li>
	</ul>
</div>
