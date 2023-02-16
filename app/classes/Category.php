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
                'categoryName'=>'T-shirt'
            ],
            1=>[
                'id'=>2,
                'categoryName'=>'Jeans Pant'
            ],
            2=>[
                'id'=>3,
                'categoryName'=>'Polo T-shirt'
            ],
            3=>[
                'id'=>4,
                'categoryName'=>'Jersy'
            ],
            4=>[
                'id'=>5,
                'categoryName'=>'Hoddie'
            ],
        ];
    }

    public function getAllCategory(){
        return $this->categories;
    }

}