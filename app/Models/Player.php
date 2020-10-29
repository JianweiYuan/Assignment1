<?php
namespace App\Models;

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Player {

    //mock data : an array of records
    protected $data = [
        '1' => [
            'id' => 1,
            'name' => 'Hu Mingxuan  胡明轩',
            'city' => 'GuangDong',
            'image' => 'humingxuan.jpg',
            'team' => 'South ',
            'position'=>'PG',
            'characteristic'=>'three-point shot',
            'stature'=>'191cm',
            
            
        ],
        '2' => [
           'id' => 2,
            'name' => 'Zhao Rui 赵睿',
            'city' => 'GuangDong',
            'image' => 'zhaoru.jpg',
            'team' => 'South ',
            'position'=>'SG',
            'characteristic'=>'attack the basket',
            'stature'=>'194cm',
        ],
        '3' => [
            'id' => 3,
            'name' => 'Shen Zijie 沈梓捷',
            'city' => 'ShenZhen',
            'image' => 'shenzijie.jpg',
            'team' => 'South ',
            'position'=>'SF',
            'characteristic'=>'defend',
            'stature'=>'209cm',
        ],
        '4' => [
             'id' => 4,
            'name' => 'Yi Jianlian 易建联',
            'city' => 'GuanDong',
            'image' => 'yijianlian.jpg',
            'team' => 'South ',
            'position'=>'PF',
            'characteristic'=>'Versatile   The best basketball player in China right now ',
            'stature'=>'213cm',
        ],
     '5' => [
             'id' => 5,
            'name' => 'Wang Zhenglin 王哲林',
            'city' => 'FuJian',
            'image' => 'wangzhelin.jpg',
            'team' => 'South ',
            'position'=>'C',
            'characteristic'=>'Versatile   The best basketball player in China right now ',
            'stature'=>'214cm',
        ],
          '6' => [
             'id' => 6,
            'name' => 'chenlinjian 陈林坚',
            'city' => 'FuJian',
            'image' => 'chenlinjian.jpg',
            'team' => 'South ',
            'position'=>'SG',
            'characteristic'=>'three-point shot ',
            'stature'=>'196cm',
        ],
    ];
    

    public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }

}
