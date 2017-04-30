<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User Management class created by CodexWorld
 */
class Data extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('sensor');
        $this->load->model('device');
    }
    
    function input()
    {
        $device = $this->device->getRows(array('token' => strip_tags($this->input->post('token'))));

        if($device['id'])
        {
            $data = array(
                'device_id' => $device['id'],
                'value' => strip_tags($this->input->post('value')),
                'time_from'  => strip_tags($this->input->post('time_from')),
                'time_to'  => strip_tags($this->input->post('time_to'))
            );
            $insert = $this->sensor->insert($data);
        }
        $view = array('device' => $device,'insert'=>$insert );
        $this->load->view('api/data', $view);
        
    }
    
}