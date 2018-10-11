<?php
require_once '../../class/db.php';

$table = $_POST['table']; 
$path = $_POST['path'];

$db = new DB();
$dbQuery = $db->query($table);

while($object = $dbQuery -> fetch()){
	?>
	<div class="form_output">
		<div class="form_output_left">
			<p><?php echo $object['title']; ?></p>
		</div>
		<div class="form_output_preview" title="Pogledajte sadržaj kategorije">
			<a href="<?php echo $path.$object['id']; ?>"><p>PREGLED KATEGORIJE</p></a>
		</div>
		<div class="form_output_delete" title="Obrište kategoriju" onclick="deleteObject('<?php echo $table; ?>', '<?php echo $object['id']; ?>');">
			<i class="fa fa-trash"></i>
		</div>
	</div>
	<?php
}
