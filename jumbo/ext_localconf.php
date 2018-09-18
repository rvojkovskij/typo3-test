<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function() {

        // add login to new content element wizard
        if (TYPO3_MODE === 'BE') {
            \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
            mod.wizards.newContentElement.wizardItems.special {
                elements {
                    jumbotron {
                        iconIdentifier = EXT:jumbo/Resources/Public/Icons/tx_jumbo_domain_model_content.gif
                        title = LLL:EXT:jumbo/Resources/Private/Language/locallang.xlf:jumbotron.wizard.title
                        description = LLL:EXT:your_extension_key/Resources/Private/Language/locallang.xlf:jumbotron.wizard.description
                        tt_content_defValues {
                            CType = jumbotron
                        }
                    }
                }
                show := addToList(jumbotron)
            }
            ');
        }

//        // Register for hook to show preview of tt_content element of CType="yourextensionkey_newcontentelement" in page module
//        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['jumbotron'] =
//            \Jumbo\Jumbo\DataProcessing\JumboContentElementProcessor::class;

        // Register for hook to show preview of tt_content element of CType="yourextensionkey_newcontentelement" in page module
//        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['jumbotron'] =
//            \Jumbo\Jumbo\Hooks\PageLayoutView\JumboContentElementPreviewRenderer::class;
    }
);