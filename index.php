<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Bank</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
  <link rel="stylesheet" href="./styles.css" />
  <link rel="stylesheet" href="./mobile-style.css">
</head>

<body>
  <header>
    <div class="container-fluid p-0">
      <nav id="sideNav" class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
          <i class="fas fa-university fa-2x mx-3"></i>Sparks</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="fas fa-align-right text-light"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mr-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">HOME
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="transfermoney.php">TRANSFER</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="transactionhistory.php">HISTORY</a>
            </li>
            <li class="nav-item dropdown">
              <div class="dropdown">
                <a href="#" class="nav-link">CUSTOMER</a>
                <div class="dropdown-content">
                  <a href="users.php">Registered</a>
                  <a href="createuser.php">New</a>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.thesparksfoundationsingapore.org/contact-us/" target="_blank">CONTACT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://internship.thesparksfoundation.info" target="_blank" >ABOUT</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <div class="container text-center">
      <div class="row">
        <div class="col-md-7 col-sm-12  text-white">
          <h6>SPARKS: People's Bank</h6>
          <h1>The Sparks Foundation</h1>
          <p>
          Success is not how much money we have in the bank, but how many peoples' lives we have impacted through it.
          </p>
          <a href="createuser.php"><button class="btn btn-light px-5 py-2 primary-btn">
            Register with us!
          </button></a>
        </div>
        <div class="col-md-5 col-sm-12  h-25">
          <img src="images/567-5679765_goods-and-services-clipart.png" alt="Bank" />
        </div>
      </div>
    </div>
  </header>
  <main>
    <section class="section-1">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-6 col-12">
            <div class="pray">
              <img src="images/1*brWG_BhYwVZ-aFFejraZeA.jpeg" alt="Pray" class="" />
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="panel text-left">
              <h1>The Sparks Bank</h1>
              <p class="pt-4">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere iure adipisci harum ducimus accusantium, repudiandae aperiam
                voluptatum, id ex ratione omnis reiciendis possimus officiis.
              </p>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi vitae, tenetur quidem eum aliquid vel labore sint placeat
                ad deserunt consectetur fugit ullam. Eius unde neque ducimus obcaecati ipsum quos vero totam recusandae hic
                expedita nemo sit, illum harum. Quisquam impedit ullam itaque facere et ad molestiae quod reprehenderit excepturi!
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-2 container-fluid p-0">
      <div class="cover">
        <div class="overlay"></div>
        <div class="content text-center">
          <h1>Some Features That Made Us Unique</h1>
          <p>
          <b>Saving future everyday!<b>
          </p>
        </div>
      </div>
      <div class="container-fluid text-center">
        <div class="numbers d-flex flex-md-row flex-wrap justify-content-center">
          <div class="rect">
            <h1>2345</h1>
            <p>Happy Clients</p>
          </div>
          <div class="rect">
            <h1>132</h1>
            <p>Branches</p>
          </div>
          <div class="rect">
            <h1>10056</h1>
            <p>Transactions Made</p>
          </div>
          <div class="rect">
            <h1>152</h1>
            <p>Total Projects</p>
          </div>
        </div>
      </div>


      <div class="purchase text-center">
        <h1>Services We Provide</h1>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit.
        </p>
        <div class="cards">
          <div class="d-flex flex-row justify-content-center flex-wrap">
            <div class="card">
              <div class="card-body">
                <div class="title">
                  <h5 class="card-title">SPARKS</h5>
                </div>
                <p class="card-text">
                  Make Quick Payments
                </p>
                <div class="pricing">
                  <h1>>></h1>
                  <a href="transfermoney.php" class="btn btn-dark px-5 py-2 primary-btn mb-5">TRANSFER</a>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="title">
                  <h5 class="card-title">SPARKS</h5>
                </div>
                <p class="card-text">
                  View Transaction History
                </p>
                <div class="pricing">
                  <h1><--></h1>
                  <a href="transactionhistory.php" class="btn btn-dark px-5 py-2 primary-btn mb-5">TRANSACTION HISTORY</a>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="title">
                  <h5 class="card-title">SPARKS</h5>
                </div>
                <p class="card-text">
                  Our Registered Customers 
                </p>
                <div class="pricing">
                  <h1>^</h1>
                  <a href="selecteduserdetail.php" class="btn btn-dark px-5 py-2 primary-btn mb-5">CUSTOMERS</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
  <footer>
    <div class="container-fluid p-0">
      <div class="row text-left">
        <div class="col-md-5 col-sm-5">
          <h4 class="text-light">About us</h4>
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum maxime ea similique illum corrupti</p>
          <p class="pt-4 text-muted">Copyright ©2022 All rights reserved | This project is made for GRIP
            <span>The Sparks Foundation</span>
          </p>
        </div>
        <div class="col-md-5 col-sm-12">
          <h4 class="text-light">Newsletter</h4>
          <p class="text-muted">Stay Updated</p>
          <form class="form-inline">
            <div class="col pl-0">
              <div class="input-group pr-5">
                <input type="text" class="form-control bg-dark text-white" id="inlineFormInputGroupUsername2" placeholder="Email">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-arrow-right"></i>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-2 col-sm-12">
          <h4 class="text-light">Follow Us</h4>
          <p class="text-muted">Let us be social</p>
          <div class="column text-light">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-youtube"></i>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="./main.js"></script>
</body>

</html>