<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="css/main.css">
    <title>About Us</title>
  </head>
  <body>
    <div class="navbar-header fixed-top ">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><img src="https://www.ekshop.gov.bd/static/media/logo.d47954ce.png" style="width: 200px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <!-- <li class="nav-item active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li> -->
                    <li class="nav-item">
                        <a  class="nav-link " href="{{route('Who_We_Are')}}">Who We Are</a>
                      {{-- <a class="nav-link " href="#" id="" role="" data-toggle="" aria-haspopup="true" aria-expanded="false"> --}}
                        
                      {{-- </a> --}}
                      <div class="" id="header-dropdown" aria-labelledby="navbarDropdown">
                        {{-- <a class="dropdown-item" href="#">Mission</a>
                        <a class="dropdown-item" href="#">Vission</a> --}}
                        <!-- <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div> -->
                    </li>
                    <li class="nav-item ">
                        {{-- <a class="nav-link dropdown-toggle" href="# " id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          What We Do
                        </a> --}}


                        <a class="nav-link" href="{{route('What_We_Do')}}">What We Do</a>

                        
                        {{-- <div class="dropdown-menu" id="header-dropdown" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">Our Priciples</a>
                          <a class="dropdown-item" href="#">Fact About ekShop</a> --}}
                          <!-- <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div> -->
                      </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Follow Us</a>
                      </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>
                </div>
              </nav>



            <!-- <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#">Ekshop</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav mr-4">
                        <li class="nav-item dropdown">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Dropdown button
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                          </li>
            
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                What We Do
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#NewsUpdate">Update News</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#Trending">Trending Now</a>
                            </div>
                        </li>
            <li class="nav-item">-->
            <!--                <a class="nav-link " data-value="contact" href="#">Contact Us</a>-->
            <!--            </li>-->
                    <!-- </ul>
                </div>
            </nav> -->
         </div>
     </div>


    <section id="newsfeed">
        <div class="container">
            <div class="newsfeed newsfeed1">
                <div class="newsfeed-div newsfeed-title">
                    <h4>newsfeed</h4>
                </div>
                @if (count($newsfeeds)>0)
                    @foreach ($newsfeeds as $newsfeed)
                <div class="newsfeed-div newsfeed-content">
                    <a href="#"><p class= "text-left"> 
                        {{$newsfeed->title}}
                    </p></a>
                    <span class="text-info">{{$newsfeed->created_at}}</span>
                </div>

                    @endforeach
                @endif

                <div class="newsfeed-div newsfeed-content">
                    <a href="#"><p class="text-muted"> 
                        More News Releases
                        <button class="btn btn-link" >
                        {{$newsfeeds->links('pagination::bootstrap-4')}}             
                        </button>
                    </p></a>
                </div>
            </div>
            <?php $c= 0; ?>
            @if(count($newsfeeds)>0)
            @foreach ($newsfeeds as $newsfeed)
            <?php $c++; ?>
                @if ($c>1)
                
                <!-- <? php break; ?> -->
                @else 
                <div class="newsfeed newsfeed2">
                    <img src="{{url($newsfeed->imgnewsfeed)}}" alt="">
                    <div>
                        <h3 class="newsfeed2-title ">{{$newsfeed->title}}</h3>
                        <p class="newsfeed2-Paragraph">{!!$newsfeed->mytextarea!!}</p>
                    </div>
                </div>
                
                @endif
            
            
            @endforeach
            @endif

            <div class="newsfeed newsfeed3">
                <div class="newsfeed-div stories-title">
                    <h4>top stories</h4>
                </div>
                 
                @if (count($TopStores)>0)
                @foreach ($TopStores as $TopStore)

                <div class=" newsfeed-div stories-content">
                    <div class="stories-img-div">
                        <img  src="{{url($TopStore->photo)}}" alt="">
                        <!-- <img  src="storage/ImgTrending/imgTrending.1617451754png" alt=""> -->
                    </div>
                    <a href="#"><p> {{$TopStore->title}}</p></a>
                </div>
                @endforeach
                    
                @endif

                <div class=" newsfeed-div stories-content">
                    <a href="#"><p>
                        See all stories
                    </p></a>
                </div>
            </div>
        </div>
    </section>

    <section class="secondSection">
         <div class="container">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Trending Now</a>
                </li>    
                
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Meet Us</a>
                  </li>             
              </ul>

              

            <div class="row">
                    @foreach ($trendings as $key => $trending)
                        @if(count($key)<=2)

                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="images/cover1.jpg" class="img-fluid">
                                    </div>
                                        <div class="card-body">
                                            <h4 class="card-title">Title would be here</h4>
                                            <p>The paragraph shoud here underdbgbgrnfnf fg fnssbsb blefladfvla etbn obtol bln  the title.</p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="#"><p>Read More</p></a>
                                        </div>
                                </div>
                        @endif
                                    
                    @endforeach
                    
            </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-img">
                                <img src="images/cover1.jpg" class="img-fluid">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">The title woud be here.</h4>
                                <p>The paragraph shoud here under the title.</p>
                            </div>
                            <div class="card-footer">
                                <a href="#"><p>Read More</p></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <form action="{{route('EmailSubscription')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="MeetUs">
                            <h2>Get News Update ekShop</h2>
                            <p>Sign up to receive original stories,<br> announcement and more!</p>
                            <input type="email" id="UserEmail" name= "subscribeEmail" placeholder="Subscribe With Email"><br><br>
                                <div class="">
                                   <button type ="submit" class="btn btn-info">Subscribe</button>
                                </div>
                            {{-- <button style="font-size: 24px;" onclick=""><i class='fas fa-arrow-circle-right'></i></button>  --}}
                            {{-- <i style='font-size:24px' class='fas'>&#xf0a9;</i> --}}
                        </div>
                    </form>
                    </div>
            </div>
            <div class="ThirdSection">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-img">
                                <img src="images/cover1.jpg" class="img-fluid">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Card Title</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique libero amet, mollitia ad reiciendis facere 
                                    consectetur error!</p>
                            </div>
                            <div class="card-footer">
                                <a href="#"><p>Read More</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-img">
                                <img src="images/cover1.jpg" class="img-fluid">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Card Title</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique libero amet, mollitia ad reiciendis facere 
                                    consectetur error!</p>
                            </div>
                            <div class="card-footer">
                                <a href="#"><p>Read More</p></a>
                            </div>
                        </div>
                    </div>   
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-img">
                                <img src="images/cover1.jpg" class="img-fluid">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Card Title</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique libero amet, mollitia ad reiciendis facere 
                                    consectetur error!</p>
                            </div>
                            <div class="card-footer">
                                <a href="#"><p>Read More</p></a>
                            </div>
                        </div>
                    </div>   
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-img">
                                <img src="images/cover1.jpg" class="img-fluid">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Card Title</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique libero amet, mollitia ad reiciendis facere 
                                    consectetur error!</p>
                            </div>
                            <div class="card-footer">
                                <a href="#"><p>Read More</p></a>
                            </div>
                        </div>
                    </div>               
                </div>
            </div>        
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>