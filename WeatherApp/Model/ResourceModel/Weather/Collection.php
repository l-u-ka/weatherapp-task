<?php
namespace Luka\WeatherApp\Model\ResourceModel\Weather;

use Luka\WeatherApp\Model\Weather as Model;
use Luka\WeatherApp\Model\ResourceModel\Weather as ResourceModel;

/**
 * Class Collection
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Init
     */
    protected function _construct() // phpcs:ignore PSR2.Methods.MethodDeclaration
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
