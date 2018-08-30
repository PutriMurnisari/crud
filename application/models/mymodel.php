<?php 
class Mymodel extends CI_Model{ 
      public function GetMahasiswa($table){ 
           $res=$this->db->get($table); 
            return $res->result_array();
      }
      
      public function Insert($table,$data){
           $res = $this->db->insert($table, $data);
           return $res; 
      }
      
      public function Update($table, $data, $where){ 
           $res = $this->db->update($table, $data, $where); 
             return $res;    
      }
      
      public function Delete($table, $where){ 
           $res = $this->db->delete($table, $where); 
           return $res; 
      }
      
      public function GetWhere($table, $where)
      {
          $res = $this->db->getwhere($table, $where);
          return $res->resullt_array();
      }
}
