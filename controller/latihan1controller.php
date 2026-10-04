<?php
class latihan1controller extends controller
{
    public function index()
    {
        $data['datamhs'] = $this->load->model('latihan1model')->getDataMhs();
        $this->load->view('latihan1view', $data);
    }}
?>