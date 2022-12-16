<?php
namespace Luka\WeatherApp\Model\ResourceModel;
class Weather extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
	
	public function __construct(
		\Magento\Framework\Model\ResourceModel\Db\Context $context
	)
	{
		parent::__construct($context);
	}
	
	protected function _construct()
	{
		$this->_init('luka_weatherapp_data', 'id');
		//$this->_useIsObjectNew = true;
		
	}
	
}
