<form action="index.php" method="get">
  <label for="search">Recherche :</label>
  <input type="text" name="search" id="search">
  <input type="submit" value="Rechercher">
</form>

<ul>
  <?php foreach ($notes as $index => $note): ?>
    <li>
      <strong><?= htmlspecialchars($note['title']) ?></strong>
      <div id="rendered-<?= $index ?>"></div>
      <small><?= $note['created_at'] ?></small>
      <a href="index.php?delete=<?= $note['id'] ?>">❌ Supprimer</a>

      <script>
        const raw<?= $index ?> = <?= json_encode($note['content'] ?? "") ?>;
        const html<?= $index ?> = marked.parse(raw<?= $index ?>);
        document.getElementById("rendered-<?= $index ?>").innerHTML = DOMPurify.sanitize(html<?= $index ?>);
      </script>
    </li>
  <?php endforeach; ?>
</ul>


