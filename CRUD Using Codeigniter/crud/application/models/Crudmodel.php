<?php

class Crudmodel extends CI_Model{
    
    public function getrecords(){
        
        // we find this code in user_guide
        //Database class->active records->then as your wish
        
        $query = $this->db->get('customer_table');
        // here customer is the table name
        if($query->num_rows()>0){
            return $query->result();
            // jodi databse e data takhe tahole seta return hobe
        }
    }
    
    public function saverecords( $data ){
        // insert all the value in db
        return $this->db->insert('customer_table', $data); 
    }
    
    public function getAllrecords($record_id){
        // id onujaye sob value niye asbe
        $query = $this->db->get_where('customer_table', array('id' => $record_id));
        
        if($query->num_rows>0){
            return $query->row();
        }
    }
    
    
     public function updaterecords($record_id,$data){
         // id dore call kore sob data niye astechi and the table ta update kortechi
         return $this->db->where('id', $record_id)
           ->update('customer_table', $data); 
          
      }  
      
      public function deleterecords($record_id){
          
       return $this->db->delete('customer_table', array('id' => $record_id));
      }
    
    
}
