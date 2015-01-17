<?php
//by Sergeev
class route
{

	static function start() {

		$controller_name = 'main';
		$action_name = 'index';
		//action и контролер по умолчанию

		$routes = explode('/', $_SERVER['REQUEST_URI']);

		if ((!empty($routes[1]))&&(!empty($routes[2]))){
			$controller_name = $routes[1];
            $action_name = $routes[2];
		}

        //переменные:

		$model_name = 'model_'.$controller_name;
		$controller_name = 'controller_'.$controller_name;
		$action_name = 'action_'.$action_name;
        //добавляем префиксы к контролерам, моделям, актионам

		$model_file = strtolower($model_name).'.php';
		$model_path = "application/models/".$model_file;
        //создаем путь к модели

        $controller_file = strtolower($controller_name).'.php';
        $controller_path = "application/controllers/".$controller_file;
        //создаем путь к контролеру

		if(file_exists($model_path)) {
			include_once ("application/models/".$model_file);
		} else {
            Route::error404();
        }

		if(file_exists($controller_path)) {
			include_once ("application/controllers/".$controller_file);
		} else {
			Route::error404();
		}

		$controller = new $controller_name;
		$action = $action_name;
        //создаем объект контролера
		
		if(method_exists($controller, $action)) {
            //проверяем существует-ли метод

			$controller->$action();
            //обращаемся к экшену через контролер
		} else {
			Route::error404();
		}
	
	}

	function error404() {
        //ошибка 404
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		header('Location:'.$host.'404');
    }
    
}
