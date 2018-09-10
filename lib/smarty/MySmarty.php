<?php

require_once __DIR__ . '/../lib/smarty/Smarty.class.php';

class MySmarty extends Smarty
{
    public function __construct() 
    {       
        parent::__construct();
        
        $this->template_dir = SMARTY_DIR . '/templates';
        $this->compile_dir = SMARTY_DIR . '/template_c';
        $this->escape_html = true;
    }
}

