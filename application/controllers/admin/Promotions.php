<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promotions extends CI_Controller
    {
        public function __construct ()
        {
            parent ::__construct();
            $this -> load -> model('admin/Promotions_model');
            $this -> load -> helper(array('form', 'url'));
        }
        
        public function promotions_add()
        {
            parse_str($_POST['str'], $arr);

            $data['promtitle'] = $arr['promtitle'];
            $data['price'] = $arr['price'];
            $data['worth'] = $arr['worth'];
            $data['discount'] = $arr['discount'];
            $data['save'] = $arr['save'];
            $data['booking'] = $arr['booking'];
            $data['during'] = $arr['during'];
            $data['thecar'] = $arr['thecar'];
            $data['vehicles'] = $arr['vehicles'];
            $data['day'] = $arr['day'];
            $data['terms'] = $arr['terms'];
            $data['city'] = $arr['city'];
            $data['image'] = $arr['image'];
            $data['cartime'] = $arr['cartime'];
            $data['text'] = $arr['text'];
            $data['time'] = date('Y-m-d H:i:s');
            if($arr['promtitle'] !== '' && $arr['image'] !==''){
                if($this->Promotions_model->add_promotions($data))
                {
                    echo 200;

                }else{

                    echo 300;

                }
            }else{
                echo 300;
            }

        }

        public function promotions_del()
        {
            $id = $_POST['id'];

            if ($this -> Promotions_model -> edit_category($id))
            {

                echo 200;
            }
            else
            {

                echo 404;
            }
        }

        public function promotions_status()
        {
            $data['id'] = $_POST['id'];
            $data['status'] = $_POST['status'];
            if($this->Promotions_model->update_status($data))
            {
                echo 200;

            }else{

                echo 404;
            }
        }

        public function promotions_edit()
        {
            parse_str($_POST['str'], $arr);

            $data['id'] = $arr['id'];
            $data['promtitle'] = $arr['promtitle'];
            $data['price'] = $arr['price'];
            $data['worth'] = $arr['worth'];
            $data['discount'] = $arr['discount'];
            $data['save'] = $arr['save'];
            $data['booking'] = $arr['booking'];
            $data['during'] = $arr['during'];
            $data['thecar'] = $arr['thecar'];
            $data['vehicles'] = $arr['vehicles'];
            $data['cartime'] = $arr['cartime'];
            $data['day'] = $arr['day'];
            $data['terms'] = $arr['terms'];
            $data['city'] = $arr['city'];
            $data['text'] = $arr['text'];
            $data['time'] = date('Y-m-d H:i:s');
            if(!empty($arr['image'])){
                $data['image'] = $arr['image'];
            }
            if($this->Promotions_model->update_edit($data))
            {
                echo 200;

            }else{

                echo 404;
            }
        }
        
    }