<?php include 'header.php' ?>

    <!--    BANNER PART START HERE-->
<section>

    <div class="container">
        <div class="row">
            <div class="col-md-6 justify-content-center d-flex flex-column">
                <h2 class="fs-1 fw-bold">
                    Best Place to Buy<br>
                   <span class="text-success">Everything.</span>
                </h2>
                <p>
                    At Bachira, you can shop for all your favorite beauty brands, clothes,<br>
                    household products and more at a single place.
                </p>
                <button type="button" class="btn btn-success mt-3 d-block text-uppercase"
                style="width: 30%;"
                >Success</button>
            </div>

            <div class="col-md-6 ">
                <img src="asset/img/Hero Image.png" alt="banner-img" class="img-fluid"
                style=""

                />
            </div>
        </div>
    </div>

</section>
    <!--    BANNER PART END HERE-->

    <!--    COLLABORATE WITH.. START HERE-->
<section>
    <div class="container my-5">
       <div>
           <h4 class="text-center fw-bold">
               We Collaborate With <span style="color:#FE5876;">250++</span> Leading Top<br>
               E Commerce and Brands
           </h4>
       </div>
        <div class="d-flex align-content-center justify-content-center my-4">
            <marquee direction="">
            <img class="mx-3" style="width: 202px; height:33px;" src="asset/img/tokopedia.png"/>
            <img class="mx-3" style="width: 202px; height:33px;" src="asset/img/Balenciaga%20svg.png"/>
            <img class="mx-3" style="width: 202px; height:33px;" src="asset/img/adidas%20svg.png"/>
            <img class="mx-3" style="width: 202px; height:33px;" src="asset/img/gucci%20svg.png"/>
            <img class="mx-3" style="width: 202px; height:33px;" src="asset/img/Balenciaga%20svg.png"/>
            </marquee>
        </div>
    </div>
</section>
    <!--    COLLABORATE WITH.. END HERE-->

    <!--    CATEGORIES START HERE-->
<section>
    <div class="container">
        <div class="fw-bold my-3">
            <h4>Browse Categories of<br>
                The Store
            </h4>
        </div>
        <div class="row g-3 mt-4">
            <?php foreach ($AllCategories as $single){ ?>

                <div class="col-md-3">
                    <a href="">
                    <div class="card rounded-0" >
                        <img src="asset/img/<?php echo $single['image']; ?>" class="img-fluid" alt="..."
                        style="width:100%; height:300px;"
                        >

                    </div>
                    </a>
                </div>

    <?php } ?>

        </div>
    </div>

</section>
    <!--    CATEGORIES END HERE-->

<section>
    <div class="container">
        <div class="my-5">
            <h5 class="text-center fw-bold">Why Choose  <a class="navbar-brand fw-bold fs-3" href="#" >

                    <span class=""
                          style="color:#FE5876;"
                    >E</span><span class="text-success">store</span>

                </a>?</h5>
        </div>
        <div>
            <div class="row my-2 py-3">

                    <?php foreach($AllService as $item) {?>
                    <div class="col-md-4 col-12 gx-4">
                        <div class="card border-0">
                            <img src="asset/img/<?php echo $item['image'] ?>" class="mx-auto d-block" alt="...."
                            style="width:64px; height: 64px;"
                            />
                            <div class="card-body text-center">
                                <h6><?php echo $item['title'] ?></h6>
                                <p>
                                    <?php echo $item['description'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

            </div>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="my-4">
            <h4 class="fw-bold">
                Populer Products From<br>
                All Brands
            </h4>
        </div>

             <div class="row g-3">
                   <?php foreach($AllProduct as $product){ ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="asset/img/<?php echo $product['image'] ?>"
                            class=""
                            style="width:100%; height:200px;"
                            />

                         <div class="card-body">
                             <div class="d-flex justify-content-between">
                                 <h5><?php echo $product['name']; ?></h5>
                                 <p class="text-danger">
                                     <span class="fw-bold">Price :</span>
                                     <span>
                                         <?php echo $product['price'] ?>
                                     </span>

                                 </p>
                             </div>
                             <p><?php echo $product['description']; ?></p>

                             <a href="" class="btn btn-success fw-bold text-white">BUY NOW</a>
                         </div>
                        </div>
                    </div>
                   <?php } ?>
            </div>
    </div>
</section>

<?php include 'footer.php' ?>