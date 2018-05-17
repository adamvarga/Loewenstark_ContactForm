<?php

class Loewenstark_ContactForm_Helper_Config extends Mage_Core_Helper_Abstract {

    /**
     * Subject active check
     * @return type
     */
    public function subjectActive() {
        return Mage::getStoreConfig('ls_contactform/subject_general/active_subject');
    }

    /**
     * Agreement active check
     * @return type
     */
    public function agreementActive() {
        return Mage::getStoreConfig('ls_contactform/agreement_general/active_agreement');
    }

    /**
     * Get agreement title
     * @return string
     */
    public function getAgreementTitle() {
        $agreement = Mage::getStoreConfig('ls_contactform/agreement_general/agreement_title');
        if ($agreement) {
            return (string) Mage::getStoreConfig('ls_contactform/agreement_general/agreement_title');
        } else {
            return 'Agreement';
        }
    }

    /**
     * Get agreement text
     * @return type
     */
    public function getAgreementText() {
        $agreementContent = Mage::getStoreConfig('ls_contactform/agreement_general/agreement_text');
        if ($agreementContent) {
            return $agreementContent;
        }
    }

}
