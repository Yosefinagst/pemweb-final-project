<?php
require_once '../controller/MaterialController.php';
$controller = new MaterialController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $judul = $_POST['judul'];
  $deskripsi = $_POST['deskripsi'];
  $file = $_FILES['file'];

  if ($controller->uploadMaterial($judul, $deskripsi, $file)) {
    header("Location: materi_list.php");
  } else {
    echo "Gagal upload!";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Upload</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-4">
  <form action="" method="post" enctype="multipart/form-data" class="space-y-4">
    <input type="text" name="judul" placeholder="Nama file" class="w-full border p-2 rounded">
    <textarea name="deskripsi" placeholder="Deskripsi" class="w-full border p-2 rounded"></textarea>
    <input type="file" name="file" class="w-full">
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Upload file</button>
  </form>
</body>
</html>
