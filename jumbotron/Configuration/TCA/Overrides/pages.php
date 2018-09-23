<?php
defined('TYPO3_MODE') or die();

call_user_func(function () {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        'jumbotron',
        'Configuration/TSconfig/Page/TSConfig.typoscript',
        'My special config'
    );
});