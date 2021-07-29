<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/services/reach_plan_service.proto

namespace Google\Ads\GoogleAds\V8\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A plannable location: a country, a DMA, a metro region, a tv region,
 * a province.
 *
 * Generated from protobuf message <code>google.ads.googleads.v8.services.PlannableLocation</code>
 */
class PlannableLocation extends \Google\Protobuf\Internal\Message
{
    /**
     * The location identifier.
     *
     * Generated from protobuf field <code>string id = 4;</code>
     */
    protected $id = null;
    /**
     * The unique location name in english.
     *
     * Generated from protobuf field <code>string name = 5;</code>
     */
    protected $name = null;
    /**
     * The parent country code, not present if location is a country.
     * If present will always be a criterion id: additional information, such as
     * country name are returned both via ListPlannableLocations or directly by
     * accessing GeoTargetConstantService with the criterion id.
     *
     * Generated from protobuf field <code>int64 parent_country_id = 6;</code>
     */
    protected $parent_country_id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           The location identifier.
     *     @type string $name
     *           The unique location name in english.
     *     @type int|string $parent_country_id
     *           The parent country code, not present if location is a country.
     *           If present will always be a criterion id: additional information, such as
     *           country name are returned both via ListPlannableLocations or directly by
     *           accessing GeoTargetConstantService with the criterion id.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V8\Services\ReachPlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * The location identifier.
     *
     * Generated from protobuf field <code>string id = 4;</code>
     * @return string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : '';
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * The location identifier.
     *
     * Generated from protobuf field <code>string id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * The unique location name in english.
     *
     * Generated from protobuf field <code>string name = 5;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * The unique location name in english.
     *
     * Generated from protobuf field <code>string name = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The parent country code, not present if location is a country.
     * If present will always be a criterion id: additional information, such as
     * country name are returned both via ListPlannableLocations or directly by
     * accessing GeoTargetConstantService with the criterion id.
     *
     * Generated from protobuf field <code>int64 parent_country_id = 6;</code>
     * @return int|string
     */
    public function getParentCountryId()
    {
        return isset($this->parent_country_id) ? $this->parent_country_id : 0;
    }

    public function hasParentCountryId()
    {
        return isset($this->parent_country_id);
    }

    public function clearParentCountryId()
    {
        unset($this->parent_country_id);
    }

    /**
     * The parent country code, not present if location is a country.
     * If present will always be a criterion id: additional information, such as
     * country name are returned both via ListPlannableLocations or directly by
     * accessing GeoTargetConstantService with the criterion id.
     *
     * Generated from protobuf field <code>int64 parent_country_id = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setParentCountryId($var)
    {
        GPBUtil::checkInt64($var);
        $this->parent_country_id = $var;

        return $this;
    }

}

