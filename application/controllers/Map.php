<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User Management class created by CodexWorld
 */
class Map extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('device');
    }
    
    function index($type = '', $id = '')
    {
        $data = array();
        //$data['devices'] = $this->device->getRows(array());
        if($type == 'user')
        {
            $data['type'] = 'user';
            $data['id'] = $this->session->userdata('userId');
        }

        //$this->load->view('header', $data);
        $this->load->view('map', $data);
        //$this->load->view('footer', $data);
    }
    
    function single($id = '')
    {
        $data = array();
        
        //$this->load->view('header', $data);
        $this->load->view('map', $data);
        //$this->load->view('footer', $data);
    }

    function api($type = '',$id = '')
    {
        if($id !='')
            if($type == 'user')
                $filter = array('user_id' => $id);
            else
                $filter=array('id' => $id);
        else
            $filter = array();

        $data['data'] = $this->device->getRows($filter);
        $this->load->view('api/api', $data);
    }
}