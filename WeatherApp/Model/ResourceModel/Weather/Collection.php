<?php

namespace Luka\WeatherApp\Model\ResourceModel\Weather;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * @var string
     */
    protected $_idFieldName = 'report_id';
    //protected $_eventPrefix = 'weather_collection';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            \Luka\WeatherApp\Model\Weather::class,
            \Luka\WeatherApp\Model\ResourceModel\Weather::class
        );
    }
}

