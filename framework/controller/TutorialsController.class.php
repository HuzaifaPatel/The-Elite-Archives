<?php
class TutorialsController extends Controller{
	public function __construct(){
		parent::__construct();
		$this->tutorials();
	}

	public function tutorials(){
		$this->result = Framework::call('GetTutorialData')->fetch_all(MYSQLI_ASSOC);
		parent::enhanceArray($this->result);
		$this->tpl->videoData = $this->result;
		$this->tpl->assign('tutorials');
		$this->tpl->display();
	}
}

?>