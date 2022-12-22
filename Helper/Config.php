<?php
/**
 * Copyright © Bluethink All rights reserved.
 * See COPYING.txt for license details.
 */
 
namespace Bluethinkinc\WhatsAppChat\Helper;

class Config extends \Magento\Framework\App\Helper\AbstractHelper
{
    public const CONFIG_STATUS = 'whatsapp/general/enable';
    public const CONFIG_PHONE_NUMBER = 'whatsapp/general/phone_number';
    public const CONFIG_MESSAGE = 'whatsapp/general/default_message';
    public const CONFIG_POSITION = 'whatsapp/general/position';
    public const WHATSAPP_ICON = 'whatsapp/general/whatsapp_icon';

    /**
     * Get module status
     */
    public function getStatus()
    {
        return $this->scopeConfig->getValue(
            self::CONFIG_STATUS,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get whatsapp phone number
     */
    public function getPhoneNumber()
    {
        return $this->scopeConfig->getValue(
            self::CONFIG_PHONE_NUMBER,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get default message
     */
    public function getMessage()
    {
        return $this->scopeConfig->getValue(
            self::CONFIG_MESSAGE,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get whatsapp icon position
     */
    public function getButtonPosition()
    {
        $position = $this->scopeConfig->getValue(
            self::CONFIG_POSITION,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
        if (!$position) {
            return 'bottom-right';
        }
        return $position;
    }

    /**
     * Get whatsapp icon
     */
    public function getWhatsappIcon()
    {
        return $this->scopeConfig->getValue(
            self::WHATSAPP_ICON,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
}
