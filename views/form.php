<div class="form-add">
  <form method="POST" action="index.php">
    <input type="hidden" name="route" value="notes.store" />
    <input type="text" name="title" placeholder="Titre" required>
    <textarea id="content" name="content"></textarea>
    <button type="submit">Ajouter</button>
  </form>

  <button class="link"><a href="index.php?route=notes.index">Retour à la liste</a></button>

  <script>
    const mde = new SimpleMDE({
      element: document.getElementById("content"),
      placeholder: "Écrivez votre note en Markdown…",
      spellChecker: false,
      status: false, 
      autosave: { enabled: true, uniqueId: "notes-app-content", delay: 1000 },
      toolbar: ["bold","italic","heading","|","quote","unordered-list","ordered-list","|","link","preview","guide"]
    });
  </script>
</div>
