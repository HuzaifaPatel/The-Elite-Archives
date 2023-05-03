<?php

class SiteUpdatesController extends Controller{
	public function __construct(){
		parent::__construct();
		$this->siteUpdate();
	}

	public function siteUpdate(){
		$this->tpl->assign('site-updates');
		$this->tpl->display();
	}
}