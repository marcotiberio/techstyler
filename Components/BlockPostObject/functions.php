<?php

namespace Flynt\Components\BlockPostObject;

use Flynt\FieldVariables;
use Flynt\Utils\Options;
use Timber\Timber;

const POST_TYPE = 'post';

add_filter('Flynt/addComponentData?name=BlockPostObject', function ($data) {

    $postType = POST_TYPE;

    $data['items'] = Timber::get_posts($data[$postType]);

    return $data;
});

function getACFLayout()
{
    return [
        'name' => 'BlockPostObject',
        'label' => 'Block: Innovator Spotlight Object',
        'sub_fields' => [
            [
                'label' => __('Innovator Spotlight', 'flynt'),
                'name' => 'post',
                'type' => 'post_object',
                'post_type' => [
                    'innovator',
                ],
                'allow_null' => 0,
                'multiple' => 0,
                'return_format' => 'post_object',
                'ui' => 1,
                'required' => 0,
                'wrapper' => [
                    'width' => '100',
                ],
            ]
        ]
    ];
}
