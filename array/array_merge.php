<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 2018/6/1
 * Time: 上午9:52
 */

//$a = [
//
//];
//
//$b = array_merge($a, [['>=','time_from', " 00:00:00" ], ['<=','time_from', " 23:59:59" ]]);
//
//print_r($a);
//
//print_r($b);



$a = ['name' => 'liuyibao', 'age' => '123456'];
$b = ['name' => 'iphone', 'age' => '122'];

$c = array_merge($a, $b);
print_r($c);

$c = $a + $b;
print_r($c);



$j = [
    ['name' => 'liuyibao', 'age' => '123456']
];

$k = [
    ['name' => 'iphone', 'age' => '122']
];

$x = array_merge($j, $k);
print_r($x);

$x = $j + $k;
print_r($x);


$configA = [
    'common_param' => [
        'type' => 3,
        'alias'=> 'common_param',
        'data' => [
            'qr_entrance_expire_time' => 20,//屏上二维码有效时间（秒）
            'qr_entrance_type_id' => '#QR_ENTRANCE_TYPE_ID#',//屏上二维码类型ID，占位符，返回给硬件时会替换成常量配置
            'qr_entrance_mina_path' => '#QR_ENTRANCE_MINA_PATH#',//屏上二维码路径URL，占位符，返回给硬件时会替换成常量配置
            'cabinet_screen_show_face' => 1,//开启人脸识别预览，原只用于储物柜，现在可用于多种设备（只有储物柜默认不显示人脸 其它都显示人脸）
            'usage_scenario' => 1,//标准场景，防尾随场景
        ]
    ],
];

$configB = [
    'common_param' => [
        'type' => 3,
        'alias'=> 'common_param',
        'data' => [
            'qr_entrance_expire_time' => 20,//屏上二维码有效时间（秒）
            'qr_entrance_type_id' => '#QR_ENTRANCE_TYPE_ID#',//屏上二维码类型ID，占位符，返回给硬件时会替换成常量配置
            'qr_entrance_mina_path' => '#QR_ENTRANCE_MINA_PATH#',//屏上二维码路径URL，占位符，返回给硬件时会替换成常量配置
            'cabinet_screen_show_face' => 1,//开启人脸识别预览，原只用于储物柜，现在可用于多种设备（只有储物柜默认不显示人脸 其它都显示人脸）
            'usage_scenario' => 1,//标准场景，防尾随场景
            'receive_call_voice_prompts' => 1,//接收呼叫 并开启语音提示 （目前是储物柜呼叫 只支持智慧前台接收 虽然都配置成1 但是其它设备app没有此功能会忽略 后端目前也只会往智慧前台推消息）
            'receive_call_popup_prompts' => 1,//接收呼叫 并开启弹窗提示 （目前是储物柜呼叫 只支持智慧前台接收 虽然都配置成1 但是其它设备app没有此功能会忽略 后端目前也只会往智慧前台推消息）
            'user_name_display' => 1,//显示用户姓名 (暂时只有智慧前台用到 以后可能会扩展到其它设备)
            'user_name_voice_prompts' => 1,//用户姓名语音提示 (暂时只有智慧前台用到 以后可能会扩展到其它设备)
        ]
    ],
];

$configC = array_merge($configA, $configB);
print_r($configC);



$configA1 = [
    'common_param' => [
        'type' => 3,
        'alias'=> 'common_param',
        'data' => [1,2,3]
    ],
];

$configB1 = [
    'common_param' => [
        'type' => 3,
        'alias'=> 'common_param',
        'data' => [3,4,5]
    ],
];

$configC1 = array_merge($configA1, $configB1);
print_r($configC1);