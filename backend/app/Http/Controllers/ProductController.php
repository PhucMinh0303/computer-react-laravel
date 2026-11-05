<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    private const SECTIONS = [
        ['key' => 'iphone', 'title' => 'iPhone', 'image' => 'iphone', 'products' => [
            ['name' => 'iPhone 18 Pro Max 256GB', 'price' => 41990000],
            ['name' => 'iPhone 18 Pro 256GB', 'price' => 38990000],
            ['name' => 'iPhone 18 Pro Max 512GB', 'price' => 48490000],
            ['name' => 'iPhone 18 Pro 512GB', 'price' => 45490000],
        ]],
        ['key' => 'mac', 'title' => 'Mac', 'image' => 'mac', 'products' => [
            ['name' => 'Macbook Pro 13 inch A19 Pro 8GB/256GB', 'price' => 15190000],
            ['name' => 'Macbook Pro 13 inch A19 Pro 16GB/256GB', 'price' => 21650000],
            ['name' => 'Macbook Air 13 inch M5 16GB/256GB', 'price' => 35650000],
            ['name' => 'Macbook Air 15 inch M5 16GB/512GB', 'price' => 41390000],
        ]],
        ['key' => 'ipad', 'title' => 'iPad', 'image' => 'ipad', 'products' => [
            ['name' => 'iPad Air M4 11 inch WiFi 128GB', 'price' => 15190000],
            ['name' => 'iPad Air M4 11 inch WiFi 256GB', 'price' => 21650000],
            ['name' => 'iPad Air M4 13 inch WiFi 128GB', 'price' => 35650000],
            ['name' => 'iPad Air M4 13 inch WiFi 256GB', 'price' => 41390000],
        ]],
        ['key' => 'watch', 'title' => 'iWatch', 'image' => 'watch', 'products' => [
            ['name' => 'Apple Watch Series 12 GPS 46mm viền nhôm dây silicone', 'price' => 15190000],
            ['name' => 'Apple Watch Series 12 GPS 42mm viền nhôm dây silicone', 'price' => 21650000],
            ['name' => 'Apple Watch Series 12 LTE 46mm viền nhôm dây silicone', 'price' => 35650000],
            ['name' => 'Apple Watch Series 12 LTE 42mm viền nhôm dây silicone', 'price' => 41390000],
        ]],
        ['key' => 'airpods', 'title' => 'AirPods', 'image' => 'airpods', 'products' => [
            ['name' => 'AirPods 5', 'price' => 15190000],
            ['name' => 'AirPods Pro 4', 'price' => 21650000],
            ['name' => 'AirPods Max 2', 'price' => 35650000],
            ['name' => 'AirPods 5 Lightning', 'price' => 41390000],
        ]],
        ['key' => 'accessory', 'title' => 'Phụ kiện', 'image' => 'accessory', 'products' => [
            ['name' => 'Cáp USB-C 20W', 'price' => 15190000],
            ['name' => 'Sạc nhanh USB-C 20W', 'price' => 21650000],
            ['name' => 'Ốp lưng iPhone 18 Pro', 'price' => 35650000],
            ['name' => 'Dây đeo Apple Watch', 'price' => 41390000],
        ]],
    ];

    public function index(): JsonResponse
    {
        $id = 0;

        $sections = array_map(function (array $section) use (&$id) {
            $section['products'] = array_map(function (array $product) use (&$id, $section) {
                return ['id' => ++$id, 'image' => $section['image']] + $product;
            }, $section['products']);

            return $section;
        }, self::SECTIONS);

        return response()->json(['data' => $sections]);
    }
}
