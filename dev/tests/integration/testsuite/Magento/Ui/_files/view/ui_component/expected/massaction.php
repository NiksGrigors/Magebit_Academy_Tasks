<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
return [
    'arguments' => [
        'data' => [
            'name' => 'data',
            'xsi:type' => 'array',
            'Item' => [
                'config' => [
                    'name' => 'config',
                    'xsi:type' => 'array',
                    'Item' => [
                        'stickyTmpl' => [
                            'name' => 'stickyTmpl',
                            'xsi:type' => 'string',
                            'value' => 'string',
                        ],
                        'noItemsMsg' => [
                            'name' => 'noItemsMsg',
                            'xsi:type' => 'string',
                            'value' => 'string',
                        ],
                        'selectProvider' => [
                            'name' => 'selectProvider',
                            'xsi:type' => 'string',
                            'value' => 'string',
                        ],
                        'indexField' => [
                            'name' => 'indexField',
                            'xsi:type' => 'string',
                            'value' => 'string',
                        ],
                        'actions' => [
                            'name' => 'actions',
                            'xsi:type' => 'array',
                            'Item' => [
                                'anySimpleType' => [
                                    'name' => 'anySimpleType',
                                    'xsi:type' => 'array',
                                    'Item' => [
                                        'label' => [
                                            'value' => 'string',
                                            'name' => 'label',
                                            'xsi:type' => 'string',
                                            'translate' => 'false',
                                        ],
                                        'type' => [
                                            'value' => 'string',
                                            'name' => 'type',
                                            'xsi:type' => 'string',
                                        ],
                                        'url' => [
                                            'name' => 'url',
                                            'xsi:type' => 'url',
                                            'param' => [
                                                'string' => [
                                                    'name' => 'string',
                                                    'value' => 'string',
                                                ],
                                            ],
                                            'path' => 'string',
                                        ],
                                        'string' => [
                                            'value' => 'string',
                                            'name' => 'string',
                                            'xsi:type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'provider' => [
                            'name' => 'provider',
                            'xsi:type' => 'string',
                            'value' => 'string',
                        ],
                        'component' => [
                            'name' => 'component',
                            'xsi:type' => 'string',
                            'value' => 'string',
                        ],
                        'template' => [
                            'name' => 'template',
                            'xsi:type' => 'string',
                            'value' => 'string',
                        ],
                        'sortOrder' => [
                            'name' => 'sortOrder',
                            'xsi:type' => 'number',
                            'value' => '0',
                        ],
                        'displayArea' => [
                            'name' => 'displayArea',
                            'xsi:type' => 'string',
                            'value' => 'string',
                        ],
                        'storageConfig' => [
                            'name' => 'storageConfig',
                            'xsi:type' => 'array',
                            'Item' => [
                                'provider' => [
                                    'name' => 'provider',
                                    'xsi:type' => 'string',
                                    'value' => 'string',
                                ],
                                'namespace' => [
                                    'name' => 'namespace',
                                    'xsi:type' => 'string',
                                    'value' => 'string',
                                ],
                                'path' => [
                                    'name' => 'path',
                                    'xsi:type' => 'url',
                                    'param' => [
                                        'string' => [
                                            'name' => 'string',
                                            'value' => 'string',
                                        ],
                                    ],
                                    'path' => 'string',
                                ],
                            ],
                        ],
                        'statefull' => [
                            'name' => 'statefull',
                            'xsi:type' => 'array',
                            'Item' => [
                                'anySimpleType' => [
                                    'name' => 'anySimpleType',
                                    'xsi:type' => 'boolean',
                                    'value' => 'true',
                                ],
                            ],
                        ],
                        'imports' => [
                            'name' => 'imports',
                            'xsi:type' => 'array',
                            'Item' => [
                                'string' => [
                                    'name' => 'string',
                                    'xsi:type' => 'string',
                                    'value' => 'string',
                                ],
                            ],
                        ],
                        'exports' => [
                            'name' => 'exports',
                            'xsi:type' => 'array',
                            'Item' => [
                                'string' => [
                                    'name' => 'string',
                                    'xsi:type' => 'string',
                                    'value' => 'string',
                                ],
                            ],
                        ],
                        'links' => [
                            'name' => 'links',
                            'xsi:type' => 'array',
                            'Item' => [
                                'string' => [
                                    'name' => 'string',
                                    'xsi:type' => 'string',
                                    'value' => 'string',
                                ],
                            ],
                        ],
                        'listens' => [
                            'name' => 'listens',
                            'xsi:type' => 'array',
                            'Item' => [
                                'string' => [
                                    'name' => 'string',
                                    'xsi:type' => 'string',
                                    'value' => 'string',
                                ],
                            ],
                        ],
                        'ns' => [
                            'name' => 'ns',
                            'xsi:type' => 'string',
                            'value' => 'string',
                        ],
                        'componentType' => [
                            'name' => 'componentType',
                            'xsi:type' => 'string',
                            'value' => 'string',
                        ],
                        'dataScope' => [
                            'name' => 'dataScope',
                            'xsi:type' => 'string',
                            'value' => 'string',
                        ],
                    ],
                ],
                'js_config' => [
                    'name' => 'js_config',
                    'xsi:type' => 'array',
                    'Item' => [
                        'deps' => [
                            'name' => 'deps',
                            'xsi:type' => 'array',
                            'Item' => [
                                0 => [
                                    'name' => 0,
                                    'xsi:type' => 'string',
                                    'value' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'children' => [],
    'uiComponentType' => 'massaction',
];
