<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet	version="1.0"
				xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
				xmlns:date="http://exslt.org/dates-and-times"
				xmlns:udt="http://umi-cms.ru/2007/UData/templates"
				xmlns:umi="http://www.umi-cms.ru/TR/umi"
				xmlns:xlink="http://www.w3.org/1999/xlink"
				exclude-result-prefixes="xsl date udt xlink">

	<xsl:template match="udata[@module = 'banners'][@method = 'fastInsert']" mode="right" />

	<xsl:template match="udata[@module = 'banners'][@method = 'fastInsert'][banner]" mode="right">
		<div class="gray_block">
			<xsl:apply-templates select="banner" />
		</div>
	</xsl:template>

	<xsl:template match="udata[@module = 'banners'][@method = 'fastInsert']" mode="catalog-banner" />
	<xsl:template match="udata[@module = 'banners'][@method = 'fastInsert'][banner]" mode="catalog-banner">
            <div class="grid-100 margin-bottom hide-on-mobile">
                <div class="header-slider juicy-wrapper">
                    <ul class="juicy-slider">
                        <xsl:apply-templates select="banner" mode="catalog-banner">
                            <xsl:with-param name="ban-id" select="@id" />
                        </xsl:apply-templates>
                    </ul>
                </div>
            </div>
	</xsl:template>

        <xsl:template match="banner" mode="catalog-banner">
            <xsl:param name="ban-id" />
            <xsl:variable name="ban-info" select="document(concat('uobject://', $ban-id))/udata" />
            <li>
                <img class="juicy-bg" src="{source}" alt="" />

                <div
                    style="top: 50px; left: 30px"
                    data-show="at:700 effect:shift-fade direction:left speed:2000 easing:easeOutQuint"
                    data-hide="effect:slide-fade direction:left speed:800"
                    class="juicy-layer subheader-font">

                    <xsl:value-of select="$ban-info//property[@name = 'ban_head_1']/value" />
                </div>
                <div
                    style="top: 80px; left: 30px"
                    data-show="at:1000 effect:shift-fade direction:left speed:2000 easing:easeOutQuint"
                    data-hide="effect:slide-fade direction:left speed:800"
                    class="juicy-layer subheader-font">

                    <xsl:value-of select="$ban-info//property[@name = 'ban_head_2']/value" />
                </div>
            </li>
        </xsl:template>

	<xsl:template match="udata[@module = 'banners'][@method = 'fastInsert']">
		<xsl:apply-templates select="banner" />
	</xsl:template>

	<xsl:template match="banner" />

	<xsl:template match="banner[@type = 'image']">
		<xsl:choose>
			<xsl:when test="href">
				<a href="/banners/go_to/{/udata/@id}/">
					<xsl:if test="@target">
						<xsl:attribute name="target">
							<xsl:value-of select="@target" />
						</xsl:attribute>
					</xsl:if>
					<img src="{source}" width="{@width}" height="{@height}" alt="{alt}" border="0" />
				</a>
			</xsl:when>
			<xsl:otherwise>
				<img src="{source}" width="{@width}" height="{@height}" alt="{alt}" border="0" />
			</xsl:otherwise>
		</xsl:choose>
	</xsl:template>

	<xsl:template match="banner[@type = 'swf']">
		<object	width="{@width}" height="{@height}" align="middle"
				codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0"
				classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000">
			<param name="allowScriptAccess" value="sameDomain" />
			<param name="movie" value="{source}" />
			<param name="quality" value="high" />
			<param name="bgcolor" value="#ffffff" />
			<param name="wmode" value="opaque" />
			<xsl:if test="href">
				<param name="flashVars">
					<xsl:attribute name="value">
						<xsl:text>url=/banners/go_to/</xsl:text><xsl:value-of select="/udata/@id" /><xsl:text>/</xsl:text>
						<xsl:if test="@target">
							<xsl:text>&amp;target=</xsl:text><xsl:value-of select="@target" />
						</xsl:if>
					</xsl:attribute>
				</param>
			</xsl:if>
			<embed	width="{@width}" height="{@height}" align="middle" wmode="opaque"
					pluginspage="http://www.macromedia.com/go/getflashplayer"
					type="application/x-shockwave-flash" allowscriptaccess="sameDomain"
					name="banner" bgcolor="#ffffff" quality="high" src="{source}">
				<xsl:if test="href">
					<xsl:attribute name="flashVars">
						<xsl:text>url=/banners/go_to/</xsl:text><xsl:value-of select="/udata/@id" /><xsl:text>/</xsl:text>
						<xsl:if test="@target">
							<xsl:text>&amp;target=</xsl:text><xsl:value-of select="@target" />
						</xsl:if>
					</xsl:attribute>
				</xsl:if>
			</embed>
		</object>
	</xsl:template>

	<xsl:template match="banner[@type = 'html']">
		<xsl:value-of select="source" disable-output-escaping="yes" />
	</xsl:template>

</xsl:stylesheet>