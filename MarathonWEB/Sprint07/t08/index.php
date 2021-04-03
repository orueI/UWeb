<h1>Show other sites</h1>
<form method="get">
    <input type="url" name="url">
    <input type="submit" value="go">
    <a href="./index.php">BACK</a>
</form>
<?php
if (isset($_GET['url'])) {
    echo 'url: ' . $_GET['url'].'<br>';
    echo '<pre>';
    $html = file_get_contents($_GET['url']);
    $start = strpos($html, '<body');
    $length = strrpos($html, '</body>') - $start;
    $html = substr($html, strpos($html, '<body'), strrpos($html, '</body>') - strpos($html, '<body'));
    $html = str_replace('<', '&lt', $html);
    $html = str_replace('>', '&gt', $html);
    echo $html;
    echo '</pre>';
} else {
    echo "<label>Type an URL...</label>";
}