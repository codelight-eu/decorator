<?php

use Codelight\WordPressDecorator\WordPress\UserDecorator;

include '../config.php';

try {

    $userDecorator = new UserDecorator(get_user_by('id', 1));

    print sprintf('ID: %s', $userDecorator->getId());
    print sprintf('Email: %s', $userDecorator->getEmail());
    die();

} catch (Exception $e) {
    print $e->getMessage();
    die();
}
