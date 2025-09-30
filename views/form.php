<form method="POST" action="index.php">
  <input type="hidden" name="route" value="notes.store" />
  <input type="text" name="title" placeholder="Titre" required>
  <textarea id="content" name="content"></textarea>
  <button type="submit">Ajouter</button>
</form>

<p><a href="index.php?route=notes.index">← Retour à la liste</a></p>

