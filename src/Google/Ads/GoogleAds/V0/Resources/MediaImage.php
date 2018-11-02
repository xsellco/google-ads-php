<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/resources/media_file.proto

namespace Google\Ads\GoogleAds\V0\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Encapsulates an Image.
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.resources.MediaImage</code>
 */
class MediaImage extends \Google\Protobuf\Internal\Message
{
    /**
     * Raw image data.
     *
     * Generated from protobuf field <code>.google.protobuf.BytesValue data = 1;</code>
     */
    private $data = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\BytesValue $data
     *           Raw image data.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Resources\MediaFile::initOnce();
        parent::__construct($data);
    }

    /**
     * Raw image data.
     *
     * Generated from protobuf field <code>.google.protobuf.BytesValue data = 1;</code>
     * @return \Google\Protobuf\BytesValue
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Raw image data.
     *
     * Generated from protobuf field <code>.google.protobuf.BytesValue data = 1;</code>
     * @param \Google\Protobuf\BytesValue $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BytesValue::class);
        $this->data = $var;

        return $this;
    }

}
