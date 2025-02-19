<?php
function is_base64_encoded($str) {
    // 检查字符串是否符合 Base64 格式
    if (preg_match('/^([A-Za-z0-9+\/]{4})*([A-Za-z0-9+\/]{4}|[A-Za-z0-9+\/]{3}=|[A-Za-z0-9+\/]{2}==)$/', $str)) {
        // 尝试严格解码
        $decoded = base64_decode($str, true);
        if ($decoded === false) {
            return false;
        }
        // 重新编码并比对
        $re_encoded = base64_encode($decoded);
        return $re_encoded === $str;
    }
    return false;
}


// 随机生成包含中文字符和表情符号的字符串函数
function generate_random_string($length = 10) {
    $english_chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $chinese_chars = '的一是不了人我在有他这为之大来以个中上们';
    $emoji_chars = '😀😂😊😉😎😘🤔😴😄😏';
    $characters = $english_chars . mb_substr($chinese_chars, 0, mb_strlen($chinese_chars, 'UTF-8'), 'UTF-8') . $emoji_chars;
    $charactersLength = mb_strlen($characters, 'UTF-8');
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= mb_substr($characters, rand(0, $charactersLength - 1), 1, 'UTF-8');
    }
    return $randomString;
}


for ($i=0; $i<100000; $i++) {
    // 主逻辑
    $original_str = generate_random_string(rand(5, 20)); // 随机生成长度为5到20的字符串
    $encoded_str = base64_encode($original_str);

    echo "原始字符串: $original_str\n";
    echo "Base64编码后的字符串: $encoded_str\n";

    if (is_base64_encoded($encoded_str)) {
        echo "验证成功：字符串是Base64编码的。\n";
    } else {
        echo "验证失败：字符串不是Base64编码的。\n";
        break;
    }
}
