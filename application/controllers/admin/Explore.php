<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Explore extends CI_Controller
    {
        public function __construct ()
        {
            parent ::__construct();
            $this -> load -> model('admin/Explore_model');
            $this -> load -> helper(array('form', 'url'));
        }

        public function explore_add ()
        {
            parse_str($_POST['str'], $arr);
            $data['explore_id'] = $arr['id'];
            $data['motorcycle'] = $arr['motorcycle'];
            $data['friendly'] = $arr['friendly'];
            $data['customize'] = $arr['customize'];
            $data['routes'] = $arr['routes'];
            $data['eaglerider'] = $arr['eaglerider'];
            $data['support'] = $arr['support'];
            $data['spare'] = $arr['spare'];
            $data['professional'] = $arr['professional'];
            $data['bilingual'] = $arr['bilingual'];
            $data['experience'] = $arr['experience'];
            $data['breakfast'] = $arr['breakfast'];
            $data['gasolin'] = $arr['gasolin'];
            $data['banquet'] = $arr['banquet'];
            $data['farewell'] = $arr['farewell'];
            $data['time'] = date('Y-m-d H:i:s');
            if(!isset($arr['lang'])){
                $data['increase_name'] = $arr['increase_name'];
                $data['price'] = $arr['price'];
                $data['text'] = $arr['editorValue'];
            }else{
                $data['increase_name_en'] = $arr['increase_name'];
                $data['price_en'] = $arr['price'];
                $data['text_en'] = $arr['editorValue'];
            }


            if ($this -> Explore_model -> update_edit($data))
            {
                echo 200;

            }
            else
            {

                echo 404;
            }

        }

        public function explore_del()
        {
            $id = $_POST['id'];

            if ($this -> Explore_model -> edit_explore($id))
            {

                echo 200;
            }
            else
            {

                echo 404;
            }
        }

    }