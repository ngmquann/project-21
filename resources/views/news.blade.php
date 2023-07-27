<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gundam-X</title>
  <link rel="icon" href="{{asset('img/logo tách nền.png')}}" type="image/x-icon">
  <!-- link gg font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
  <!-- link css -->
  <link href="{{asset('css/style.css') }}" rel="stylesheet">
  <link href="{{asset('css/news.css') }}" rel="stylesheet">
  <!-- link bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <!-- link font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

  <!-- link jquery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- link jquery ui -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</head>

<body>
  @include('layout.header')

  <!-- body-content -->
  <main role="main">
    <!--Main layout-->
    <div class="container">
      <!--Section: News of the day-->
      <section class="border-bottom pb-4 mb-5">
        <div class="row gx-5">
          <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://mdbcdn.b-cdn.net/img/new/slides/080.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1>First slide label</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim lorem dictum gravida vulputate. Vivamus volutpat arcu nec ligula dictum eleifend. Vestibulum viverra ut nisl quis blandit. Morbi a ex tempus eros laoreet tincidunt. Nulla neque mauris, malesuada vel ligula id, aliquet tincidunt arcu. Mauris faucibus tellus in neque varius euismod. Praesent vitae odio dictum, cursus arcu et, ornare ipsum. Praesent dignissim erat eget pharetra commodo. Donec congue efficitur ante sit amet elementum. Aenean aliquet libero vel pretium mattis. Integer vitae metus in erat blandit luctus. Proin pretium dolor nec ornare aliquam. Aliquam elementum velit ut magna laoreet, quis euismod.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://mdbcdn.b-cdn.net/img/new/slides/080.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1>First slide label</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim lorem dictum gravida vulputate. Vivamus volutpat arcu nec ligula dictum eleifend. Vestibulum viverra ut nisl quis blandit. Morbi a ex tempus eros laoreet tincidunt. Nulla neque mauris, malesuada vel ligula id, aliquet tincidunt arcu. Mauris faucibus tellus in neque varius euismod. Praesent vitae odio dictum, cursus arcu et, ornare ipsum. Praesent dignissim erat eget pharetra commodo. Donec congue efficitur ante sit amet elementum. Aenean aliquet libero vel pretium mattis. Integer vitae metus in erat blandit luctus. Proin pretium dolor nec ornare aliquam. Aliquam elementum velit ut magna laoreet, quis euismod.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://mdbcdn.b-cdn.net/img/new/slides/080.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1>First slide label</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim lorem dictum gravida vulputate. Vivamus volutpat arcu nec ligula dictum eleifend. Vestibulum viverra ut nisl quis blandit. Morbi a ex tempus eros laoreet tincidunt. Nulla neque mauris, malesuada vel ligula id, aliquet tincidunt arcu. Mauris faucibus tellus in neque varius euismod. Praesent vitae odio dictum, cursus arcu et, ornare ipsum. Praesent dignissim erat eget pharetra commodo. Donec congue efficitur ante sit amet elementum. Aenean aliquet libero vel pretium mattis. Integer vitae metus in erat blandit luctus. Proin pretium dolor nec ornare aliquam. Aliquam elementum velit ut magna laoreet, quis euismod.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </section>
      <!--Section: News of the day-->

      <!--Section: Content-->
      <section>
        <div class="row gx-lg-5">
          <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <!-- News block -->
            <div>
              <!-- Featured image -->
              <div class="bg-image hover-overlay shadow-1-strong ripple rounded-5 mb-4" data-mdb-ripple-color="light">
                <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/113.webp" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>

              <!-- Article data -->


              <!-- Article title and description -->
              <a href="" class="text-dark">
                <h5>This is title of the news</h5>

                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, iste aliquid. Sed
                  id nihil magni, sint vero provident esse numquam perferendis ducimus dicta
                  adipisci iusto nam temporibus modi animi laboriosam?
                </p>
              </a>
              <div class="row mb-3">
                <div class="col-12 text-end">
                  <u> 15.07.2020</u>
                </div>
              </div>

              <hr />

              <!-- News -->
              <a href="" class="text-dark">
                <div class="row mb-4 border-bottom pb-2">
                  <div class="col-3">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp" class="img-fluid shadow-1-strong rounded" alt="Hollywood Sign on The Hill" />
                  </div>

                  <div class="col-9">
                    <p class="mb-2"><strong>Lorem ipsum dolor sit amet</strong></p>
                    <p>
                      <u> 15.07.2020</u>
                    </p>
                  </div>
                </div>
              </a>

              <!-- News -->
              <a href="" class="text-dark">
                <div class="row mb-4 border-bottom pb-2">
                  <div class="col-3">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/042.webp" class="img-fluid shadow-1-strong rounded" alt="Palm Springs Road" />
                  </div>

                  <div class="col-9">
                    <p class="mb-2"><strong>Lorem ipsum dolor sit amet</strong></p>
                    <p>
                      <u> 15.07.2020</u>
                    </p>
                  </div>
                </div>
              </a>

              <!-- News -->
              <a href="" class="text-dark">
                <div class="row mb-4 border-bottom pb-2">
                  <div class="col-3">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/043.webp" class="img-fluid shadow-1-strong rounded" alt="Los Angeles Skyscrapers" />
                  </div>

                  <div class="col-9">
                    <p class="mb-2"><strong>Lorem ipsum dolor sit amet</strong></p>
                    <p>
                      <u> 15.07.2020</u>
                    </p>
                  </div>
                </div>
              </a>

              <!-- News -->
              <a href="" class="text-dark">
                <div class="row mb-4 border-bottom pb-2">
                  <div class="col-3">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/044.webp" class="img-fluid shadow-1-strong rounded" alt="Skyscrapers" />
                  </div>

                  <div class="col-9">
                    <p class="mb-2"><strong>Lorem ipsum dolor sit amet</strong></p>
                    <p>
                      <u> 15.07.2020</u>
                    </p>
                  </div>
                </div>
              </a>
            </div>
            <!-- News block -->
          </div>

          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <!-- News block -->
            <div>
              <!-- Featured image -->
              <div class="bg-image hover-overlay shadow-1-strong rounded-5 ripple mb-4" data-mdb-ripple-color="light">
                <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/011.webp" class="img-fluid" alt="Brooklyn Bridge" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>

              <!-- Article data -->
              <div class="row mb-3">
                <div class="col-6">
                  <a href="" class="text-danger">
                    <i class="fas fa-chart-pie"></i>
                    Business
                  </a>
                </div>

                <div class="col-6 text-end">
                  <u> 15.07.2020</u>
                </div>
              </div>

              <!-- Article title and description -->
              <a href="" class="text-dark">
                <h5>This is title of the news</h5>

                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, iste aliquid. Sed
                  id nihil magni, sint vero provident esse numquam perferendis ducimus dicta
                  adipisci iusto nam temporibus modi animi laboriosam?
                </p>
              </a>

              <hr />

              <!-- News -->
              <a href="" class="text-dark">
                <div class="row mb-4 border-bottom pb-2">
                  <div class="col-3">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/031.webp" class="img-fluid shadow-1-strong rounded" alt="Five Lands National Park" />
                  </div>

                  <div class="col-9">
                    <p class="mb-2"><strong>Lorem ipsum dolor sit amet</strong></p>
                    <p>
                      <u> 15.07.2020</u>
                    </p>
                  </div>
                </div>
              </a>

              <!-- News -->
              <a href="" class="text-dark">
                <div class="row mb-4 border-bottom pb-2">
                  <div class="col-3">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/032.webp" class="img-fluid shadow-1-strong rounded" alt="Paris - Eiffel Tower" />
                  </div>

                  <div class="col-9">
                    <p class="mb-2"><strong>Lorem ipsum dolor sit amet</strong></p>
                    <p>
                      <u> 15.07.2020</u>
                    </p>
                  </div>
                </div>
              </a>

              <!-- News -->
              <a href="" class="text-dark">
                <div class="row mb-4 border-bottom pb-2">
                  <div class="col-3">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/033.webp" class="img-fluid shadow-1-strong rounded" alt="Louvre" />
                  </div>

                  <div class="col-9">
                    <p class="mb-2"><strong>Lorem ipsum dolor sit amet</strong></p>
                    <p>
                      <u> 15.07.2020</u>
                    </p>
                  </div>
                </div>
              </a>

              <!-- News -->
              <a href="" class="text-dark">
                <div class="row mb-4 border-bottom pb-2">
                  <div class="col-3">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/034.webp" class="img-fluid shadow-1-strong rounded" alt="Times Square" />
                  </div>

                  <div class="col-9">
                    <p class="mb-2"><strong>Lorem ipsum dolor sit amet</strong></p>
                    <p>
                      <u> 15.07.2020</u>
                    </p>
                  </div>
                </div>
              </a>
            </div>
            <!-- News block -->
          </div>

          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <!-- News block -->
            <div>
              <!-- Featured image -->
              <div class="bg-image hover-overlay shadow-1-strong rounded-5 ripple mb-4" data-mdb-ripple-color="light">
                <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/018.webp" class="img-fluid" alt="Golden Gate National Recreation Area" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>

              <!-- Article data -->
              <div class="row mb-3">
                <div class="col-6">
                  <a href="" class="text-warning">
                    <i class="fas fa-code"></i>
                    Technology
                  </a>
                </div>

                <div class="col-6 text-end">
                  <u> 15.07.2020</u>
                </div>
              </div>

              <!-- Article title and description -->
              <a href="" class="text-dark">
                <h5>This is title of the news</h5>

                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, iste aliquid. Sed
                  id nihil magni, sint vero provident esse numquam perferendis ducimus dicta
                  adipisci iusto nam temporibus modi animi laboriosam?
                </p>
              </a>

              <hr />

              <!-- News -->
              <a href="" class="text-dark">
                <div class="row mb-4 border-bottom pb-2">
                  <div class="col-3">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/011.webp" class="img-fluid shadow-1-strong rounded" alt="Brooklyn Bridge" />
                  </div>

                  <div class="col-9">
                    <p class="mb-2"><strong>Lorem ipsum dolor sit amet</strong></p>
                    <p>
                      <u> 15.07.2020</u>
                    </p>
                  </div>
                </div>
              </a>

              <!-- News -->
              <a href="" class="text-dark">
                <div class="row mb-4 border-bottom pb-2">
                  <div class="col-3">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/012.webp" class="img-fluid shadow-1-strong rounded" alt="Hamilton Park" />
                  </div>

                  <div class="col-9">
                    <p class="mb-2"><strong>Lorem ipsum dolor sit amet</strong></p>
                    <p>
                      <u> 15.07.2020</u>
                    </p>
                  </div>
                </div>
              </a>

              <!-- News -->
              <a href="" class="text-dark">
                <div class="row mb-4 border-bottom pb-2">
                  <div class="col-3">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/013.webp" class="img-fluid shadow-1-strong rounded" alt="Perdana Botanical Garden Kuala Lumpur" />
                  </div>

                  <div class="col-9">
                    <p class="mb-2"><strong>Lorem ipsum dolor sit amet</strong></p>
                    <p>
                      <u> 15.07.2020</u>
                    </p>
                  </div>
                </div>
              </a>

              <!-- News -->
              <a href="" class="text-dark">
                <div class="row mb-4 border-bottom pb-2">
                  <div class="col-3">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/014.webp" class="img-fluid shadow-1-strong rounded" alt="Perdana Botanical Garden" />
                  </div>

                  <div class="col-9">
                    <p class="mb-2"><strong>Lorem ipsum dolor sit amet</strong></p>
                    <p>
                      <u> 15.07.2020</u>
                    </p>
                  </div>
                </div>
              </a>
            </div>
            <!-- News block -->
          </div>
        </div>
      </section>
      <!--Section: Content-->

      <!-- Pagination -->
      <nav class="my-4" aria-label="...">
        <ul class="pagination pagination-circle justify-content-center">
          <li class="page-item">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item active" aria-current="page">
            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
          </li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div>
    <!--Main layout-->
  </main>
  <!-- end body-content -->
  @include('layout.footer')

  <script src="../js/app2.js"></script>
  <script src="{{asset('js/news.js') }}"></script>

  <script>

  </script>
</body>

</html>