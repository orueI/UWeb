<h1>File</h1>
<form method="get">
    File name: <input type="text" name="fileName"> Content: <textarea name="content"></textarea>
    <input type="submit" value="Create file">
</form>
<?php
require_once("File.php");
require_once("FilesList.php");
//echo is_dir(getcwd().'\testDir');
if (isset($_GET['var'])) {
    echo $_GET['var'];
}
if (isset($_GET['fileName'])) {
    showPath(getcwd() . '\\' . $_GET['fileName']);
}
if ($_POST) {
    $fileForRemove = new File($_POST['remove']);
    $fileForRemove->remove();
}

function showPath($path)
{
//    echo "showPath = " . $path;
    if (is_dir($path)) {
//        echo "It's dir" . $path;
        showListFile($path);
    } else {
        if (!empty($_GET['content'])) {
            $file = new File($path);
            $file->writeToFile($_GET['content']);
        }
        if (is_file($path)) {
            showFile($path);
        }
    }
}

function showListFile($path)
{
    echo '<h1>List of file</h1>';
    echo 'Path selected is ' . $path . '<br>';
    $classListFile = new FilesList($path);
    $listFile = $classListFile->getArrayFiles();
    foreach ($listFile as $file) {
        echo createLink($file), '<br>';
    }
}

function showFile($path)
{
    $file = new File($path);
    echo '<h1>Select file' . $path . '</h1>';
    echo '<form method="post"> Select file<input name="remove" value="' . $path . '"><input type="submit" value="Delete"></form>';
    echo implode('<br>', $file->read());
}

function createLink($fileName)
{
    return '<a href="./index.php?fileName=' . $fileName . '">' . $fileName . '</a>';
}