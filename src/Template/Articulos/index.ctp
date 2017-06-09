 <style>
    .artPage .blogShort{ border-bottom:1px solid #ddd;}
    .artPage .add{background: #333; padding: 10%; height: 300px;}

    .artPage .nav-sidebar { 
        width: 100%;
        padding: 30px 0; 
        border-right: 1px solid #ddd;
    }
    .artPage .nav-sidebar a {
        color: #333;
        -webkit-transition: all 0.08s linear;
        -moz-transition: all 0.08s linear;
        -o-transition: all 0.08s linear;
        transition: all 0.08s linear;
    }
    .artPage .nav-sidebar a:hover {
        background-color: #fafafa;
    }
   .artPage  .nav-sidebar .active a { 
        cursor: default;
        background-color: #5383d3; 
        color: #fff; 
    }
    .artPage .nav-sidebar .active a:hover {
        /background-color: #E50000;   
    }
    .artPage .nav-sidebar .text-overflow a,
    .artPage .nav-sidebar .text-overflow .media-body {
        white-space: nowrap;
        overflow: hidden;
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis; 
    }

    .artPage .btn-blog {
        color: #ffffff;
        background-color: #E50000;
        border-color: #E50000;
        border-radius:0;
        margin-bottom:10px
    }
    .artPage .btn-blog:hover,
    .artPage .btn-blog:focus,
    .artPage .btn-blog:active,
    .artPage .btn-blog.active,
    .artPage .open .dropdown-toggle.btn-blog {
        color: white;
        background-color:#0b56a8;
        border-color: #0b56a8;
    }
    .artPage article h2{color:#333333;}
   .artPage h2{color:#0b56a8;}
     .artPage .margin10{margin-bottom:10px; margin-right:10px;}
     
     .artPage .container .text-style
    {
      text-align: justify;
      line-height: 23px;
      margin: 0 13px 0 0;
      font-size: 19px;
    }

    .artPage .navlef .col-md-2{
        padding-left: 0;
    }
 </style>
 <div class="artPage">
    <div class="header">
    <div class="jumbotron">
    <div class="jumbox">
   
    <h2><span class="title"> Todos los articulos! &nbsp;&nbsp;</span><img src="../img/cart.png" alt="">
     </h2>
    
        </div>
    
    </div>
    </div>


<div class="navlef">
    <div class="col-md-2">
    <nav class="nav-sidebar">
        <ul class="nav tabs">
          <li class="active"><a href="#tab1" data-toggle="tab">Todo</a></li>
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
           <div class="producto">
                    <div class="card">
                        <div class="grid-top">
                            <a href="#!" class="b-link-stripe b-animate-go">
                                <img class="card img-fluid img-responsive" src="../../img/productos/200x200/pi5.jpg" alt="">
                                <div class="b-wrapper">
                                    <h3 class="b-animate b-from-left    b-delay03 ">
                                        <span>Shoe</span>
                                    </h3>
                                </div>
                            </a>


                            <p><a href="single.html">readable content</a></p>
                        </div>
                    </div>
                </div>

                <div class="producto">
                    <div class="card">
                        <div class="grid-top">
                            <a href="#!" class="b-link-stripe b-animate-go">
                                <img class="card img-fluid img-responsive" src="../../img/productos/200x200/pi.jpg" alt="">
                                <div class="b-wrapper">
                                    <h3 class="b-animate b-from-left    b-delay03 ">
                                        <span>T-Shirt</span>
                                    </h3>
                                </div>
                            </a>


                            <p><a href="single.html">Contrary to popular</a></p>
                        </div>
                    </div>
                </div>


                <div class="producto">
                    <div class="card">
                        <div class="grid-top">
                            <a href="#!" class="b-link-stripe b-animate-go">
                                <img class="card img-fluid img-responsive" src="../../img/productos/200x200/fashion_01.jpg" alt="">
                                <div class="b-wrapper">
                                    <h3 class="b-animate b-from-left    b-delay03 ">
                                        <span>Shoe</span>
                                    </h3>
                                </div>
                            </a>


                            <p><a href="single.html">Clssical Latin</a></p>
                        </div>
                    </div>
                </div>

           <div class="producto">
                    <div class="card">
                        <div class="grid-top">
                            <a href="#!" class="b-link-stripe b-animate-go">
                                <img class="card img-fluid img-responsive" src="../../img/productos/200x200/pi4.jpg" alt="">
                                <div class="b-wrapper">
                                    <h3 class="b-animate b-from-left    b-delay03 ">
                                        <span>Shoe</span>
                                    </h3>
                                </div>
                            </a>


                            <p><a href="single.html">Clssical Latin</a></p>
                        </div>
                    </div>
                </div>

                <div class="producto">
                    <div class="card">
                        <div class="grid-top">
                            <a href="#!" class="b-link-stripe b-animate-go">
                                <img class="card img-fluid img-responsive" src="../../img/productos/200x200/pi2.jpg" alt="">
                                <div class="b-wrapper">
                                    <h3 class="b-animate b-from-left    b-delay03 ">
                                        <span>Bag</span>
                                    </h3>
                                </div>
                            </a>


                            <p><a href="single.html">content here</a></p>
                        </div>
                    </div>
                </div>

                <div class="producto">
                    <div class="card">
                        <div class="grid-top">
                            <a href="#!" class="b-link-stripe b-animate-go">
                                <img class="card img-fluid img-responsive" src="../../img/productos/200x200/pi3.jpg" alt="">
                                <div class="b-wrapper">
                                    <h3 class="b-animate b-from-left    b-delay03 ">
                                        <span>Shirt</span>
                                    </h3>
                                </div>
                            </a>


                            <p><a href="single.html">Seffered Alteration</a></p>
                        </div>
                    </div>
                </div>
                
                   <div class="producto">
                    <div class="card">
                        <div class="grid-top">
                            <a href="#!" class="b-link-stripe b-animate-go">
                                <img class="card img-fluid img-responsive" src="../../img/productos/200x200/pi1.jpg" alt="">
                                <div class="b-wrapper">
                                    <h3 class="b-animate b-from-left    b-delay03 ">
                                        <span>Shoe</span>
                                    </h3>
                                </div>
                            </a>


                            <p><a href="single.html">Clssical Latin</a></p>
                        </div>
                    </div>
                </div>

                <div class="producto">
                    <div class="card">
                        <div class="grid-top">
                            <a href="#!" class="b-link-stripe b-animate-go">
                                <img class="card img-fluid img-responsive" src="../../img/productos/200x200/pi2.jpg" alt="">
                                <div class="b-wrapper">
                                    <h3 class="b-animate b-from-left    b-delay03 ">
                                        <span>Bag</span>
                                    </h3>
                                </div>
                            </a>


                            <p><a href="single.html">content here</a></p>
                        </div>
                    </div>
                </div>

                <div class="producto">
                    <div class="card">
                        <div class="grid-top">
                            <a href="#!" class="b-link-stripe b-animate-go">
                                <img class="card img-fluid img-responsive" src="../../img/productos/200x200/pi5.jpg" alt="">
                                <div class="b-wrapper">
                                    <h3 class="b-animate b-from-left    b-delay03 ">
                                        <span>Shoe</span>
                                    </h3>
                                </div>
                            </a>


                            <p><a href="single.html">readable content</a></p>
                        </div>
                    </div>
                </div>

                <div class="producto">
                    <div class="card">
                        <div class="grid-top">
                            <a href="#!" class="b-link-stripe b-animate-go">
                                <img class="card img-fluid img-responsive" src="../../img/productos/200x200/pi.jpg" alt="">
                                <div class="b-wrapper">
                                    <h3 class="b-animate b-from-left    b-delay03 ">
                                        <span>T-Shirt</span>
                                    </h3>
                                </div>
                            </a>


                            <p><a href="single.html">Contrary to popular</a></p>
                        </div>
                    </div>
                </div>


                <div class="producto">
                    <div class="card">
                        <div class="grid-top">
                            <a href="#!" class="b-link-stripe b-animate-go">
                                <img class="card img-fluid img-responsive" src="../../img/productos/200x200/fashion_01.jpg" alt="">
                                <div class="b-wrapper">
                                    <h3 class="b-animate b-from-left    b-delay03 ">
                                        <span>Shoe</span>
                                    </h3>
                                </div>
                            </a>


                            <p><a href="single.html">Clssical Latin</a></p>
                        </div>
                    </div>
                </div>

           <div class="producto">
                    <div class="card">
                        <div class="grid-top">
                            <a href="#!" class="b-link-stripe b-animate-go">
                                <img class="card img-fluid img-responsive" src="../../img/productos/200x200/pi4.jpg" alt="">
                                <div class="b-wrapper">
                                    <h3 class="b-animate b-from-left    b-delay03 ">
                                        <span>Shoe</span>
                                    </h3>
                                </div>
                            </a>


                            <p><a href="single.html">Clssical Latin</a></p>
                        </div>
                    </div>
                </div>

                <div class="producto">
                    <div class="card">
                        <div class="grid-top">
                            <a href="#!" class="b-link-stripe b-animate-go">
                                <img class="card img-fluid img-responsive" src="../../img/productos/200x200/pi2.jpg" alt="">
                                <div class="b-wrapper">
                                    <h3 class="b-animate b-from-left    b-delay03 ">
                                        <span>Bag</span>
                                    </h3>
                                </div>
                            </a>


                            <p><a href="single.html">content here</a></p>
                        </div>
                    </div>
                </div>

                <div class="producto">
                    <div class="card">
                        <div class="grid-top">
                            <a href="#!" class="b-link-stripe b-animate-go">
                                <img class="card img-fluid img-responsive" src="../../img/productos/200x200/pi3.jpg" alt="">
                                <div class="b-wrapper">
                                    <h3 class="b-animate b-from-left    b-delay03 ">
                                        <span>Shirt</span>
                                    </h3>
                                </div>
                            </a>


                            <p><a href="single.html">Seffered Alteration</a></p>
                        </div>
                    </div>
                </div>
                
                   <div class="producto">
                    <div class="card">
                        <div class="grid-top">
                            <a href="#!" class="b-link-stripe b-animate-go">
                                <img class="card img-fluid img-responsive" src="../../img/productos/200x200/pi1.jpg" alt="">
                                <div class="b-wrapper">
                                    <h3 class="b-animate b-from-left    b-delay03 ">
                                        <span>Shoe</span>
                                    </h3>
                                </div>
                            </a>


                            <p><a href="single.html">Clssical Latin</a></p>
                        </div>
                    </div>
                </div>

                <div class="producto">
                    <div class="card">
                        <div class="grid-top">
                            <a href="#!" class="b-link-stripe b-animate-go">
                                <img class="card img-fluid img-responsive" src="../../img/productos/200x200/pi2.jpg" alt="">
                                <div class="b-wrapper">
                                    <h3 class="b-animate b-from-left    b-delay03 ">
                                        <span>Bag</span>
                                    </h3>
                                </div>
                            </a>


                            <p><a href="single.html">content here</a></p>
                        </div>
                    </div>
                </div>
        </center>
        </div>
</div>