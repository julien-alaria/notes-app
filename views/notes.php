<ul>
  <?php foreach ($notes as $note): ?>
    <li>
      <strong><?= htmlspecialchars($note['title']) ?></strong>
      <div class="note-content" data-md='<?= json_encode($note['content']) ?>'></div>
      <small><?= $note['created_at'] ?></small>
      <a href="index.php?delete=<?= $note['id'] ?>">❌ Supprimer</a>
    </li>
  <?php endforeach; ?>
</ul>

<!-- Markdown rendering scripts -->
<script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/dompurify@3.x/dist/purify.min.js"></script>
<script>
  document.querySelectorAll('.note-content').forEach(div => {
    const raw = JSON.parse(div.getAttribute('data-md'));
    const html = marked.parse(raw);
    div.innerHTML = DOMPurify.sanitize(html);
  });
</script>
