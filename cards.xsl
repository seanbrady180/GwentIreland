<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">

<xsl:template match="/">
  <html>
  <body>
  <h2>Gwent Collection</h2>
    <table border="2" cellpadding="2">
      <tr bgcolor="blue">
        <th style="text-align:left">Name</th>
        <th style="text-align:left">Rate</th>
		<th style="text-align:left">Attack</th>
		<th style="text-align:left">Special</th>
		<th style="text-align:left">Type</th>
		<th style="text-align:left">Deck</th>
      </tr>
      <xsl:for-each select="PACK/CARD">
      <tr>
        <td><xsl:value-of select="NAME"/></td>
        <td><xsl:value-of select="RATE"/></td>
		<td><xsl:value-of select="ATTACK"/></td>
		<td><xsl:value-of select="SPECIAL"/></td>
		<td><xsl:value-of select="TYPE"/></td>
		<td><xsl:value-of select="DECK"/></td>
      </tr>
      </xsl:for-each>
    </table>
  </body>
  </html>
</xsl:template>
</xsl:stylesheet>
