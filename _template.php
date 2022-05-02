<?php

use Magento\Framework\App\Area;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\App\State;
use Magento\Store\Model\StoreManagerInterface;

require_once __DIR__ . '/_base.php';

/**
 * @var ObjectManager $objectManager
 * @var State $state
 * @var StoreManagerInterface $storeManager
 */
$state->setAreaCode(Area::AREA_GLOBAL);
$storeManager->setCurrentStore('0');
