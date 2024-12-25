<?php
ob_start()
?>
<div>Content for page inscription</div>

<?php
$content = ob_get_clean();
require_once("layoutVisiteur.php");