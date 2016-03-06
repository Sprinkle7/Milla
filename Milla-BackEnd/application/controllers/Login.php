<?php
/**

	User Authentication Controller
*/

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	public function index($id=NULL)
	{
		$Data['Message'] = $this->messages($id);
		$this->load->view('login',$Data);
	}
	public function UserLogin()
	{
		if ($this->input->post('Login')) {
			$Username  = $this->input->post('username');
			$Password  = $this->input->post('password');
			// $rnd  = hash('sha256',$Password);
			$where     = array(
					      'username' => $Username,
					      'password' => $Password,
				    	 );
			if (!empty($Username) && !empty($Password)){ 
				$query = $this->Milla_model->DBSelect('admin',$where);
				if($query){
						$sessiondata =  array(
						'username'   => $query->username,
						'userid'  	 => $query->userid,
						'logged_in'  => TRUE 
						);
						$this->session->set_userdata($sessiondata);
						redirect(base_url().'Milla/index');
					}
				else{					
						$this->index('1');
					}	
				}
			else{
				$this->index('2');
			}
		}
	}
	public function log_out()
	{
		$id   = $this->session->userdata('id');
		$id   = NULL;
		$this->session->sess_destroy();
		$this->index('3');
	}
	public function messages($id)
	{
		if (!empty($id)) {
			switch ($id) {
				case '1':
				return	'<div class="alert alert-danger alert-dismissible" role="alert">
                         	   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        	   Username OR Password Is Incorrect
                         </div>';
					break;
				case '2':
					return '<div class="alert alert-danger alert-dismissible" role="alert">
                             	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                             	Please Fill The Fields
							</div>';
					break;
				case '3':
					return '<div class="alert alert-success alert-dismissible" role="alert">
                             	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                             	Logout Successfully
							</div>';
					break;
				default:
					echo "Unknown Error";
					break;
			}
		}
	}
	/* Messages Ends Here */
}
?>