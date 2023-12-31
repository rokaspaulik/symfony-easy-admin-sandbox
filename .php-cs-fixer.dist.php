<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . '/src')
;

$config = new PhpCsFixer\Config();

return $config->setRules([
        '@Symfony' => true,
        'full_opening_tag' => false,
    ])
    ->setFinder($finder)
;
