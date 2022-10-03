<?php

namespace Flynt\Components\GridPostsSelectorHome;

use Flynt\FieldVariables;
use Flynt\Utils\Options;
use Timber\Timber;

const POST_TYPE = 'post';

add_filter('Flynt/addComponentData?name=GridPostsSelectorHome', function ($data) {

    $postType = POST_TYPE;

    $data['items'] = Timber::get_posts($data[$postType]);

    return $data;
});

function getACFLayout()
{
    return [
        'name' => 'gridPostsSelectorHome',
        'label' => 'Grid: Homepage Articles',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Title', 'flynt'),
                'name' => 'title',
                'type' => 'text',
            ],
            [
                'label' => __('Post', 'flynt'),
                'name' => 'post',
                'type' => 'relationship',
                'post_type' => [
                    'post',
                ],
                'allow_null' => 1,
                'multiple' => 1,
                'return_format' => 'post_object',
                'ui' => 1,
                'required' => 0,
            ],
        ]
    ];
}

Options::addTranslatable('GridPostsSelectorHome', [
    [
        'label' => __('Labels', 'flynt'),
        'name' => 'labelsTab',
        'type' => 'tab',
        'placement' => 'top',
        'endpoint' => 0
    ],
    [
        'label' => '',
        'name' => 'labels',
        'type' => 'group',
        'sub_fields' => [
            [
                'label' => __('More on', 'flynt'),
                'name' => 'moreOn',
                'type' => 'text',
                'wrapper' => [
                    'width' => 50
                ],
            ],
            [
                'label' => __('Reading Time', 'flynt'),
                'name' => 'readingTime',
                'type' => 'text',
                'default_value' => 'min',
                'required' => 1,
                'wrapper' => [
                    'width' => 50
                ],
            ],
            [
                'label' => __('All Posts', 'flynt'),
                'name' => 'allPosts',
                'type' => 'text',
                'default_value' => 'See More Posts',
                'required' => 1,
                'wrapper' => [
                    'width' => 50
                ],
            ],
            [
                'label' => __('Read More', 'flynt'),
                'name' => 'readMore',
                'type' => 'text',
                'default_value' => 'Read More',
                'required' => 1,
                'wrapper' => [
                    'width' => 50
                ],
            ]
        ],
    ]
]);
