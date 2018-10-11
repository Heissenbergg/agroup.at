<?php
function category_name($table, $id){
  $db = new DB();
  $dbQuery = $db->query($table);
  while($cat = $dbQuery -> fetch()){
    if($cat['id'] == $id) return $cat['title'];
  }
}


?>
