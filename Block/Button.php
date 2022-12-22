<?php
/**
 * Copyright © Bluethink All rights reserved.
 * See COPYING.txt for license details.
 */
 
namespace Bluethinkinc\WhatsAppChat\Block;

use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\View\Element\Template;
use Bluethinkinc\WhatsAppChat\Helper\Config as HelperConfig;

class Button extends Template
{
    public const WHATSAPP_SEND_BASE_URL = 'https://api.whatsapp.com/send';

    public const PHONE = 'phone';

    public const MESSAGE = 'text';

    /** @var $helperConfig */
    protected $helperConfig;

    /**
     * Construct
     *
     * @param Context $context
     * @param HelperConfig $helperConfig
     * @param array $data
     */
    public function __construct(
        Context $context,
        HelperConfig $helperConfig,
        array $data = []
    ) {
        $this->helperConfig = $helperConfig;
        parent::__construct($context, $data);
    }

    /**
     * Get button url
     */
    public function getButtonUrl()
    {
        $params = [
            self::PHONE => $this->getPhoneNumber(),
            self::MESSAGE => $this->getMessage(),
        ];

        $url = self::WHATSAPP_SEND_BASE_URL . '?' . http_build_query($params);

        return $url;
    }

    /**
     * Get phone number
     */
    protected function getPhoneNumber()
    {
        return $this->helperConfig->getPhoneNumber();
    }

    /**
     * Get default message
     */
    protected function getMessage()
    {
        return $this->helperConfig->getMessage();
    }

    /**
     * Get button position
     */
    public function getButtonPosition()
    {
        return $this->helperConfig->getButtonPosition();
    }

    /**
     * Get button image
     */
    public function getButtonImageUrl()
    {
        $image  = $this->helperConfig->getWhatsappIcon();
        if (!empty($image)) {
            return $this->getBaseUrl().'media/whatsapp/'.$image;
        }
        return $this->getViewFileUrl('Bluethinkinc_WhatsAppChat::images/whatsapp-icon.png');
    }
}
