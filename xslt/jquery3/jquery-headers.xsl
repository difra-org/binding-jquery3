<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:template name="jquery-headers">
        <xsl:choose>
            <xsl:when test="/root/@debug='1'">
                <script src="/jquery3/jquery.js"/>
            </xsl:when>
            <xsl:otherwise>
                <script src="/jquery3/jquery.min.js"/>
            </xsl:otherwise>
        </xsl:choose>
    </xsl:template>
</xsl:stylesheet>
