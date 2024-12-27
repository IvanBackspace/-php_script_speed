<?
if ($_GET['test'] == 'on') {
    $start = microtime(true);
}
?>

<?
if ($_GET['test'] == 'on') {
    $time = microtime(true) - $start;
    echo '<div style="display: none;">';
    echo $time . ' сек.';
    echo '</div>';
}
?>
