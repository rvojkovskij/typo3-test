<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function() {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Jumbo.Jumbotron',
            'Jumbotron',
            'Jumbo'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('jumbotron', 'Configuration/TypoScript', 'Jumbotron');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_jumbotron_domain_model_jumbotron', 'EXT:jumbotron/Resources/Private/Language/locallang_csh_tx_jumbotron_domain_model_jumbotron.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_jumbotron_domain_model_jumbotron');

    }
);
