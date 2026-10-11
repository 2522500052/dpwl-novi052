<?php
class latihan1controller extends controller
{
    public function index()
    {
        $data['datamhs'] = $this->load->model('latihan1model')->getDataMhs();
        $this->session->set_userdata('nmuser', 'Noviana Siadari');
        $data['nama_user'] = $this->session->userdata('nmuser');
        $this->load->view('latihan1view', $data);
    }}
?>