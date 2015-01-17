<?php
//by Sergeev
class controller {
	
	public $model;
	public $view;
	
	function __construct()
	{
		$this->view = new view();
		$this->mode = new model();
	}
	
	// действие (action), вызываемое по умолчанию
	function action_index()
	{
		// todo	
	}
}
