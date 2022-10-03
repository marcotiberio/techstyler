<?php

namespace Flynt\Components\BlockAnnouncement;

use Flynt\Utils\Options;
use Flynt\FieldVariables;
use Flynt\ComponentManager;

Options::addTranslatable('BlockAnnouncement', [
    [
        'label' => __('Component Status', 'flynt'),
        'name' => 'announcementIsEnabled',
        'type' => 'true_false',
        'default_value' => 1,
        'ui' => 1,
        'ui_on_text' => __('Activated', 'flynt'),
        'ui_off_text' => __('Deactivated', 'flynt'),
    ],
    [
        'label' => 'CTA Link',
        'name' => 'ctaLink',
        'type' => 'link',
        'return_format' => 'array',
        'wrapper' => [
            'width' => 100
        ]
    ]
]);
