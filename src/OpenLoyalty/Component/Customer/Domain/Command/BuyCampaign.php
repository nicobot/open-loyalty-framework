<?php
/**
 * Copyright © 2017 Divante, Inc. All rights reserved.
 * See LICENSE for license details.
 */
namespace OpenLoyalty\Component\Customer\Domain\Command;

use OpenLoyalty\Component\Customer\Domain\CampaignId;
use OpenLoyalty\Component\Customer\Domain\CustomerId;
use OpenLoyalty\Component\Customer\Domain\Model\Coupon;

/**
 * Class BuyCampaign.
 */
class BuyCampaign extends CustomerCommand
{
    /**
     * @var CampaignId
     */
    protected $campaignId;

    /**
     * @var string
     */
    protected $campaignName;

    /**
     * @var float
     */
    protected $costInPoints;

    /**
     * @var Coupon
     */
    protected $coupon;

    /**
     * @var string
     */
    protected $reward;

    /**
     * BuyCampaign constructor.
     *
     * @param CustomerId $customerId
     * @param CampaignId $campaignId
     * @param $campaignName
     * @param $costInPoints
     * @param Coupon $coupon
     * @param $reward
     */
    public function __construct(CustomerId $customerId, CampaignId $campaignId, $campaignName, $costInPoints, Coupon $coupon, $reward)
    {
        parent::__construct($customerId);
        $this->campaignId = $campaignId;
        $this->campaignName = $campaignName;
        $this->costInPoints = $costInPoints;
        $this->coupon = $coupon;
        $this->reward = $reward;
    }

    /**
     * @return CampaignId
     */
    public function getCampaignId()
    {
        return $this->campaignId;
    }

    /**
     * @return float
     */
    public function getCostInPoints()
    {
        return $this->costInPoints;
    }

    /**
     * @return Coupon
     */
    public function getCoupon()
    {
        return $this->coupon;
    }

    /**
     * @return string
     */
    public function getCampaignName()
    {
        return $this->campaignName;
    }

    /**
     * @return string
     */
    public function getReward()
    {
        return $this->reward;
    }
}
