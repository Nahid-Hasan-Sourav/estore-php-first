<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-store</title>
    <link rel="stylesheet" href="asset/css/bootstrap.css"/>
    <link rel="stylesheet" href="asset/css/all.css"/>
</head>
<body>
    <section>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand fw-bold fs-3" href="#" >

                    <span class=""
                    style="color:#FE5876;"
                    >E</span><span class="text-success">store</span>

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

<!--                    <form class="d-flex justify-content-center mx-auto" role="search">-->
<!--                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">-->
<!--                        <button class="btn btn-outline-success" type="submit">Search</button>-->
<!--                    </form>-->

                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                               Category
                            </a>
                            <ul class="dropdown-menu">
                                <?php foreach($AllCategories as $singleCategory){ ?>
                                    <li><a class="dropdown-item" href="#">
                                            <?php echo $singleCategory['categoryName'] ?>
                                        </a></li>

                                <?php } ?>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
