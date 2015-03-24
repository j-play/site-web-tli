<main>
	<section id="pathologies">
		<h2 id="titrePatho">Pathologies</h2>
		<form id="filtres"> 
			<label for="filtre-tpatho">Type de pathologie : </label>
			<select id="filtre-tpatho">
				<option>Type pathologie 1</option>
				<option>Type pathologie 2</option>
			</select>
				
			<label for="filtre-meridien">Méridiens : </label>
			<select id="filtre-meridien">
                {section name=itemMeridien loop=$listeMeridiens}
                {assign var=meridien value=$listeMeridiens[itemMeridien]}
				<option id="$meridien->_code">
                    {$meridien->_nom}
                </option>
                {/section}
			</select>
				
			<label for="filtre-carac">Caractéristiques : </label>
			<select id="filtre-carac">
				<option>Caractéristique 1</option>
				<option>Caractéristique 2</option>
			</select>
				
			<label for="filtre-mot-cle">Mot clé : </label>
			<input id="filtre-mot-cle" type="text"/>
			<input id="valid-filtres" type="submit" name="Valider"/>
		</form>
			
		<div id="corps-patho">
			<div id="liste-fiches">
				<h3>Listes pathologies :</h3>
                <ul>
                {section name=itemPatho loop=$listePatho}
                {assign var=patho value=$listePatho[itemPatho]}
                  <li id="{$patho->_id}">
                      <span>{$patho->_desc}</span>
                  </li>
                {/section}
                </ul>
			</div>
			<!-- Fiche de la pathologie affichée -->
			<div id="fiche-patho-select">
				<h2>Titre la fiche</h2>
			</div>
		</div>
	</section>
</main>