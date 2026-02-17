<?php

require_once("peche.php");

$req = $db->query('SELECT * FROM tp WHERE id == 1');
$data = $req->fetch();

echo $data['description'];