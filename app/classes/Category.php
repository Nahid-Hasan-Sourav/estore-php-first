<?php


namespace App\classes;


class Category

{
    public $categories=[];
    public function __construct()
    {
        $this->categories=[
            0=>[
                'id'=>1,
                'categoryName'=>'T-shirt',
                'image'=>'t-shirt.jpg'
            ],
            1=>[
                'id'=>2,
                'categoryName'=>'Jeans Pant',
                 'image'=>'pant-3.jpg'
            ],
            2=>[
                'id'=>3,
                'categoryName'=>'Polo T-shirt',
                'image'=>'t-shirt.jpg',

            ],
            3=>[
                'id'=>4,
                'categoryName'=>'Jersy',
                'image'=>'jersy.jpg'
            ],
            4=>[
                'id'=>5,
                'categoryName'=>'Hoddie',
                'image'=>'hodie-1.jpg'
            ],
            5=>[
                'id'=>6,
                'categoryName'=>'Hoddie',
                'image'=>'hodie-1.jpg'
            ],
            6=>[
                'id'=>7,
                'categoryName'=>'Hoddie',
                'image'=>'hodie-1.jpg'
            ],
            7=>[
                'id'=>8,
                'categoryName'=>'Hoddie',
                'image'=>'hodie-1.jpg'
            ],
            8=>[
                'id'=>9,
                'categoryName'=>'Hoddie',
                'image'=>'hodie-1.jpg'
            ],
        ];
    }

    public function getAllCategory(){
        return $this->categories;
    }

}