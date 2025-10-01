<?php $search = $search ?? ''; ?>

<div class="result-container">
    <div class="result-title">
        <h2>Résultats de la recherche pour : "<?php echo htmlspecialchars($search); ?>"</h2>
    </div>

    <div class="search-result">
        <?php if (empty($notes)) : ?>
        <p>Aucune note trouvée.</p>
        <?php else : ?>
            <ul>
                <?php foreach ($notes as $note) : ?>
                    <li>
                        <strong><?= htmlspecialchars($note['title']); ?></strong>
                        <?= nl2br(htmlspecialchars($note['content'])); ?><br>
                        <small>Créée le <?= $note['created_at']; ?></small>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>

    <button class="link"><a href="index.php?route=notes.index">Retour à la liste complète</a></button>
</div>

