<ul>
  <?php foreach ($notes as $note): ?>
    <li>
      <strong><?= htmlspecialchars($note['title']) ?></strong>
      <p>
      <div id="rendered"></div>
      <script>
        // `contentFromDB` = variable PHP échappée en JSON
        const raw = <?= json_encode($note['content'] ?? "") ?>;
        const html = marked.parse(raw);
        document.getElementById('rendered').innerHTML = DOMPurify.sanitize(html);
      </script>
      </p>
      <small><?= $note['created_at'] ?></small>
      <a href="index.php?delete=<?= $note['id'] ?>">❌ Supprimer</a>
    </li>
  <?php endforeach; ?>
</ul>

<!-- Markdown rendering scripts -->

