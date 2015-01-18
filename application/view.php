<?php
//by Sergeev
class view {

	public $template_view = 'template_view.php';

	/*
	$content_file - виды отображающие контент страниц;
	$template_file - общий для всех страниц шаблон;
	$data - массив, содержащий элементы контента страницы. Обычно заполняется в модели.
	*/
	function generate($content_view, $template_view, $data = null)
	{

		/*
		if(is_array($data)) {

			// преобразуем элементы массива в переменные
			extract($data);
		}
		*/

		/*
		динамически подключаем общий шаблон (вид),
		внутри которого будет встраиваться вид
		для отображения контента конкретной страницы.
		*/
		include_once('views/template_view.php');
		//подключаем типовой шалон
	}

}
