<h1>Parsing CSV data</h1>
<form method="get">
    Upload file: <input name="file" type="file">
    <input type="submit" value="Upload">
</form>

<?php
$sortId = 0;
if (isset($_POST['column'])) {
    $column = $_POST['column'];
    $head = file($_GET['file'])[0];
    $id = 0;
    for ($i = 0; $i < count(str_getcsv($head)); $i++) {
        if (str_getcsv($head)[$i] == $column) {
            $id = $i;
            break;
        }
    }

    $GLOBALS['sortId'] = $id;
    checkFile();
}
if (isset($_GET['file'])) checkFile();
function checkFile()
{
    if (isset($_GET['file'])) {
        $arr = csvToArray(file($_GET['file']));
        $arr = file($_GET['file']);
//    $arr = csvToArray($arr);
        unset($arr[0]);
        echo uasort($arr, 'cmp') . '<br>';
        showTableCSV(file($_GET['file'])[0], $arr);
    }
}

function cmp($a, $b)
{
    $arrA = str_getcsv($a);
    $arrB = str_getcsv($b);
    return ($arrA[$GLOBALS['sortId']] < $arrB[$GLOBALS['sortId']]) ? -1 : 1;
}

function csvToArray($csv)
{
    $arr = array();
    foreach ($csv as $line) {
        $arr[count($arr)] = str_getcsv($line);
    }
    return $arr;
}

function showTableCSV($head, $arr)
{
    $arrHead = str_getcsv($head);
    showSelector($arrHead);
    echo '<table><thead><tr>';
    foreach ($arrHead as $tname)
        echo createTh($tname);
    echo '</tr></thead>';

    foreach ($arr as $tr) {
        $tmp = str_getcsv($tr);
        foreach ($tmp as $th) {
            echo createTh($th);
        }
        echo '</tr>';
    }
    echo '</table>';
}

function createTh($th)
{
    return '<th>' . $th . '</th>';
}

function showSelector($head)
{
    echo '
    <form method="post">
    Filter: <select name="column">';
    foreach ($head as $column) {
        echo '<option>' . $column . '</option>';
    }
    echo '
</select>
<input type="submit" value="Apply">
</form>';
}