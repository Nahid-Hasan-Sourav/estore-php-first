<?php


namespace App\classes;


class Data
{
    public $service=[];

    public function service(){
        return $this->service=[
            0=>[
                'id'=>'1',
                'title'=>'Free Delivery',
                'image'=>'free-delivery.png',
                'description'=>'Lorem ipsum dolor sit amet, consectetu
                                adipiscing elit, sed do eiusmod tempor'
            ],
            1=>[
                'id'=>'2',
                'title'=>'Trusted Platfrom',
                'image'=>'hand-shake.png',
                'description'=>'Lorem ipsum dolor sit amet, consectetu
                                adipiscing elit, sed do eiusmod tempor'
            ],
            2=>[
                'id'=>'3',
                'title'=>'Here For You',
                'image'=>'service.png',
                'description'=>'Lorem ipsum dolor sit amet, consectetu
                                adipiscing elit, sed do eiusmod tempor'
            ]
        ];
    }
}