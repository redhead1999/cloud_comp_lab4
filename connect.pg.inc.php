<?php
$db["host"] = "ec2-34-233-0-64.compute-1.amazonaws.com";
$db["port"] = "5432";
$db["user"] = "sudkhleuxcvlwn";
$db["pass"] = "a886e22ed15280a4789a965e5fdaa93231870a6f1db8474718109cd5bc1167af";
$db["dbname"] = "d3b08s98rl40mi";

$pdo = new PDO("pgsql:" . sprintf(
    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
    $db["host"],
    $db["port"],
    $db["user"],
    $db["pass"],
    $db["dbname"]
));
