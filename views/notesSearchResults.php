<?php $search = $search ?? ''; ?>

<h2>Résultats de la recherche pour : "<?php echo htmlspecialchars($search); ?>"</h2>

<p>
    <a href="index.php?route=notes.index">← Retour à la liste complète</a>
</p>


<?php if (empty($notes)) : ?>
    <p>Aucune note trouvée.</p>
<?php else : ?>
    <ul>
    <?php foreach ($notes as $note): ?>
        <li>
            <strong><?php echo htmlspecialchars($note['title']); ?></strong><br>
            <?php echo nl2br(htmlspecialchars($note['content'])); ?><br>
            <small>Créée le <?php echo $note['created_at']; ?></small>
        </li>
    <?php endforeach; ?>
    </ul>
<?php endif; ?>
