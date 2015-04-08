<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0" xmlns:xsl='http://www.w3.org/1999/XSL/Transform' 
				xmlns:xs='http://www.w3.org/2001/XMLSchema'
				xmlns:functx="http://www.functx.com">
	
	<xsl:output method="html" encoding="UTF-8" doctype-public="-//W3C//DTD XHTML 1.1//EN"
	  			doctype-system="http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"
	  			indent="yes" />
	
	<!-- Supprime les espaces blancs pour tous les éléments --> 
	<xsl:strip-space elements="*"/>

	<xsl:template match="node()|@*">
		<xsl:copy>
		  <xsl:apply-templates select="node()|@*"/>
		</xsl:copy>
  	</xsl:template>

	<!-- On englobe le contenu des balises RSS avec <html> et <body> -->
	<xsl:template match="rss">
    	<html><body>
      		<xsl:apply-templates/>
		</body></html>
  	</xsl:template>
	
	<!-- Pour chaque catégorie de pathologie, on liste les title -->
	<xsl:template match="channel">
    	<xsl:for-each-group select="item" group-by="category">
			<xsl:variable name="pathCategory" as="xs:string" select="category"/>
			<div>
			  <span>
				<!-- Valeur de la catégorie courante dans le for-each -->
				<xsl:value-of select="$pathCategory"/>
			  </span>
			  <ul>
				<!-- On applique le template pour les title de même catégorie, catégorie qui se trouve dans un item -->
				<xsl:apply-templates select="../item[category=$pathCategory]/title"/>
			  </ul>
			</div>
      	</xsl:for-each-group>
  	</xsl:template>

	<!-- On englobe chaque title dans un item <li> -->
  	<xsl:template match="title">
		<xsl:variable name="pathDescription" as="xs:string" select="../description"/>
    	<li>
      		<xsl:apply-templates/>
			<span>
				Nb symptome(s) :
				<xsl:value-of select="functx:nombre-symptomes($pathDescription)"/>
			</span>
    	</li>
  	</xsl:template>

  	<xsl:template match="category"/>
	
  	<xsl:template match="item">
    	<xsl:apply-templates/>
  	</xsl:template>
	
<!--
  	Compte le nombre de symptômes à partir de la chaîne de texte dans <description>
	Les symptômes apparaissent concaténés dans <description>
 	@author  Jonathan Play & Baptiste Boulay
 	@version 1.0 
 	@param   $texte description de la pathologie dans le fichier XML
--> 
	<xsl:function name="functx:nombre-symptomes" as="xs:integer">
		<xsl:param name="texte" as="xs:string"/> 
		<!-- Utilisation d'expression régulière pour compter le nombre de majuscule -2, et donc de symptômes -->
		<xsl:sequence select="count(tokenize($texte, '[A-Z]'))-2"/>
	</xsl:function>
	
</xsl:stylesheet>
