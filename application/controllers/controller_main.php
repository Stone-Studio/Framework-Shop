<?php

class controller_main extends controller
{

    function action_index()
    {
        $this->view->generate('controller_view.php', '/application/views/template_view.php');
    }

}