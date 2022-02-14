<?php

$EM_CONF[$_EXTKEY] = array(
    'title'            => 'Static Info Tables (zh)',
    'description'      => 'Chinese (zh) language pack for the Static Info Tables providing localized names for countries, currencies and so on. Dev on: https://github.com/lochmueller/static_info_tables_zh',
    'category'         => 'misc',
    'version' => '6.9.4',
    'state'            => 'stable',
    'clearcacheonload' => true,
    'author'           => 'Tim Lochmüller',
    'author_email'     => 'tim@fruit-lab.de',
    'author_company'   => '',
    'constraints' => array(
        'depends' => array(
            'php' => '7.2.0-8.1.99',
            'typo3' => '9.5.0-11.5.99',
            'static_info_tables' => '6.9.0-11.5.99',
        ),
    ),
);
