<?php

namespace CaponicaAmazonRainforest\Response;

/**
 * Wrapper for the raw response received back from a request to the Rainforest StockEstimation API
 *
 * @package CaponicaAmazonRainforest\Response
 */
class SalesEstimationResponse extends CommonResponse
{
    const CLASS_NAME = 'CaponicaAmazonRainforest\\Response\\SalesEstimationResponse';

    const MAIN_KEY_SALES_ESTIMATION = 'sales_estimation';

    private $sales_estimation = null;

    public function __construct($rfData)
    {
        parent::__construct($rfData);

        // main product data:
        $this->sales_estimation         = &$this->data[self::MAIN_KEY_SALES_ESTIMATION];
    }

    public static function getMainKeys() {
        $keys = parent::getMainKeys();
        $keys[] = self::MAIN_KEY_SALES_ESTIMATION;
        return $keys;
    }

    public function getSalesEstimationField($key, $valueIfMissing=null) {
        if (empty($this->sales_estimation[$key])) {
            return $valueIfMissing;
        }
        return $this->sales_estimation[$key];
    }

    public function getMonthlySalesEstimate() {
        return $this->getSalesEstimationField('monthly_sales_estimate');
    }
    public function getWeeklySalesEstimate() {
        return $this->getSalesEstimationField('weekly_sales_estimate');
    }
    public function getHasSalesEstimation() {
        return $this->getSalesEstimationField('has_sales_estimation');
    }
    public function getSalesEstimationCategory() {
        return $this->getSalesEstimationField('sales_estimation_category');
    }
    public function getBestSellerRank() {
        return $this->getSalesEstimationField('bestseller_rank');
    }
    public function getMessage() {
        return $this->getSalesEstimationField('message');
    }
}