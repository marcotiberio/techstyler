<?php

namespace Flynt\Components\BlockRepeaterColumns;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockRepeaterColumns',
        'label' => 'Block: Repeater Columns',
        'sub_fields' => [
            [
                'label' => __('List Title', 'flynt'),
                'name' => 'repeaterTitle',
                'type' => 'text'
            ],
            [
                'label' => __('List', 'flynt'),
                'name' => 'list',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Panel', 'flynt'),
                'name' => 'itemPanels',
                'type' => 'repeater',
                'layout' => 'row',
                'min' => 1,
                'button_label' => __('Add Panel', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Title', 'flynt'),
                        'name' => 'panelTitle',
                        'type' => 'text'
                    ],
                    [
                        'label' => __('Description', 'flynt'),
                        'name' => 'panelDescription',
                        'type' => 'wysiwyg',
                        'tabs' => 'visual',
                        'delay' => 1,
                        'media_upload' => 0,
                        'required' => 0,
                    ],
                ],
            ],
            [
                'label' => __('Options', 'flynt'),
                'name' => 'optionsTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => '',
                'name' => 'options',
                'type' => 'group',
                'layout' => 'block',
                'sub_fields' => [
                    FieldVariables\getSectionId(),
                ]
            ]
        ]
    ];
}
