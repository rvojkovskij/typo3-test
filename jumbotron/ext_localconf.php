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

//        // Register for hook to show preview of tt_content element of CType="fluid_styled_slider" in page module
//        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['jumbotron_jumbotron']
//            = Jumbo\Jumbotron\Hooks\PageLayoutView\JumboContentElementPreviewRenderer::class;
    }
);
