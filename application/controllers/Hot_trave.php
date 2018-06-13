<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Hot_trave extends CI_Controller{
    public function __construct ()
    {
        parent ::__construct();
        $this -> load -> model('admin/List_model');
        $this -> load -> model('admin/Product_model');
        $this -> load -> model('admin/Topic_model');
        $this -> load -> helper(array('form', 'url'));
    }
    public function index(){
        $rent_list = $this->Product_model->get('');
        $topic = $this->Topic_model->get('');


        $data['rent_list'] = $rent_list;
        $data['topic'] = $topic;

        $this -> load -> view('common/home/head',$data);
        $this -> load -> view('hot_trave',$topic);
        $this -> load -> view('common/home/foot');
    }
}





?>