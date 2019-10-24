<?php

/*a classe é criada mas é acessada pelo objeto - variável*/
/*padrão orientação obj PHP e visual MDC*/
    class controller {
        
        protected $db;
        protected $lang; /*essa variável vai acessar o arquivo "Language"*/
        
        
        public function __construct() {
            global $config;
            $this->lang = new Language(); /*toda classe abre e fecha parêntese*/
        }
        
        public function loadView($viewName, $viewData = array()) {
            extract($viewData);
            include 'views/'.$viewName.'.php';
        }
        
        public function loadTemplate($viewName, $viewData = array()) {
            include 'views/template.php';
        }
        
        public function loadViewInTemplate($viewName, $viewData) {
            extract($viewData);
            include 'views/'.$viewName.'.php';
        }
    }