<?php 

class Employee_model extends CI_Model{
    public function __counstruct(){
        parent::__counstruct();
    }

    public function select_data($id){
        if(!empty($id)){
            $data = $this->db->get_where("Employee", ['e_id' => $id])->row_array();
        }else{
            $data = $this->db->get("Employee")->result();
        }
        return $data;
    }

    public function insert_data($input){
        $data = $this->db->insert('Employee',$input);
        if($data){
            return true;
        } else {
            return false;
        }
    }

    public function update_data($input,$id){
        $data = $this->db->update('Employee', $input, array('d_id'=>$id));

        if($data){
            return true;
        } else {
            return false;
        }
    }

    public function delete_data($id){
        $data = $this->db->delete('Employee', array('d_id'=>$id));
        if($data){
            return true;
        } else {
            return false;
        }
    }

    public function search_data($name){
        if(!empty($name)){
            $this->db->select('*');
            $this->db->from('Employee');
            $this->db->like('e_name',$name);
            $data = $this->db->get()->result();
        }else{
            $data = $this->db->get("Employee")->result();
        }
        $fp = fopen('/Users/rohitjadhav/Downloads/test.txt','a');
fwrite($fp,print_r($data,1)."\n");
        return $data;
    }
}

?>