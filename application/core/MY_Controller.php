<?php
class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $GLOBALS['EXT']->_call_hook('pre_controller_constructor');
     }
}
