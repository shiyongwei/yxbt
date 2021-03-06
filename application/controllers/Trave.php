<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Trave extends CI_Controller{
    public function __construct ()
    {
        parent ::__construct();
        $this -> load -> model('admin/List_model');
        $this -> load -> model('admin/Product_model');
		$this -> load -> model('admin/Navigation_model');
		$this -> load -> model('admin/City_model');
		$this -> load -> model('admin/Text_model');
		$this -> load -> model('admin/Team_model');
		$this -> load -> model('admin/Uriving_model');
		$this -> load -> model('admin/Explore_model');
		$this -> load -> model('admin/Side_model');
		$this -> load -> model('admin/Topic_model');
        $this -> load -> model('admin/Announcement_model');
        $this -> load -> helper(array('form', 'url'));
    }
    public function index(){
        $rent_list = $this->Product_model->get('');//热门租赁分类
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
		$city = $this->City_model->get();
		$get_limit = $this->City_model->get_limit();
		$bottom_info = $this->Text_model->get_name('');
		$classifyinfo = $this->Uriving_model->get_limit('');
		$explode = $this->Explore_model->get('');
		$side = $this->Side_model->get_name('');
		$topic = $this->Topic_model->get('');
		$team = $this->Team_model->get('');
		$uriving = $this->Uriving_model->get('');
        $notice = $this->Announcement_model->get_name('');

		$bottom_info_all = $this->Text_model->get_name_all('');

//						echo  '<pre>';
//						print_r($topic);
//						echo  '<pre>';

        $data['rent_list'] = $rent_list;
		$data['navigation'] = $navigation;
		$data['city'] = $city;
		$data['get_limit'] = $get_limit;
		$data['bottom_info'] = $bottom_info;
		$data['bottom_info_all'] = $bottom_info_all;
		$data['classifyinfo'] = $classifyinfo;
		$data['explode'] = $explode;
		$data['side'] = $side;
		$data['topic'] = $topic;
		$data['team'] = $team;
		$data['uriving'] = $uriving;
		$data['navigation_limit'] = $navigation_limit;
		$data['notice'] = $notice;



        $this -> load -> view('common/home/head',$data,$navigation,$bottom_info_all,$notice);
        $this -> load -> view('trave',$city,$classifyinfo,$explode,$topic);
        $this -> load -> view('common/home/foot',$rent_list,$get_limit,$bottom_info,$bottom_info_all,$side);
    }

		public function mobile_Trave(){
			$rent_list = $this->Product_model->get('');//热门租赁分类
			$navigation = $this->Navigation_model->get_name('');
			$city = $this->City_model->get();
			$get_limit = $this->City_model->get_limit();
			$bottom_info = $this->Text_model->get_name('');
			$classifyinfo = $this->Uriving_model->get_limit('');
			$explode = $this->Explore_model->get('');
			$side = $this->Side_model->get_name('');
			$topic = $this->Topic_model->get('');
			$team = $this->Team_model->get('');
			$uriving = $this->Uriving_model->get('');


			$bottom_info_all = $this->Text_model->get_name_all('');

			//						echo  '<pre>';
			//						print_r($topic);
			//						echo  '<pre>';

			$data['rent_list'] = $rent_list;
			$data['navigation'] = $navigation;
			$data['city'] = $city;
			$data['get_limit'] = $get_limit;
			$data['bottom_info'] = $bottom_info;
			$data['bottom_info_all'] = $bottom_info_all;
			$data['classifyinfo'] = $classifyinfo;
			$data['explode'] = $explode;
			$data['side'] = $side;
			$data['topic'] = $topic;
			$data['team'] = $team;
			$data['uriving'] = $uriving;


			$this -> load -> view('mobile/all-trave',$data);
		}

}





?>