<?php

namespace OxidEsales\snShop18\Controller;

/**
 * Main PayPal controller
 */
class FrontendController extends \OxidEsales\Eshop\Application\Controller\FrontendController
{
    public function ab18Check() {
	var_dump('ab 18');
	$session = \OxidEsales\Eshop\Core\Registry::getSession();
    }
}