<?php
define('MODX_API_MODE', true);
require 'index.php';

$output = '';

$data = array(
"Выберите из списка=="
); 

$q = $modx->newQuery('modResource');

$q->where(array(
"parent" => 12,
));

$q->select(array(
"modResource.pagetitle",
"modResource.content",
"modResource.id",
));

$s = $q->prepare();
$s->execute();

while($row = $s->fetch(PDO::FETCH_ASSOC)){
    $data[] = $row['id'];
}


$output = implode("||", $data);

echo "<pre>";
print_r($data);
echo "</pre>";

return $data;