<? $php
    class homeController extends controller {
    
    private $user;
    
    public function __construct() {
        parent::__contruct();
    }
    
    public function index() {
        $dados = array();
        
        $this->loadTemplate('home', $dados);
    }
}