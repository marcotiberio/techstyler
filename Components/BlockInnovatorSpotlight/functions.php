<?php

namespace Flynt\Components\BlockInnovatorSpotlight;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'blockInnovatorSpotlight',
        'label' => 'Block: Innovator Spotlight (Repeater)',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Intro', 'flynt'),
                'name' => 'contentHtml',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'media_upload' => 0,
                'delay' => 1,
                'wrapper' => [
                    'width' => 100
                ],
            ],
            [
                'label' => __('Rows', 'flynt'),
                'name' => 'rows',
                'type' => 'repeater',
                'layout' => 'table',
                'min' => 1,
                'button_label' => __('Add Row', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Left Column', 'flynt'),
                        'name' => 'leftColumn',
                        'type' => 'text',
                        'wrapper' => [
                            'width' => 50
                        ],
                    ],
                    [
                        'label' => __('Right Column', 'flynt'),
                        'name' => 'rightColumn',
                        'type' => 'text',
                        'wrapper' => [
                            'width' => 50
                        ],
                    ],
                ],
            ],
        ]
    ];
}
