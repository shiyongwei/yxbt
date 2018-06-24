<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class City extends CI_Controller{
			public function __construct ()
			{
				parent ::__construct();
				$this -> load -> model('admin/List_model');
				$this -> load -> model('admin/Product_model');
				$this -> load -> model('admin/City_model');
				$this -> load -> helper(array('form', 'url'));
				$this -> load -> model('admin/Navigation_model');
			}
			public function index(){
				$rent_list = $this->Product_model->get('');//热门租赁分类
				$city = $this->City_model->get();
				$get_limit = $this->City_model->get_limit();
				$navigation = $this->Navigation_model->get_name('');

				$data['rent_list'] = $rent_list;
				$data['city'] = $city;
				$data['get_limit'] = $get_limit;
				$data['navigation'] = $navigation;

				$this -> load -> view('common/home/head',$data,$navigation);
				$this -> load -> view('city',$city);
				$this -> load -> view('common/home/foot',$rent_list,$get_limit);
			}
		}





?>