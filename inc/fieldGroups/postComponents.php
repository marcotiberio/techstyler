<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'postMeta',
        'title' => 'Intro',
        'style' => '',
        'menu_order' => 1,
        'position' => 'acf_after_title',
        'fields' => [
            // [
            //     'label' => __('Intro', 'flynt'),
            //     'name' => 'infoTab',
            //     'type' => 'tab',
            //     'placement' => 'top',
            //     'endpoint' => 0
            // ],
            [
                'label' => __('', 'flynt'),
                'name' => 'introHtml',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 0
            ],
            // [
            //     'label' => __('Audio', 'flynt'),
            //     'name' => 'audioEmbed',
            //     'type' => 'wysiwyg',
            //     'tabs' => 'visual',
            //     'delay' => 1,
            //     'media_upload' => 0,
            //     'required' => 0,
            //     'instructions' => __('Copy here the embed code from the audio player.', 'flynt')
            // ],
            // [
            //     'label' => __('audio', 'flynt'),
            //     'name' => 'audio',
            //     'type' => 'link',
            //     'return_format' => 'array',
            //     'mime_types' => 'm4a, mp3',
            //     'wrapper' => [
            //         'width' => '100',
            //     ],
            // ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                ],
            ],
        ],
    ]);
    ACFComposer::registerFieldGroup([
        'name' => 'postComponents',
        'title' => 'Article Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'postComponents',
                'label' => __('Article Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\BlockAuthor\getACFLayout(),
                    Components\BlockFootnotes\getACFLayout(),
                    Components\BlockImagePost\getACFLayout(),
                    Components\BlockImageText\getACFLayout(),
                    Components\BlockPostHeader\getACFLayout(),
                    Components\BlockPostObject\getACFLayout(),
                    Components\BlockShortcode\getACFLayout(),
                    Components\BlockSocialOembed\getACFLayout(),
                    Components\BlockVideoOembed\getACFLayout(),
                    Components\BlockWysiwygPost\getACFLayout(),
                    Components\SliderImages\getACFLayout(),
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                ]
            ],
        ],
    ]);
});
