<?php

namespace Flynt\Components\BlockLegalPage;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'blockLegalPage',
        'label' => 'Block: Legal Page',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentHtml',
                'type' => 'wysiwyg',
                'tabs' => 'visual, text',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 0,
            ]
        ]
    ];
}
