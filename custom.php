<?php

use Magento\Framework\App\Area;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\App\State;
use Magento\Store\Model\StoreManagerInterface;

require_once __DIR__ . '/_base.php';
require_once __DIR__ . '/_custom_tests.php';

/**
 * @var ObjectManager $objectManager
 * @var State $state
 * @var StoreManagerInterface $storeManager
 */
if ($argc < 2) {
    echo "Usage: $argv[0] [--area <area>] [--store <store>] [--] <test-name> [<argument>...]\n";
} else {
    $longOptions = ['area:', 'store:'];
    $rest = 0;
    $opt = getopt('', $longOptions, $rest);

    $areaCode = $opt['area'] ?? Area::AREA_GLOBAL;
    $store = $opt['store'] ?? '0';
    $state->setAreaCode($areaCode);
    $storeManager->setCurrentStore($store);

    $testName = $argv[$rest];
    $arguments = array_slice($argv, $rest + 1);
    $$testName(...$arguments);
}
