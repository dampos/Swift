<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Devices extends CI_Model{
    function __construct() {
        $this->userTbl = 'alerts';
    }

    function getRows($params = array()){
        $this->db->select('*');
        $this->db->from($this->userTbl);
        

        if(array_key_exists('user_id', $params))
            $this->db->where('user_id',$params['user_id']);
        if(array_key_exists('device_id', $params))
            $this->db->where('device_id',$params['device_id']);
        
        $query = $this->db->get();
        return $query->result_array();
    }

    public function insert($data = array()) {
        //insert user data to users table
        $insert = $this->db->insert($this->userTbl, $data);
        
        //return the status
        if($insert){
            return $this->db->insert_id();;
        }else{
            return false;
        }
    }
}