<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'FREESIXTYFIVE.FsfZollerTextanimation',
            'Fsfzollertextanimation',
            'Zoller Text Animation Background'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('fsf_zoller_textanimation', 'Configuration/TypoScript', 'Zoller Text Animation Background');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_fsfzollertextanimation_domain_model_textanimation', 'EXT:fsf_zoller_textanimation/Resources/Private/Language/locallang_csh_tx_fsfzollertextanimation_domain_model_textanimation.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_fsfzollertextanimation_domain_model_textanimation');

    }
);
