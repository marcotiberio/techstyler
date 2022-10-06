<?php

namespace Flynt\Components\BlockSocialOembed;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'blockSocialOembed',
        'label' => 'Block: Social Embed',
        'sub_fields' => [
            [
                'label' => '',
                'name' => 'socialOembedText',
                'type' => 'textarea',
                'instructions' => __('Copy here the embed code.', 'flynt'),
                'required' => 0
            ]
        ]
    ];
}
