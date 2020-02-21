<?php

use Slim\Http\Response;

function exitIfNull($data, Response $response, $param)
{
    if (is_null($data) || $data == null)
        $response->withJson($param);
}

function serializeXML($xml)
{
    $unserialized = new XML_Unserializer();
    $unserialized->unserialize($xml);
    return $unserialized->getUnserializedData();
}

function productLibrary($product)
{
    $productName = str_replace("-", "", $product->product_code);
    $productName = ucwords(strtolower($productName));
    return $libName = "Biller\\" . $product->library . "\\" . $productName;
}

function getLibraryAlias($libraryName)
{
    $name = explode("\\", $libraryName);
    return strtolower(end($name));
}

function exitOnDevelopment($message)
{
    if (ENVIRONMENT == DEVELOPMENT) exit($message);
}

function compareTwoDate($date1, $date2, $type = 'all')
{
    $diff = abs(strtotime($date2) - strtotime($date1));

    $year = floor($diff / (365 * 60 * 60 * 24));
    $month = floor(($diff - $year * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
    $day = floor(($diff - $year * 365 * 60 * 60 * 24 - $month * 30 * 60 * 60 * 24) / (60 * 60 * 24));

    $result = (object)array();
    $result->day = $day;
    $result->month = $month;
    $result->year = $year;

    return $result;
}

function generateRandomInteger($length = 10)
{
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
