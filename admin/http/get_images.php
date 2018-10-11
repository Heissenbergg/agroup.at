<?php
require_once '../../class/db.php';

$hash = $_POST['hash'];
$db = new DB();
$dbQuery = $db->query("images");

while($img = $dbQuery -> fetch()){
	if($img['hash'] == $hash){
		?>
		<div class="single_image" title="Izbrišite sliku">
			<img class="rotated_image<?php echo $img['rotate']; ?>" src="../all_images/<?php echo $img['title']; ?>">
			<div class="delete_image_wrapper" onclick="deleteImage('<?php echo $img['id']; ?>', '<?php echo $img['hash']; ?>', '<?php echo $img['title']; ?>');">
				<i class="fa fa-times"></i>
			</div>
			<div class="rotate_image" title="Rotirajte sliku za 90°" onclick="rotate_image('<?php echo $img['id']; ?>', '<?php echo $img['rotate']; ?>', '<?php echo $img['hash']; ?>');">
				<i class="fa fa-undo"></i>
			</div>
		</div>
		<?php
	}
}