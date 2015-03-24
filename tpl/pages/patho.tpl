<main>
	<section id="pathologies">
		<h2 id="titrePatho">Pathologies</h2>
		<form id="filtres" action="/index.php?page=patho" method="POST"> 
			<label for="filtre-tpatho">Type de pathologie : </label>
			<select id="filtre-tpatho" name="filtre-tpatho">
                <option value="null">Aucun</option>
				<option value ="m">Méridien</option>
                <option value ="tf">Organe/Viscère</option>
                <option value ="l">Luo</option>
                <option value ="l2">Merveilleux vaisseaux</option>
                <option value ="j">Jing jin</option>
			</select>
				
			<label for="filtre-meridien">Méridiens : </label>
			<select id="filtre-meridien" name="filtre-meridien">
                <option value="null">Aucun</option>
                {section name=itemMeridien loop=$listeMeridiens}
                {assign var=meridien value=$listeMeridiens[itemMeridien]}
				<option value="$meridien->_code">
                    {$meridien->_nom}
                </option>
                {/section}
			</select>
				
			<label for="filtre-carac">Caractéristiques : </label>
			<select id="filtre-carac" name="filtre-carac">
                <option value="null">Aucun</option>
				<option value ="p">Plein</option>
                <option value ="c">Chaud</option>
                <option value ="v">Vide</option>
                <option value ="f">Froid</option>
                <option value ="i">Interne</option>
                <option value ="e">Externe</option>
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
                      <a href="/index.php?page=patho&idPatho={$patho->_id}">{$patho->_desc}</a>
                  </li>
                {/section}
                </ul>
			</div>
			<!-- Fiche de la pathologie affichée -->
			<div id="fiche-patho-select">
				<h2>{$pathologie->_desc}</h2>
                <p>Méridien: {$patho->_meridien}</p>
                <ul>
                {section name=itemSymptome loop=$patho->_listeSymptomes}
                {assign var=symptome value=$patho->_listeSymptomes[itemSymptome]}
                  <li>
                      {$symptome->_desc}
                  </li>
                {/section}
                
                
			</div>
		</div>
	</section>
</main>