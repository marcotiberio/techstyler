<?php

namespace Flynt\Components\BlockMembershipLevelsCustom;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'blockMembershipLevelsCustom',
        'label' => 'Membership: Levels (Custom)',
        'sub_fields' => [
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Text Left', 'flynt'),
                'name' => 'preContentHtml',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'delay' => 0,
                'media_upload' => 0,
                'required' => 0,
                'wrapper' => [
                    'width' => 50
                ]
            ],
            [
                'label' => __('Text Right', 'flynt'),
                'name' => 'preContentRightHtml',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'delay' => 0,
                'media_upload' => 0,
                'required' => 0,
                'wrapper' => [
                    'width' => 50
                ]
            ],
            [
                'label' => __('Membership Levels', 'flynt'),
                'name' => 'levelsTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Membership Levels', 'flynt'),
                'name' => 'membershipLevels',
                'type' => 'repeater',
                'layout' => 'row',
                'min' => 1,
                'button_label' => __('Add Membership', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Membership Levels', 'flynt'),
                        'name' => 'membershipLevelHtml',
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
                    [
                        'label' => __('Background Color', 'flynt'),
                        'name' => 'backgroundColor',
                        'type' => 'color_picker',
                    ],
                    // [
                    //     'label' => __('Hide Title', 'flynt'),
                    //     'name' => 'hideTitle',
                    //     'type' => 'true_false',
                    //     'default_value' => 0,
                    //     'ui' => 1
                    // ],
                    // [
                    //     'label' => __('Hide Top Border', 'flynt'),
                    //     'name' => 'hideTopBorder',
                    //     'type' => 'true_false',
                    //     'default_value' => 0,
                    //     'ui' => 1
                    // ],
                ]
            ]
        ]
    ];
}
