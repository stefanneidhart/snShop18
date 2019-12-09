<?php

/* The name of your own class that shall overload the oxarticle class.
  Best practice: yournameabbr_modulename_origclassname extends [yourclassname]_parent.
  Instantiate your new class: */

namespace sn\snShop18\Core;
class ViewConfig extends ViewConfig_parent {
	public function ab18Check() {
		$session = \OxidEsales\Eshop\Core\Registry::getSession();
		if($session->getVariable("ab18") === NULL) {
			$session->setVariable("ab18", false);
		}		
		try {
			$ue18 = \OxidEsales\Eshop\Core\Registry::getConfig()->getRequestParameter("ue18flag");
			if (!empty($ue18) && $ue18 == 1) {
				$session->setVariable("ab18", true);
			}

		} catch (\OxidEsales\Eshop\Core\Exception\StandardException $excp) {
			
		}
		var_dump( $this->getConfig()->getConfigParam('message18') );
		
		return $session->getVariable("ab18");
	}
}
