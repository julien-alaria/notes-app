<?php
require_once __DIR__ . '/../models/db.php';
require_once __DIR__ . '/../models/noteModel.php';

function indexNotes() {
    $notes = getNotes();
    include 'views/header.php';
    include 'views/notes.php';
    include 'views/footer.php';
}

function createNote() {
    include 'views/header.php';
    include 'views/form.php';
    include 'views/footer.php';
}

function storeNote() {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $title = trim($_POST['title']);
        $content = trim($_POST['content']);
        if ($title !== '') {
            addNote($title, $content);  // Fonction modèle qui insère en base
        }
    }
    header("Location: index.php?route=notes.index");
    exit;
}

function deleteNote() {
    if (isset($_GET['id'])) {
        deleteNoteById($_GET['id']);
    }
    header("Location: index.php?route=notes.index");
}

function searchNote() {
    if (isset($_GET['search'])) {
        $search = $_GET['search'];
        $notes = searchNotes($search);
    } else {
        $search = '';
        $notes = getNotes();
    }

    include 'views/header.php';
    include 'views/notesSearchResults.php';
    include 'views/footer.php';
}

