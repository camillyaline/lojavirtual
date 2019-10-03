<?php 

    class controller {
        
        protected $db;
        
        public function __contruct() {
            global $config;
        }
        
        public function loadView($viewName, $viewData = array()) {
            extract($viewData);
            include 'views/'.viewName.'.php';
        }
        
        public function LoadTemplate($viewName, $viewData = array()) {
            include 'view/template.php';
        }
        
        public function loadViewInTemplate($viewName, $viewData) {
            extract($viewData);
            include 'views/'.$viewName.'.php';
        }
    }