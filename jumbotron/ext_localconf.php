<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function() {

        // add login to new content element wizard
        if (TYPO3_MODE === 'BE') {
            \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
            mod.wizards.newContentElement.wizardItems.special {
                elements {
                    jumbotron_jumbotron {
                        iconIdentifier = EXT:jumbotron/Resources/Public/Icons/tx_jumbotron_domain_model_jumbotron.gif
                        title = LLL:EXT:jumbotron/Resources/Private/Language/locallang.xlf:jumbotron.wizard.title
                        description = LLL:EXT:jumbotron/Resources/Private/Language/locallang.xlf:jumbotron.wizard.description
                        tt_content_defValues {
                            CType = jumbotron_jumbotron
                        }
                    }
                }
                show := addToList(jumbotron_jumbotron)
            }
            ');
        }

//		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
//        $iconRegistry->registerIcon(
//            'jumbotron-plugin-jumbotron',
//            \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
//            ['source' => 'EXT:jumbotron/Resources/Public/Icons/user_plugin_jumbotron.svg']
//        );
//
    }
);
