<?php
require_once '../class/db.php';
require_once '../functions/service.php';
$id = $_POST['id'];
$value = getService($id);
?>
<div id="body_header">
    <h1>
        <?php echo $value['title']; ?>
    </h1>
</div>
<div id="body_body">
    <p>
        <?php echo nl2br ($value['details']); ?>
    </p>
</div>
