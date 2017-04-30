<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Device extends CI_Model{
    function __construct() {
        $this->userTbl = 'devices';
    }

    function getRows($params = array()){
        $this->db->select('*');
        $this->db->from($this->userTbl);
        

        if(array_key_exists('user_id', $params))
            $this->db->where('user_id',$params['user_id']);

        if(array_key_exists('token', $params))
        {
            $this->db->where('token',$params['token']);
            $query = $this->db->get();
            return $query->row_array();
        }

        if(array_key_exists('id', $params))
        {
            $this->db->where('id',$params['id']);
            $query = $this->db->get();
            return $query->row_array();
        }
        
        $query = $this->db->get();

        return $query->result_array();
    }

    public function insert($data = array()) {
        //insert user data to users table
        $insert = $this->db->insert($this->userTbl, $data);
        
        //return the status
        if($insert){
            return true;
        }else{
            return false;
        }
    }
}