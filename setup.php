<?php

// load Smarty library
define('SMARTY_DIR', '/usr/local/php5/Smarty/libs/');
require(SMARTY_DIR . 'Smarty.class.php');


class Smarty_Test extends Smarty {

   function Smarty_GuestBook()
   {

        $this->Smarty();

        $this->template_dir = './templates/';
        $this->compile_dir = './templates_c/';
        $this->config_dir = './configs/';
        $this->cache_dir = './cache/';

        $this->caching = true;
        $this->assign('app_name', 'Smarty Test');
   }

}
?>