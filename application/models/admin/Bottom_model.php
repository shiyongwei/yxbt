<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//用户模型
class Bottom_model extends CI_Model{

        const TBL_NAME = 'bottom';
        //添加
        public function add_name ($data)
        {
            return $this -> db -> insert(self::TBL_NAME, $data);
        }

        //删除
        public function del_name ($data)
        {

            return $this -> db -> delete(self::TBL_NAME, $data);

        }
    //修改
        public function edit_name ($data)
        {

            $this -> db -> set($data);

            $this -> db -> where('bottom_id', $data['bottom_id']);

            return $this -> db -> update(self::TBL_NAME);
        }

        //查询全部
        public function get_name ($data)
        {

            if ($data == '')
            {
                $query = $this -> db -> get(self::TBL_NAME);

                return $query -> result_array();
            }
            else
            {
                $query = $this -> db -> where($data) -> get(self::TBL_NAME);

                return $query -> row_array();
            }

        }


}