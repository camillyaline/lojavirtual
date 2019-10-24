<?php
class Language {

	private $l; /*define a linguagem padrão e joga para o "ini"*/
	private $ini; /*vai verificar se existe o arquivo com "pt-br"*/
    /*vai gravar as palavras que estão no arquivo "pt-br" e cria uma sessão a cada vez que entar na loja*/

	public function __construct() {
		global $config;
		$this->l = $config['default_lang'];

		if(!empty($_SESSION['lang']) && file_exists('lang/'.$_SESSION['lang'].'.ini')) {
			$this->l = $_SESSION['lang'];
		}

		$this->ini = parse_ini_file('lang/'.$this->l.'.ini');
	}

	public function get($word, $return = false) {
		$text = $word;

		if(isset($this->ini[$word])) {
			$text = $this->ini[$word];
		}

		if($return) {
			return $text;
		} else {
			echo $text;
		}

	}

}

