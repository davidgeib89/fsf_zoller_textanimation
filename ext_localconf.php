<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'FREESIXTYFIVE.FsfZollerTextanimation',
            'Fsfzollertextanimation',
            [
                'TextAnimation' => 'list'
            ],
            // non-cacheable actions
            [
                'TextAnimation' => ''
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        fsfzollertextanimation {
                            iconIdentifier = fsf_zoller_textanimation-plugin-fsfzollertextanimation
                            title = LLL:EXT:fsf_zoller_textanimation/Resources/Private/Language/locallang_db.xlf:tx_fsf_zoller_textanimation_fsfzollertextanimation.name
                            description = LLL:EXT:fsf_zoller_textanimation/Resources/Private/Language/locallang_db.xlf:tx_fsf_zoller_textanimation_fsfzollertextanimation.description
                            tt_content_defValues {
                                CType = list
                                list_type = fsfzollertextanimation_fsfzollertextanimation
                            }
                        }
                    }
                    show = *
                }
           }'
        );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'fsf_zoller_textanimation-plugin-fsfzollertextanimation',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:fsf_zoller_textanimation/Resources/Public/Icons/user_plugin_fsfzollertextanimation.svg']
			);
		
    }
);
