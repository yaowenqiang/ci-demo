<?php
/**
 *
 */
class Blog extends CI_Controller
{
    /**
     *
     */
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        echo "hello world";
    }
    public function hello()
    {
        echo "hello";
    }
    public function _output()
    {
        echo "\ni am dying\n";
    }
}
