<?php
defined('TYPO3_MODE') or die();

call_user_func(function () {
    // Add the FlexForm
    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['fsfzollertextanimation_fsfzollertextanimation'] = 'recursive,select_key,pages';
    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['fsfzollertextanimation_fsfzollertextanimation'] = 'pi_flexform';
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
        'fsfzollertextanimation_fsfzollertextanimation',
        'FILE:EXT:fsf_zoller_textanimation/Configuration/FlexForms/flexform.xml'
    );
});
