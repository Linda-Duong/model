<?php
use Illuminate\Support\Arr;

$userIds = DB::table('users')->pluck('id')->toArray();

DB::table('orders')->insert([
    'user_id' => Arr::random($userIds), // chọn ngẫu nhiên id có thật
    'order_code' => 'ORD' . rand(1000, 9999),
    'total' => rand(100000, 999999),
    'created_at' => now(),
    'updated_at' => now(),
]);
