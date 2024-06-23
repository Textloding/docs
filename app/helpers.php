<?php

if (!function_exists('numberToChinese')) {
    function numberToChinese($number)
    {
        $numbers = ['零', '一', '二', '三', '四', '五', '六', '七', '八', '九'];
        $units = ['', '十', '百', '千', '万', '十万', '百万', '千万', '亿'];
        $chars = [];
        $number = strval($number); // 确保 number 是字符串类型
        $length = strlen($number);
        for ($i = 0; $i < $length; $i++) {
            $n = $number[$length - $i - 1];
            $chars[] = $units[$i];
            $chars[] = $numbers[$n];
        }
        $chars = array_reverse($chars);
        $chars = implode('', $chars);
        $chars = preg_replace('/零[十百千]/u', '零', $chars);
        $chars = preg_replace('/零+/u', '零', $chars);
        $chars = rtrim($chars, '零');
        $chars = preg_replace('/零$/u', '', $chars);
        $chars = str_replace('一十', '十', $chars);
        return $chars;
    }
}
