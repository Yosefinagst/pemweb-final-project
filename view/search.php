<?php
require_once '../controller/MaterialController.php';
$controller = new MaterialController();
$query = $_GET['query'] ?? '';
$results = $controller->searchMaterials($query);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Search Matery</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-4">
  <form method="get" class="mb-4 flex">
    <input type="text" name="query" value="<?= htmlspecialchars($query) ?>" class="border rounded-l px-2">
    <button class="bg-gray-300 px-3 rounded-r">🔍</button>
  </form>

  <div class="grid grid-cols-2 gap-4">
    <?php foreach ($results as $r): ?>
      <a href="detail.php?id=<?= $r['id'] ?>" class="bg-gray-200 p-2 rounded">
        <div class="font-bold"><?= $r['judul'] ?></div>
      </a>
    <?php endforeach; ?>
  </div>
</body>
</html>
