<?php
require_once '../config/config.php';

class MaterialModel {
  public function getAll() {
    global $conn;
    $result = $conn->query("SELECT * FROM materi ORDER BY id DESC");
    return $result->fetch_all(MYSQLI_ASSOC);
  }

  public function search($keyword) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM materi WHERE judul LIKE ?");
    $key = "%" . $keyword . "%";
    $stmt->bind_param("s", $key);
    $stmt->execute();
    return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
  }

  public function getById($id) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM materi WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
  }

  public function upload($judul, $deskripsi, $nama_file) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO materi (judul, deskripsi, file) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $judul, $deskripsi, $nama_file);
    return $stmt->execute();
  }
}
