<?php
require_once __DIR__.'/../vendor/autoload.php';
use runmanz\Tools\Debug;
$arr = [
    [
        [
            [
                [1,2],
                [3,4]
            ],
            [5,6]
        ],
        [1=>
            [2=>
                [3=>
                    [4=>
                        [5=>
                            [6=>
                                [1,2,34,5,6,7],
                                [234,32],
                                123,
                                312,
                                7=>[
                                    8=>[
                                        9=>[
                                            10=>[
                                                123,
                                                4432,
                                                6546,
                                                3453,
                                            ],
                                            3123,
                                            4234
                                        ],
                                        123123,
                                        12312,
                                        '1231',
                                    ],
                                    'asda',
                                    'asdd',
                                    'asda',
                                ],
                                'nmmcx',
                                'sdfs',
                            ],
                            1321,
                            3123,
                        ],
                    ],
                ]
            ]
        ]
    ],
    [321,12312,'123123']
];
$com = new Debug();
$com::DeepDump($arr);
$str = "测试";
$com::DeepDump($str);