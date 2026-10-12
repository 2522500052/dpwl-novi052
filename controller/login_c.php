<?php
class login_c extends controller
{
    public function index()
    {
        $this->load->view('login');
    }

public function ceklogin()
{
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $cekdata = $this->load->model('login_m');
    $datauser = $cekdata->ambildata($email);
    if ($datauser && password_verify($password, $datauser['password'])) {
    $this->session->set_userdata('emailuser', $email);
        echo '<script>alert("Login berhasil sebagai ' . $this->session->userdata('emailuser') . '");</script>';
    } else {
        echo '<script>alert("Gagal: Silahkan cek email, password, atau status akun Anda...");</script>';
    }
}
    
}