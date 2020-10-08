<?php
$post_data = json_decode(file_get_contents('php://input'), true);
// note: the directory "data" must be writable by the server

// declare file name and file contents
$name = "data/".$post_data['filename'].".csv";
$data = $post_data['filedata'];

// save file contents
file_put_contents($name, $data);

// write subject id to list
file_put_contents('data/data-submit-list.txt', $post_data['filename'] . PHP_EOL, FILE_APPEND);
?>
