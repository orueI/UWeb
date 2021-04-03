<h1>Charset</h1>
<form method="post">
    Change charset: <input name="inputString" type="text">
    Select charset or several charset:
    <select name="charset" multiple>
        <option value="UTF-8">UTF-8</option>
        <option value="ISO-8859-1">ISO-8859-1</option>
        <option value="Windows-1952">Windows-1952</option>
    </select>
    <input type="submit" value="Change charset">
    <input type="reset" value="Clear">
</form>
<?php

if ($_POST) {
    if (isset($_POST['inputString'])) {
        $input = $_POST['inputString'];
        printCharsetAndStr('Input string', $input);
        $select = $_POST['charset'];
        $charsetInput = "UTF-8";// mb_detect_encoding($input, "auto");
        if ($select == 'UTF-8') {
            printCharsetAndStr('UTF-8', utf8_encode($input));
        }
        if ($select == 'ISO-8859-1') {
            printCharsetAndStr('ISO-8859-1', iconv($charsetInput, "ISO-8859-1", $input));
        }
        if ($select == 'Windows-1952') {
            printCharsetAndStr('Windows-1952', mb_convert_encoding($input,"Windows-1952")); //todo not working
            ;
        }
        Encoding:
    }
}
function printCharsetAndStr($charset, $newString)
{
    echo $charset . ': <input type="text" value="' . $newString . '" disabled> <br>';
}