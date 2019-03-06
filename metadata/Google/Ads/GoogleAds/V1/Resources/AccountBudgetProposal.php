<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/account_budget_proposal.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V1\Resources;

class AccountBudgetProposal
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\AccountBudgetProposalStatus::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\AccountBudgetProposalType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\SpendingLimitType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\TimeType::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a94120a3f676f6f676c652f6164732f676f6f676c656164732f76312f72" .
            "65736f75726365732f6163636f756e745f6275646765745f70726f706f73" .
            "616c2e70726f746f1221676f6f676c652e6164732e676f6f676c65616473" .
            "2e76312e7265736f75726365731a40676f6f676c652f6164732f676f6f67" .
            "6c656164732f76312f656e756d732f6163636f756e745f6275646765745f" .
            "70726f706f73616c5f747970652e70726f746f1a37676f6f676c652f6164" .
            "732f676f6f676c656164732f76312f656e756d732f7370656e64696e675f" .
            "6c696d69745f747970652e70726f746f1a2d676f6f676c652f6164732f67" .
            "6f6f676c656164732f76312f656e756d732f74696d655f747970652e7072" .
            "6f746f1a1e676f6f676c652f70726f746f6275662f77726170706572732e" .
            "70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e" .
            "70726f746f22b30d0a154163636f756e7442756467657450726f706f7361" .
            "6c12150a0d7265736f757263655f6e616d6518012001280912270a026964" .
            "180e2001280b321b2e676f6f676c652e70726f746f6275662e496e743634" .
            "56616c756512330a0d62696c6c696e675f736574757018022001280b321c" .
            "2e676f6f676c652e70726f746f6275662e537472696e6756616c75651234" .
            "0a0e6163636f756e745f62756467657418032001280b321c2e676f6f676c" .
            "652e70726f746f6275662e537472696e6756616c7565126d0a0d70726f70" .
            "6f73616c5f7479706518042001280e32562e676f6f676c652e6164732e67" .
            "6f6f676c656164732e76312e656e756d732e4163636f756e744275646765" .
            "7450726f706f73616c54797065456e756d2e4163636f756e744275646765" .
            "7450726f706f73616c54797065126a0a06737461747573180f2001280e32" .
            "5a2e676f6f676c652e6164732e676f6f676c656164732e76312e656e756d" .
            "732e4163636f756e7442756467657450726f706f73616c53746174757345" .
            "6e756d2e4163636f756e7442756467657450726f706f73616c5374617475" .
            "7312330a0d70726f706f7365645f6e616d6518052001280b321c2e676f6f" .
            "676c652e70726f746f6275662e537472696e6756616c7565123e0a186170" .
            "70726f7665645f73746172745f646174655f74696d6518142001280b321c" .
            "2e676f6f676c652e70726f746f6275662e537472696e6756616c75651244" .
            "0a1e70726f706f7365645f70757263686173655f6f726465725f6e756d62" .
            "6572180c2001280b321c2e676f6f676c652e70726f746f6275662e537472" .
            "696e6756616c756512340a0e70726f706f7365645f6e6f746573180d2001" .
            "280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c" .
            "756512380a126372656174696f6e5f646174655f74696d6518102001280b" .
            "321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565" .
            "12380a12617070726f76616c5f646174655f74696d6518112001280b321c" .
            "2e676f6f676c652e70726f746f6275662e537472696e6756616c75651240" .
            "0a1870726f706f7365645f73746172745f646174655f74696d6518122001" .
            "280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c" .
            "7565480012580a1870726f706f7365645f73746172745f74696d655f7479" .
            "706518072001280e32342e676f6f676c652e6164732e676f6f676c656164" .
            "732e76312e656e756d732e54696d6554797065456e756d2e54696d655479" .
            "70654800123e0a1670726f706f7365645f656e645f646174655f74696d65" .
            "18132001280b321c2e676f6f676c652e70726f746f6275662e537472696e" .
            "6756616c7565480112560a1670726f706f7365645f656e645f74696d655f" .
            "7479706518092001280e32342e676f6f676c652e6164732e676f6f676c65" .
            "6164732e76312e656e756d732e54696d6554797065456e756d2e54696d65" .
            "547970654801123e0a16617070726f7665645f656e645f646174655f7469" .
            "6d6518152001280b321c2e676f6f676c652e70726f746f6275662e537472" .
            "696e6756616c7565480212560a16617070726f7665645f656e645f74696d" .
            "655f7479706518162001280e32342e676f6f676c652e6164732e676f6f67" .
            "6c656164732e76312e656e756d732e54696d6554797065456e756d2e5469" .
            "6d6554797065480212450a1e70726f706f7365645f7370656e64696e675f" .
            "6c696d69745f6d6963726f73180a2001280b321b2e676f6f676c652e7072" .
            "6f746f6275662e496e74363456616c75654803126e0a1c70726f706f7365" .
            "645f7370656e64696e675f6c696d69745f74797065180b2001280e32462e" .
            "676f6f676c652e6164732e676f6f676c656164732e76312e656e756d732e" .
            "5370656e64696e674c696d697454797065456e756d2e5370656e64696e67" .
            "4c696d697454797065480312450a1e617070726f7665645f7370656e6469" .
            "6e675f6c696d69745f6d6963726f7318172001280b321b2e676f6f676c65" .
            "2e70726f746f6275662e496e74363456616c75654804126e0a1c61707072" .
            "6f7665645f7370656e64696e675f6c696d69745f7479706518182001280e" .
            "32462e676f6f676c652e6164732e676f6f676c656164732e76312e656e75" .
            "6d732e5370656e64696e674c696d697454797065456e756d2e5370656e64" .
            "696e674c696d697454797065480442150a1370726f706f7365645f737461" .
            "72745f74696d6542130a1170726f706f7365645f656e645f74696d654213" .
            "0a11617070726f7665645f656e645f74696d6542190a1770726f706f7365" .
            "645f7370656e64696e675f6c696d697442190a17617070726f7665645f73" .
            "70656e64696e675f6c696d69744287020a25636f6d2e676f6f676c652e61" .
            "64732e676f6f676c656164732e76312e7265736f7572636573421a416363" .
            "6f756e7442756467657450726f706f73616c50726f746f50015a4a676f6f" .
            "676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65" .
            "617069732f6164732f676f6f676c656164732f76312f7265736f75726365" .
            "733b7265736f7572636573a20203474141aa0221476f6f676c652e416473" .
            "2e476f6f676c654164732e56312e5265736f7572636573ca0221476f6f67" .
            "6c655c4164735c476f6f676c654164735c56315c5265736f7572636573ea" .
            "0225476f6f676c653a3a4164733a3a476f6f676c654164733a3a56313a3a" .
            "5265736f7572636573620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
