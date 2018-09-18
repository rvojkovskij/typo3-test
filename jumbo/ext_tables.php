<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('jumbo', 'Configuration/TypoScript', 'Jumbotron');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_jumbo_domain_model_jumbotron', 'EXT:jumbo/Resources/Private/Language/locallang_csh_tx_jumbo_domain_model_jumbotron.xlf');
});
