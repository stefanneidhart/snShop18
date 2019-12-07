<?php

/* The name of your own class that shall overload the oxarticle class.
  Best practice: yournameabbr_modulename_origclassname extends [yourclassname]_parent.
  Instantiate your new class: */

namespace sn\snShop18\Core;

class ViewConfig extends ViewConfig_parent {

	public function ab18Check() {
		var_dump('echo');
		return true;
	}
}