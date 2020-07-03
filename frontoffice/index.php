<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/css/style.css">
   
    <title>Book Adiction</title>
    
</head>

<body>

    <!--navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#6158e5">
        <a class="navbar-brand" href="#">BOOK ADDICTION</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./assets/html/shopingcart.html">shooping cart
                        <span id="shopcartnbr"  class="badge badge-pill badge-primary">0</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!--end navigation-->

    
    <!-- start header-->
    
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#6158e5">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item ">
                  <a class="nav-link" href="index.php"><i class="fas fa-home fa-lg"></i>Home </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link"  href="views/login.php" ><i class="fas fa-sign-in-alt fa-lg"></i>Login</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link"  href="./views/register.php" ><i class="fas fa-sign-out-alt fa-lg"></i>Register</a>
                </li>

                
            </ul>
            
        </div>
    </nav>
        <!--modal login-->
        <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
         <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header text-center">
                <img src="assets/img/man.png" alt="avatar" class="avatar" style="width: 50px;">
              <h4 class="modal-title w-100 font-weight-bold">login</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form >

                    <div class="form-group">
                        <label> <i class="fas fa-envelope fa-2x"></i> Your email</label>
                        <input type="text" name="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label> <i class="fas fa-lock fa-2x"></i> Password</label>
                        <input type="password" name="" class="form-control">
                        <p class=" d-flex justify-content-end">Forgot <a href="#" class="blue-text ml-1">
                            Password?</a></p>
                    </div>
                </form>
            </div>
            
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-success">Login</button>
              </div>

            </div>
            
          </div>
        </div>
      
       

           
         


      
    <div class="container">
        <div class="row">

            <!--./col-lg-3-->
          
            <div class="col-lg-3">
                <h1 class="my-4">categorie</h1>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active" onclick="filterBooks('all')">Tous les livres</a>
                    <a href="#" class="list-group-item list-group-item-action" onclick="filterBooks('nouveautés')">nouveautés</a>
                    <a href="#" class="list-group-item list-group-item-action" onclick="filterBooks('computing')">computing</a>
                    <a href="#" class="list-group-item list-group-item-action" onclick="filterBooks('biography')">biography</a>
                    <a href="#" class="list-group-item list-group-item-action" onclick="filterBooks('business')">business</a>
                    <a href="#" class="list-group-item list-group-item-action" onclick="filterBooks('jeunesse')">jeunesse</a>
                    <a href="#" class="list-group-item list-group-item-action" onclick="filterBooks('bandedessinée')">bande dessinée</a>
                </div>
            </div>

           <!--slidebook-->
                <div class="sldbk col-lg-6">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="assets/img/carousel/1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/img/carousel/2.jpg" alt="Second slide">
                        </div>
                        
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>
                    </div>
                
                </div>
            
        </div>

        <!--------all books-------->
        <div class="container-fluid text-center">
            <div class="row my-4">
                <div class="col-sm-6 col-md-3 col-lg-3 my-3">
                    <div class="allBooks nouveautés ">
                        <div class="card h-100">
                            <a class="text-center" href="#">
                                <img class="card-img-top" src="assets/img/l'empire ottoman.jpg" alt="Card image cap" >
                            </a>

                            <div class="card-body">
                                <h4 class="card-title">L'empire ottoman</h4>
                                <h5> <span class="badge badge-success">New</span> 21$ <span class="sold1">24,99$</span></h5>
                               
                            </div>
                            <div class="card-footer">
                                <button  type="button"   onclick="myFunction()" class="btn btn-info text-white btn-block">add to cart</button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 my-3">
                    <div class="allBooks nouveautés ">
                        <div class="card h-100">
                            <a class="text-center" href="#">
                                <img class="card-img-top" src="assets/img/habib-bourguiba1.jpg" alt="Card image cap" >
                            </a>

                            <div class="card-body">
                                <h4 class="card-title">Habib Bourguiba</h4>
                                <h5>  <span class="badge badge-success">New</span> 21$ <span class="sold1">24,99$</span></h5>
                               
                            </div>
                            <div class="card-footer">
                                <button  type="button"   onclick="myFunction()" class="btn btn-info text-white btn-block">add to cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 my-3">
                    
                    <div class="allBooks computing  ">
                        <div class="card h-100">
                            <a class="text-center" href="#">
                                <img class="card-img-top" src="assets/img/sql.jpg" alt="Card image cap" >
                            </a>

                            <div class="card-body">
                                <h4 class="card-title">SQL Quickstart</h4>
                                <h5>21$ <span class="sold1">24,99$</span></h5>
                            </div>
                            <div class="card-footer">
                                <button  type="button"   onclick="myFunction()" class="btn btn-info text-white btn-block">add to cart</button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 my-3">
                    <div class="allBooks computing ">
                        <div class="card h-100">
                            <a class="text-center" href="#">
                                <img class="card-img-top" src="assets/img/Eloquent javascript.jpg" alt="Card image cap">
                            </a>

                            <div class="card-body">
                                <h4 class="card-title">javascript</h4>
                                <h5>25$ <span class="sold1">39,99$</span></h5>
                            </div>
                            <div class="card-footer">
                                <a  onclick="myFunction()" class="btn btn-info text-white btn-block"   href="#">add to cart</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 my-3">
                    <div class="allBooks computing  ">
                        <div class="card h-100">
                            <a class="text-center" href="#">
                                <img class="card-img-top" src="assets/img/adobe photoshop.jpg" alt="Card image cap">
                            </a>

                            <div class="card-body">
                                <h4 class="card-title">Photoshop</h4>
                                <h5>35$ <span class="sold1">59,99$</span></h5>
                            </div>
                            <div class="card-footer">
                                <a  onclick="myFunction()"  class="btn btn-info text-white btn-block"   href="#">add to cart</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 my-3">
                    <div class="allBooks biography">
                        <div class="card h-100">
                            <a class="text-center" href="#">
                                <img class="card-img-top" src="assets/img/alibaba.jpg" alt="Card image cap">
                            </a>

                            <div class="card-body">
                                <h4 class="card-title">Alibaba </h4>
                                <h5>15$ <span class="sold1">16,99$</span></h5>
                            </div>
                            <div class="card-footer">
                                <a  onclick="myFunction()"  class="btn btn-info text-white btn-block" href="#">add to cart</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 my-3">
                    <div class="allBooks biography  ">
                        <div class="card h-100">
                            <a class="text-center" href="#">
                                <img class="card-img-top" src="assets/img/steve jobs.jpg" alt="Card image cap">
                            </a>

                            <div class="card-body">
                                <h4 class="card-title">Steve Jobs </h4>
                                <h5>11$ <span class="sold1">16,25$</span></h5>
                            </div>
                            <div class="card-footer">
                                <a   onclick="myFunction()" class="btn btn-info text-white btn-block"    href="#">add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 my-3">
                    <div class="allBooks biography">
                        <div class="card h-100">
                            <a class="text-center" href="#">
                                <img class="card-img-top" src="assets/img/nelson mandela.jpg" alt="Card image cap">
                            </a>

                            <div class="card-body">
                                <h4 class="card-title">Nelson Mandela </h4>
                                <h5>11$ <span class="sold1">16,25$</span></h5>
                            </div>
                            <div class="card-footer">
                                <a  onclick="myFunction()" class="btn btn-info text-white btn-block"  href="#">add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 my-3">
                    <div class="allBooks jeunesse ">
                        <div class="card h-100">
                            <a class="text-center" href="#">
                                <img class="card-img-top" src="assets/img/harry-potter ecole.jpg" alt="Card image cap">
                            </a>
  
                            <div class="card-body">
                                <h4 class="card-title">harry-potter</h4>
                                <h5>13$ <span class="sold1">15$</span></h5>
                            </div>
                            <div class="card-footer">
                                <a  onclick="myFunction()" class="btn btn-info text-white btn-block"  href="#">add to cart</a>
                            </div>
                        </div>
  
                      </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 my-3">
                    <div class="allBooks bandedessinée ">
                        <div class="card h-100">
                            <a class="text-center" href="#">
                                <img class="card-img-top" src="assets/img/marvel legend.jpg" alt="Card image cap">
                            </a>
    
                            <div class="card-body">
                                <h4 class="card-title"><a href="">legend marvel</a></h4>
                                <h5>20$ <span class="sold1">50$</span></h5>
                            </div>
                            <div class="card-footer">
                                <a   onclick="myFunction()"  class="btn btn-info text-white btn-block"  href="#">add to cart</a>
                            </div>
                        </div>
    
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 my-3">
                    <div class="allBooks bandedessinée ">
                        <div class="card h-100">
                            <a class="text-center" href="#">
                                <img class="card-img-top" src="assets/img/titeuf sens vie.jpg" alt="Card image cap">
                            </a>
      
                            <div class="card-body">
                                <h4 class="card-title">Titeuf </h4> 
                                <h5>20$ <span class="sold1">50$</span></h5>
                            </div>
                            <div class="card-footer">
                                <a  onclick="myFunction()" class="btn btn-info text-white btn-block"  href="#">add to cart</a>
                            </div>
                        </div>
      
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 my-3">
                    <div class="allBooks bandedessinée ">
                        <div class="card h-100">
                            <a class="text-center" href="#">
                                <img class="card-img-top" src="assets/img/zelda vert legand.jpg" alt="Card image cap">
                            </a>
        
                            <div class="card-body">
                                <h4 class="card-title">zelda</h4>
                                <h5>30$ <span class="sold1">50$</span></h5>
                            </div>
                            <div class="card-footer">
                                <a  onclick="myFunction()" class="btn btn-info text-white btn-block"  href="#">add to cart</a>
                            </div>
                        </div>
        
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 my-3">
                    <div class="allBooks business ">
                        <div class="card h-100">
                            <a class="text-center" href="#">
                                <img class="card-img-top" src="assets/img/12 years slave.jpg" alt="Card image cap">
                            </a>
        
                            <div class="card-body">
                                <h4 class="card-title">12 years of slaves</h4>
                                <h5>50$ <span class="sold1">70$</span></h5>
                            </div>
                            <div class="card-footer">
                                <a   onclick="myFunction()" class="btn btn-info text-white btn-block"  href="#">add to cart</a>
                            </div>
                        </div>
        
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 my-3">
                    <div class="allBooks business  ">
                        <div class="card h-100">
                            <a class="text-center" href="#">
                                <img class="card-img-top" src="assets/img/les amants du ciel1.jpg" alt="Card image cap">
                            </a>
        
                            <div class="card-body">
                                <h4 class="card-title">les amants du ciel</h4>
                                <h5>20$ <span class="sold1">50$</span></h5>
                            </div>
                            <div class="card-footer">
                                <a  onclick="myFunction()" class="btn btn-info text-white btn-block"  href="#">add to cart</a>
                            </div>
                        </div>
        
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 my-3">
                    <div class="allBooks jeunesse ">
                        <div class="card h-100">
                            <a class="text-center" href="#">
                                <img class="card-img-top" src="assets/img/elisabeth princesse.jpg" alt="Card image cap">
                            </a>

                            <div class="card-body">
                                <h4 class="card-title">Elisabeth </h4>
                                <h5>20$ <span class="sold1">50$</span></h5>
                            </div>
                            <div class="card-footer">
                                <a  onclick="myFunction()" class="btn btn-info text-white btn-block"  href="#">add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 my-3">
                    <div class="allBooks jeunesse ">
                        <div class="card h-100">
                            <a class="text-center" href="#">
                                <img class="card-img-top" src="assets/img/tobie lolness.jpg" alt="Card image cap">
                            </a>
        
                            <div class="card-body">
                                <h4 class="card-title">Tobie lolness</h4>
                                <h5>60$</h5>
                            </div>
                            <div class="card-footer">
                                <a onclick="myFunction()"  class="btn btn-info text-white btn-block"  href="#">add to cart</a>
                            </div>
                        </div>
        
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 my-3"> 
                    <div class="allBooks jeunesse ">
                        <div class="card h-100">
                            <a class="text-center" href="#">
                                <img class="card-img-top" src="assets/img/histoir du fille soir.jpg" alt="Card image cap">
                            </a>

                            <div class="card-body">
                                <h4 class="card-title">Histoires du soir pour filles rebelles</h4>
                                <h5>65$ <span class="sold1">70$</span></h5>
                            </div>
                            <div class="card-footer">
                                <a  onclick="myFunction()" class="btn btn-info text-white btn-block"  href="#">add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 my-3">
                    <div class="allBooks bandedessinée  ">
                        <div class="card h-100">
                            <a class="text-center" href="#">
                                <img class="card-img-top" src="assets/img/tintin or noir.jpg" alt="Card image cap">
                            </a>

                            <div class="card-body">
                                <h4 class="card-title">Tintin le crabe aux princes</h4>
                                <h5>17$ <span class="sold1">19$</span></h5>
                            </div>
                            <div class="card-footer">
                                <a  onclick="myFunction()"class="btn btn-info text-white btn-block"  href="#">add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
              
                <div class="col-sm-6 col-md-3 col-lg-3 my-3">
                    <div class="allBooks bandedessinée ">
                        <div class="card h-100">
                            <a class="text-center" href="#">
                                <img class="card-img-top" src="assets/img/ile noir1.jpg" alt="Card image cap">
                            </a>
        
                            <div class="card-body">
                                <h4 class="card-title">Tintin ile noir</h4>
                                <h5>17$ <span class="sold1">19$</span></h5>
                            </div>
                            <div class="card-footer">
                                <a  onclick="myFunction()"class="btn btn-info text-white btn-block"  href="#">add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
              

            </div>
        </div>     
    </div> 

    <div class="up">
        <i class="fa fa-chevron-up"></i>
    </div>
    

    <!-- Footer -->
<footer class="footer font-small bg-dark text-white-50 pt-4">
    
    <div class="footer-copyright text-center py-3">© 2020 Copyright: </div>    
  
  </footer>
  <!-- Footer -->
  
    <!-- Modal shooping -->


















    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
        <script
        src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
    <script src="./assets/js/controle.js"></script>
</body>

</html>