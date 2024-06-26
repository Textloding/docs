<?php

function numberToChinese($number) {
    $digits = ['零', '一', '二', '三', '四', '五', '六', '七', '八', '九'];
    $tens = ['', '十', '百', '千'];
    $bigNumbers = ['', '万', '亿', '兆'];

    if ($number == 0) {
        return '零';
    }

    $negative = $number < 0 ? '负' : '';
    $number = abs($number);

    $parts = [];
    $partIndex = 0;

    while ($number > 0) {
        $part = '';
        $currentPart = $number % 10000;
        $number = intdiv($number, 10000);

        if ($currentPart > 0) {
            $tempPart = '';
            $digitIndex = 0;
            while ($currentPart > 0) {
                $digit = $currentPart % 10;
                if ($digit > 0) {
                    $tempPart = $digits[$digit] . ($digitIndex > 0 ? $tens[$digitIndex] : '') . $tempPart;
                } else if (strlen($tempPart) > 0 && !str_ends_with($tempPart, '零')) {
                    $tempPart = '零' . $tempPart;
                }
                $currentPart = intdiv($currentPart, 10);
                $digitIndex++;
            }
            $part = $tempPart . $bigNumbers[$partIndex];
        }
        if ($part != '') {
            array_unshift($parts, $part);
        }
        $partIndex++;
    }

    return $negative . implode('', $parts);
}


