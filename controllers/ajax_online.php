<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Ajax_online extends My_Controller
{
    public function __construct() {
        parent::__construct();
        
        $this->load->model("online_model");
    }
 
    function index() {
    
        exit('bad ajax request');
       
    }
    
    function get() {
        
        $query = $this->online_model->getLattestVisits();
    
        return $query->num_rows();
    
    }
    
    function visit() {
    
        $json = array('success' => 'false');
    
        $data = $this->online_model->getVisitorDatas();
        
        if($this->online_model->saveVisit($data)) {
            
            $json = array(
               'success' => 'true',
               'session_id' => session_id(),
               'visits' => $this->get()
            );
            
        }
        
        echo json_encode($json);
    
    }
}

/* End of file: ajax_online.php */
/* Location: ./modules/Ajax_online/controllers/ajax_online.php */
