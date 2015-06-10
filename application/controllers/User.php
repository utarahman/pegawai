<?php
class User extends CI_Controller {

	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'User_model' );
	}

	public function index() {
		$data['main'] = 'user/dashboard';
		$this->load->view ( 'user/layout', $data );
	}
	
	public function user_list(){
		$data['main'] = 'user/list';
		$data ['user'] = $this->User_model->get();
		$this->load->view ('user/layout',$data);
	}
	
	public function user_add($id = NULL) {
		$data['main'] = 'user/add';
		$this->load->library ( 'form_validation' );
		$this->form_validation->set_rules ( 'user_name', 'Nama', 'required' );
		$this->form_validation->set_rules ( 'user_full_name', 'Nama Panjang', 'required' );
		$this->form_validation->set_rules ( 'user_password', 'Password', 'required' );
		$this->form_validation->set_error_delimiters ( '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>' );
	
		if ($_POST and $this->form_validation->run () == TRUE) {
				
			// Ini posisi edit
			if ($this->input->post ( 'user_id' )) {
				$params ['user_id'] = $this->input->post ( 'user_id' );
			// Ini posisi tambah
			} else {
				$params ['user_date_created'] = date ( 'Y-m-d H:i:s' );
			}
				
			$params ['user_last_update'] = date ( 'Y-m-d H:i:s' );
			$params ['user_name'] = $this->input->post ( 'user_name' );
			$params ['user_full_name'] = $this->input->post ( 'user_full_name' );
			$params ['user_password'] = $this->input->post ( 'user_password' );
			$params ['user_address'] = $this->input->post ( 'user_address' );
			$params ['category_id'] = $this->input->post ( 'category_id' );
			$status = $this->User_model->add ( $params );
			redirect ( 'user/user_list' );
		} else {
			$data ['category'] = $this->User_model->category_get();			
			// Edit mode
			if (! is_null ( $id )) {
				$data ['user'] = $this->User_model->get ( array ('id' => $id ) );
				$this->load->view ( 'user/user_list' );
			} else {
				$this->load->view ( 'user/layout', $data );
			}
		}
	}
	
	public function list_category(){
		$data ['category'] = $this->User_model->category_get();
		$data['main'] = 'user/list_category';
		$this->load->view ('user/layout',$data);
	}
	
	public function category_add($id = NULL) {
		
		$this->load->library ( 'form_validation' );
		$this->form_validation->set_rules ( 'category_name', 'Nama Kategory', 'required' );
		$this->form_validation->set_error_delimiters ( '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>' );
	
		if ($_POST and $this->form_validation->run () == TRUE) {
	
			// Ini posisi edit
			if ($this->input->post ( 'category_id' )) {
				$params ['category_id'] = $this->input->post ( 'category_id' );
			// Ini posisi tambah
			} else {
				$params ['category_name'] = $this->input->post ( 'category_name' );
			}
	
			$params ['category_name'] = $this->input->post ( 'category_name' );
			$status = $this->User_model->category_add ( $params );
			redirect ( 'user/list_category' );
		} else {
			$data['main'] = 'user/add_category';
			// Edit mode
			if (! is_null ( $id )) {
				$data ['category'] = $this->User_model->get ( array ('id' => $id ) );
				$this->load->view ( 'user/list_category' );
			} else {
				$this->load->view ( 'user/layout', $data );
			}
		}
	}
	
	public function delete($id = NULL) {
		$this->User_model->delete ( $id );
		redirect ( 'user/user_list' );
	}
}
?>	