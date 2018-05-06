<?php
/**
 * Copyright © 2015 Amasty. All rights reserved.
 */

namespace Amasty\TextoverImages\Model\ResourceModel;

class TextoverImages extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Model Initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('amasty_textoverimages', 'id');
    }
}
