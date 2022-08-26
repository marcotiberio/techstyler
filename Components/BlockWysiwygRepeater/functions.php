<?php

namespace Flynt\Components\BlockWysiwygRepeater;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockWysiwygRepeater',
        'label' => 'Block: Rich Text Column',
        'sub_fields' => [
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('List Title', 'flynt'),
                'name' => 'repeaterTitle',
                'type' => 'text'
            ],
            [
                'label' => __('Text Editor Panels', 'flynt'),
                'name' => 'contentPanels',
                'type' => 'repeater',
                'layout' => 'row',
                'min' => 1,
                'button_label' => __('Add Text Editor', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Text Editor', 'flynt'),
                        'name' => 'panelTexteditor',
                        'type' => 'wysiwyg',
                        'tabs' => 'visual',
                        'media_upload' => 0,
                        'delay' => 1,
                    ],
                ],
            ],
            [
                'label' => __('Options', 'flynt'),
                'name' => 'optionsTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
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
