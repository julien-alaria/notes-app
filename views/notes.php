<form action="index.php" method="get" class="form2">
  <input type="text" name="search" id="search" placeholder="Votre recherche..." >
  <button type="submit">Rechercher</button>
</form>

<div class="card-container">
  <?php foreach($notes as $index => $note): ?>
    <div class="card">
      <div class="card-details">
        <p class="card-title"><?= htmlspecialchars($note['title']) ?></p>

        <div class="card-description" id="rendered-<?= $index ?>"></div>

        <div class="create-detail">
          <small><?= $note['created_at'] ?></small>
        </div>
        

        <a href="index.php?delete=<?= $note['id'] ?>" class="card-delete">Supprimer</a>

      </div>
    </div>

    <script>
      const raw<?= $index ?> = <?= json_encode($note['content'] ?? "") ?>;
      const html<?= $index ?> = marked.parse(raw<?= $index ?>);
      document.getElementById("rendered-<?= $index?>").innerHTML = DOMPurify.sanitize(html<?= $index ?>);
    </script>
  <?php endforeach; ?>
</div>

