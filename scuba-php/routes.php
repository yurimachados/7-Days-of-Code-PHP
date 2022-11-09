<?php
$page = ($_GET['page']??'login');

match ($page) {
    'login' => do_login(),
    'register' => do_register(),
    'mail-validation' => do_validation(),
    default => do_not_found()
};