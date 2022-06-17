<?php

namespace CaponicaAmazonRainforest\Request;

use CaponicaAmazonRainforest\Client\RainforestClient;
use CaponicaAmazonRainforest\Entity\RainforestSalesEstimation;
use CaponicaAmazonRainforest\Entity\RainforestStockEstimation;
use CaponicaAmazonRainforest\Response\SalesEstimationResponse;
use CaponicaAmazonRainforest\Response\StockEstimationResponse;

/**
 * Wrapper for the parameters used when making a StockEstimation request.
 *
 * @package CaponicaAmazonRainforest\Request
 */
class SalesEstimationRequest extends CommonRequest
{
    const CLASS_NAME = 'CaponicaAmazonRainforest\\Request\\SalesEstimationRequest';

    protected $amazon_domain;
    protected $asin;

    public function __construct($site, $asin)
    {
        $this->amazon_domain = $site;
        $this->asin = $asin;
    }

    public static function getReflectionArray() {
        return [
            'requestClass'  => self::CLASS_NAME,
            'responseClass' => SalesEstimationResponse::CLASS_NAME,
            'entityClass'   => RainforestSalesEstimation::CLASS_NAME,
            'debug'         => 'SaslesEstimation',
        ];
    }

    public function getQueryKeys() {
        $queryKeys = [
            'amazon_domain',
            'asin'
        ];
        return $queryKeys;
    }

    public function getQueryType() {
        return RainforestClient::REQUEST_TYPE_SALES_ESTIMATION;
    }

    /**
     * A unique key for this ProductRequest
     *
     * @return string
     */
    public function getKeyLong() {
        return $this->amazon_domain . '~' . $this->asin;
    }
}