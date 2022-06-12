<?php 

class Department_model extends CI_Model{
    public function __counstruct(){
        parent::__counstruct();
    }

    public function select_data($id){
        if(!empty($id)){
            $data = $this->db->get_where("Departments", ['d_id' => $id])->row_array();
        }else{
            $data = $this->db->get("Departments")->result();
        }
        return $data;
    }

    public function insert_data($input){
        $data = $this->db->insert('Departments',$input);
        if($data){
            return true;
        } else {
            return false;
        }
    }

    public function update_data($input,$id){
        $data = $this->db->update('Departments', $input, array('d_id'=>$id));

        if($data){
            return true;
        } else {
            return false;
        }
    }

    public function delete_data($id){
        $data = $this->db->delete('Departments', array('d_id'=>$id));
        if($data){
            return true;
        } else {
            return false;
        }
    }
}

?>