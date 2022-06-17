<?php
/**
 * Created by PhpStorm.
 * User: Christian
 * Date: 26/05/2020
 * Time: 19:46
 */

namespace CaponicaAmazonRainforest\Entity;

use CaponicaAmazonRainforest\Response\CommonResponse;
use CaponicaAmazonRainforest\Response\SalesEstimationResponse;
use CaponicaAmazonRainforest\Response\StockEstimationResponse;

/**
 * Converts a SalesEstimationResponse into an object representing the response. Main fields have accessors, if you need something
 * that is not available through a local accessor method then you can call getRainforestResponse()->getXyz() to access
 * all data in the underlying response arrays.
 *
 * @package CaponicaAmazonRainforest\Entity
 */
class RainforestSalesEstimation extends RainforestEntityCommon
{
    const CLASS_NAME = 'CaponicaAmazonRainforest\\Entity\\RainforestSalesEstimation';

    /**
     * @param CommonResponse $rfResponse    A StockEstimationResponse (only declared as 'CommonResponse' for inheritance purposes)
     */
    public function updateFromRainforestResponse(CommonResponse $rfResponse) {
        /** @var SalesEstimationResponse $rfResponse */
        $this->setRainforestResponse($rfResponse);

        $this->setMonthlySalesEstimate($rfResponse->getMonthlySalesEstimate());
        $this->setWeeklySalesEstimate($rfResponse->getWeeklySalesEstimate());
        $this->setHasSalesEstimation($rfResponse->getHasSalesEstimation());
        $this->setSalesEstimationCategory($rfResponse->getSalesEstimationCategory());
        $this->setBestSellerRank($rfResponse->getBestSellerRank());
        $this->setMessage($rfResponse->getMessage());
    }

    /**
     * @var string
     */
    protected $asin;

    /**
     * @var string
     */
    protected $monthlySalesEstimate;

    /**
     * @var string
     */
    protected $weeklySalesEstimate;

    /**
     * @var boolean
     */
    protected $hasSalesEstimation;

    /**
     * @var string
     */
    protected $salesEstimationCategory;

    /**
     * @var string
     */
    protected $bestsellerRank;
    /**
     * @var string
     */
    protected $message;


    /**
     * Set marketplace
     *
     * @param string $setMonthlySalesEstimate
     *
     * @return RainforestStockEstimation
     */
    public function setMonthlySalesEstimate($setMonthlySalesEstimate)
    {
        $this->monthlySalesEstimate = $setMonthlySalesEstimate;

        return $this;
    }

    /**
     * Get marketplace
     *
     * @return string
     */
    public function getMonthlySalesEstimate()
    {
        return $this->monthlySalesEstimate;
    }

    /**
     * Set stockLevel
     *
     * @param integer $stockLevel
     *
     * @return RainforestStockEstimation
     */
    public function setWeeklySalesEstimate($weeklySalesEstimate)
    {
        $this->weeklySalesEstimate = $weeklySalesEstimate;

        return $this;
    }

    /**
     * Get stockLevel
     *
     * @return integer
     */
    public function getWeeklySalesEstimate()
    {
        return $this->weeklySalesEstimate;
    }

    /**
     * Set priceCurrency
     *
     * @param string $hasSalesEstimate
     *
     * @return RainforestStockEstimation
     */
    public function setHasSalesEstimation($hasSalesEstimate)
    {
        $this->hasSalesEstimation = $hasSalesEstimate;

        return $this;
    }

    /**
     * Get priceCurrency
     *
     * @return string
     */
    public function getHasSalesEstimation()
    {
        return $this->hasSalesEstimation;
    }

    /**
     * Get priceCurrency
     *
     * @return string
     */
    public function getSalesEstimationCategory()
    {
        return $this->salesEstimationCategory;
    }

    /**
     * Set priceAmount
     *
     * @param string $salesEstimationCategory
     *
     * @return RainforestStockEstimation
     */
    public function setSalesEstimationCategory($salesEstimationCategory)
    {
        $this->salesEstimationCategory = $salesEstimationCategory;

        return $this;
    }

    /**
     * Get priceAmount
     *
     * @return string
     */
    public function getBestSellerRank()
    {
        return $this->bestsellerRank;
    }

    /**
     * Set minQuantity
     *
     * @param integer $minQuantity
     *
     * @return RainforestStockEstimation
     */
    public function setBestSellerRank($bestSellerRank)
    {
        $this->bestsellerRank = $bestSellerRank;

        return $this;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return RainforestStockEstimation
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }
}
