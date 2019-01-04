<?php
class SpecialController extends Common {
    
    public function __construct() {
		parent::__construct();
	}
	
	/**
	 * 栏目列表页
	 */
	public function realEstateAction() {
            $this->view->display('realEstate');
        }
}


