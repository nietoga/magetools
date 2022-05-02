<?php

use Magento\Framework\App\Bootstrap;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\App\State;
use Magento\Store\Model\StoreManagerInterface;

require_once __DIR__ . '/../bootstrap.php';

$bootstrap = Bootstrap::create(BP, $_SERVER);
$objectManager = ObjectManager::getInstance();
$state = $objectManager->get(State::class);
$storeManager = $objectManager->get(StoreManagerInterface::class);
