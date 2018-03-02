<?php
    session_start();
    require_once('action/Constants.php');
    require_once('action/Translator.php');

	abstract class CommonAction {
    protected $pageName;
    protected $translator;

		public function __construct() {}

		public function execute() {
            if(!isset($_SESSION['lang'])) {
                $currentLang = currentLang;
                $_SESSION['lang'] = $currentLang;

                $this->translator = new Translator($_SESSION['lang']);
            }
            else {
                if(isset($_GET['lang']) && strlen($_GET['lang']) > 0) {
                        $currentLang = $_GET['lang'];
                        $_SESSION['lang'] = $currentLang;
                }

                $this->translator = new Translator($_SESSION['lang']);
            }
			$this->executeAction();
		}

		abstract protected function executeAction();

        public function getTranslator() {
            return $this->translator;
        }
	}
