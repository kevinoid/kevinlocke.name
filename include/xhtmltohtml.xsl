<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns:xhtml="http://www.w3.org/1999/xhtml"
    exclude-result-prefixes="xhtml" version="1.0">
    
    <!-- Comment/Uncomment the desired flavor of HTML output
            If we bite the bullet and to with transitional or frameset, more
            conversions will be done for backwards-compatibility -->
    
    <!--
    <xsl:output method="html" indent="yes"
        doctype-public="-//W3C//DTD HTML 4.01//EN"
        doctype-system="http://www.w3.org/TR/html4/strict.dtd"/>
      -->
    <xsl:output method="html" indent="yes"
        doctype-public="-//W3C//DTD HTML 4.01+RDFa//EN"
	doctype-system="http://www.w3.org/MarkUp/DTD/html401-rdfa-1.dtd"/>
    <xsl:variable name="flavor" select="'strict'"/>

    <!--
    <xsl:output method="html" indent="yes"
        doctype-public="-//W3C//DTD HTML 4.01 Transitional//EN"
        doctype-system="http://www.w3.org/TR/html4/loose.dtd"/>
    <xsl:variable name="flavor" select="'transitional'"/>
    -->
    
    <!--
    <xsl:output method="html" indent="yes"
        doctype-public="-//W3C//DTD HTML 4.01 Frameset//EN"
        doctype-system="http://www.w3.org/TR/html4/frameset.dtd"/>
    <xsl:variable name="flavor" select="'frameset'"/>
    -->
    
    <!-- Should the contents of <script> be commented out? -->
    <xsl:param name="commentscripts" select="boolean(0)"/>
    
    <xsl:strip-space elements="html *"/>
    <xsl:preserve-space elements="script"/>
    
    <!-- Convert xml:lang attribute to lang if no other lang attribute exists
            and element can have a lang attribute -->
    <xsl:template match="@xml:lang">
        <xsl:if test="(count(../@lang) = 0)
                           and (local-name(..) != 'base')
                           and (local-name(..) != 'br')
                           and (local-name(..) != 'frame')
                           and (local-name(..) != 'frameset')
                           and (local-name(..) != 'hr')
                           and (local-name(..) != 'iframe')
                           and (local-name(..) != 'param')
                           and (local-name(..) != 'script')">
            <xsl:attribute name="lang">
                <xsl:value-of select="."/>
            </xsl:attribute>
        </xsl:if>
    </xsl:template>
    
    <!-- Convert xml:base on <html> to <base> -->
    <xsl:template match="xhtml:head">
        <head>
            <xsl:apply-templates select="@*"/>
            <xsl:if test="/xhtml:html/@xml:base">
                <base>
                    <xsl:attribute name="href"><xsl:value-of select="/xhtml:html/@xml:base"/></xsl:attribute>
                </base>
            </xsl:if>
            <xsl:apply-templates/>
        </head>
    </xsl:template>
    
    <!-- Provide name attributes for elements with id attributes 
            and no name attributes provided -->
    <xsl:template match="@id">
        <xsl:if test="(count(../@name) = 0)
                           and ((local-name(..) = 'a')
                                   or (local-name(..) = 'applet')
                                   or (local-name(..) = 'form')
                                   or (local-name(..) = 'frame')
                                   or (local-name(..) = 'img')
                                   or (local-name(..) = 'map'))">
            <xsl:attribute name="name"><xsl:value-of select="."/></xsl:attribute>
        </xsl:if>
        <xsl:copy/>
    </xsl:template>
    
    <!-- Discard xmlns attributes -->
    <xsl:template match="@version"/>
    
    <!-- Add language attribute to script if necessary -->
    <xsl:template match="xhtml:script">
        <xsl:element name="script">
            <xsl:if test="($flavor = 'transitional') or ($flavor = 'frameset')">
                <xsl:call-template name="typeToLanguage">
                    <xsl:with-param name="type" select="@type"/>
                </xsl:call-template>
            </xsl:if>
            <xsl:apply-templates select="@*"/>
            <xsl:choose>
                <xsl:when test="$commentscripts">
                    <xsl:comment>
                        <xsl:apply-templates/>//</xsl:comment>
                </xsl:when>
                <xsl:otherwise>
                    <xsl:apply-templates/>
                </xsl:otherwise>
            </xsl:choose>
        </xsl:element>
    </xsl:template>
    
    <xsl:template name="typeToLanguage">
        <xsl:param name="type" select="@type"/>
        <xsl:if test="($type = 'text/ecmascript')
                           or ($type = 'text/javascript')
                           or ($type = 'application/ecmascript')
                           or ($type = 'application/javascript')">
            <xsl:attribute name="language">javascript</xsl:attribute>
        </xsl:if>
        <xsl:if test="$type = 'text/vbscript'">
            <xsl:attribute name="language">vbscript</xsl:attribute>
        </xsl:if>
    </xsl:template>
    
    <!-- Discard the xml:* attributes, with no HTML equivalents -->
    <xsl:template match="@xml:*"/>
    
    <!-- Copy all other XHTML tags verbatim -->
    <xsl:template match="xhtml:*">
        <xsl:element name="{local-name(.)}">
            <xsl:apply-templates select="@*|node()"/>
        </xsl:element>
    </xsl:template>
    
    <xsl:template match="@*">
        <xsl:copy/>
    </xsl:template>

</xsl:stylesheet>
