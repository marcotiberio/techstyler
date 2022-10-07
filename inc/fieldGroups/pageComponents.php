<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'pageComponents',
        'title' => 'Page Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'pageComponents',
                'label' => __('Page Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\BlockImage\getACFLayout(),
                    Components\BlockImageText\getACFLayout(),
                    Components\BlockLegalPage\getACFLayout(),
                    Components\BlockMembershipLevels\getACFLayout(),
                    Components\BlockNewsletter\getACFLayout(),
                    Components\BlockRepeaterColumns\getACFLayout(),
                    Components\BlockShortcode\getACFLayout(),
                    Components\BlockSubscriptionConfirmation\getACFLayout(),
                    Components\BlockWysiwygRepeater\getACFLayout(),
                    Components\BlockTextFormTwoCol\getACFLayout(),
                    Components\BlockTextImageRepeater\getACFLayout(),
                    Components\BlockTextImageTwoCol\getACFLayout(),
                    Components\GridAllPosts\getACFLayout(),
                    Components\GridPostsHomepage\getACFLayout(),
                    Components\GridPostsLatest\getACFLayout(),
                    Components\GridPostsPremium\getACFLayout(),
                    Components\GridPostsSelectorHome\getACFLayout(),
                    Components\HeroImageText\getACFLayout(),
                    Components\HeroImageTextHalf\getACFLayout(),
                    Components\HeroVideo\getACFLayout(),
                    Components\ListLogos\getACFLayout(),
                    Components\ListSocial\getACFLayout(),
                    Components\SliderImages\getACFLayout(),
                    Components\SliderImagesLanding\getACFLayout(),
                    Components\SliderText\getACFLayout(),
                    Components\SliderTextDropdown\getACFLayout(),
                ]
            ]
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page'
                ]
            ]
        ]
    ]);
});
