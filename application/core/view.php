<?php
//by Sergeev
class view {

	function generate($content_view, $template_view, $data = null) {
		include_once ('application/views/'.$template_view);
	}

}
