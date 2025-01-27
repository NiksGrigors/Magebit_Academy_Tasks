<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

return [
    'no arguments' => [
        '<?xml version="1.0"?><arguments xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" />',
        [
            "Element 'arguments': Missing child element(s). Expected is ( argument ).\nLine: 1\nThe xml was: \n" .
            "0:<?xml version=\"1.0\"?>\n1:<arguments xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"/>\n2:\n"
        ],
    ],
    'argument without type' => [
        '<?xml version="1.0"?><arguments xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"><argument/></arguments>',
        [
            "Element 'argument': The type definition is abstract.\nLine: 1\nThe xml was: \n0:<?xml " .
            "version=\"1.0\"?>\n1:<arguments xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\">" .
            "<argument/></arguments>\n2:\n"
        ],
    ],
    'forbidden type used' => [
        '<?xml version="1.0"?><arguments xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
        <argument name="a" xsi:type="forbiddenType">v</argument></arguments>',
        [
            "Element 'argument', attribute '{http://www.w3.org/2001/XMLSchema-instance}type': The QName value " .
            "'forbiddenType' of the xsi:type attribute does not resolve to a type definition.\nLine: 2\n" .
            "The xml was: \n0:<?xml version=\"1.0\"?>\n1:<arguments " .
            "xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\">\n2:        <argument name=\"a\" " .
            "xsi:type=\"forbiddenType\">v</argument></arguments>\n3:\n",
            "Element 'argument': The type definition is abstract.\nLine: 2\nThe xml was: \n0:<?xml " .
            "version=\"1.0\"?>\n1:<arguments xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\">\n" .
            "2:        <argument name=\"a\" xsi:type=\"forbiddenType\">v</argument></arguments>\n3:\n"
        ],
    ],
    'abstract type argumentType used' => [
        '<?xml version="1.0"?><arguments xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
        <argument name="a" xsi:type="argumentType">v</argument></arguments>',
        [
            "Element 'argument': The type definition is abstract.\nLine: 2\nThe xml was: \n" .
            "0:<?xml version=\"1.0\"?>\n1:<arguments xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\">\n" .
            "2:        <argument name=\"a\" xsi:type=\"argumentType\">v</argument></arguments>\n3:\n"
        ],
    ],
    'no name attribute' => [
        '<?xml version="1.0"?><arguments xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
        <argument xsi:type="number">v</argument></arguments>',
        [
            "Element 'argument': The attribute 'name' is required but missing.\nLine: 2\nThe xml was: \n" .
            "0:<?xml version=\"1.0\"?>\n1:<arguments xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\">\n" .
            "2:        <argument xsi:type=\"number\">v</argument></arguments>\n3:\n"
        ],
    ],
    'forbidden attribute' => [
        '<?xml version="1.0"?><arguments xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
        <argument name="a" xsi:type="string" forbiddenAttribute="w">v</argument></arguments>',
        [
            "Element 'argument', attribute 'forbiddenAttribute': The attribute 'forbiddenAttribute' is not " .
            "allowed.\nLine: 2\nThe xml was: \n0:<?xml version=\"1.0\"?>\n1:<arguments " .
            "xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\">\n2:        <argument name=\"a\" " .
            "xsi:type=\"string\" forbiddenAttribute=\"w\">v</argument></arguments>\n3:\n"
        ],
    ],
    'forbidden translate attribute value for string' => [
        '<?xml version="1.0"?><arguments xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
        <argument name="a" xsi:type="string" translate="forbidden">v</argument></arguments>',
        [
            "Element 'argument', attribute 'translate': 'forbidden' is not a valid value of the atomic type " .
            "'xs:boolean'.\nLine: 2\nThe xml was: \n0:<?xml version=\"1.0\"?>\n1:<arguments " .
            "xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\">\n2:        <argument name=\"a\" " .
            "xsi:type=\"string\" translate=\"forbidden\">v</argument></arguments>\n3:\n"
        ],
    ],
    'attribute translate for non-string' => [
        '<?xml version="1.0"?><arguments xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
        <argument name="a" xsi:type="boolean" translate="true">true</argument></arguments>',
        [
            "Element 'argument', attribute 'translate': The attribute 'translate' is not allowed.\nLine: 2\nThe " .
            "xml was: \n0:<?xml version=\"1.0\"?>\n1:<arguments " .
            "xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\">\n2:        <argument name=\"a\" " .
            "xsi:type=\"boolean\" translate=\"true\">true</argument></arguments>\n3:\n"
        ],
    ],
    'null type should be empty' => [
        '<?xml version="1.0"?><arguments xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
        <argument name="a" xsi:type="null">v</argument></arguments>',
        [
            "Element 'argument': Character content is not allowed, because the content type is empty.\nLine: 2\n" .
            "The xml was: \n0:<?xml version=\"1.0\"?>\n1:<arguments " .
            "xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\">\n2:        <argument name=\"a\" " .
            "xsi:type=\"null\">v</argument></arguments>\n3:\n"
        ],
    ],
    'forbidden child node' => [
        '<?xml version="1.0"?><arguments xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
        <argument name="a" xsi:type="string"><child>v</child></argument></arguments>',
        [
            "Element 'child': This element is not expected.\nLine: 2\nThe xml was: \n0:<?xml version=\"1.0\"?>\n" .
            "1:<arguments xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\">\n2:        <argument " .
            "name=\"a\" xsi:type=\"string\"><child>v</child></argument></arguments>\n3:\n"
        ],
    ],
    'array with forbidden child' => [
        '<?xml version="1.0"?><arguments xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
        <argument name="a" xsi:type="array"><child>v</child></argument></arguments>',
        [
            "Element 'child': This element is not expected. Expected is ( Item ).\nLine: 2\nThe xml was: \n" .
            "0:<?xml version=\"1.0\"?>\n1:<arguments xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\">\n" .
            "2:        <argument name=\"a\" xsi:type=\"array\"><child>v</child></argument></arguments>\n3:\n"
        ],
    ],
    'array with 2 same items' => [
        '<?xml version="1.0"?><arguments xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
        <argument name="a" xsi:type="array">
            <Item name="name" xsi:type="string">v1</Item>
            <Item name="name" xsi:type="string">v2</Item>
        </argument></arguments>',
        [
            "Element 'Item': Duplicate key-sequence ['name'] in key identity-constraint 'argumentItemName'.\n" .
            "Line: 4\nThe xml was: \n0:<?xml version=\"1.0\"?>\n1:<arguments " .
            "xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\">\n2:        <argument name=\"a\" " .
            "xsi:type=\"array\">\n3:            <Item name=\"name\" xsi:type=\"string\">v1</Item>\n" .
            "4:            <Item name=\"name\" xsi:type=\"string\">v2</Item>\n5:        </argument>" .
            "</arguments>\n6:\n"
        ],
    ],
    'array Item without name' => [
        '<?xml version="1.0"?><arguments xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
        <argument name="a" xsi:type="array"><Item xsi:type="string">v</Item></argument></arguments>',
        [
            "Element 'Item': The attribute 'name' is required but missing.\nLine: 2\nThe xml was: \n" .
            "0:<?xml version=\"1.0\"?>\n1:<arguments xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\">\n" .
            "2:        <argument name=\"a\" xsi:type=\"array\"><Item xsi:type=\"string\">v</Item></argument>" .
            "</arguments>\n3:\n",
            "Element 'Item': Not all fields of key identity-constraint 'argumentItemName' evaluate to a node.\n" .
            "Line: 2\nThe xml was: \n0:<?xml version=\"1.0\"?>\n1:<arguments " .
            "xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\">\n2:        <argument name=\"a\" " .
            "xsi:type=\"array\"><Item xsi:type=\"string\">v</Item></argument></arguments>\n3:\n"
        ],
    ],
    'array Item with forbidden child' => [
        '<?xml version="1.0"?><arguments xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
        <argument name="a" xsi:type="array">
            <Item name="Item" xsi:type="string"><child>v</child></Item>
        </argument></arguments>',
        [
            "Element 'child': This element is not expected.\nLine: 3\nThe xml was: \n0:<?xml version=\"1.0\"?>\n" .
            "1:<arguments xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\">\n2:        <argument " .
            "name=\"a\" xsi:type=\"array\">\n3:            <Item name=\"Item\" xsi:type=\"string\">" .
            "<child>v</child></Item>\n4:        </argument></arguments>\n5:\n"
        ],
    ],
    'nested array with same named items' => [
        '<?xml version="1.0"?><arguments xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
        <argument name="a" xsi:type="array">
            <Item name="item1" xsi:type="string">v</Item>
            <Item name="item2" xsi:type="array">
                <Item name="item1" xsi:type="string">v</Item>
            </Item>
            <Item name="item3" xsi:type="array">
                <Item name="item4" xsi:type="string">v</Item>
                <Item name="item4" xsi:type="string">v</Item>
            </Item>
        </argument></arguments>',
        [
            "Element 'Item': Duplicate key-sequence ['item4'] in key identity-constraint 'itemName'.\n" .
            "Line: 9\nThe xml was: \n4:            <Item name=\"item2\" xsi:type=\"array\">\n" .
            "5:                <Item name=\"item1\" xsi:type=\"string\">v</Item>\n6:            </Item>\n" .
            "7:            <Item name=\"item3\" xsi:type=\"array\">\n8:                <Item name=\"item4\" " .
            "xsi:type=\"string\">v</Item>\n9:                <Item name=\"item4\" xsi:type=\"string\">v</Item>\n" .
            "10:            </Item>\n11:        </argument></arguments>\n12:\n"
        ],
    ]
];
