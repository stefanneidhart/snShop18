[{if !$oViewConf->ab18Check()}]
<div class="ab18Container">
    <form class="ab18Form" action="[{$oViewConf->getSelfActionLink()}]" method="post">
		<div class="hidden">
			[{$oViewConf->getHiddenSid()}]
			[{$oViewConf->getNavFormParams()}]
			<input type="hidden" name="ue18flag" value="1">
		</div>

		<div class="textAb18">
			<p>Zutritt zum Shop erst ab 18 Jahren</p>
		</div>

		<input type="submit" class="buttonAb18" name="ue18" id="ue18" value="Ja, ich bin über 18 Jahre">
		<a href="https://www.google">Nein, ich bin über 18 Jahre</a>
    </form>
</div>
[{/if}]