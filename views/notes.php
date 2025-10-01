<form action="index.php" method="get" class="form2">
  <input type="hidden" name="route" value="notes.search">
  <input type="text" name="search" id="search" placeholder="Votre recherche..." >
  <button type="submit">Rechercher</button>
</form>


<div class="h2">
    <h2>Mes notes</h2>
</div>

<button class="link"><a href="index.php?route=notes.create">Ajouter une note</a></button>

<div class="card-container">
    <div class="card-media">
        <?php foreach ($notes as $note): ?>
            <div class="card">
                <div class="card-details">
                    <p class="card-title"><?= htmlspecialchars($note['title']) ?></p>

                    <p>
                        <div class="rendered" data-md="<?= htmlspecialchars($note['content'], ENT_QUOTES) ?>"></div>
                    </p>

                    <div class="create-detail">
                        <small><?= htmlspecialchars($note['created_at']) ?></small>
                    </div>

                    <button class="card-delete">
                        <a href="index.php?route=notes.delete&id=<?= ($note['id']) ?>">Supprimer</a>
                    </button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

</div>

<script>
document.querySelectorAll('.rendered').forEach(el => {
    const raw = el.dataset.md; // récupère le contenu Markdown
    const html = marked.parse(raw); // convertit en HTML
    el.innerHTML = DOMPurify.sanitize(html); // sécurise le HTML
});
</script>