 <style>
    .oferpage .blogShort{ border-bottom:1px solid #ddd;}
    .oferpage .add{background: #333; padding: 10%; height: 300px;}

    .oferpage .nav-sidebar { 
        width: 100%;
        padding: 30px 0; 
        border-right: 1px solid #ddd;
    }
    .oferpage .nav-sidebar a {
        color: #333;
        -webkit-transition: all 0.08s linear;
        -moz-transition: all 0.08s linear;
        -o-transition: all 0.08s linear;
        transition: all 0.08s linear;
    }
    .oferpage .nav-sidebar a:hover {
        background-color: #fafafa;
    }
   .oferpage  .nav-sidebar .active a { 
        cursor: default;
        background-color: #5383d3; 
        color: #fff; 
    }
    .oferpage .nav-sidebar .active a:hover {
        /background-color: #E50000;   
    }
    .oferpage .nav-sidebar .text-overflow a,
    .oferpage .nav-sidebar .text-overflow .media-body {
        white-space: nowrap;
        overflow: hidden;
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis; 
    }

    .oferpage .btn-blog {
        color: #ffffff;
        background-color: #E50000;
        border-color: #E50000;
        border-radius:0;
        margin-bottom:10px
    }
    .oferpage .btn-blog:hover,
    .oferpage .btn-blog:focus,
    .oferpage .btn-blog:active,
    .oferpage .btn-blog.active,
    .oferpage .open .dropdown-toggle.btn-blog {
        color: white;
        background-color:#0b56a8;
        border-color: #0b56a8;
    }
    .oferpage article h2{color:#333333;}
   .oferpage h2{color:#0b56a8;}
     .oferpage .margin10{margin-bottom:10px; margin-right:10px;}
     
     .oferpage .container .text-style
    {
      text-align: justify;
      line-height: 23px;
      margin: 0 13px 0 0;
      font-size: 19px;
    }

    .oferpage .navlef .col-md-2{
        padding-left: 0;
    }
 </style>
 <div class="oferpage">
    <div class="header">
    <div class="jumbotron">
    <div class="jumbox">
   
    <h2><span class="title"> Todas las ofertas! &nbsp;&nbsp;</span><img src="../img/discount.png" alt="">
     </h2>
    
        </div>
    
    </div>
    </div>


<div class="navlef">
    <div class="col-md-2">
    <nav class="nav-sidebar">
        <ul class="nav tabs">
          <li class="active"><a href="#tab1" data-toggle="tab">Todas</a></li>
          <li class=""><a href="#tab2" data-toggle="tab">tag 1</a></li>
          <li class=""><a href="#tab3" data-toggle="tab">tag 2</a></li>
          <li class=""><a href="#tab4" data-toggle="tab">tag 3</a></li>
          <li class=""><a href="#tab5" data-toggle="tab">tag 4</a></li>
          <li class=""><a href="#tab6" data-toggle="tab">tag 5</a></li>
          <li class="navbar-form navbar-right" role="search">
                      
                                <div class="input-group " >
                                    <input type="text" class="form-control" placeholder="Buscar tag">
                                    <span class="input-group-btn"><button class="btn btn-primary " type="button"><i class="fa fa-search fa-lg" aria-hidden="true"></i></button></span>
                                </div>
                              
                    </li>                               
        </ul>
    </nav>
        <div><h2 class="add">Place for content</h2></div>

</div>

</div>
<div class="proDes col-md-10">
<!-- breadcrumb -->
<?= $this->element('breadcrumb') ?>

<center>
            <div class="productof store style1">
                            <div class="header">
                                <div class="badges">
                                    <span class="product-badge  right danger-background  semi-circle">-20%</span>
                                </div>
                                <figure class="layer">
                                    <a href="javascript:void(0);">
                                        <img class="card-img-top img-fluid img-responsive" src="../../img/productos/200x200/bags_01.jpg" alt="">
                                    </a>
                                </figure>

                                <div class="icons ">
                                    <h1>
                                        -20%!!!



                                    </h1>
                                    <h2>Local #1</h2>
                                    <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                                    <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
                                    <a class="icon semi-circle" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
                                    <br>
                                </div>
                                <ul class="countdown-product">
                                    <li>
                                        <span class="days">223</span>
                                        <p>Days</p>
                                    </li>
                                    <li>
                                        <span class="hours">13</span>
                                        <p>Hours</p>
                                    </li>
                                    <li>
                                        <span class="minutes">21</span>
                                        <p>Mins</p>
                                    </li>
                                    <li>
                                        <span class="seconds">26</span>
                                        <p>Secs</p>
                                    </li>
                                </ul>
                                <!-- end countdown -->
                            </div>
                            <div class="caption">
                                <h6 class="regular"><a href="#">Lorem Ipsum dolor sit</a></h6>
                                <div class="price">
                                    <small class="amount off">$68.99</small>
                                    <span class="amount text-primary">$59.99</span>
                                </div>
                                <a href="javascript:void(0);"><i class="fa fa-cart-plus mr-5"></i>Add to cart</a>
                            </div>
                            <!-- end caption -->
                        </div>
                        
                        <div class="productof store style1">
                            <div class="header">
                                <div class="badges">
                                    <span class="product-badge  right danger-background  semi-circle">-20%</span>
                                </div>
                                <figure class="layer">
                                    <a href="javascript:void(0);">
                                        <img class="card-img-top img-fluid img-responsive" src="../../img/productos/200x200/pi6.jpg" alt="">
                                    </a>
                                </figure>

                                <div class="icons">
                                    <h1>
                                        -20%!!!



                                    </h1>
                                    <h2>Local #1</h2>
                                    <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                                    <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
                                    <a class="icon semi-circle" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
                                    <br>
                                </div>
                                <ul class="countdown-product">
                                    <li>
                                        <span class="days">223</span>
                                        <p>Days</p>
                                    </li>
                                    <li>
                                        <span class="hours">13</span>
                                        <p>Hours</p>
                                    </li>
                                    <li>
                                        <span class="minutes">21</span>
                                        <p>Mins</p>
                                    </li>
                                    <li>
                                        <span class="seconds">26</span>
                                        <p>Secs</p>
                                    </li>
                                </ul>
                                <!-- end countdown -->
                            </div>
                            <div class="caption">
                                <h6 class="regular"><a href="#">Lorem Ipsum dolor sit</a></h6>
                                <div class="price">
                                    <small class="amount off">$68.99</small>
                                    <span class="amount text-primary">$59.99</span>
                                </div>
                                <a href="javascript:void(0);"><i class="fa fa-cart-plus mr-5"></i>Add to cart</a>
                            </div>
                            <!-- end caption -->
                        </div>
                        
                        <div class="productof store style1">
                            <div class="header">
                                <div class="badges">
                                    <span class="product-badge  right danger-background  semi-circle">-20%</span>
                                </div>
                                <figure class="layer">
                                    <a href="javascript:void(0);">
                                        <img class="card-img-top img-fluid img-responsive" src="../../img/productos/200x200/pi5.jpg" alt="">
                                    </a>
                                </figure>

                                <div class="icons ">
                                    <h1>
                                        -20%!!!



                                    </h1>
                                    <h2>Local #1</h2>
                                    <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                                    <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
                                    <a class="icon semi-circle" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
                                    <br>
                                </div>
                                <ul class="countdown-product">
                                    <li>
                                        <span class="days">223</span>
                                        <p>Days</p>
                                    </li>
                                    <li>
                                        <span class="hours">13</span>
                                        <p>Hours</p>
                                    </li>
                                    <li>
                                        <span class="minutes">21</span>
                                        <p>Mins</p>
                                    </li>
                                    <li>
                                        <span class="seconds">26</span>
                                        <p>Secs</p>
                                    </li>
                                </ul>
                                <!-- end countdown -->
                            </div>
                            <div class="caption">
                                <h6 class="regular"><a href="#">Lorem Ipsum dolor sit</a></h6>
                                <div class="price">
                                    <small class="amount off">$68.99</small>
                                    <span class="amount text-primary">$59.99</span>
                                </div>
                                <a href="javascript:void(0);"><i class="fa fa-cart-plus mr-5"></i>Add to cart</a>
                            </div>
                            <!-- end caption -->
                        </div>
                        
                        <div class="productof store style1">
                            <div class="header">
                                <div class="badges">
                                    <span class="product-badge  right danger-background  semi-circle">-20%</span>
                                </div>
                                <figure class="layer">
                                    <a href="javascript:void(0);">
                                        <img class="card-img-top img-fluid img-responsive" src="../../img/productos/200x200/pi4.jpg" alt="">
                                    </a>
                                </figure>

                                <div class="icons">
                                    <h1>
                                        -20%!!!



                                    </h1>
                                    <h2>Local #1</h2>
                                    <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                                    <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
                                    <a class="icon semi-circle" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
                                    <br>
                                </div>
                                <ul class="countdown-product">
                                    <li>
                                        <span class="days">223</span>
                                        <p>Days</p>
                                    </li>
                                    <li>
                                        <span class="hours">13</span>
                                        <p>Hours</p>
                                    </li>
                                    <li>
                                        <span class="minutes">21</span>
                                        <p>Mins</p>
                                    </li>
                                    <li>
                                        <span class="seconds">26</span>
                                        <p>Secs</p>
                                    </li>
                                </ul>
                                <!-- end countdown -->
                            </div>
                            <div class="caption">
                                <h6 class="regular"><a href="#">Lorem Ipsum dolor sit</a></h6>
                                <div class="price">
                                    <small class="amount off">$68.99</small>
                                    <span class="amount text-primary">$59.99</span>
                                </div>
                                <a href="javascript:void(0);"><i class="fa fa-cart-plus mr-5"></i>Add to cart</a>
                            </div>
                            <!-- end caption -->
                        </div>
                        <div class="productof store style1">
                            <div class="header">
                                <div class="badges">
                                    <span class="product-badge  right danger-background  semi-circle">-20%</span>
                                </div>
                                <figure class="layer">
                                    <a href="javascript:void(0);">
                                        <img class="card-img-top img-fluid img-responsive" src="../../img/productos/200x200/pi3.jpg" alt="">
                                    </a>
                                </figure>

                                <div class="icons ">
                                    <h1>
                                        -20%!!!



                                    </h1>
                                    <h2>Local #1</h2>
                                    <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                                    <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
                                    <a class="icon semi-circle" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
                                    <br>
                                </div>
                                <ul class="countdown-product">
                                    <li>
                                        <span class="days">223</span>
                                        <p>Days</p>
                                    </li>
                                    <li>
                                        <span class="hours">13</span>
                                        <p>Hours</p>
                                    </li>
                                    <li>
                                        <span class="minutes">21</span>
                                        <p>Mins</p>
                                    </li>
                                    <li>
                                        <span class="seconds">26</span>
                                        <p>Secs</p>
                                    </li>
                                </ul>
                                <!-- end countdown -->
                            </div>
                            <div class="caption">
                                <h6 class="regular"><a href="#">Lorem Ipsum dolor sit</a></h6>
                                <div class="price">
                                    <small class="amount off">$68.99</small>
                                    <span class="amount text-primary">$59.99</span>
                                </div>
                                <a href="javascript:void(0);"><i class="fa fa-cart-plus mr-5"></i>Add to cart</a>
                            </div>
                            <!-- end caption -->
                        </div>
                        
                        <div class="productof store style1">
                            <div class="header">
                                <div class="badges">
                                    <span class="product-badge  right danger-background  semi-circle">-20%</span>
                                </div>
                                <figure class="layer">
                                    <a href="javascript:void(0);">
                                        <img class="card-img-top img-fluid img-responsive" src="../../img/productos/200x200/pi2.jpg" alt="">
                                    </a>
                                </figure>

                                <div class="icons">
                                    <h1>
                                        -20%!!!



                                    </h1>
                                    <h2>Local #1</h2>
                                    <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                                    <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
                                    <a class="icon semi-circle" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
                                    <br>
                                </div>
                                <ul class="countdown-product">
                                    <li>
                                        <span class="days">223</span>
                                        <p>Days</p>
                                    </li>
                                    <li>
                                        <span class="hours">13</span>
                                        <p>Hours</p>
                                    </li>
                                    <li>
                                        <span class="minutes">21</span>
                                        <p>Mins</p>
                                    </li>
                                    <li>
                                        <span class="seconds">26</span>
                                        <p>Secs</p>
                                    </li>
                                </ul>
                                <!-- end countdown -->
                            </div>

                            <div class="caption">
                                <h6 class="regular"><a href="#">Lorem Ipsum dolor sit</a></h6>
                                <div class="price">
                                    <small class="amount off">$68.99</small>
                                    <span class="amount text-primary">$59.99</span>
                                </div>
                                <a href="javascript:void(0);"><i class="fa fa-cart-plus mr-5"></i>Add to cart</a>
                            </div>
                            <!-- end caption -->
                        </div>

                        <div class="productof store style1">
                            <div class="header">
                                <div class="badges">
                                    <span class="product-badge  right danger-background  semi-circle">-20%</span>
                                </div>
                                <figure class="layer">
                                    <a href="javascript:void(0);">
                                        <img class="card-img-top img-fluid img-responsive" src="../../img/productos/200x200/pi1.jpg" alt="">
                                    </a>
                                </figure>

                                <div class="icons">
                                    <h1>
                                        -20%!!!



                                    </h1>
                                    <h2>Local #1</h2>
                                    <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                                    <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
                                    <a class="icon semi-circle" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
                                    <br>
                                </div>
                                <ul class="countdown-product">
                                    <li>
                                        <span class="days">223</span>
                                        <p>Days</p>
                                    </li>
                                    <li>
                                        <span class="hours">13</span>
                                        <p>Hours</p>
                                    </li>
                                    <li>
                                        <span class="minutes">21</span>
                                        <p>Mins</p>
                                    </li>
                                    <li>
                                        <span class="seconds">26</span>
                                        <p>Secs</p>
                                    </li>
                                </ul>
                                <!-- end countdown -->
                            </div>
                            <div class="caption">
                                <h6 class="regular"><a href="#">Lorem Ipsum dolor sit</a></h6>
                                <div class="price">
                                    <small class="amount off">$68.99</small>
                                    <span class="amount text-primary">$59.99</span>
                                </div>
                                <a href="javascript:void(0);"><i class="fa fa-cart-plus mr-5"></i>Add to cart</a>
                            </div>
                            <!-- end caption -->
                        </div>
                        <div class="productof store style1">
                            <div class="header">
                                <div class="badges">
                                    <span class="product-badge  right danger-background  semi-circle">-20%</span>
                                </div>
                                <figure class="layer">
                                    <a href="javascript:void(0);">
                                        <img class="card-img-top img-fluid img-responsive" src="../../img/productos/200x200/pi.jpg" alt="">
                                    </a>
                                </figure>

                                <div class="icons">
                                    <h1>
                                        -20%!!!



                                    </h1>
                                    <h2>Local #1</h2>
                                    <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                                    <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
                                    <a class="icon semi-circle" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
                                    <br>
                                </div>
                                <ul class="countdown-product">
                                    <li>
                                        <span class="days">223</span>
                                        <p>Days</p>
                                    </li>
                                    <li>
                                        <span class="hours">13</span>
                                        <p>Hours</p>
                                    </li>
                                    <li>
                                        <span class="minutes">21</span>
                                        <p>Mins</p>
                                    </li>
                                    <li>
                                        <span class="seconds">26</span>
                                        <p>Secs</p>
                                    </li>
                                </ul>
                                <!-- end countdown -->
                            </div>
                            <div class="caption">
                                <h6 class="regular"><a href="#">Lorem Ipsum dolor sit</a></h6>
                                <div class="price">
                                    <small class="amount off">$68.99</small>
                                    <span class="amount text-primary">$59.99</span>
                                </div>
                                <a href="javascript:void(0);"><i class="fa fa-cart-plus mr-5"></i>Add to cart</a>
                            </div>
                            <!-- end caption -->
                        </div>
                        <br>
        
        </center>
        </div>
</div>