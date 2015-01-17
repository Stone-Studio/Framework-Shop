<?php

class controller_Portfolio extends controller
{

	function __construct() {
		$this->model = new model_portfolio();
		$this->view = new view();
	}
	
	function action_index() {
		$data = $this->model->get_data();		
		$this->view->generate('portfolio_view.php', 'template_view.php', $data);
	}

	//example
}
