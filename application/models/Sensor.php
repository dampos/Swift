<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Sensor extends CI_Model{
    function __construct() {
        $this->userTbl = 'data';
    }

    function _defineRange($params)
    {
        if(array_key_exists('from', $params) && array_key_exists('to', $params))
        {
            $this->db->where('time_from >=',$params['from'])->where('time_to <=', $params['to']);
        }
    }
    function getRows($params = array()){
        $this->db->select('*');
        $this->db->from($this->userTbl);
        
        //fetch data by conditions
        if(array_key_exists("device_id",$params)){
            foreach ($params['device_id'] as $device_id) {
                $this->db->where('device_id',$device_id);
            }
        }
        
        $this->_defineRange($params);
        $query = $this->db->get();

        return $query->result_array();
    }

    function getSum($params = array())
    {
        $this->db->select_sum('value');
        $this->db->from($this->userTbl);

        if(array_key_exists("device_id",$params)){
            foreach ($params['device_id'] as $device_id) {
                $this->db->where('device_id',$device_id);
            }
        }

        $this->_defineRange($params);
        $query = $this->db->get();
        return $query->row()->value;

    }

    public function insert($data = array()) {
        //insert user data to users table
        $insert = $this->db->insert($this->userTbl, $data);
        
        //return the status
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
}