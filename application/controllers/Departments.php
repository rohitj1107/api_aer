<?php 
require APPPATH . 'libraries/REST_Controller.php';

class Departments extends REST_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('Department_model');
    }

    // Get data
    public function index_get($id = 0){
        $data = $this->Department_model->select_data($id);
        $this->response($data, REST_Controller::HTTP_OK);
    }

    // insert data
    public function index_post()
    {
        $input = $this->input->post();
        $data = $this->Department_model->insert_data($input);
        if($data){
            $this->response(['Departments created successfully.'], REST_Controller::HTTP_CREATED);
        } else {
            $this->response(['Not created.'], REST_Controller::HTTP_NO_CONTENT);
        }
        
    }

    // update data
    public function index_put($id)
    {
        $input = $this->put();
        $data = $this->Department_model->update_data($input,$id);
        if($data){
            $this->response(['Departments updated successfully.'], REST_Controller::HTTP_CREATED);
        } else {
            $this->response(['Not created.'], REST_Controller::HTTP_NO_CONTENT);
        }
    }

    // delete data
    public function index_delete($id)
    {
        $data = $this->Department_model->delete_data($id);
        if($data){
            $this->response(['Departments Delete successfully.'], REST_Controller::HTTP_CREATED);
        } else {
            $this->response(['Not created.'], REST_Controller::HTTP_NO_CONTENT);
        }
    }
}

?>