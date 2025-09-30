<hr>
<div class="footer">
  <p><small>Application codée avec ❤️</small></p>
</div>


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
</body>
</html>