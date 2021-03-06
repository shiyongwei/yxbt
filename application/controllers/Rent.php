<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Rent extends CI_Controller{
			public function __construct ()
			{
				parent ::__construct();
				$this -> load -> model('admin/List_model');
				$this -> load -> model('admin/Product_model');
				$this -> load -> model('admin/Navigation_model');
				$this -> load -> model('admin/City_model');
				$this -> load -> model('admin/Text_model');
				$this -> load -> model('admin/Side_model');
                $this -> load -> model('admin/Announcement_model');
				$this -> load -> helper(array('form', 'url'));
			}
			//热门租赁分类
			public function index(){
				$num = isset($_POST['num']) ? $_POST['num'] : null;
				$num_other = isset($_POST['num_other']) ? $_POST['num_other'] : null;
				if ($num == null){
					$reg_info['num'] = $num_other;
				}else{
					$reg_info['num'] = $num;
				}
				$reg_info['star_city'] = isset($_POST['star_city']) ? $_POST['star_city'] : null;
				$reg_info['end_city'] = isset($_POST['end_city']) ? $_POST['end_city'] : null;
				$reg_info['star_time'] = isset($_POST['star_time']) ? $_POST['star_time'] : null;
				$reg_info['end_time'] = isset($_POST['end_time']) ? $_POST['end_time'] : null;
				$reg_info['travel'] = isset($_POST['travel']) ? $_POST['travel'] : null;
//				echo '<pre>';
//				print_r($reg_info);exit;
				$rent_list = $this->Product_model->get('');
				$get_limit = $this->City_model->get_limit('');
				$bottom_info = $this->Text_model->get_name('');
                $notice = $this->Announcement_model->get_name('');
				$city = $this->City_model->get();
				$bottom_info_all = $this->Text_model->get_name_all('');
				$side = $this->Side_model->get_name('');
				$id = $_GET['id'];
				if($id==0){
					$list = $this->List_model->get('');
				}else{
					$list = $this->List_model->getInfo($id);
				}
				$navigation = $this->Navigation_model->get_name('');
				for ($i=0;$i<count($navigation);$i++){
					$navigation_limit['navigation_id'] = $navigation[0]['navigation_id'];
					$navigation_limit['navigation_name'] = $navigation[0]['navigation_name'];
					$navigation_limit['lease_name'] = $navigation[0]['lease_name'];
					$navigation_limit['hotel_name'] = $navigation[0]['hotel_name'];
					$navigation_limit['promotions_name'] = $navigation[0]['promotions_name'];
					$navigation_limit['navigation_name_en'] = $navigation[0]['navigation_name_en'];
					$navigation_limit['lease_name_en'] = $navigation[0]['lease_name_en'];
					$navigation_limit['hotel_name_en'] = $navigation[0]['hotel_name_en'];
					$navigation_limit['promotions_name_en'] = $navigation[0]['promotions_name_en'];
				}

//				echo '<pre>';
//				print_r($list);exit;
//				echo '</pre>';

				$data['rent_list'] = $rent_list;
				$data['list'] = $list;
				$data['get_limit'] = $get_limit;
				$data['navigation'] = $navigation;
				$data['bottom_info'] = $bottom_info;
				$data['bottom_info_all'] = $bottom_info_all;
				$data['side'] = $side;
				$data['navigation_limit'] = $navigation_limit;
				//影藏信息
				$data['reg_info'] = $reg_info;
				$data['city'] = $city;
				$data['notice'] = $notice;




				$this -> load -> view('common/home/head',$data,$navigation,$bottom_info_all,$notice);
				$this -> load -> view('rent',$list,$side);
				$this -> load -> view('common/home/foot',$rent_list,$get_limit,$bottom_info,$bottom_info_all,$side);
			}

			public function mobile_Rent(){
				$rent_list = $this->Product_model->get('');
				$get_limit = $this->City_model->get_limit('');
				$bottom_info = $this->Text_model->get_name('');
				$bottom_info_all = $this->Text_model->get_name_all('');
				$side = $this->Side_model->get_name('');
				$id = $_GET['id'];
				if($id==0){
					$list = $this->List_model->get('');
				}else{
					$list = $this->List_model->getInfo($id);
				}
				$navigation = $this->Navigation_model->get_name('');

				//				echo '<pre>';
				//				print_r($list);exit;
				//				echo '</pre>';

				$data['rent_list'] = $rent_list;
				$data['list'] = $list;
				$data['get_limit'] = $get_limit;
				$data['navigation'] = $navigation;
				$data['bottom_info'] = $bottom_info;
				$data['bottom_info_all'] = $bottom_info_all;
				$data['side'] = $side;

				$this -> load -> view('mobile/rent',$data);
			}


		}