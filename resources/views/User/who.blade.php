<html>
    <head>
        <title>who we are</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link rel="stylesheet" href="css/Who-we-are.css">
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
                    
                  <li class="nav-item dropdown">
                     {{-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Who We Are
                      </a> --}}
                        {{-- <div class="dropdown-menu" id="header-dropdown" aria-labelledby="navbarDropdown">
                           <a class="dropdown-item" href="#">Mission</a>
                           <a class="dropdown-item" href="#">Vission</a> --}}
                            
                  </li>
                  <li class="nav-item dropdown">
                      {{-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              What We Do
                     </a> --}}
                     <a  class="nav-link" href="{{route('What_We_Do')}}" >What We Do</a>
                        {{-- <div class="dropdown-menu" id="header-dropdown" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">Our Priciples</a>
                          <a class="dropdown-item" href="#">Fact About ekShop</a> --}}
            
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
        </div>
      </div>

      <div class= sectionTwo>
        <div class="container">
          <div class="firstRow">
            <div class="row">
              <div class="col-lg-3 col-md-2 col-sm-12">
                <h1>Who We Are</h1>
              </div>
              <div class="col-lg-9 col-md-10 col-sm-12">
                <p class="font-monospace">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae veritatis exercitationem cumque eos commodi dolor magni ut hic ex aspernatur beatae cum, officia sunt maiores possimus. Error deleniti ea cupiditate.</p>
              </div>
            </div>
          </div>
      <div class="SecondRow">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="Mission">
              <h2>Mission</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae veritatis exercitationem cumque eos commodi dolor magni ut hic ex aspernatur beatae cum, officia sunt maiores possimus. Error deleniti ea cupiditate.</p>
              <button type="button" class="btn btn-link">Learn More</button>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="Vission">
              <h2>Vission</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae veritatis exercitationem cumque eos commodi dolor magni ut hic ex aspernatur beatae cum, officia sunt maiores possimus. Error deleniti ea cupiditate.</p>
              <button type="button" class="btn btn-link">Learn More</button>
            </div>
          </div>
        </div>
      </div>
    </div>
      </div>
                  

    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>