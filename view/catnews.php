<?php
ob_start();
?>
<h1>Uudised (kategooria)</h1>
<hr>
<?php
ViewNews::NewsByCategory($arr);
$content = ob_get_clean();
include_once 'view/layout.php';
?>