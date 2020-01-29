<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/session.proto

namespace GPBMetadata\Google\Cloud\Dialogflow\V2;

class Session
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Cloud\Dialogflow\V2\AudioConfig::initOnce();
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Context::initOnce();
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Intent::initOnce();
        \GPBMetadata\Google\Cloud\Dialogflow\V2\SessionEntityType::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Type\Latlng::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a8e220a28676f6f676c652f636c6f75642f6469616c6f67666c6f772f76" .
            "322f73657373696f6e2e70726f746f121a676f6f676c652e636c6f75642e" .
            "6469616c6f67666c6f772e76321a17676f6f676c652f6170692f636c6965" .
            "6e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f626568" .
            "6176696f722e70726f746f1a2d676f6f676c652f636c6f75642f6469616c" .
            "6f67666c6f772f76322f617564696f5f636f6e6669672e70726f746f1a28" .
            "676f6f676c652f636c6f75642f6469616c6f67666c6f772f76322f636f6e" .
            "746578742e70726f746f1a27676f6f676c652f636c6f75642f6469616c6f" .
            "67666c6f772f76322f696e74656e742e70726f746f1a34676f6f676c652f" .
            "636c6f75642f6469616c6f67666c6f772f76322f73657373696f6e5f656e" .
            "746974795f747970652e70726f746f1a1e676f6f676c652f70726f746f62" .
            "75662f6475726174696f6e2e70726f746f1a1c676f6f676c652f70726f74" .
            "6f6275662f7374727563742e70726f746f1a17676f6f676c652f7270632f" .
            "7374617475732e70726f746f1a18676f6f676c652f747970652f6c61746c" .
            "6e672e70726f746f22a0020a13446574656374496e74656e745265717565" .
            "737412140a0773657373696f6e1801200128094203e0410212460a0c7175" .
            "6572795f706172616d7318022001280b322b2e676f6f676c652e636c6f75" .
            "642e6469616c6f67666c6f772e76322e5175657279506172616d65746572" .
            "734203e0410112400a0b71756572795f696e70757418032001280b32262e" .
            "676f6f676c652e636c6f75642e6469616c6f67666c6f772e76322e517565" .
            "7279496e7075744203e04102124f0a136f75747075745f617564696f5f63" .
            "6f6e66696718042001280b322d2e676f6f676c652e636c6f75642e646961" .
            "6c6f67666c6f772e76322e4f7574707574417564696f436f6e6669674203" .
            "e0410112180a0b696e7075745f617564696f18052001280c4203e0410122" .
            "f8010a14446574656374496e74656e74526573706f6e736512130a0b7265" .
            "73706f6e73655f6964180120012809123d0a0c71756572795f726573756c" .
            "7418022001280b32272e676f6f676c652e636c6f75642e6469616c6f6766" .
            "6c6f772e76322e5175657279526573756c74122a0a0e776562686f6f6b5f" .
            "73746174757318032001280b32122e676f6f676c652e7270632e53746174" .
            "757312140a0c6f75747075745f617564696f18042001280c124a0a136f75" .
            "747075745f617564696f5f636f6e66696718062001280b322d2e676f6f67" .
            "6c652e636c6f75642e6469616c6f67666c6f772e76322e4f757470757441" .
            "7564696f436f6e666967229f030a0f5175657279506172616d6574657273" .
            "12160a0974696d655f7a6f6e651801200128094203e04101122e0a0c6765" .
            "6f5f6c6f636174696f6e18022001280b32132e676f6f676c652e74797065" .
            "2e4c61744c6e674203e04101123a0a08636f6e746578747318032003280b" .
            "32232e676f6f676c652e636c6f75642e6469616c6f67666c6f772e76322e" .
            "436f6e746578744203e04101121b0a0e72657365745f636f6e7465787473" .
            "1804200128084203e0410112500a1473657373696f6e5f656e746974795f" .
            "747970657318052003280b322d2e676f6f676c652e636c6f75642e646961" .
            "6c6f67666c6f772e76322e53657373696f6e456e74697479547970654203" .
            "e04101122d0a077061796c6f616418062001280b32172e676f6f676c652e" .
            "70726f746f6275662e5374727563744203e04101126a0a2173656e74696d" .
            "656e745f616e616c797369735f726571756573745f636f6e666967180a20" .
            "01280b323a2e676f6f676c652e636c6f75642e6469616c6f67666c6f772e" .
            "76322e53656e74696d656e74416e616c7973697352657175657374436f6e" .
            "6669674203e0410122cb010a0a5175657279496e70757412440a0c617564" .
            "696f5f636f6e66696718012001280b322c2e676f6f676c652e636c6f7564" .
            "2e6469616c6f67666c6f772e76322e496e707574417564696f436f6e6669" .
            "67480012350a047465787418022001280b32252e676f6f676c652e636c6f" .
            "75642e6469616c6f67666c6f772e76322e54657874496e70757448001237" .
            "0a056576656e7418032001280b32262e676f6f676c652e636c6f75642e64" .
            "69616c6f67666c6f772e76322e4576656e74496e707574480042070a0569" .
            "6e7075742290050a0b5175657279526573756c7412120a0a71756572795f" .
            "7465787418012001280912150a0d6c616e67756167655f636f6465180f20" .
            "01280912250a1d7370656563685f7265636f676e6974696f6e5f636f6e66" .
            "6964656e6365180220012802120e0a06616374696f6e180320012809122b" .
            "0a0a706172616d657465727318042001280b32172e676f6f676c652e7072" .
            "6f746f6275662e53747275637412230a1b616c6c5f72657175697265645f" .
            "706172616d735f70726573656e7418052001280812180a1066756c66696c" .
            "6c6d656e745f7465787418062001280912480a1466756c66696c6c6d656e" .
            "745f6d6573736167657318072003280b322a2e676f6f676c652e636c6f75" .
            "642e6469616c6f67666c6f772e76322e496e74656e742e4d657373616765" .
            "12160a0e776562686f6f6b5f736f7572636518082001280912300a0f7765" .
            "62686f6f6b5f7061796c6f616418092001280b32172e676f6f676c652e70" .
            "726f746f6275662e537472756374123c0a0f6f75747075745f636f6e7465" .
            "787473180a2003280b32232e676f6f676c652e636c6f75642e6469616c6f" .
            "67666c6f772e76322e436f6e7465787412320a06696e74656e74180b2001" .
            "280b32222e676f6f676c652e636c6f75642e6469616c6f67666c6f772e76" .
            "322e496e74656e7412230a1b696e74656e745f646574656374696f6e5f63" .
            "6f6e666964656e6365180c2001280212300a0f646961676e6f737469635f" .
            "696e666f180e2001280b32172e676f6f676c652e70726f746f6275662e53" .
            "747275637412560a1973656e74696d656e745f616e616c797369735f7265" .
            "73756c7418112001280b32332e676f6f676c652e636c6f75642e6469616c" .
            "6f67666c6f772e76322e53656e74696d656e74416e616c79736973526573" .
            "756c7422ca020a1c53747265616d696e67446574656374496e74656e7452" .
            "65717565737412140a0773657373696f6e1801200128094203e041021246" .
            "0a0c71756572795f706172616d7318022001280b322b2e676f6f676c652e" .
            "636c6f75642e6469616c6f67666c6f772e76322e5175657279506172616d" .
            "65746572734203e0410112400a0b71756572795f696e7075741803200128" .
            "0b32262e676f6f676c652e636c6f75642e6469616c6f67666c6f772e7632" .
            "2e5175657279496e7075744203e04102121f0a1073696e676c655f757474" .
            "6572616e636518042001280842051801e04101124f0a136f75747075745f" .
            "617564696f5f636f6e66696718052001280b322d2e676f6f676c652e636c" .
            "6f75642e6469616c6f67666c6f772e76322e4f7574707574417564696f43" .
            "6f6e6669674203e0410112180a0b696e7075745f617564696f1806200128" .
            "0c4203e0410122d5020a1d53747265616d696e67446574656374496e7465" .
            "6e74526573706f6e736512130a0b726573706f6e73655f69641801200128" .
            "0912520a127265636f676e6974696f6e5f726573756c7418022001280b32" .
            "362e676f6f676c652e636c6f75642e6469616c6f67666c6f772e76322e53" .
            "747265616d696e675265636f676e6974696f6e526573756c74123d0a0c71" .
            "756572795f726573756c7418032001280b32272e676f6f676c652e636c6f" .
            "75642e6469616c6f67666c6f772e76322e5175657279526573756c74122a" .
            "0a0e776562686f6f6b5f73746174757318042001280b32122e676f6f676c" .
            "652e7270632e53746174757312140a0c6f75747075745f617564696f1805" .
            "2001280c124a0a136f75747075745f617564696f5f636f6e666967180620" .
            "01280b322d2e676f6f676c652e636c6f75642e6469616c6f67666c6f772e" .
            "76322e4f7574707574417564696f436f6e6669672286030a1a5374726561" .
            "6d696e675265636f676e6974696f6e526573756c7412580a0c6d65737361" .
            "67655f7479706518012001280e32422e676f6f676c652e636c6f75642e64" .
            "69616c6f67666c6f772e76322e53747265616d696e675265636f676e6974" .
            "696f6e526573756c742e4d6573736167655479706512120a0a7472616e73" .
            "637269707418022001280912100a0869735f66696e616c18032001280812" .
            "120a0a636f6e666964656e636518042001280212440a107370656563685f" .
            "776f72645f696e666f18072003280b322a2e676f6f676c652e636c6f7564" .
            "2e6469616c6f67666c6f772e76322e537065656368576f7264496e666f12" .
            "340a117370656563685f656e645f6f666673657418082001280b32192e67" .
            "6f6f676c652e70726f746f6275662e4475726174696f6e22580a0b4d6573" .
            "7361676554797065121c0a184d4553534147455f545950455f554e535045" .
            "4349464945441000120e0a0a5452414e5343524950541001121b0a17454e" .
            "445f4f465f53494e474c455f5554544552414e43451002223a0a09546578" .
            "74496e70757412110a04746578741801200128094203e04102121a0a0d6c" .
            "616e67756167655f636f64651802200128094203e04102226d0a0a457665" .
            "6e74496e70757412110a046e616d651801200128094203e0410212300a0a" .
            "706172616d657465727318022001280b32172e676f6f676c652e70726f74" .
            "6f6275662e5374727563744203e04101121a0a0d6c616e67756167655f63" .
            "6f64651803200128094203e04102224b0a1e53656e74696d656e74416e61" .
            "6c7973697352657175657374436f6e66696712290a1c616e616c797a655f" .
            "71756572795f746578745f73656e74696d656e741801200128084203e041" .
            "01225e0a1753656e74696d656e74416e616c79736973526573756c741243" .
            "0a1471756572795f746578745f73656e74696d656e7418012001280b3225" .
            "2e676f6f676c652e636c6f75642e6469616c6f67666c6f772e76322e5365" .
            "6e74696d656e74222d0a0953656e74696d656e74120d0a0573636f726518" .
            "012001280212110a096d61676e697475646518022001280232e6030a0853" .
            "657373696f6e7312ca010a0c446574656374496e74656e74122f2e676f6f" .
            "676c652e636c6f75642e6469616c6f67666c6f772e76322e446574656374" .
            "496e74656e74526571756573741a302e676f6f676c652e636c6f75642e64" .
            "69616c6f67666c6f772e76322e446574656374496e74656e74526573706f" .
            "6e7365225782d3e493023b22362f76322f7b73657373696f6e3d70726f6a" .
            "656374732f2a2f6167656e742f73657373696f6e732f2a7d3a6465746563" .
            "74496e74656e743a012ada411373657373696f6e2c71756572795f696e70" .
            "75741292010a1553747265616d696e67446574656374496e74656e741238" .
            "2e676f6f676c652e636c6f75642e6469616c6f67666c6f772e76322e5374" .
            "7265616d696e67446574656374496e74656e74526571756573741a392e67" .
            "6f6f676c652e636c6f75642e6469616c6f67666c6f772e76322e53747265" .
            "616d696e67446574656374496e74656e74526573706f6e73652200280130" .
            "011a78ca41196469616c6f67666c6f772e676f6f676c65617069732e636f" .
            "6dd2415968747470733a2f2f7777772e676f6f676c65617069732e636f6d" .
            "2f617574682f636c6f75642d706c6174666f726d2c68747470733a2f2f77" .
            "77772e676f6f676c65617069732e636f6d2f617574682f6469616c6f6766" .
            "6c6f77429b010a1e636f6d2e676f6f676c652e636c6f75642e6469616c6f" .
            "67666c6f772e7632420c53657373696f6e50726f746f50015a44676f6f67" .
            "6c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c6561" .
            "7069732f636c6f75642f6469616c6f67666c6f772f76323b6469616c6f67" .
            "666c6f77f80101a202024446aa021a476f6f676c652e436c6f75642e4469" .
            "616c6f67666c6f772e5632620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

