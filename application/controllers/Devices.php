<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User Management class created by CodexWorld
 */
class Devices extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user');
        $this->load->model('device');
        $this->load->model('sensor');
    }
    

   function index()
   {
        if($this->session->userdata('isUserLoggedIn')){
            $data['devices'] = array();
            $data['devices'] = $this->device->getRows( array( 'user_id' => $this->session->userdata('userId') ) );

            $this->load->view('header', $data);
            $this->load->view('devices', $data);
            $this->load->view('footer', $data);
        }else{
            redirect('users/login');
        }
   }

   function view($id)
   {
    
    $data['points'] =  $this->sensor->getRows(array('device_id' => array( $id ) ));
    $data['device'] = $this->device->getRows(array('id' => $id));

    $this->load->view('header', $data);
    $this->load->view('device', $data);
    $this->load->view('footer', $data);
   }

   function addDevice()
   {
    
    if($this->session->userdata('isUserLoggedIn')){
        $data = array();
            if($this->input->post('type'))
            {
                 $userData = array(
                'user_id' => $this->session->userdata('userId'),
                'name' => strip_tags($this->input->post('name')),
                'type' => strip_tags($this->input->post('type')),
                'lat' => strip_tags($this->input->post('lat')),
                'lng' => strip_tags($this->input->post('lng')),
                'area' => strip_tags($this->input->post('area')),
                'token' => strip_tags($this->input->post('token')),
            );
                 $this->device->insert($userData);
                redirect('devices');
            }
            else
            {
                $this->load->view('header', $data);
                $this->load->view('AddDevice', $data);
                $this->load->view('footer', $data);
            }

        }else{
            redirect('users/login');
        }

    
   }

   function addSensor()
   {
    
    if($this->session->userdata('isUserLoggedIn')){
        $data = array();
            if($this->input->post('type'))
            {
                 $userData = array(
                'user_id' => $this->session->userdata('userId'),
                'name' => strip_tags($this->input->post('name')),
                'type' => strip_tags($this->input->post('type')),
                'lat' => strip_tags($this->input->post('lat')),
                'lng' => strip_tags($this->input->post('lng')),
                'area' => strip_tags($this->input->post('area')),
                'token' => strip_tags($this->input->post('token')),
            );
                 $this->device->insert($userData);
                redirect('devices');
            }
            else
            {
                $this->load->view('header', $data);
                $this->load->view('addSensor', $data);
                $this->load->view('footer', $data);
            }

        }else{
            redirect('users/login');
        }

    
   }

}