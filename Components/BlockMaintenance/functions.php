<?php

namespace Flynt\Components\BlockMaintenance;

use Flynt\Utils\Options;
use Flynt\FieldVariables;
use Flynt\ComponentManager;

Options::addTranslatable('BlockMaintenance', [
    [
        'label' => __('Component Status', 'flynt'),
        'name' => 'maintenanceIsEnabled',
        'type' => 'true_false',
        'default_value' => 1,
        'ui' => 1,
        'ui_on_text' => __('Activated', 'flynt'),
        'ui_off_text' => __('Deactivated', 'flynt'),
    ],
    [
        'label' => __('Content', 'flynt'),
        'name' => 'contentHtml',
        'type' => 'wysiwyg',
        'tabs' => 'visual',
        'media_upload' => 0,
        'delay' => 1
    ],
]);
