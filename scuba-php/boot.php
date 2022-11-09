<?php

/* Pelo que entendi, esse arquivo serve como uma conexão entre os arquivo
 * pois um complementa o outro e alguns não funcionariam direito sem essa conexão
 */
include 'config.php';
include 'vendor/autoload.php';
include 'mail.php';
include 'crud.php';
include 'validation.php';
include 'view.php';
include 'crypt.php';
include 'controller.php';
include 'routes.php';