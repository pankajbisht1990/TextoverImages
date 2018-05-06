<?php
/**
 * Copyright © 2015 Amasty. All rights reserved.
 */

namespace Amasty\TextoverImages\Model\ResourceModel\TextoverImages;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Amasty\TextoverImages\Model\TextoverImages', 'Amasty\TextoverImages\Model\ResourceModel\TextoverImages');
    }
}
