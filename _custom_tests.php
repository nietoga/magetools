<?php

use Magento\Framework\App\ObjectManager;
use Magento\Framework\App\State;
use Magento\Store\Model\StoreManagerInterface;

/**
 * @var ObjectManager $objectManager
 * @var State $state
 * @var StoreManagerInterface $storeManager
 */

$default = function () use ($objectManager) {
    echo "Default test!\n";
};
