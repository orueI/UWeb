<h1>Notepad mini</h1>
<form method="post">
    <input name="name" type="text" placeholder="Name"><br>
    <select name="importance">
        <option>low</option>
        <option>medium</option>
        <option>high</option>
    </select><br>
    <textarea name="text" placeholder="Text of nate ..."></textarea><br>
    <input type="submit" value="Create"><br>
</form>
<?php
require_once("Note.php");
session_start();
if ($_POST) {
    $arrayNotes = array();
    if (!empty($_SESSION["arrayNotes"]))
        $arrayNotes = $_SESSION["arrayNotes"];
    $note = new Note(
        date('l jS \of F Y h:i:s A'),
        $_POST['name'],
        $_POST['importance'],
        $_POST['text']);
    $arrayNotes[count($arrayNotes)] = $note;
    $_SESSION["arrayNotes"] = $arrayNotes;
}
if (isset($_GET['del'])) {
    if (empty($_SESSION["arrayNotes"]))
        return;
    $arrayNotes = $_SESSION["arrayNotes"];
    $arrayNotes[$_GET['del']] = null;
    $_SESSION["arrayNotes"] = $arrayNotes;
}

if (!empty($_SESSION["arrayNotes"])) showListNote();
if (isset($_GET['note'])) {
    showNote($_GET['note']);
}

function showListNote()
{
    echo '<h1>List of notes</h1><br>';
    $arrayNotes = $_SESSION["arrayNotes"];
    $i = 0;
    foreach ($arrayNotes as $note) {
        if ($note!=null)
            echo createLink($note, $i);
        $i++;
    }
}

function createLink($note, $i)
{
    return '<a href="./index.php?note=' . $i . '">' . $note->getPreview() . '</a><a href="./index.php?del=' . $i . '"> DELETE</a><br>';
}

function showNote($i)
{
    if (empty($_SESSION["arrayNotes"])) return;
    $note = $_SESSION["arrayNotes"][$i];
    echo '<h2>Detail of "' . $note->getName() . '"</h2>
<ul> date:<b>' . $note->getData() . '</b></ul>' .
        '<ul> name:<b>' . $note->getName() . '</b></ul>' .
        '<ul> importance:<b>' . $note->getImportance() . '</b></ul>' .
        '<ul> text:<b>' . $note->getText() . '</b></ul>' .
        '</ul>';
}