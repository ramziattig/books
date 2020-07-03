<?php
session_start();

if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
    header('location:login.php?login=false');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="../assets/css/profiluser.css">
<title>Profile</title>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#6158e5 ">

        <a class="navbar-brand" href="#">BOOK ADDICTION</a>
            <div style="float: right; cursor: pointer;">
                <i class="fas fa-shopping-cart fa-lg" >
                    <span id="shopcartnbr" class="badge badge-pill badge-primary">0</span>
                </i>
            </div>
            
           

        <ul class="navbar-nav" style="margin-left:950px">
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                welcom
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                    </a>
                    <div class="dropdown-divider"></div>
                        <a  class="dropdown-item" href="../controllers/userController.php?event=logout">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                </div>
            </li>    
        </ul>
</nav>




<div class="container">
        <div class="row">
               
            <!--./col-lg-3-->
                <div class="col-lg-3">
                    <h1 class="my-4">categorie</h1>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active" onclick="filterBooks('all')" >Tous les livres</a>
                        <a href="#" class="list-group-item list-group-item-action" onclick="filterBooks('nouveautés')" >nouveautés</a>
                        <a href="#" class="list-group-item list-group-item-action" onclick="filterBooks('computing')" >computing</a>
                        <a href="#" class="list-group-item list-group-item-action" onclick="filterBooks('biography')">biography</a>
                        <a href="#" class="list-group-item list-group-item-action" onclick="filterBooks('business')">business</a>
                        <a href="#" class="list-group-item list-group-item-action" onclick="filterBooks('jeunesse')">jeunesse</a>
                        <a href="#" class="list-group-item list-group-item-action" onclick="filterBooks('bandedessinée')">bande dessinée</a>
                    </div>
                </div>

                <!--col-lg-9-->
                <div class="col-lg-9">

                    <div class="row my-5">

                        <div class="allBooks nouveautés col-lg-4 col-md-6  mb-4">
                            <div class="card h-100">
                                <a class="text-center" href="#">
                                    <img class="card-img-top" src="../assets/img/l'empire ottoman.jpg" alt="Card image cap">
                                </a>

                            <div class="card-body">
                                <h4 class="card-title"><a href="">L'empire ottoman</a></h4>
                                <h5> <span class="badge badge-success">New</span> 21$ <span class="sold">24,99$</span></h5>
                               
                            </div>
                                <div class="card-footer">
                                    <button  type="button"  data-toggle="modal" data-target="#exampleModal"  onclick="addtocart('lempire ottoman')"  class="btn btn-danger text-white btn-block">add to cart</button>
                                </div>
                            </div>

                        </div>


                        <div class="allBooks nouveautés  col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a class="text-center" href="#">
                                    <img class="card-img-top" src="../assets/img/habib-bourguiba1.jpg" alt="Card image cap">
                                </a>

                                <div class="card-body">
                                    <h4 class="card-title"><a href="">habib-bourguiba</a></h4>
                                    <h5>21$ <span class="sold">29,99$</span></h5>
                                </div>
                                <div class="card-footer">
                                    <a  data-toggle="modal" data-target="#exampleModal"   onclick="addtocart('habib bourguiba')"       class="btn btn-danger text-white btn-block"   href="#">add to cart</a>
                                </div>
                            </div>

                        </div>
                        

                        <div class="allBooks computing  col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a class="text-center" href="#">
                                    <img class="card-img-top" src="../assets/img/sql.jpg" alt="Card image cap">
                                </a>

                                <div class="card-body">
                                    <h4 class="card-title"><a href="">SQL Quickstart</a></h4>
                                    <h5>21$ <span class="sold">22,99$</span></h5>
                                </div>
                                <div class="card-footer">
                                    <a  data-toggle="modal" data-target="#exampleModal"   onclick="addtocart('sql quickstart')"    class="btn btn-danger text-white btn-block"  href="#">add to cart</a>
                                </div>
                            </div>

                        </div>

                        
                        <div class="allBooks computing  col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a class="text-center" href="#">
                                    <img class="card-img-top" src="../assets/img/Eloquent javascript.jpg" alt="Card image cap">
                                </a>

                                <div class="card-body">
                                    <h4 class="card-title"><a href="">javascript</a></h4>
                                    <h5>25$ <span class="sold">39,99$</span></h5>
                                </div>
                                <div class="card-footer">
                                    <a  data-toggle="modal" data-target="#exampleModal"   onclick="addtocart('javascript')"  class="btn btn-danger text-white btn-block"   href="#">add to cart</a>
                                </div>
                            </div>

                        </div>


                        <div class="allBooks computing  col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a class="text-center" href="#">
                                    <img class="card-img-top" src="../assets/img/adobe photoshop.jpg" alt="Card image cap">
                                </a>

                                <div class="card-body">
                                    <h4 class="card-title"><a href="">adobe photoshop</a></h4>
                                    <h5>35$ <span class="sold">59,99$</span></h5>
                                </div>
                                <div class="card-footer">
                                    <a  data-toggle="modal" data-target="#exampleModal"   onclick="addtocart('adobe photoshop')" class="btn btn-danger text-white btn-block"  href="#">add to cart</a>
                                </div>
                            </div>

                        </div>

                        <div class="allBooks biography  col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a class="text-center" href="#">
                                    <img class="card-img-top" src="../assets/img/alibaba.jpg" alt="Card image cap">
                                </a>

                                <div class="card-body">
                                    <h4 class="card-title"><a href="">alibaba</a></h4>
                                    <h5>15$ <span class="sold">16,99$</span></h5>
                                </div>
                                <div class="card-footer">
                                    <a  data-toggle="modal" data-target="#exampleModal"  onclick="addtocart('alibaba')"  class="btn btn-danger text-white btn-block"   href="#">add to cart</a>
                                </div>
                            </div>

                        </div>


                        <div class="allBooks biography col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a class="text-center" href="#">
                                    <img class="card-img-top" src="../assets/img/steve jobs.jpg" alt="Card image cap">
                                </a>

                                <div class="card-body">
                                    <h4 class="card-title"><a href="">Steve Jobs</a></h4>
                                    <h5>11$ <span class="sold">16,25$</span></h5>
                                </div>
                                <div class="card-footer">
                                    <a  data-toggle="modal" data-target="#exampleModal"  onclick="addtocart('steve jobs')"  class="btn btn-danger text-white btn-block"   href="#">add to cart</a>
                                </div>
                            </div>

                        </div>


                        <div class="allBooks biography  col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a class="text-center" href="#">
                                    <img class="card-img-top" src="../assets/img/nelson mandela.jpg" alt="Card image cap">
                                </a>

                                <div class="card-body">
                                    <h4 class="card-title"><a href="">Nelson Mandela</a></h4>
                                    <h5>11$ <span class="sold">16,25$</span></h5>
                                </div>
                                <div class="card-footer">
                                    <a  data-toggle="modal" data-target="#exampleModal"   onclick="addtocart('nelson mandela')" class="btn btn-danger text-white btn-block"   href="#">add to cart</a>
                                </div>
                            </div>

                        </div>


                        <div class="allBooks jeunesse  col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a class="text-center" href="#">
                                    <img class="card-img-top" src="../assets/img/harry-potter ecole.jpg" alt="Card image cap">
                                </a>

                                <div class="card-body">
                                    <h4 class="card-title"><a href="">harry-potter</a></h4>
                                    <h5>13$ <span class="sold">15$</span></h5>
                                </div>
                                <div class="card-footer">
                                    <a  data-toggle="modal" data-target="#exampleModal"  onclick="addtocart('harry potter')" class="btn btn-danger text-white btn-block"   href="#">add to cart</a>
                                </div>
                            </div>

                        </div>


                        <div class="allBooks bandedessinée col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a class="text-center" href="#">
                                    <img class="card-img-top" src="../assets/img/marvel legend.jpg" alt="Card image cap">
                                </a>

                                <div class="card-body">
                                    <h4 class="card-title"><a href="">legend marvel</a></h4>
                                    <h5>20$ <span class="sold">50$</span></h5>
                                </div>
                                <div class="card-footer">
                                    <a  data-toggle="modal" data-target="#exampleModal"  onclick="addtocart('legend marvel')"  class="btn btn-danger text-white btn-block"   href="#">add to cart</a>
                                </div>
                            </div>

                        </div>


                        <div class="allBooks bandedessinée  col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a class="text-center" href="#">
                                    <img class="card-img-top" src="../assets/img/titeuf sens vie.jpg" alt="Card image cap">
                                </a>

                                <div class="card-body">
                                    <h4 class="card-title"><a href="">Titeuf</a></h4>
                                    <h5>20$ <span class="sold">50$</span></h5>
                                </div>
                                <div class="card-footer">
                                    <a  data-toggle="modal" data-target="#exampleModal"  onclick="addtocart('titeuf')" class="btn btn-danger text-white btn-block"   href="#">add to cart</a>
                                </div>
                            </div>

                        </div>

                        <div class="allBooks bandedessinée  col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a class="text-center" href="#">
                                    <img class="card-img-top" src="../assets/img/zelda vert legand.jpg" alt="Card image cap">
                                </a>

                                <div class="card-body">
                                    <h4 class="card-title"><a href="">zelda</a></h4>
                                    <h5>30$ <span class="sold">50$</span></h5>
                                </div>
                                <div class="card-footer">
                                    <a  data-toggle="modal" data-target="#exampleModal"  onclick="addtocart('zelda')" class="btn btn-danger text-white btn-block"  href="#">add to cart</a>
                                </div>
                            </div>

                        </div>

                        <div class="allBooks  business col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a class="text-center" href="#">
                                    <img class="card-img-top" src="../assets/img/12 years slave.jpg" alt="Card image cap">
                                </a>

                                <div class="card-body">
                                    <h4 class="card-title"><a href="">12 years of slaves</a></h4>
                                    <h5>50$ <span class="sold">70$</span></h5>
                                </div>
                                <div class="card-footer">
                                    <a  data-toggle="modal" data-target="#exampleModal"   onclick="addtocart('12 years od slaves')" class="btn btn-danger text-white btn-block"   href="#">add to cart</a>
                                </div>
                            </div>

                        </div>

                        
                        <div class="allBooks  business  col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a class="text-center" href="#">
                                    <img class="card-img-top" src="../assets/img/les amants du ciel1.jpg" alt="Card image cap">
                                </a>

                                <div class="card-body">
                                    <h4 class="card-title"><a href="">les amants du ciel</a></h4>
                                    <h5>20$ <span class="sold">50$</span></h5>
                                </div>
                                <div class="card-footer">
                                    <a  data-toggle="modal" data-target="#exampleModal"   onclick="addtocart('les aments du ciel')" class="btn btn-danger text-white btn-block"   href="#">add to cart</a>
                                </div>
                            </div>

                        </div>

                        <div class="allBooks jeunesse  col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a class="text-center" href="#">
                                    <img class="card-img-top" src="../assets/img/elisabeth princesse.jpg" alt="Card image cap">
                                </a>

                                <div class="card-body">
                                    <h4 class="card-title"><a href="">Elisabeth</a></h4>
                                    <h5>20$ <span class="sold">50$</span></h5>
                                </div>
                                <div class="card-footer">
                                    <a data-toggle="modal" data-target="#exampleModal"  onclick="addtocart('elisabeth')" class="btn btn-danger text-white btn-block"  href="#">add to cart</a>
                                </div>
                            </div>

                        </div>

                        <div class="allBooks jeunesse  col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a class="text-center" href="#">
                                    <img class="card-img-top" src="../assets/img/tobie lolness.jpg" alt="Card image cap">
                                </a>

                                <div class="card-body">
                                    <h4 class="card-title"><a href="">Tobie lolness</a></h4>
                                    <h5>60$ </h5>
                                </div>
                                <div class="card-footer">
                                    <a  data-toggle="modal" data-target="#exampleModal"  onclick="addtocart('tobie lolness')" class="btn btn-danger text-white btn-block"   href="#">add to cart</a>
                                </div>
                            </div>

                        </div>

                        <div class="allBooks jeunesse col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a class="text-center" href="#">
                                    <img class="card-img-top" src="../assets/img/histoir du fille soir.jpg" alt="Card image cap">
                                </a>

                                <div class="card-body">
                                    <h4 class="card-title"><a href="">Histoires du soir pour filles rebelles</a></h4>
                                    <h5>65$ <span class="sold">70$</span></h5>
                                </div>
                                <div class="card-footer">
                                    <a  data-toggle="modal" data-target="#exampleModal"  onclick="addtocart('histoires du soir pour fille')" class="btn btn-danger text-white btn-block"   href="#">add to cart</a>
                                </div>
                            </div>

                        </div>

                        <div class="allBooks bandedessinée  col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a class="text-center" href="#">
                                    <img class="card-img-top" src="../assets/img/tintin or noir.jpg" alt="Card image cap">
                                </a>

                                <div class="card-body">
                                    <h4 class="card-title"><a href="">Tintin le crabe aux princes</a></h4>
                                    <h5>17$ <span class="sold">19$</span></h5>
                                </div>
                                <div class="card-footer">
                                    <a data-toggle="modal" data-target="#exampleModal"  onclick="addtocart('tintin le crabe aux princes')" class="btn btn-danger text-white btn-block"   href="#">add to cart</a>
                                </div>
                            </div>

                        </div>

                        <div class="allBooks bandedessinée  col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a class="text-center" href="#">
                                    <img class="card-img-top" src="../assets/img/ile noir1.jpg" alt="Card image cap">
                                </a>

                                <div class="card-body">
                                    <h4 class="card-title"><a href="">Tintin ile noir</a></h4>
                                    <h5>17$ <span class="sold">19$</span></h5>
                                </div>
                                <div class="card-footer">
                                    <a   data-toggle="modal" data-target="#exampleModal"  onclick="addtocart('tintin ile noir')" class="btn btn-danger text-white btn-block"   href="#">add to cart</a>
                                </div>
                            </div>

                        </div>

                    </div>


                    
                    
                </div>





        </div>        
    </div>

        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="modal-body">
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
<!--<a href="../controllers/userController.php?event=logout" class="btn btn-danger">Logout</a>-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="../assets/js/profile.js"></script>
</body>
</html>