<?php
require_once '../controller/MaterialController.php';
$controller = new MaterialController();
$materials = $controller->getAllMaterials();
?>
<!-- Tailwind & Tampilan -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-4">
  <div class="flex justify-between items-center mb-4">
    <a href="upload.php" class="bg-blue-500 text-white px-4 py-2 rounded">Upload</a>
    <form action="search.php" method="get" class="flex">
      <input type="text" name="query" placeholder="Cari materi" class="border rounded-l px-2">
      <button class="bg-gray-300 px-3 rounded-r">🔍</button>
    </form>
  </div>

  <div class="grid grid-cols-2 gap-4">
    <?php foreach ($materials as $m): ?>
      <a href="detail.php?id=<?= $m['id'] ?>" class="bg-gray-200 p-2 rounded">
        <div class="font-bold"><?= $m['judul'] ?></div>
        <div class="text-sm"><?= $m['deskripsi'] ?></div>
      </a>
    <?php endforeach; ?>
  </div>
</body>
</html>
