<?php

namespace Flynt\Components\GridPostsHomepage;

use Flynt\FieldVariables;
use Flynt\Utils\Options;
use Timber\Timber;

const POST_TYPE = 'post';
const FORMAT_TYPE = 'news-feature';

add_filter('Flynt/addComponentData?name=GridPostsHomepage', function ($data) {
    $postType = POST_TYPE;
    $formatType = FORMAT_TYPE;

    $data['items'] = Timber::get_posts([
        'post_status' => 'publish',
        'post_type' => $postType,
        'tax_query' => array(
            array(
                'taxonomy' => 'format',
                'field' => 'slug',
                'terms' => $formatType,
            )
        ),
        'ignore_sticky_posts' => 1,
        'post__not_in' => array(get_the_ID())
    ]);

    $data['postTypeArchiveLink'] = get_post_type_archive_link($postType);

    return $data;
});

function getACFLayout()
{
    return [
        'name' => 'gridPostsHomepage',
        'label' => 'Grid: Posts Homepage',
        'sub_fields' => [
            [
                'label' => '',
                'name' => 'message',
                'type' => 'message',
                'message' => __('This is a default component to show all the News Fetaurs articles.', 'flynt'),
            ],
            // [
            //     'label' => __('General', 'flynt'),
            //     'name' => 'generalTab',
            //     'type' => 'tab',
            //     'placement' => 'top',
            //     'endpoint' => 0
            // ],
            // [
            //     'label' => __('Title', 'flynt'),
            //     'name' => 'title',
            //     'type' => 'text',
            // ],
            // [
            //     'label' => __('Formats', 'flynt'),
            //     'name' => 'taxonomies',
            //     'type' => 'taxonomy',
            //     'instructions' => __('Select 1 or more format or leave empty to show from all posts.', 'flynt'),
            //     'taxonomy' => 'format',
            //     'field_type' => 'multi_select',
            //     'allow_null' => 1,
            //     'multiple' => 1,
            //     'add_term' => 0,
            //     'save_terms' => 0,
            //     'load_terms' => 0,
            //     'return_format' => 'object'
            // ]
        ]
    ];
}

Options::addTranslatable('GridPostsHomepage', [
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
