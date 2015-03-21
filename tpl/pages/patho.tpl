<main>
	<section id="pathologies">
		<h2>Pathologies</h2>
		<form id="filtres"> 
			<label for="filtre-tpatho">Type de pathologie : </label>
			<select id="filtre-tpatho">
				<option>Type pathologie 1</option>
				<option>Type pathologie 2</option>
			</select>
				
			<label for="filtre-meridien">Méridiens : </label>
			<select id="filtre-meridien">
				<option>Méridien 1</option>
				<option>Méridien 2</option>
			</select>
				
			<label for="filtre-carac">Caractéristiques : </label>
			<select id="filtre-carac">
				<option>Caractéristique 1</option>
				<option>Caractéristique 2</option>
			</select>
				
			<label for="filtre-mot-cle">Mot clé : </label>
			<input id="filtre-mot-cle" type="text"/>
			<br/>
			<input id="valid-filtres" type="submit" name="Valider"/>
		</form>
			
		<div id="corps-patho">
			<div id="liste-fiches">
				Listes pathologies :
				<br/>
                
                <ul>
                {section name=listePatho loop=$listePatho}
                {assign var=patho value=$listePatho[listePatho]}
                  <li>
                      <span><a href="">{$patho->_desc}</a></span>
                  </li>
                {/section}
                
			</div>
			<!-- Fiche de la pathologie affichée -->
			<div id="fiche-patho-select">
				<h2>Titre la fiche</h2>
			</div>
		</div>
	</section>
</main>