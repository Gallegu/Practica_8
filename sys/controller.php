<?php
	class Controller{
		public $model;
		protected $view;
		protected $params;
		protected $conf;
		public $loader;

		function __construct($parameters){
			$this->params =$parameter;
			$this->conf = Config::getIns();
			$this->loader = new Loader();

		}

		




	}


?>