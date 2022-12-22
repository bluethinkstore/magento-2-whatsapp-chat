<?php
/**
 * Copyright © Bluethink All rights reserved.
 * See COPYING.txt for license details.
 */
 
namespace Bluethinkinc\WhatsAppChat\Model\Config;

use Magento\Framework\Option\ArrayInterface;

class Position implements ArrayInterface
{
    /**
     * Set options for whatsapp button position
     */
    public function toOptionArray()
    {
        $options = [];
        $options[] = [
            'value' => 'bottom-right',
            'label' =>  __('Bottom Right'),
        ];
        $options[] = [
            'value' => 'bottom-left',
            'label' =>  __('Bottom Left'),
        ];
        $options[] = [
            'value' => 'top-left',
            'label' =>  __('Top Left'),
        ];
        $options[] = [
            'value' => 'top-right',
            'label' =>  __('Top Right'),
        ];
        $options[] = [
            'value' => 'left-middle',
            'label' =>  __('Left Middle'),
        ];
        $options[] = [
            'value' => 'right-middle',
            'label' =>  __('Right Middle'),
        ];

        return $options;
    }
}
