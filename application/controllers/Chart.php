<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User Management class created by CodexWorld
 */
class Chart extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('sensor');
        $this->load->model('device');
    }
    
    function index()
    {
        $points = $this->sensor->getRows(array('device_id' => array(1) ));
        $data['points'] =$points;
        $this->load->view('chart', $data);
        
    }

    function api()
    {
        $points = $this->sensor->getRows(array('device_id' => array(1) ));
        $data['points'] =$points;
        $this->load->view('api/chart', $data);
    }
    
}