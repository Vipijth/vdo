<?php 

class Main_model extends CI_model{


public function login_val($username,$password ){

$this->db->where('username',$username);
$this->db->where('password',$password);
$query=$this->db->get('admin'); 
if($query->num_rows()>0){
    return true;

}
else{
return false;
}

}
public function get_admin($username,$password ){

    $this->db->where('username',$username);
    $this->db->where('password',$password);
    $query=$this->db->get('admin'); 

        return $query->result();
      
    
    }


    public function create_class($data ){

        $query = $this->db->insert('classes', $data);
        return $query;
        }

        public function create_subject($data ){

            $query = $this->db->insert('subject', $data);
            return $query;
            }

            public function create_video($datas ){

                $query = $this->db->insert('video_info', $datas);
                return $query;
                }
            public function get_class( ){

        
                $query=$this->db->get('classes'); 
            
                    return $query;
                  
                
                }

                public function get_data( ){
           
        
                    $query=$this->db->get('video_info'); 
                    $num = $query->num_rows();
                        return $num;
                      
                    
                    }
                
            public function get_subject( ){

        
                $query=$this->db->get('subject'); 
            
                    return $query;
                  
                
                }

                public function get_video( ){

        
                    $query=$this->db->get('video_info'); 
                
                        return $query;
                      
                    
                    }

                    public function delete_video($id){
                        $this -> db -> where('id', $id);
                        $this -> db -> delete('video_info');
        
                    }
        
}

?>