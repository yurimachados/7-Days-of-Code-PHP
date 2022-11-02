<?php
$page = ($_GET['page']??'login');

match ($page) {
    'login' => do_login(),
    'register' => do_register(),
    default => do_not_found()
};