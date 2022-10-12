<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'innovatorSpotlight',
        'title' => 'Innovator Spotlight',
        'style' => '',
        'menu_order' => 1,
        'position' => 'acf_after_title',
        'fields' => [
            [
                'label' => __('Company Name', 'flynt'),
                'name' => 'companyName',
                'type' => 'text',
                'wrapper' => [
                    'width' => 25
                ],
            ],
            [
                'label' => __('Company Type', 'flynt'),
                'name' => 'companyType',
                'type' => 'text',
                'wrapper' => [
                    'width' => 25
                ],
            ],
            [
                'label' => __('Location', 'flynt'),
                'name' => 'location',
                'type' => 'text',
                'wrapper' => [
                    'width' => 25
                ],
            ],
            [
                'label' => __('Year Established', 'flynt'),
                'name' => 'yearEstablished',
                'type' => 'text',
                'wrapper' => [
                    'width' => 25
                ],
            ],
            [
                'label' => __('Team Size', 'flynt'),
                'name' => 'teamSize',
                'type' => 'text',
                'wrapper' => [
                    'width' => 25
                ],
            ],
            [
                'label' => __('Innovation Type', 'flynt'),
                'name' => 'innovationType',
                'type' => 'text',
                'wrapper' => [
                    'width' => 25
                ],
            ],
            [
                'label' => __('Input (feedstock)', 'flynt'),
                'name' => 'input',
                'type' => 'text',
                'wrapper' => [
                    'width' => 25
                ],
            ],
            [
                'label' => __('Output', 'flynt'),
                'name' => 'output',
                'type' => 'text',
                'wrapper' => [
                    'width' => 25
                ],
            ],
            [
                'label' => __('Output end-use', 'flynt'),
                'name' => 'outputEnduse',
                'type' => 'text',
                'wrapper' => [
                    'width' => 25
                ],
            ],
            [
                'label' => __('Technology', 'flynt'),
                'name' => 'technology',
                'type' => 'text',
                'wrapper' => [
                    'width' => 25
                ],
            ],
            [
                'label' => __('Problem being solved', 'flynt'),
                'name' => 'problemBeingSolved',
                'type' => 'text',
                'wrapper' => [
                    'width' => 25
                ],
            ],
            [
                'label' => __('Carbon Footprint (kg CO2eq / sq.m)', 'flynt'),
                'name' => 'carbonFootprint',
                'type' => 'text',
                'wrapper' => [
                    'width' => 25
                ],
            ],
            [
                'label' => __('Tech development stage', 'flynt'),
                'name' => 'techDevelopmentStage',
                'type' => 'text',
                'wrapper' => [
                    'width' => 25
                ],
            ],
            [
                'label' => __('Partnerships (brand)', 'flynt'),
                'name' => 'partnershipBrand',
                'type' => 'text',
                'wrapper' => [
                    'width' => 25
                ],
            ],
            [
                'label' => __('Partnerships (supply chain)', 'flynt'),
                'name' => 'partnershipSupplychain',
                'type' => 'text',
                'wrapper' => [
                    'width' => 25
                ],
            ],
            [
                'label' => __('Funding stage reached', 'flynt'),
                'name' => 'fundingStageReached',
                'type' => 'text',
                'wrapper' => [
                    'width' => 25
                ],
            ],
            [
                'label' => __('Funds raised', 'flynt'),
                'name' => 'fundsRaised',
                'type' => 'text',
                'wrapper' => [
                    'width' => 25
                ],
            ],
            [
                'label' => __('Number of investors', 'flynt'),
                'name' => 'numberInvestors',
                'type' => 'text',
                'wrapper' => [
                    'width' => 25
                ],
            ],
            [
                'label' => __('Next fund raise (projected)', 'flynt'),
                'name' => 'nextFundraise',
                'type' => 'text',
                'wrapper' => [
                    'width' => 25
                ],
            ],
            [
                'label' => __('Production capacity (actual) sq.ft/month', 'flynt'),
                'name' => 'productionCapacityActual',
                'type' => 'text',
                'wrapper' => [
                    'width' => 25
                ],
            ],
            [
                'label' => __('Production capacity (projected sq.ft/month)', 'flynt'),
                'name' => 'productionCapacityProjected',
                'type' => 'text',
                'wrapper' => [
                    'width' => 25
                ],
            ],
            [
                'label' => __('Size of market? (current ‘disruptable’ market) sq.ft/year', 'flynt'),
                'name' => 'sizeMarket',
                'type' => 'text',
                'wrapper' => [
                    'width' => 25
                ],
            ],
            [
                'label' => __('Date of this profile', 'flynt'),
                'name' => 'profileDate',
                'type' => 'text',
                'wrapper' => [
                    'width' => 25
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'innovator',
                ],
            ],
        ],
    ]);
    // ACFComposer::registerFieldGroup([
    //     'name' => 'innovatorComponents',
    //     'title' => 'Innovator Components',
    //     'style' => 'seamless',
    //     'fields' => [
    //         [
    //             'name' => 'innovatorComponents',
    //             'label' => __('Innovator Components', 'flynt'),
    //             'type' => 'flexible_content',
    //             'button_label' => __('Add Component', 'flynt'),
    //             'layouts' => [
    //                 Components\BlockAuthor\getACFLayout(),
    //                 Components\BlockFootnotes\getACFLayout(),
    //                 Components\BlockImagePost\getACFLayout(),
    //                 Components\BlockImageText\getACFLayout(),
    //                 Components\BlockInnovatorSpotlight\getACFLayout(),
    //                 Components\BlockInnovatorSpotlightObject\getACFLayout(),
    //                 Components\BlockPostHeader\getACFLayout(),
    //                 Components\BlockPostObject\getACFLayout(),
    //                 Components\BlockShortcode\getACFLayout(),
    //                 Components\BlockSocialOembed\getACFLayout(),
    //                 Components\BlockVideoOembed\getACFLayout(),
    //                 Components\BlockWysiwygPost\getACFLayout(),
    //                 Components\SliderImages\getACFLayout(),
    //             ],
    //         ],
    //     ],
    //     'location' => [
    //         [
    //             [
    //                 'param' => 'post_type',
    //                 'operator' => '==',
    //                 'value' => 'innovator',
    //             ]
    //         ],
    //     ],
    // ]);
});
