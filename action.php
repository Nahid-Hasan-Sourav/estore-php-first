<?php
require_once 'vendor/autoload.php';
USE App\classes\Category;
USE App\classes\Data;

//START
   $category=new Category();
   $AllCategories=$category->getAllCategory();

   $service=new Data();
   $AllService=$service->service();
//END

if(isset($_GET['page'])){
    if($_GET['page']=='home')
    {
        include 'pages/home.php';
    }
}