<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    	<xsl:template match="*">
		<xsl:apply-templates/>
	</xsl:template>
	<xsl:template match="text()">
		<xsl:apply-templates/>
	</xsl:template>
	<xsl:template match="/">
		<html>
			<head>
				<title>RSS Feed</title>
			</head>
			<body>
				<h1>RSS FEED</h1>
				<xsl:apply-templates select="//item[last()]"/>
			</body>
		</html>
	</xsl:template>

	<xsl:template match="item">
	    
		<xsl:value-of select="."/><br/>
		
	</xsl:template>
	
</xsl:stylesheet>

<!--Code found in Project Resources on Moodle-->