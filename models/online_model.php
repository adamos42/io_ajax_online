<?php

class online_model extends CI_Model {

   public function __construct() {
      parent::__construct();
   }
   
   public function getVisitorDatas() {
      
      $visitor = array(
         'session_id' => session_id(),
         'ip_address' => $_SERVER['REMOTE_ADDR'],
         'user_agent' => $_SERVER['HTTP_USER_AGENT']
      );
      
      return $visitor;
   
   }
   
   public function saveVisit($data) {
   
      $this->db->insert("module_online", $data);
      
      return ($this->db->affected_rows() != 1) ? false : true;
   }
   
   public function getLattestVisits() {
   
      $this->db->query("DELETE FROM module_online WHERE datetime > (NOW() - INTERVAL 10 MINUTE)");
      
      $this->db->select("
         datetime,
         session_id,
         ip_address,
         COUNT(*) AS visits      
      
      ")->from("module_online");
      $this->db->where("datetime <", "(NOW() - INTERVAL 5 MINUTE)");
      $this->db->group_by('session_id');
   
      return $this->db->get();
   }

}
