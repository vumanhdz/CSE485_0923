<?php

function tinhTong($arr) {
    $tong = 0;
    foreach ($arr as $value) {
        $tong += $value;
    }
    return $tong;
}

function tinhTich($arr) {
    $tich = 1;
    foreach ($arr as $value) {
        $tich *= $value;
    }
    return $tich;
}

function tinhHieu($arr) {
    $hieu = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        $hieu -= $arr[$i];
    }
    return $hieu;
}

function tinhThuong($arr) {
    $thuong = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] != 0) {
            $thuong /= $arr[$i];
        }
    }
    return $thuong;
}

$arr = [2, 5, 6, 9, 2, 5, 6, 12, 5];

echo "Tổng các phần tử          = " . implode(" + ", $arr) . " = " . tinhTong($arr) . "<br>";
echo "Tích các phần tử          = " . implode(" * ", $arr) . " = " . tinhTich($arr) . "<br>";
echo "Hiệu các phần tử          = " . implode(" - ", $arr) . " = " . tinhHieu($arr) . "<br>";
echo "Thương các phần tử          = " . implode(" / ", $arr) . " = " . tinhThuong($arr) . "<br>";

?>