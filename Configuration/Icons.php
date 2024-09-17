<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider;

return [
    'ext-mailchimp-wizard-icon' => [
        'provider' => BitmapIconProvider::class,
        'source' => 'EXT:mailchimp/Resources/Public/Icons/Extension.png',
    ],
];
