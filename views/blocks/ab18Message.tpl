[{if $oViewConf->ab18Check() == false}]
<div class="ab18Container">
    <form class="ab18Form" action="[{$oViewConf->getSelfActionLink()}]" method="post">
		<div class="hidden">
			[{$oViewConf->getHiddenSid()}]
			[{$oViewConf->getNavFormParams()}]
			<input type="hidden" name="ue18flag" value="1">
		</div>

		<div class="textAb18">
			<p>[{$oViewConf->getHead18Message()}]</p>
		</div>
			
			

		<input type="submit" class="buttonAb18" name="ue18" id="ue18" value="[{$oViewConf->get18Message()}]">
		<a class="buttonAb18" href="https://www.google.com">[{$oViewConf->getNot18Message()}]</a>
		
		
		
		
    </form>
</div>
[{/if}]