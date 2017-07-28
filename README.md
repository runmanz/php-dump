# php-dump说明
## 背景
> 有时候想输出数组直观的看数据的时候，却发现`var_dump`就最多输出了个二维数组有木有，然后就趁着空隙写了个自己平时用的`dump`方法，朋友不妨发到`composer`上吧，之后就有个这个package。然后顺手把`echo`也写了进去，也就是说你可以用`dd`实现`echo & var_dump`的功能。
## 引用
在调用方法之前请记得用[`composer`](https://getcomposer.org/download/)安装这个包哦。
```
composer require runmanz/php-dump;
```
> Style One
* 首先引用命名空间
```
use runmanz\Tools\Debug;
```
* 接着就是方法的调用啦，基本和其他的静态方法一样
```
$dump = new Debug();
$dump::dd($dump_arr);
```
OR<br>
```
Debug::dd($dump_arr);
```
> Style Two
```
dd($dump_arr);
```
## 事后
鱿鱼我这是我自己用递归写的方法，所以您的deep太深了也是会有点慢，so please wait with patient。
## 实例
输入内容
```
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
    $com::dd($arr);
```
输出结果
```
array(size=2)
  0 => 
    array(size=2)
      0 => 
        array(size=2)
          0 => 
            array(size=2)
              0 => 
                array(size=2)
                  0 => int 1
                  1 => int 2
              1 => 
                array(size=2)
                  0 => int 3
                  1 => int 4
          1 => 
            array(size=2)
              0 => int 5
              1 => int 6
      1 => 
        array(size=1)
          1 => 
            array(size=1)
              2 => 
                array(size=1)
                  3 => 
                    array(size=1)
                      4 => 
                        array(size=3)
                          5 => 
                            array(size=6)
                              6 => 
                                array(size=6)
                                  0 => int 1
                                  1 => int 2
                                  2 => int 34
                                  3 => int 5
                                  4 => int 6
                                  5 => int 7
                              7 => 
                                array(size=4)
                                  8 => 
                                    array(size=4)
                                      9 => 
                                        array(size=3)
                                          10 => 
                                            array(size=4)
                                              0 => int 123
                                              1 => int 4432
                                              2 => int 6546
                                              3 => int 3453
                                          11 => int 3123
                                          12 => int 4234
                                      10 => int 123123
                                      11 => int 12312
                                      12 => string '1231'
                                  9 => string 'asda'
                                  10 => string 'asdd'
                                  11 => string 'asda'
                              8 => int 123
                              9 => int 312
                              10 => string 'nmmcx'
                              11 => string 'sdfs'
                          6 => int 1321
                          7 => int 3123
  1 => 
    array(size=3)
      0 => int 321
      1 => int 12312
      2 => string '123123'
```
输入内容2
```
$str = '测试';
Debug:dd($str);
```
输出结果2
```
测试
```
输入内容3
```
dd('test');
```
输出结果3
```
test
```
