<?php
$page = ($_GET['page']??'login').'.php';
$content = file_get_contents(VIEW_FOLDER.$page);
echo $content;