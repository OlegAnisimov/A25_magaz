<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE xsl:stylesheet SYSTEM "ulang://i18n/constants.dtd:file">

<xsl:stylesheet	version="1.0"
				xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
				xmlns:date="http://exslt.org/dates-and-times"
				xmlns:udt="http://umi-cms.ru/2007/UData/templates"
				xmlns:xlink="http://www.w3.org/1999/xlink"
				exclude-result-prefixes="xsl date udt xlink">

	<xsl:template match="udata[@module = 'dispatches'][@method = 'subscribe']" mode="right">
		<div class="infoblock">
			<div class="title"><h2><xsl:text>&newsletters;</xsl:text></h2></div>
			<div class="body">
				<div class="in">
					<form action="{$lang-prefix}/dispatches/subscribe_do/" name="sbs_frm" method="post">
						<ul>
							<li><input	type="text"
									onblur="if(this.value == '') this.value = '&e-mail;';"
									onfocus="if(this.value == '&e-mail;') this.value = '';"
									value="&e-mail;"
									class="input"
									id="subscribe"
									name="sbs_mail" /></li>
						</ul>
						<input type="submit" class="button" value="&subscribe;" />
					</form>
				</div>
			</div>
		</div>
	</xsl:template>

<!--        <xsl:template match="udata" mode="mp-dispatch">
            <form method="POST" action="{$lang-prefix}/dispatches/subscribe_do/" name="sbs_frm">
                <div class="input-with-button">
                    <input type="text" placeholder="Введите свой E-Mail" name="sbs_mail" id="subscribe" class="text-input dark-color light-bg" />
                    <button type="submit" class="middle-color dark-hover">
                        <i class="icon-plus"></i>
                    </button>
                </div>
            </form>
        </xsl:template>-->

	<xsl:template match="udata[@module = 'dispatches'][@method = 'subscribe'][subscriber_dispatches]" mode="right">
		<xsl:apply-templates select="subscriber_dispatches" mode="right" />
	</xsl:template>

	<xsl:template match="subscriber_dispatches" mode="right" />

	<xsl:template match="subscriber_dispatches[items]" mode="right">
		<div class="infoblock">
			<div class="title"><h2><xsl:text>&newsletters;</xsl:text></h2></div>
			<div class="body">
				<div class="in">
					<form action="{$lang-prefix}/dispatches/subscribe_do/" name="sbs_frm" method="post">
						<xsl:choose>
							<xsl:when test="$lang-prefix = '/en'">
								<ul><xsl:apply-templates select="items[2]" mode="dispatches" /></ul>
							</xsl:when>
							<xsl:otherwise>
								<ul><xsl:apply-templates select="items[1]" mode="dispatches" /></ul>
							</xsl:otherwise>
						</xsl:choose>
						<input type="submit" class="button" value="&subscribe;" />
					</form>
				</div>
			</div>
		</div>
	</xsl:template>

	<xsl:template match="result[@module = 'dispatches'][@method = 'subscribe']">
		<form action="{$lang-prefix}/dispatches/subscribe_do/" enctype="multipart/form-data" name="sbs_frm" method="post">
			<xsl:apply-templates select="document('udata://dispatches/subscribe/')/udata" />
			<input type="submit" class="button" value="&subscribe;" />
		</form>
	</xsl:template>

	<xsl:template match="udata[@module = 'dispatches'][@method = 'subscribe']">
		<div>
			<input	type="text"
					onblur="javascript: if(this.value == '') this.value = '&e-mail;';"
					onfocus="javascript: if(this.value == '&e-mail;') this.value = '';"
					value="&e-mail;"
					class="input"
					id="subscribe"
					name="sbs_mail" />
		</div>
	</xsl:template>

	<xsl:template match="udata[@module = 'dispatches'][@method = 'subscribe'][subscriber_dispatches]">
		<xsl:apply-templates select="subscriber_dispatches" />
	</xsl:template>

	<xsl:template match="subscriber_dispatches" />

	<xsl:template match="subscriber_dispatches[items]">
		<ul><xsl:apply-templates select="items" mode="dispatches" /></ul>
	</xsl:template>

	<xsl:template match="items" mode="dispatches">
		<li>
			<label>
				<input type="checkbox" name="subscriber_dispatches[{@id}]" value="{@id}">
					<xsl:if test="@is_checked = '1'">
						<xsl:attribute name="checked">
							<xsl:text>checked</xsl:text>
						</xsl:attribute>
					</xsl:if>
				</input>
				<xsl:value-of select="." />
			</label>
		</li>
	</xsl:template>

</xsl:stylesheet>