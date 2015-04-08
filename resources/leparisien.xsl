<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0" xmlns:xsl='http://www.w3.org/1999/XSL/Transform' 
				xmlns:xs='http://www.w3.org/2001/XMLSchema'
				xmlns:doc="espaceDoc">
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

	<xsl:template match="rss">
    	<html><body>
      		<xsl:apply-templates/>
		</body></html>
  	</xsl:template>
	
	<xsl:template match="channel">
      <xsl:for-each-group select="item" group-by="category">
        <xsl:variable name="catType" select="category"/>
        <div>
          <span>
            <xsl:value-of select="$catType"/>
          </span>
          <div>
            <xsl:apply-templates select="../item[category=$catType]/title"/>
          </div>
        </div>
      </xsl:for-each-group>
  	</xsl:template>

  	<xsl:template match="title">
    	<span>
      		<xsl:apply-templates/>
    	</span>
  	</xsl:template>

  	<xsl:template match="category"/>

  	<xsl:template match="item">
    	<xsl:apply-templates/>
  	</xsl:template>
	
</xsl:stylesheet>
