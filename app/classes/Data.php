<?php


namespace App\classes;


class Data
{
    public $service=[],$products=[];

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

    public function getAllProduct(){
         $this->products=[
            0=>[
                'id'=>1,
                'categoryId'=>1,
                'name'=>'T-shirt-1',
                'price'=>500,
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'image'=>'t-shirt-1.jpg'
            ],
            1=>[
                'id'=>2,
                'categoryId'=>1,
                'name'=>'T-shirt-2',
                'price'=>500,
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'image'=>'t-shirt-2.jpg'
            ],
            2=>[
                'id'=>3,
                'categoryId'=>1,
                'name'=>'T-shirt-3',
                'price'=>500,
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'image'=>'t-shirt-3.jpg'
            ],
            3=>[
                'id'=>4,
                'categoryId'=>2,
                'name'=>'Genas-pant-1',
                'price'=>500,
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'image'=>'pant-1.jpg'
            ],
            4=>[
                'id'=>5,
                'categoryId'=>2,
                'name'=>'Genas-pant-2',
                'price'=>500,
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'image'=>'pant-2.jpg'
            ],
            5=>[
                'id'=>6,
                'categoryId'=>2,
                'name'=>'Genas-pant-3',
                'price'=>500,
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'image'=>'pant-3.jpg'
            ],
            6=>[
                'id'=>7,
                'categoryId'=>3,
                'name'=>'Polo-Tshirt-1',
                'price'=>500,
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'image'=>'pt-1.jpg'
            ],
            7=>[
                'id'=>6,
                'categoryId'=>3,
                'name'=>'Polo-Tshirt-2',
                'price'=>500,
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'image'=>'pt-2.jpg'
            ],
            8=>[
                'id'=>7,
                'categoryId'=>3,
                'name'=>'Polo-Tshirt-3',
                'price'=>500,
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'image'=>'pt-3.jpg'
            ],
        ];

         return $this->products;
    }
}