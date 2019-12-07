<div class="ab18Container">
    <form class="ab18Form" action="[{$oViewConf->getSelfActionLink()}]" method="post">
	<div class="hidden">
	    [{$oViewConf->getHiddenSid()}]
	    [{$oViewConf->getNavFormParams()}]
	    <input type="hidden" name="cl" value="[{$oViewConf->getTopActiveClassName()}]">
	</div>

	<div class="textAb18">
	    <p>Zutritt zum Shop erst ab 18 Jahren</p>
	</div>

	<input type="submit" class="buttonAb18" value="Ja, ich bin über 18 Jahre">
	<input type="submit" class="buttonAb18" value="Nein, ich bin über 18 Jahre">
    </form>
	
	[{*if $oView->ab18Check()}]
	ab 18
	[{/if*}]
	
</div>