<?php

/**
 * Add new email template with extended subject field
 */
$installer = $this;

$installer->startSetup();

$code = 'Contact Form Extended (Template)';
$subject = 'Contact Form';
$text = '
Name:      {{var data.name}}
E-Mail:    {{var data.email}}
Telefon:   {{var data.telephone}}
Subject:   {{var data.subject}}
Comment:   {{var data.comment}}';

$template = Mage::getModel('adminhtml/email_template');

$template->setTemplateSubject($subject)
        ->setTemplateCode($code)
        ->setTemplateText($text)
        ->setTemplateStyles($styles)
        ->setModifiedAt(Mage::getSingleton('core/date')->gmtDate())
        ->setAddedAt(Mage::getSingleton('core/date')->gmtDate())
        ->setTemplateType(Mage_Core_Model_Email_Template::TYPE_TEXT);

$template->save();

$installer->endSetup();
