<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1/video_intelligence.proto

namespace Google\Cloud\VideoIntelligence\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Config for SPEECH_TRANSCRIPTION.
 *
 * Generated from protobuf message <code>google.cloud.videointelligence.v1.SpeechTranscriptionConfig</code>
 */
class SpeechTranscriptionConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. *Required* The language of the supplied audio as a
     * [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt) language tag.
     * Example: "en-US".
     * See [Language Support](https://cloud.google.com/speech/docs/languages)
     * for a list of the currently supported language codes.
     *
     * Generated from protobuf field <code>string language_code = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $language_code = '';
    /**
     * Optional. Maximum number of recognition hypotheses to be returned.
     * Specifically, the maximum number of `SpeechRecognitionAlternative` messages
     * within each `SpeechTranscription`. The server may return fewer than
     * `max_alternatives`. Valid values are `0`-`30`. A value of `0` or `1` will
     * return a maximum of one. If omitted, will return a maximum of one.
     *
     * Generated from protobuf field <code>int32 max_alternatives = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $max_alternatives = 0;
    /**
     * Optional. If set to `true`, the server will attempt to filter out
     * profanities, replacing all but the initial character in each filtered word
     * with asterisks, e.g. "f***". If set to `false` or omitted, profanities
     * won't be filtered out.
     *
     * Generated from protobuf field <code>bool filter_profanity = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $filter_profanity = false;
    /**
     * Optional. A means to provide context to assist the speech recognition.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.SpeechContext speech_contexts = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $speech_contexts;
    /**
     * Optional. If 'true', adds punctuation to recognition result hypotheses.
     * This feature is only available in select languages. Setting this for
     * requests in other languages has no effect at all. The default 'false' value
     * does not add punctuation to result hypotheses. NOTE: "This is currently
     * offered as an experimental service, complimentary to all users. In the
     * future this may be exclusively available as a premium feature."
     *
     * Generated from protobuf field <code>bool enable_automatic_punctuation = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $enable_automatic_punctuation = false;
    /**
     * Optional. For file formats, such as MXF or MKV, supporting multiple audio
     * tracks, specify up to two tracks. Default: track 0.
     *
     * Generated from protobuf field <code>repeated int32 audio_tracks = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $audio_tracks;
    /**
     * Optional. If 'true', enables speaker detection for each recognized word in
     * the top alternative of the recognition result using a speaker_tag provided
     * in the WordInfo.
     * Note: When this is true, we send all the words from the beginning of the
     * audio for the top alternative in every consecutive response.
     * This is done in order to improve our speaker tags as our models learn to
     * identify the speakers in the conversation over time.
     *
     * Generated from protobuf field <code>bool enable_speaker_diarization = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $enable_speaker_diarization = false;
    /**
     * Optional. If set, specifies the estimated number of speakers in the
     * conversation. If not set, defaults to '2'. Ignored unless
     * enable_speaker_diarization is set to true.
     *
     * Generated from protobuf field <code>int32 diarization_speaker_count = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $diarization_speaker_count = 0;
    /**
     * Optional. If `true`, the top result includes a list of words and the
     * confidence for those words. If `false`, no word-level confidence
     * information is returned. The default is `false`.
     *
     * Generated from protobuf field <code>bool enable_word_confidence = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $enable_word_confidence = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $language_code
     *           Required. *Required* The language of the supplied audio as a
     *           [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt) language tag.
     *           Example: "en-US".
     *           See [Language Support](https://cloud.google.com/speech/docs/languages)
     *           for a list of the currently supported language codes.
     *     @type int $max_alternatives
     *           Optional. Maximum number of recognition hypotheses to be returned.
     *           Specifically, the maximum number of `SpeechRecognitionAlternative` messages
     *           within each `SpeechTranscription`. The server may return fewer than
     *           `max_alternatives`. Valid values are `0`-`30`. A value of `0` or `1` will
     *           return a maximum of one. If omitted, will return a maximum of one.
     *     @type bool $filter_profanity
     *           Optional. If set to `true`, the server will attempt to filter out
     *           profanities, replacing all but the initial character in each filtered word
     *           with asterisks, e.g. "f***". If set to `false` or omitted, profanities
     *           won't be filtered out.
     *     @type \Google\Cloud\VideoIntelligence\V1\SpeechContext[]|\Google\Protobuf\Internal\RepeatedField $speech_contexts
     *           Optional. A means to provide context to assist the speech recognition.
     *     @type bool $enable_automatic_punctuation
     *           Optional. If 'true', adds punctuation to recognition result hypotheses.
     *           This feature is only available in select languages. Setting this for
     *           requests in other languages has no effect at all. The default 'false' value
     *           does not add punctuation to result hypotheses. NOTE: "This is currently
     *           offered as an experimental service, complimentary to all users. In the
     *           future this may be exclusively available as a premium feature."
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $audio_tracks
     *           Optional. For file formats, such as MXF or MKV, supporting multiple audio
     *           tracks, specify up to two tracks. Default: track 0.
     *     @type bool $enable_speaker_diarization
     *           Optional. If 'true', enables speaker detection for each recognized word in
     *           the top alternative of the recognition result using a speaker_tag provided
     *           in the WordInfo.
     *           Note: When this is true, we send all the words from the beginning of the
     *           audio for the top alternative in every consecutive response.
     *           This is done in order to improve our speaker tags as our models learn to
     *           identify the speakers in the conversation over time.
     *     @type int $diarization_speaker_count
     *           Optional. If set, specifies the estimated number of speakers in the
     *           conversation. If not set, defaults to '2'. Ignored unless
     *           enable_speaker_diarization is set to true.
     *     @type bool $enable_word_confidence
     *           Optional. If `true`, the top result includes a list of words and the
     *           confidence for those words. If `false`, no word-level confidence
     *           information is returned. The default is `false`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Videointelligence\V1\VideoIntelligence::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. *Required* The language of the supplied audio as a
     * [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt) language tag.
     * Example: "en-US".
     * See [Language Support](https://cloud.google.com/speech/docs/languages)
     * for a list of the currently supported language codes.
     *
     * Generated from protobuf field <code>string language_code = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Required. *Required* The language of the supplied audio as a
     * [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt) language tag.
     * Example: "en-US".
     * See [Language Support](https://cloud.google.com/speech/docs/languages)
     * for a list of the currently supported language codes.
     *
     * Generated from protobuf field <code>string language_code = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

    /**
     * Optional. Maximum number of recognition hypotheses to be returned.
     * Specifically, the maximum number of `SpeechRecognitionAlternative` messages
     * within each `SpeechTranscription`. The server may return fewer than
     * `max_alternatives`. Valid values are `0`-`30`. A value of `0` or `1` will
     * return a maximum of one. If omitted, will return a maximum of one.
     *
     * Generated from protobuf field <code>int32 max_alternatives = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getMaxAlternatives()
    {
        return $this->max_alternatives;
    }

    /**
     * Optional. Maximum number of recognition hypotheses to be returned.
     * Specifically, the maximum number of `SpeechRecognitionAlternative` messages
     * within each `SpeechTranscription`. The server may return fewer than
     * `max_alternatives`. Valid values are `0`-`30`. A value of `0` or `1` will
     * return a maximum of one. If omitted, will return a maximum of one.
     *
     * Generated from protobuf field <code>int32 max_alternatives = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setMaxAlternatives($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_alternatives = $var;

        return $this;
    }

    /**
     * Optional. If set to `true`, the server will attempt to filter out
     * profanities, replacing all but the initial character in each filtered word
     * with asterisks, e.g. "f***". If set to `false` or omitted, profanities
     * won't be filtered out.
     *
     * Generated from protobuf field <code>bool filter_profanity = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getFilterProfanity()
    {
        return $this->filter_profanity;
    }

    /**
     * Optional. If set to `true`, the server will attempt to filter out
     * profanities, replacing all but the initial character in each filtered word
     * with asterisks, e.g. "f***". If set to `false` or omitted, profanities
     * won't be filtered out.
     *
     * Generated from protobuf field <code>bool filter_profanity = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setFilterProfanity($var)
    {
        GPBUtil::checkBool($var);
        $this->filter_profanity = $var;

        return $this;
    }

    /**
     * Optional. A means to provide context to assist the speech recognition.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.SpeechContext speech_contexts = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSpeechContexts()
    {
        return $this->speech_contexts;
    }

    /**
     * Optional. A means to provide context to assist the speech recognition.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.SpeechContext speech_contexts = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\VideoIntelligence\V1\SpeechContext[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSpeechContexts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VideoIntelligence\V1\SpeechContext::class);
        $this->speech_contexts = $arr;

        return $this;
    }

    /**
     * Optional. If 'true', adds punctuation to recognition result hypotheses.
     * This feature is only available in select languages. Setting this for
     * requests in other languages has no effect at all. The default 'false' value
     * does not add punctuation to result hypotheses. NOTE: "This is currently
     * offered as an experimental service, complimentary to all users. In the
     * future this may be exclusively available as a premium feature."
     *
     * Generated from protobuf field <code>bool enable_automatic_punctuation = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getEnableAutomaticPunctuation()
    {
        return $this->enable_automatic_punctuation;
    }

    /**
     * Optional. If 'true', adds punctuation to recognition result hypotheses.
     * This feature is only available in select languages. Setting this for
     * requests in other languages has no effect at all. The default 'false' value
     * does not add punctuation to result hypotheses. NOTE: "This is currently
     * offered as an experimental service, complimentary to all users. In the
     * future this may be exclusively available as a premium feature."
     *
     * Generated from protobuf field <code>bool enable_automatic_punctuation = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableAutomaticPunctuation($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_automatic_punctuation = $var;

        return $this;
    }

    /**
     * Optional. For file formats, such as MXF or MKV, supporting multiple audio
     * tracks, specify up to two tracks. Default: track 0.
     *
     * Generated from protobuf field <code>repeated int32 audio_tracks = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAudioTracks()
    {
        return $this->audio_tracks;
    }

    /**
     * Optional. For file formats, such as MXF or MKV, supporting multiple audio
     * tracks, specify up to two tracks. Default: track 0.
     *
     * Generated from protobuf field <code>repeated int32 audio_tracks = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAudioTracks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->audio_tracks = $arr;

        return $this;
    }

    /**
     * Optional. If 'true', enables speaker detection for each recognized word in
     * the top alternative of the recognition result using a speaker_tag provided
     * in the WordInfo.
     * Note: When this is true, we send all the words from the beginning of the
     * audio for the top alternative in every consecutive response.
     * This is done in order to improve our speaker tags as our models learn to
     * identify the speakers in the conversation over time.
     *
     * Generated from protobuf field <code>bool enable_speaker_diarization = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getEnableSpeakerDiarization()
    {
        return $this->enable_speaker_diarization;
    }

    /**
     * Optional. If 'true', enables speaker detection for each recognized word in
     * the top alternative of the recognition result using a speaker_tag provided
     * in the WordInfo.
     * Note: When this is true, we send all the words from the beginning of the
     * audio for the top alternative in every consecutive response.
     * This is done in order to improve our speaker tags as our models learn to
     * identify the speakers in the conversation over time.
     *
     * Generated from protobuf field <code>bool enable_speaker_diarization = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableSpeakerDiarization($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_speaker_diarization = $var;

        return $this;
    }

    /**
     * Optional. If set, specifies the estimated number of speakers in the
     * conversation. If not set, defaults to '2'. Ignored unless
     * enable_speaker_diarization is set to true.
     *
     * Generated from protobuf field <code>int32 diarization_speaker_count = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getDiarizationSpeakerCount()
    {
        return $this->diarization_speaker_count;
    }

    /**
     * Optional. If set, specifies the estimated number of speakers in the
     * conversation. If not set, defaults to '2'. Ignored unless
     * enable_speaker_diarization is set to true.
     *
     * Generated from protobuf field <code>int32 diarization_speaker_count = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setDiarizationSpeakerCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->diarization_speaker_count = $var;

        return $this;
    }

    /**
     * Optional. If `true`, the top result includes a list of words and the
     * confidence for those words. If `false`, no word-level confidence
     * information is returned. The default is `false`.
     *
     * Generated from protobuf field <code>bool enable_word_confidence = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getEnableWordConfidence()
    {
        return $this->enable_word_confidence;
    }

    /**
     * Optional. If `true`, the top result includes a list of words and the
     * confidence for those words. If `false`, no word-level confidence
     * information is returned. The default is `false`.
     *
     * Generated from protobuf field <code>bool enable_word_confidence = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableWordConfidence($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_word_confidence = $var;

        return $this;
    }

}

