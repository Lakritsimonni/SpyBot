<?php
    header("refresh: 1;");
?>

<?php
if (is_file($PathToFile . 'kukkuluuruu.jpg'))
{
   $FileDetails = stat($PathToFile . 'kukkuluuruu.jpg');
   echo '<img src="http://192.168.1.37/outputt.jpg?=' . dechex($FileDetails['mtime']) . '" />';
}
?>
