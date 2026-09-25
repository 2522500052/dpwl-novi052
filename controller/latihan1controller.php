<?php
require_once 'model/latihan1model.php';
class latihan1controller{
    public function index()
    {
        $model = new latihan1model();
        $data = $model->getDataMhs();
        include 'view/latihan1view.php';}
}
?>