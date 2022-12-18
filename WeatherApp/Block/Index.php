<?php

namespace Luka\WeatherApp\Block;

use Magento\Framework\View\Element\Template;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\Registry;

class Index extends Template
{
    protected $_coreRegistry;
    public function __construct(Context $context, Registry $coreRegistry, array $data = [])
    {
        $this->_coreRegistry = $coreRegistry;
        parent::__construct($context, $data);
    }

    public function getFormAction()
    {
        return $this->getUrl('weatherapp/index/save', ['_secure' => true]);
    }

    public function getPdfAction()
    {
        return $this->getUrl('weatherapp/index/pdf', ['_secure' => true]);
    }

    public function getList()
    {
        return $this->_coreRegistry->registry('data');
    }
}
