<form action="index.php" method="get" class="form2">
  <input type="hidden" name="route" value="notes.search">
  <input type="text" name="search" id="search" placeholder="Votre recherche..." >
  <button type="submit">Rechercher</button>
</form>


<div class="card-container">

<h2>Mes notes</h2>
<a href="index.php?route=notes.create">+ Ajouter une note</a>
<ul>
  <?php foreach ($notes as $note): ?>
    <div class="card">
      <div class="card-details">
        <li>
          <p class="card-title"><?= $note['title'] ?></p>

          <div class="card-description">
            <?= $note['content'] ?>
          </div>

          <div class="create-detail">
          <small><?= $note['created_at'] ?></small>
          </div>

          <a href="index.php?route=notes.delete&id=<?= $note['id'] ?>">Supprimer</a>
        </li>
      </div>
    </div>
  <?php endforeach; ?>
</ul>

</div>

