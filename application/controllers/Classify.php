<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Classify extends CI_Controller{
			public function __construct ()
			{
				parent ::__construct();
				$this -> load -> model('admin/List_model');
				$this -> load -> model('admin/Product_model');
				$this -> load -> model('admin/Uriving_model');
				$this -> load -> helper(array('form', 'url'));
				$this -> load -> model('admin/City_model');
				$this -> load -> model('admin/Navigation_model');
			}
			public function index(){
				$rent_list = $this->Product_model->get('');
				$uriving = $this->Uriving_model->get('');
				$navigation = $this->Navigation_model->get_name('');
				$city = $this->City_model->get();

//				echo '<pre>';
//				print_r($uriving);
//				echo '</pre>';

				$data['rent_list'] = $rent_list;
				$data['uriving'] = $uriving;
				$data['navigation'] = $navigation;
				$data['city'] = $city;

				$this -> load -> view('common/home/head',$data,$navigation);
				$this -> load -> view('classify',$uriving,$city);
				$this -> load -> view('common/home/foot');
			}
		}





?>