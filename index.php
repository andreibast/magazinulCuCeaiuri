<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magazinul Cu Ceaiuri</title>
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


</head>
<body>
    <div class="container">
        <div class="row" style="background: #fdfdfd;">
            <div class="col-md-2 w-1"><img src="pics/logo.jpg" style = "width: 100px;"></div>
            <div class="col-md-4 ">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-5 my-sm-3" type="submit">Search</button>
                </form>
            </div>
            <div class="col-md-6">
                <div class="mt-3">
                    <button type="button" class="btn btn-light" data-toggle="popover" data-trigger="focus" data-placement="bottom" title="Ceaiurile tale favorite: " data-content="#tipCeai1">Favorite</button>
                    <button type="button" class="btn btn-light" data-toggle="popover" data-trigger="focus" data-placement="bottom" title="Login sau creaza cont nou: " data-content="Daca nu ai cont apasa aici!">Contul Meu</button>
                    <button type="button" class="btn btn-light" data-toggle="popover" data-trigger="focus" data-placement="bottom" title="Vezi continutul cosului: " data-content="#tipCeai1">Cosul Meu</button>
                    
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div>
        <ul>
            <li><button type="button" class="btn btn-dark pl-5 pr-5" >TOATE CEAIURILE</button></li>
            <li><button type="button" class="btn btn-dark pl-5 pr-5" >Istoric Ceaiuri</button></li>
            <li><button type="button" class="btn btn-dark pl-5 pr-5" >Noutati</button></li>
            <li><button type="button" class="btn btn-dark pl-5 pr-5" >Despre Magazin</button></li>
            <li><button type="button" class="btn btn-dark pl-5 pr-5" >Contact</button></li>
        </ul>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-2">
            <img src="pics/skyscraper-banner/banner-left-2.jpg" alt="">
        </div>

        <div class="col-md-8">
            <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="10000">
                    <img src="pics/carousel/tea1.jpg" class="d-block w-100" alt="0">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                    <img src="pics/carousel/tea2.jpg" class="d-block w-100" alt="1">
                    </div>
                    <div class="carousel-item">
                    <img src="pics/carousel/tea3.jpg" class="d-block w-100" alt="2">
                    </div>
                    <div class="carousel-item">
                    <img src="pics/carousel/tea4.jpg" class="d-block w-100" alt="3">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        

            <hr>


            <div>
                <div class="container">
                    <div class="row">
                        <input type="text" name="txtId" size="5" placeholder="min(lei)">
                        <p class="ml-5 mr-5"> pana la </p>
                        <input type="text" name="txtId" size="5" placeholder="max(lei)">
                        <div class="col-md-1"></div>
                        <select class="form-control" id="exampleFormControlSelect1"style="max-width:15%;" placeholder="Search">
                            <option>Select category</option>
                            <option>Category 2</option>
                            <option>Category 3</option>
                            <option>Category 4</option>
                            <option>Category 5</option>
                        </select>

                        <div class="col-md-1"></div>
                        <select class="form-control" id="exampleFormControlSelect1"style="max-width:15%;" >
                            <option>Select purpose</option>
                            <option>Category 2</option>
                            <option>Category 3</option>
                            <option>Category 4</option>
                            <option>Category 5</option>
                        </select>
                        <div class="col-md-1"></div>
                        <button type="button" class="btn btn-success">Sort!</button>
                    </div>
                </div>
            </div>

            <hr>

            <!----------------------
            CELE MAI VANDUTE CEAIURI    
            ----------------------->
            <div>
                <div class="jumbotron jumbotron-fluid p-0">
                    <h1 class="display-5 text-center m-0">CELE MAI VANDUTE CEAIURI</h1>
                </div>
            
                <div class="row">
                
                    <div class="card-bestsell">
                        <div class="imgbx">
                            <img src="pics/best-sellers/img1.jpg" alt="">
                        </div>
                        <div class="details">
                            <h2>Ceai 1</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam vero, pariatur totam sed atque quia voluptate vel repudiandae ad ut alias esse laudantium distinctio? Quae ipsa autem velit ex aut!</p>
                        </div>
                    </div>


                    <div class="card-bestsell">
                        <div class="imgbx">
                            <img src="pics/best-sellers/img2.jpg" alt="">
                        </div>
                        <div class="details">
                            <h2>Ceai 2</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam vero, pariatur totam sed atque quia voluptate vel repudiandae ad ut alias esse laudantium distinctio? Quae ipsa autem velit ex aut!</p>
                        </div>
                    </div>


                    <div class="card-bestsell">
                        <div class="imgbx">
                            <img src="pics/best-sellers/img3.jpg" alt="">
                        </div>
                        <div class="details">
                            <h2>Ceai 3</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam vero, pariatur totam sed atque quia voluptate vel repudiandae ad ut alias esse laudantium distinctio? Quae ipsa autem velit ex aut!</p>
                        </div>
                    </div>
                </div>
                
                

            </div>



            <!----------------------
            Toate produsele   
            ----------------------->
            <div>
                <div class="jumbotron jumbotron-fluid p-0 mt-3">
                    <h1 class="display-5 text-center m-0">TOATE PRODUSELE</h1>
                </div>

            </div>


        </div><!--col 8 end-->

        <div class="col-md-2">
            <img src="pics/skyscraper-banner/banner-right-2.jpg" alt="">
        </div>
    </div>

    <!----------------------
    Footer
    ----------------------->




    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>