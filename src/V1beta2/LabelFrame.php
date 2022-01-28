<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1beta2/video_intelligence.proto

namespace Google\Cloud\VideoIntelligence\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Video frame level annotation results for label detection.
 *
 * Generated from protobuf message <code>google.cloud.videointelligence.v1beta2.LabelFrame</code>
 */
class LabelFrame extends \Google\Protobuf\Internal\Message
{
    /**
     * Time-offset, relative to the beginning of the video, corresponding to the
     * video frame for this location.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration time_offset = 1;</code>
     */
    private $time_offset = null;
    /**
     * Confidence that the label is accurate. Range: [0, 1].
     *
     * Generated from protobuf field <code>float confidence = 2;</code>
     */
    private $confidence = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $time_offset
     *           Time-offset, relative to the beginning of the video, corresponding to the
     *           video frame for this location.
     *     @type float $confidence
     *           Confidence that the label is accurate. Range: [0, 1].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Videointelligence\V1Beta2\VideoIntelligence::initOnce();
        parent::__construct($data);
    }

    /**
     * Time-offset, relative to the beginning of the video, corresponding to the
     * video frame for this location.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration time_offset = 1;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getTimeOffset()
    {
        return $this->time_offset;
    }

    public function hasTimeOffset()
    {
        return isset($this->time_offset);
    }

    public function clearTimeOffset()
    {
        unset($this->time_offset);
    }

    /**
     * Time-offset, relative to the beginning of the video, corresponding to the
     * video frame for this location.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration time_offset = 1;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setTimeOffset($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->time_offset = $var;

        return $this;
    }

    /**
     * Confidence that the label is accurate. Range: [0, 1].
     *
     * Generated from protobuf field <code>float confidence = 2;</code>
     * @return float
     */
    public function getConfidence()
    {
        return $this->confidence;
    }

    /**
     * Confidence that the label is accurate. Range: [0, 1].
     *
     * Generated from protobuf field <code>float confidence = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setConfidence($var)
    {
        GPBUtil::checkFloat($var);
        $this->confidence = $var;

        return $this;
    }

}

