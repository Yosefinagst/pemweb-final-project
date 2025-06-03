<?php
require_once '../controller/MaterialController.php';
$controller = new MaterialController();
$materials = $controller->getAllMaterials();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Materi</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-4">
  <h2 class="text-xl font-bold mb-4">Materi Terunggah</h2>
  <div class="grid grid-cols-2 gap-4">
    <?php foreach ($materials as $m): ?>
      <a href="detail.php?id=<?= $m['id'] ?>" class="bg-gray-200 p-2 rounded">
        <div class="font-bold"><?= $m['judul'] ?></div>
      </a>
    <?php endforeach; ?>
  </div>
</body>
</html>
