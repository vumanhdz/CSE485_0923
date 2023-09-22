<?php

$arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
$text = "Màu đỏ là màu yêu thích của Anh, xanh là màu yêu thích của Sơn, cam là màu yêu thích của Thắng, còn màu yêu thích của tôi là màu trắng";

$colorMap = [
    'đỏ' => '<span style="color: red;">đỏ</span>',
    'xanh' => '<span style="color: blue;">xanh</span>',
    'cam' => '<span style="color: orange;">cam</span>',
    'trắng' => '<span style="color: white;">trắng</span>'
];

foreach ($arrs as $color) {
    if (isset($colorMap[$color])) {
        $text = str_replace($color, $colorMap[$color], $text);
    }
}

echo $text;

?>