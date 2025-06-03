<?php
require_once '../model/MaterialModel.php';

class MaterialController {
  private $model;

  public function __construct() {
    $this->model = new MaterialModel();
  }

  public function getAllMaterials() {
    return $this->model->getAll();
  }

  public function searchMaterials($query) {
    return $this->model->search($query);
  }

  public function getMaterialDetail($id) {
    return $this->model->getById($id);
  }

  public function uploadMaterial($judul, $deskripsi, $file) {
    $target = "../uploads/" . basename($file['name']);
    if (move_uploaded_file($file['tmp_name'], $target)) {
      return $this->model->upload($judul, $deskripsi, $file['name']);
    }
    return false;
  }
}
