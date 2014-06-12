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
    //public function _output()
    //{
        //echo "\ni am dying\n";
    //}
    /**
     * i am private,you can't see me
     *
     * @return void
     * @author Steve Francia <steve.francia@gmail.com>
     */
    private function _p()
    {
        echo 'private';
    }
    /**
     * view test
     *
     * @return void
     * @author Steve Francia <steve.francia@gmail.com>
     */
    public function viewme()
    {
        $this->load->view('testview');
    }
}
