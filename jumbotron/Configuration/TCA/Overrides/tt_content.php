<?php
defined('TYPO3_MODE') or die();

call_user_func(function () {

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
        array(
            'LLL:EXT:jumbotron/Resources/Private/Language/locallang.xlf:jumbotron.wizard.title',
            'jumbotron_jumbotron',
            'EXT:jumbotron/Resources/Public/Icons/tx_jumbotron_domain_model_jumbotron.gif'
        ),
        'CType',
        'jumbotron'
    );

    $GLOBALS['TCA']['tt_content']['types']['jumbotron_jumbotron'] = array(
        'showitem' => '
         --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
            bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
         
        ',
        'columnsOverrides' => [
            'bodytext' => [
                'config' => [
                    'enableRichtext' => true,
                    'richtextConfiguration' => 'default'
                ]
            ],
            'subheader' => [
                'config' => [
                    'max' => 150
                ]
            ],
            'header' => [
                'config' => [
                    'required' => 1
                ]
            ]
        ]
    );

    // Adds the redirect field and the forgotHash field to the fe_users-table
    $additionalColumns = [
        'button_text' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jumbotron/Resources/Private/Language/locallang_db.xlf:tx_jumbotron_domain_model_jumbotron.button_text',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 30,
                'internal_type' => 'db',
            ]
        ],
        'button_url' => [
            'exclude' => true,
            'label' => 'LLL:EXT:jumbotron/Resources/Private/Language/locallang_db.xlf:tx_jumbotron_domain_model_jumbotron.button_url',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputLink',
                'size' => 50,
                'max' => 1024,
                'eval' => 'trim',
                'fieldControl' => [
                    'linkPopup' => [
                        'options' => [
                            'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel',
                        ],
                    ],
                ],
                'softref' => 'typolink'
            ]
        ]
    ];

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $additionalColumns);
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', 'button_text', '');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', 'button_url', '');


    $GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = array(
        'LLL:EXT:jumbotron/Resources/Private/Language/locallang.xlf:jumbotron.wizard.title',
        'jumbotron_jumbotron',
        'EXT:jumbotron/Resources/Public/Icons/tx_jumbotron_domain_model_jumbotron.gif'
    );
});