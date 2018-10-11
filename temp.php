<?php

$temp_file = tempnam(sys_get_temp_dir(), 'Tux');

echo $temp_file;
echo ini_get('upload_tmp_dir');