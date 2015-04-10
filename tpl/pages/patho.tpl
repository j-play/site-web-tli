<main>
	<section id="pathologies">
		<h2 id="titrePatho">Pathologies</h2>
		<form id="filtres" action="/patho" method="POST"> 
			<label for="filtre-tpatho">Type de pathologie : </label>
			<select id="filtre-tpatho" name="filtre-tpatho">
                <option value="">Aucun</option>
				<option value ="m">Méridien</option>
                <option value ="tf">Organe/Viscère</option>
                <option value ="l">Luo</option>
                <option value ="l2">Merveilleux vaisseaux</option>
                <option value ="j">Jing jin</option>
			</select>
				
			<label for="filtre-meridien">Méridiens : </label>
			<select id="filtre-meridien" name="filtre-meridien">
                <option value="">Aucun</option>
                {section name=itemMeridien loop=$listeMeridiens}
                {assign var=meridien value=$listeMeridiens[itemMeridien]}
				<option value="{$meridien->_code}">
                    {$meridien->_nom}
                </option>
                {/section}
			</select>
				
			<label for="filtre-carac">Caractéristiques : </label>
			<select id="filtre-carac" name="filtre-carac">
                <option value="">Aucun</option>
				<option value ="p">Plein</option>
                <option value ="c">Chaud</option>
                <option value ="v">Vide</option>
                <option value ="f">Froid</option>
                <option value ="i">Interne</option>
                <option value ="e">Externe</option>
			</select>
			{if isset($smarty.session.pseudo)}	
			<label for="filtre-mot-cle">Mot clé : </label>
			<input id="filtre-mot-cle" type="text" name="filtre-mot-cle"/>
			{/if}
			<input id="valid-filtres" type="submit" name="Valider"/>
		</form>
			
		<div id="corps-patho">
			<div id="liste-fiches">
				<h3>Listes pathologies :</h3>
                <ul>
                {section name=itemPatho loop=$listePatho}
                {assign var=patho value=$listePatho[itemPatho]}
                  <li id="{$patho->_id}">
                      <a href="/patho/{$patho->_id}">{$patho->_desc}</a>
                  </li>
                {/section}
                </ul>
			</div>
			<!-- Fiche de la pathologie affichée -->
			<div id="fiche-patho-select">
                {if isset($pathologie)}
				<h2>{$pathologie->_desc}</h2>
                <p>Méridien: {$pathologie->_meridien->_nom}</p>
                <h3>Liste des symptômes:</h3>
                <ul>
                {section name=itemSymptome loop=$pathologie->_listeSymptomes}
                {assign var=symptome value=$pathologie->_listeSymptomes[itemSymptome]}
                  <li>
                    {$symptome->_desc}
                  </li>
                {/section}
                </ul> 
                {/if}               
			</div>
		</div>
	</section>
</main>