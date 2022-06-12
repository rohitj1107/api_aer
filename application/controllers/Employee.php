<?php 
require APPPATH . 'libraries/REST_Controller.php';

class Employee extends REST_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('Employee_model');
    }

    // Get data
    public function index_get($id = 0){
        $data = $this->Employee_model->select_data($id);       
        $this->response($data, REST_Controller::HTTP_OK);
    }

    // insert data
    public function index_post()
    {
        $input = $this->input->post();
        $data = $this->Employee_model->insert_data($input);
        if($data){
            $this->response(['Employee created successfully.'], REST_Controller::HTTP_CREATED);
        } else {
            $this->response(['Not created.'], REST_Controller::HTTP_NO_CONTENT);
        }
    }

    // update data
    public function index_put($id)
    {
      $input = $this->put();
      $data = $this->Employee_model->update_data($input,$id);
      if($data){
          $this->response(['Employee updated successfully.'], REST_Controller::HTTP_CREATED);
      } else {
          $this->response(['Not Update.'], REST_Controller::HTTP_NO_CONTENT);
      }
    }

    // delete data
    public function index_delete($id)
    {
        $data = $this->Employee_model->delete_data($id);
        if($data){
            $this->response(['Employee Delete successfully.'], REST_Controller::HTTP_CREATED);
        } else {
            $this->response(['Not Deleted.'], REST_Controller::HTTP_NO_CONTENT);
        }    
    }

    public function semployee_get(){
        $name = $this->get('e_name');
        $data = $this->Employee_model->search_data($name);
        if($data){
            $this->response($data, REST_Controller::HTTP_OK);
        } else {
            $this->response(['Not Deleted.'], REST_Controller::HTTP_NO_CONTENT);
        }
    }
}

?>