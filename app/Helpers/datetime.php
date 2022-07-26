<?php

function jalali_date($datetime): ?string{
    if (!$datetime) return null;
    return jdate($datetime)->format('j F Y');
}

function jalali_date_format2($datetime): ?string{
    if (!$datetime) return null;
    return jdate($datetime)->format('H:i - Y/m/d');
}

function convertToPersianNumber($str){
    $english = array('0','1','2','3','4','5','6','7','8','9');
    $persian = array('٠','١','٢','٣','٤','٥','٦','٧','٨','٩');

    $convertedStr = str_replace($english, $persian, $str);
    return $convertedStr;
}

