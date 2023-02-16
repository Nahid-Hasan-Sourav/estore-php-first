<?php
require_once 'vendor/autoload.php';
USE App\classes\Category;

//START
   $category=new Category();
   $AllCategories=$category->getAllCategory();
//END

if(isset($_GET['page'])){
    if($_GET['page']=='home')
    {
        include 'pages/home.php';
    }
}