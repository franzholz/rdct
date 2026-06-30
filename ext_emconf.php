<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'RDCT Frontend redirects',
    'description' => 'Adds redirects based on "&RDCT" parameter in Frontend',
    'category' => 'fe',
    'state' => 'stable',
    'author' => 'Benni Mack',
    'author_email' => 'benni@typo3.org',
    'author_company' => '',
    'version' => '3.2.0',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-14.3.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
