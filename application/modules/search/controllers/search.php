<?php
class search extends Public_Controller {
    function __construct()
    {
        parent::__construct();
        $this->template->set_layout('_blank');
    }
    
    function index()
    {
        $this->template->build('index');
    }
}