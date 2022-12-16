<?php
namespace Luka\WeatherApp\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface WeatherRepositoryInterface {

    /**
     * Save Report
     * @param \Luka\WeatherApp\Api\Data\WeatherInterface $report
     * @return \Luka\WeatherApp\Api\Data\WeatherInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \Luka\WeatherApp\Api\Data\WeatherInterface $report
    );

    /**
     * Retrieve Report
     * @@param int $id
     * @return \Luka\WeatherApp\Api\Data\WeatherInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($id);

    /**
     * Retrieve Report matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \NadeemKhan\WeatherReport\Api\Data\ReportSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete Report
     * @param \Luka\WeatherApp\Api\Data\WeatherInterface $report
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \Luka\WeatherApp\Api\Data\WeatherInterface $report
    );

    /**
     * Delete Report by ID
     * @@param int $id
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($id);
}

