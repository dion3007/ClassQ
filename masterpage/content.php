<?php

$page = "page/".$_GET["page"].".php";

if (file_exists($page)) {
    require_once $page;
}
?>