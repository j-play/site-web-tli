<main>
	<section id="inscription">
		<h2>Inscription</h2>
		<form id="form_inscription" action="/traitementInscription" method="POST"> 
			<div class="form_col">
				<label class="form_col" for="input_pseudo">Pseudo : </label>
				<input class="form_col" type="text" id="input_pseudo" name="input_pseudo"/>
			</div>
			
			<div class="form_col">	
				<label class="form_col" for="input_mdp">Mot de Passe : </label>
				<input class="form_col" type="password" id="input_mdp" name="input_mdp"/>
			</div>
				
			<div class="form_col">
				<label class="form_col" for="input_mail">Adresse mail : </label>
				<input class="form_col" type="email" id="input_mail" name="input_mail"/>
			</div>

			<input class="form_col" type="submit" name="Valider"/>
		</form>
	</section>
</main>