<?php

declare(strict_types=1);

/*
 * (c) INSPIRED MINDS
 */

use InspiredMinds\ContaoBackendDocumentation\ModuleBackendDocumentation;

$GLOBALS['BE_MOD']['system']['documentation'] = [
    'callback' => ModuleBackendDocumentation::class,
    'icon' => 'public/bundles/contaobackenddocumentation/icon.png',
];
