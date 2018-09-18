<?php
defined('TYPO3_MODE') or die();

call_user_func(function () {

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
        array(
            'LLL:EXT:jumbo/Resources/Private/Language/locallang.xlf:jumbotron',
            'jumbotron',
            'EXT:jumbo/Resources/Public/Icons/tx_jumbo_domain_model_content.gif'
        ),
        'CType',
        'jumbo'
    );

    $GLOBALS['TCA']['tt_content']['types']['jumbotron'] = array(
        'showitem' => '
         --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
            bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
         --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
         --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
         --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
         --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
            categories,
         --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
         --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
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


    $GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = array(
        'LLL:EXT:jumbo/Resources/Private/Language/locallang.xlf:jumbo.wizard.title',
        'jumbo',
        'EXT:jumbo/Resources/Public/Icons/tx_jumbo_domain_model_content.gif'
    );
});