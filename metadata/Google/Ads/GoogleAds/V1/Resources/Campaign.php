<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/campaign.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V1\Resources;

class Campaign
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\Bidding::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\CustomParameter::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\FrequencyCap::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\RealTimeBiddingSetting::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\TargetingSetting::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\AdServingOptimizationStatus::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\AdvertisingChannelSubType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\AdvertisingChannelType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\BiddingStrategyType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\BrandSafetySuitability::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\CampaignServingStatus::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\CampaignStatus::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\NegativeGeoTargetType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\PositiveGeoTargetType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\VanityPharmaDisplayUrlMode::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\VanityPharmaText::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a812e0a30676f6f676c652f6164732f676f6f676c656164732f76312f72" .
            "65736f75726365732f63616d706169676e2e70726f746f1221676f6f676c" .
            "652e6164732e676f6f676c656164732e76312e7265736f75726365731a35" .
            "676f6f676c652f6164732f676f6f676c656164732f76312f636f6d6d6f6e" .
            "2f637573746f6d5f706172616d657465722e70726f746f1a32676f6f676c" .
            "652f6164732f676f6f676c656164732f76312f636f6d6d6f6e2f66726571" .
            "75656e63795f6361702e70726f746f1a3e676f6f676c652f6164732f676f" .
            "6f676c656164732f76312f636f6d6d6f6e2f7265616c5f74696d655f6269" .
            "6464696e675f73657474696e672e70726f746f1a36676f6f676c652f6164" .
            "732f676f6f676c656164732f76312f636f6d6d6f6e2f746172676574696e" .
            "675f73657474696e672e70726f746f1a42676f6f676c652f6164732f676f" .
            "6f676c656164732f76312f656e756d732f61645f73657276696e675f6f70" .
            "74696d697a6174696f6e5f7374617475732e70726f746f1a40676f6f676c" .
            "652f6164732f676f6f676c656164732f76312f656e756d732f6164766572" .
            "746973696e675f6368616e6e656c5f7375625f747970652e70726f746f1a" .
            "3c676f6f676c652f6164732f676f6f676c656164732f76312f656e756d73" .
            "2f6164766572746973696e675f6368616e6e656c5f747970652e70726f74" .
            "6f1a39676f6f676c652f6164732f676f6f676c656164732f76312f656e75" .
            "6d732f62696464696e675f73747261746567795f747970652e70726f746f" .
            "1a3c676f6f676c652f6164732f676f6f676c656164732f76312f656e756d" .
            "732f6272616e645f7361666574795f737569746162696c6974792e70726f" .
            "746f1a3b676f6f676c652f6164732f676f6f676c656164732f76312f656e" .
            "756d732f63616d706169676e5f73657276696e675f7374617475732e7072" .
            "6f746f1a33676f6f676c652f6164732f676f6f676c656164732f76312f65" .
            "6e756d732f63616d706169676e5f7374617475732e70726f746f1a3c676f" .
            "6f676c652f6164732f676f6f676c656164732f76312f656e756d732f6e65" .
            "6761746976655f67656f5f7461726765745f747970652e70726f746f1a3c" .
            "676f6f676c652f6164732f676f6f676c656164732f76312f656e756d732f" .
            "706f7369746976655f67656f5f7461726765745f747970652e70726f746f" .
            "1a42676f6f676c652f6164732f676f6f676c656164732f76312f656e756d" .
            "732f76616e6974795f706861726d615f646973706c61795f75726c5f6d6f" .
            "64652e70726f746f1a36676f6f676c652f6164732f676f6f676c65616473" .
            "2f76312f656e756d732f76616e6974795f706861726d615f746578742e70" .
            "726f746f1a1e676f6f676c652f70726f746f6275662f7772617070657273" .
            "2e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e73" .
            "2e70726f746f22dc230a0843616d706169676e12150a0d7265736f757263" .
            "655f6e616d6518012001280912270a02696418032001280b321b2e676f6f" .
            "676c652e70726f746f6275662e496e74363456616c7565122a0a046e616d" .
            "6518042001280b321c2e676f6f676c652e70726f746f6275662e53747269" .
            "6e6756616c756512500a0673746174757318052001280e32402e676f6f67" .
            "6c652e6164732e676f6f676c656164732e76312e656e756d732e43616d70" .
            "6169676e537461747573456e756d2e43616d706169676e53746174757312" .
            "660a0e73657276696e675f73746174757318152001280e324e2e676f6f67" .
            "6c652e6164732e676f6f676c656164732e76312e656e756d732e43616d70" .
            "6169676e53657276696e67537461747573456e756d2e43616d706169676e" .
            "53657276696e675374617475731282010a1e61645f73657276696e675f6f" .
            "7074696d697a6174696f6e5f73746174757318082001280e325a2e676f6f" .
            "676c652e6164732e676f6f676c656164732e76312e656e756d732e416453" .
            "657276696e674f7074696d697a6174696f6e537461747573456e756d2e41" .
            "6453657276696e674f7074696d697a6174696f6e53746174757312720a18" .
            "6164766572746973696e675f6368616e6e656c5f7479706518092001280e" .
            "32502e676f6f676c652e6164732e676f6f676c656164732e76312e656e75" .
            "6d732e4164766572746973696e674368616e6e656c54797065456e756d2e" .
            "4164766572746973696e674368616e6e656c54797065127c0a1c61647665" .
            "72746973696e675f6368616e6e656c5f7375625f74797065180a2001280e" .
            "32562e676f6f676c652e6164732e676f6f676c656164732e76312e656e75" .
            "6d732e4164766572746973696e674368616e6e656c53756254797065456e" .
            "756d2e4164766572746973696e674368616e6e656c53756254797065123b" .
            "0a15747261636b696e675f75726c5f74656d706c617465180b2001280b32" .
            "1c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512" .
            "4e0a1575726c5f637573746f6d5f706172616d6574657273180c2003280b" .
            "322f2e676f6f676c652e6164732e676f6f676c656164732e76312e636f6d" .
            "6d6f6e2e437573746f6d506172616d6574657212590a197265616c5f7469" .
            "6d655f62696464696e675f73657474696e6718272001280b32362e676f6f" .
            "676c652e6164732e676f6f676c656164732e76312e636f6d6d6f6e2e5265" .
            "616c54696d6542696464696e6753657474696e6712550a106e6574776f72" .
            "6b5f73657474696e6773180e2001280b323b2e676f6f676c652e6164732e" .
            "676f6f676c656164732e76312e7265736f75726365732e43616d70616967" .
            "6e2e4e6574776f726b53657474696e677312530a0d686f74656c5f736574" .
            "74696e6718202001280b323c2e676f6f676c652e6164732e676f6f676c65" .
            "6164732e76312e7265736f75726365732e43616d706169676e2e486f7465" .
            "6c53657474696e67496e666f12670a1a64796e616d69635f736561726368" .
            "5f6164735f73657474696e6718212001280b32432e676f6f676c652e6164" .
            "732e676f6f676c656164732e76312e7265736f75726365732e43616d7061" .
            "69676e2e44796e616d696353656172636841647353657474696e6712550a" .
            "1073686f7070696e675f73657474696e6718242001280b323b2e676f6f67" .
            "6c652e6164732e676f6f676c656164732e76312e7265736f75726365732e" .
            "43616d706169676e2e53686f7070696e6753657474696e67124b0a117461" .
            "72676574696e675f73657474696e67182b2001280b32302e676f6f676c65" .
            "2e6164732e676f6f676c656164732e76312e636f6d6d6f6e2e5461726765" .
            "74696e6753657474696e6712610a1767656f5f7461726765745f74797065" .
            "5f73657474696e67182f2001280b32402e676f6f676c652e6164732e676f" .
            "6f676c656164732e76312e7265736f75726365732e43616d706169676e2e" .
            "47656f5461726765745479706553657474696e6712350a0f63616d706169" .
            "676e5f62756467657418062001280b321c2e676f6f676c652e70726f746f" .
            "6275662e537472696e6756616c756512690a1562696464696e675f737472" .
            "61746567795f7479706518162001280e324a2e676f6f676c652e6164732e" .
            "676f6f676c656164732e76312e656e756d732e42696464696e6753747261" .
            "7465677954797065456e756d2e42696464696e6753747261746567795479" .
            "706512300a0a73746172745f6461746518132001280b321c2e676f6f676c" .
            "652e70726f746f6275662e537472696e6756616c7565122e0a08656e645f" .
            "6461746518142001280b321c2e676f6f676c652e70726f746f6275662e53" .
            "7472696e6756616c756512360a1066696e616c5f75726c5f737566666978" .
            "18262001280b321c2e676f6f676c652e70726f746f6275662e537472696e" .
            "6756616c756512490a0e6672657175656e63795f6361707318282003280b" .
            "32312e676f6f676c652e6164732e676f6f676c656164732e76312e636f6d" .
            "6d6f6e2e4672657175656e6379436170456e74727912780a1e766964656f" .
            "5f6272616e645f7361666574795f737569746162696c697479182a200128" .
            "0e32502e676f6f676c652e6164732e676f6f676c656164732e76312e656e" .
            "756d732e4272616e64536166657479537569746162696c697479456e756d" .
            "2e4272616e64536166657479537569746162696c697479124f0a0d76616e" .
            "6974795f706861726d61182c2001280b32382e676f6f676c652e6164732e" .
            "676f6f676c656164732e76312e7265736f75726365732e43616d70616967" .
            "6e2e56616e697479506861726d6112610a1673656c6563746976655f6f70" .
            "74696d697a6174696f6e182d2001280b32412e676f6f676c652e6164732e" .
            "676f6f676c656164732e76312e7265736f75726365732e43616d70616967" .
            "6e2e53656c6563746976654f7074696d697a6174696f6e12550a10747261" .
            "636b696e675f73657474696e67182e2001280b323b2e676f6f676c652e61" .
            "64732e676f6f676c656164732e76312e7265736f75726365732e43616d70" .
            "6169676e2e547261636b696e6753657474696e6712380a1062696464696e" .
            "675f737472617465677918172001280b321c2e676f6f676c652e70726f74" .
            "6f6275662e537472696e6756616c75654800123f0a0a6d616e75616c5f63" .
            "706318182001280b32292e676f6f676c652e6164732e676f6f676c656164" .
            "732e76312e636f6d6d6f6e2e4d616e75616c4370634800123f0a0a6d616e" .
            "75616c5f63706d18192001280b32292e676f6f676c652e6164732e676f6f" .
            "676c656164732e76312e636f6d6d6f6e2e4d616e75616c43706d4800123f" .
            "0a0a6d616e75616c5f63707618252001280b32292e676f6f676c652e6164" .
            "732e676f6f676c656164732e76312e636f6d6d6f6e2e4d616e75616c4370" .
            "76480012530a146d6178696d697a655f636f6e76657273696f6e73181e20" .
            "01280b32332e676f6f676c652e6164732e676f6f676c656164732e76312e" .
            "636f6d6d6f6e2e4d6178696d697a65436f6e76657273696f6e734800125c" .
            "0a196d6178696d697a655f636f6e76657273696f6e5f76616c7565181f20" .
            "01280b32372e676f6f676c652e6164732e676f6f676c656164732e76312e" .
            "636f6d6d6f6e2e4d6178696d697a65436f6e76657273696f6e56616c7565" .
            "4800123f0a0a7461726765745f637061181a2001280b32292e676f6f676c" .
            "652e6164732e676f6f676c656164732e76312e636f6d6d6f6e2e54617267" .
            "6574437061480012580a177461726765745f696d7072657373696f6e5f73" .
            "6861726518302001280b32352e676f6f676c652e6164732e676f6f676c65" .
            "6164732e76312e636f6d6d6f6e2e546172676574496d7072657373696f6e" .
            "5368617265480012410a0b7461726765745f726f6173181d2001280b322a" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76312e636f6d6d6f" .
            "6e2e546172676574526f6173480012430a0c7461726765745f7370656e64" .
            "181b2001280b322b2e676f6f676c652e6164732e676f6f676c656164732e" .
            "76312e636f6d6d6f6e2e5461726765745370656e64480012410a0b706572" .
            "63656e745f63706318222001280b322a2e676f6f676c652e6164732e676f" .
            "6f676c656164732e76312e636f6d6d6f6e2e50657263656e744370634800" .
            "123f0a0a7461726765745f63706d18292001280b32292e676f6f676c652e" .
            "6164732e676f6f676c656164732e76312e636f6d6d6f6e2e546172676574" .
            "43706d48001a85020a0f4e6574776f726b53657474696e677312380a1474" .
            "61726765745f676f6f676c655f73656172636818012001280b321a2e676f" .
            "6f676c652e70726f746f6275662e426f6f6c56616c756512390a15746172" .
            "6765745f7365617263685f6e6574776f726b18022001280b321a2e676f6f" .
            "676c652e70726f746f6275662e426f6f6c56616c7565123a0a1674617267" .
            "65745f636f6e74656e745f6e6574776f726b18032001280b321a2e676f6f" .
            "676c652e70726f746f6275662e426f6f6c56616c756512410a1d74617267" .
            "65745f706172746e65725f7365617263685f6e6574776f726b1804200128" .
            "0b321a2e676f6f676c652e70726f746f6275662e426f6f6c56616c75651a" .
            "480a10486f74656c53657474696e67496e666f12340a0f686f74656c5f63" .
            "656e7465725f696418012001280b321b2e676f6f676c652e70726f746f62" .
            "75662e496e74363456616c75651a450a0f547261636b696e675365747469" .
            "6e6712320a0c747261636b696e675f75726c18012001280b321c2e676f6f" .
            "676c652e70726f746f6275662e537472696e6756616c75651aea010a1744" .
            "796e616d696353656172636841647353657474696e6712310a0b646f6d61" .
            "696e5f6e616d6518012001280b321c2e676f6f676c652e70726f746f6275" .
            "662e537472696e6756616c756512330a0d6c616e67756167655f636f6465" .
            "18022001280b321c2e676f6f676c652e70726f746f6275662e537472696e" .
            "6756616c7565123a0a167573655f737570706c6965645f75726c735f6f6e" .
            "6c7918032001280b321a2e676f6f676c652e70726f746f6275662e426f6f" .
            "6c56616c7565122b0a05666565647318052003280b321c2e676f6f676c65" .
            "2e70726f746f6275662e537472696e6756616c75651ae2010a0f53686f70" .
            "70696e6753657474696e6712300a0b6d65726368616e745f696418012001" .
            "280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c75" .
            "6512330a0d73616c65735f636f756e74727918022001280b321c2e676f6f" .
            "676c652e70726f746f6275662e537472696e6756616c756512360a116361" .
            "6d706169676e5f7072696f7269747918032001280b321b2e676f6f676c65" .
            "2e70726f746f6275662e496e74333256616c756512300a0c656e61626c65" .
            "5f6c6f63616c18042001280b321a2e676f6f676c652e70726f746f627566" .
            "2e426f6f6c56616c75651a510a1553656c6563746976654f7074696d697a" .
            "6174696f6e12380a12636f6e76657273696f6e5f616374696f6e73180120" .
            "03280b321c2e676f6f676c652e70726f746f6275662e537472696e675661" .
            "6c75651afa010a1447656f5461726765745479706553657474696e671270" .
            "0a18706f7369746976655f67656f5f7461726765745f7479706518012001" .
            "280e324e2e676f6f676c652e6164732e676f6f676c656164732e76312e65" .
            "6e756d732e506f73697469766547656f54617267657454797065456e756d" .
            "2e506f73697469766547656f5461726765745479706512700a186e656761" .
            "746976655f67656f5f7461726765745f7479706518022001280e324e2e67" .
            "6f6f676c652e6164732e676f6f676c656164732e76312e656e756d732e4e" .
            "6567617469766547656f54617267657454797065456e756d2e4e65676174" .
            "69766547656f546172676574547970651af3010a0c56616e697479506861" .
            "726d611280010a1e76616e6974795f706861726d615f646973706c61795f" .
            "75726c5f6d6f646518012001280e32582e676f6f676c652e6164732e676f" .
            "6f676c656164732e76312e656e756d732e56616e697479506861726d6144" .
            "6973706c617955726c4d6f6465456e756d2e56616e697479506861726d61" .
            "446973706c617955726c4d6f646512600a1276616e6974795f706861726d" .
            "615f7465787418022001280e32442e676f6f676c652e6164732e676f6f67" .
            "6c656164732e76312e656e756d732e56616e697479506861726d61546578" .
            "74456e756d2e56616e697479506861726d6154657874421b0a1963616d70" .
            "6169676e5f62696464696e675f737472617465677942fa010a25636f6d2e" .
            "676f6f676c652e6164732e676f6f676c656164732e76312e7265736f7572" .
            "636573420d43616d706169676e50726f746f50015a4a676f6f676c652e67" .
            "6f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f" .
            "6164732f676f6f676c656164732f76312f7265736f75726365733b726573" .
            "6f7572636573a20203474141aa0221476f6f676c652e4164732e476f6f67" .
            "6c654164732e56312e5265736f7572636573ca0221476f6f676c655c4164" .
            "735c476f6f676c654164735c56315c5265736f7572636573ea0225476f6f" .
            "676c653a3a4164733a3a476f6f676c654164733a3a56313a3a5265736f75" .
            "72636573620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
