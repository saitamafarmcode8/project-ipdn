<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Users_model", "users");
	}

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username Key Entry', 'trim|required');
		$this->form_validation->set_rules('password', 'Password Access', 'trim|required|min_length[4]|max_length[8]', [
			'min_length' => "Password terlalu pendek",
			'max_length' => "Password terlalu panjang"
		]);
		if($this->form_validation->run() == false){
			$data['title'] = 'Halaman Login -ipdn - NTB-';
			$this->template->load('templates/auth/paper', 'auth/login', $data);
		}else{
			$this->_beritaauthenticate();
		}
	}
	
	private function _beritaauthenticate()
	{
		$uname = htmlspecialchars($this->input->post('username'));
		$passw = htmlspecialchars($this->input->post('password'));

		$users = $this->db->get_where("tbusers", ['username' => $uname])->row_array();
		?>
		<style>
            body {
                font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
                font-size: 1.124em;
                font-weight: normal;
            }
        </style>
		<link rel="icon" type="image/x-icon" href="<?= base_url(); ?>embed/profile/lambang_ipdn.png"/>
        <script src="<?= base_url() ?>bundle/sweetalert/sweetalert.min.js"></script>
		<?php
		if($users){
			if($users['is_active']==1){
				if(password_verify($passw, $users['password'])){
					$data = [
						'id' => $users['id'],
                        'username' => $users['username'],
                        'password' => $users['password'],
                        'role_id' => $users['role_id'],
                        'nm_lengkap' => $users['nm_lengkap'],
                        'is_active' => $users['is_active'],
                    ];
					$this->session->set_userdata($data);
					if($users['role_id']==1)
					{
						$this->users->insertvisitors($data);
						?><body>
							<script type="text/javascript">
								swal('Welc.', 'Selemat datang di halaman panel.', 'success').then((result) => {
									window.location = "<?= site_url('news_dashboard_panel_system_xml'); ?>";
								});
							</script>
						</body><?php
					}elseif($users['role_id']==2){
						$this->users->insertvisitors($data);
						?><body>
							<script type="text/javascript">
								swal('Welc.', 'Selemat datang di halaman panel.', 'success').then((result) => {
									window.location = "<?= site_url('news_home_panel_xml'); ?>";
								});
							</script>
						</body><?php
					}else{
						?><body>
							<script type="text/javascript">
								swal('Warning.', 'Halaman Masih dalam perbaikan.', 'error').then((result) => {
									window.location = "<?= site_url('pageerror/maintenance'); ?>";
								});
							</script>
						</body><?php
					}
				}else{
					?><body>
						<script type="text/javascript">
							swal('Wrong Password.', 'Sepertinya password kamu salah. silahkan input dengan benar.', 'error').then((result) => {
								window.location = "<?= site_url('auth'); ?>";
							});
						</script>
					</body><?php
				}
			}else{
				?><body>
					<script type="text/javascript">
						swal('Not Active.', 'Akun tersebut belum aktif.', 'error').then((result) => {
							window.location = "<?= site_url('auth'); ?>";
						});
					</script>
				</body><?php
			}
		}else{
			?><body>
			<script type="text/javascript">
				swal('Not Found.', 'Akun tersebut tidak tersedia.', 'error').then((result) => {
					window.location = "<?= site_url('auth'); ?>";
				});
			</script>
		</body><?php
		}
	}

	public function logout()
	{
		// $users = $this->db->get_where('tbusers', ['username' => $this->session->userdata('username')])->row_array();
		// $this->auth->getLogout($users);
		$this->session->unset_userdata('username');
        $this->session->unset_userdata('password');
        $this->session->unset_userdata('role_id');
        $this->session->unset_userdata('nm_lengkap');
        $this->session->unset_userdata('is_active');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body"><button class="close" data-dismiss="alert"><span>×</span></button>Selamat! Terimaksih berkunjung berhasil logout.</div></div>');
        redirect('/');
	}
}
