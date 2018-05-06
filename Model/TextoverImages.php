<?php
/**
 * Copyright © 2015 Amasty. All rights reserved.
 */

namespace Amasty\TextoverImages\Model;

class TextoverImages extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->_init('Amasty\TextoverImages\Model\ResourceModel\TextoverImages');
    }
}
