<?php

//在PHP中，你可以通过将字符串转换为其十六进制表示形式，并为每个字节添加 \x 前缀来实现这一点。下面是一个简单的函数示例，该函数接收一个字符串并返回其以 \x 开头的十六进制转义序列表示：


function string_to_hex_escape($input)
{
    $output = '';
    // 确保输入是字符串类型
    if (is_string($input)) {
        // 遍历字符串中的每个字符
        for ($i = 0; $i < strlen($input); $i++) {
            // 将字符转换为对应的十六进制值，并加上 \x 前缀
            $output .= '\x' . bin2hex($input[$i]);
        }
    }
    return $output;
}

// 示例用法
//$original_str = "Hello 世界! 😊";
//$hex_escaped_str = string_to_hex_escape($original_str);


$original_str = base64_decode("nameikaka");
//$original_str = base64_decode("66");
$hex_escaped_str = string_to_hex_escape($original_str);

echo "原始字符串: $original_str\n";
echo "以 \\x 开头的十六进制转义序列: $hex_escaped_str\n";


/**
 * "name":"nameikaka","activity_type":0,"activity_id":0,"inviter_id":0,"country_code":"86"}},
 * "error_code":256,"error_file":"\/export\/apps\/release\/astroforces_20250218100816\/vendor\/uto\/uto-sdk\/php\/UtoProto\/Member\/MemberInfo.php",
 * "error_line":355,"error_msg":"Given string is not UTF8 encoded.",
 * "error_trace":["#0 \/export\/apps\/release\/astroforces_20250218100816\/vendor\/uto\/uto-sdk\/php\/UtoProto\/Member\/MemberInfo.php(355):
 * app\\components\\ErrorHandle->handleError(256, 'Given string is...', '\/export\/apps\/re...', 355, Array)",
 * "#1 \/export\/apps\/release\/astroforces_20250218100816\/modules\/v1\/services\/member\/MemberService.php(1874):
 * UtoProto\\Member\\MemberInfo->setMemberName('\\x9D\\xA9\\x9E\\x8AF\\xA4')"
 */