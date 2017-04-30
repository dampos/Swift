<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User Management class created by CodexWorld
 */
class Test extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('data');
    }
    
    /*
     * User account information
     */
    public function account(){
        $data = array();
        
        //$data['rows'] = $this->data->getSum(array('device_id'=>array(1), 'from'=> 123, 'to'=>128 ));
        $data['rows'] = $this->data->getRows(array( 'from'=> 123, 'to'=>128 ));
        //load the view
        $this->load->view('test', $data);
    }
}