<?php

namespace Flynt\Components\BlockAuthor;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'blockAuthor',
        'label' => 'Block: Author',
        'sub_fields' => [
            [
                'label' => __('Profile Picture', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('image', 'flynt'),
                'name' => 'image',
                'type' => 'image',
                'preview_size' => 'medium',
                'instructions' => __('Image-Format: JPG, PNG, SVG.', 'flynt'),
                'required' => 0,
                'mime_types' => 'jpg,jpeg,png,svg'
            ],
            [
                'label' => __('Author Info', 'flynt'),
                'name' => 'authorinfoTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Name', 'flynt'),
                'name' => 'authorName',
                'type' => 'text',
                'wrapper' => [
                    'width' => '100',
                ],
            ],
            [
                'label' => __('Job Title', 'flynt'),
                'name' => 'authorJobtitle',
                'type' => 'text',
                'wrapper' => [
                    'width' => '100',
                ],
            ],
            [
                'label' => __('Bio', 'flynt'),
                'name' => 'authorBioHtml',
                'type' => 'wysiwyg',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 0,
                'wrapper' => [
                    'width' => '100',
                ],
            ]
        ]
    ];
}
