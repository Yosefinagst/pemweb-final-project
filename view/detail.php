<?php
require_once '../controller/MaterialController.php';
$controller = new MaterialController();
$id = $_GET['id'];
$materi = $controller->getMaterialDetail($id);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Detail Materi</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-4">
  <h2 class="text-2xl font-bold"><?= $materi['judul'] ?></h2>
  <p class="mb-4"><?= $materi['deskripsi'] ?></p>
  <a href="../uploads/<?= $materi['file'] ?>" download class="bg-green-500 text-white px-4 py-2 rounded">Download</a>
</body>
</html>
