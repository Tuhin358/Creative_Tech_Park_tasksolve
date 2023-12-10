<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <title>Document</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid bg-primary">
            <a class="navbar-brand" href="#">Start:3:40pm End: 4:30pm</a>

          </div>
        </nav>




        <div class="row mt-3">
            <div class="row-md-12">
              <div class="card bg-primary">
                  <div class="card-body">
                    <h5 class="card-title">About Your self </h5>
                    <p>
                        Asslamualikum ,
                            I hope you all are doing well. this is tariful islam tuhin and i am 25 years old.
                            i came form Rangpur. i live in dhaka mirpur-6.I have completed my graduation in CSE from BUBT .
                            I have been working as PHP Laravel developer since one year. I really enjoy web development.
                            My dream is to be a web deve</p>
                  </div>
                </div>
              </div>

            @foreach ($posts as $product)
          <div class="col-md-3 pt-4">
            <div class="card">
              <img src="{{asset('placeholder.png') }}" class="card-img-top" alt="Product Image" style="height: 70px;width:60px">
              <div class="card-body">
                <h5 class="card-title">{{$product->title}}</h5>
                <p class="card-text">{{$product->description}}</p>
              </div>

            </div>

          </div>
          @endforeach
          <div class="col-md-4">
            <!-- Another card or content -->
          </div>
          <!-- More columns -->
        </div>

        <div class="card w-50">
            <div class="card-body bg-primary">
              <h5 class="card-title"> Github Link</h5>
              <p class="card-text">https://github.com/Tuhin358</p>

            </div>
          </div>



      </div>








    {{--  <div class="rs-process ">
        <div class="container">

                <div class="box">
                    <a class="rounded bg-secondary display-4 text-white">Start 3:30pm to End:4:20pm </a>
                </div>

                <div class="box">
            <div class="row">
                @foreach ($posts as $product)
                    <div class="featured-items-card col-md-4 container">
                        <div class="featured-items-card-img gap-50">
                            <img src="{{asset('placeholder.png') }}" style="height: 70px;width:60px" alt="Product">
                        </div>
                        <div class="featured-items-card-content">
                            <div class="featured-items-card-meta">
                                <div class="featured-items-category">
                                    <a>  </a>
                                </div>
                                <div class="featured-items-price">
                                    <span>
                                    </span>
                                </div>
                            </div>
                            <a  class="featured-items-card-title">
                                <h2 class="woocommerce-loop-product__title"></h2>
                            </a>

                            <p class="featured-items-card-author">
                                <b>Technology:</b>

                            </p>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
        </div>
    </div>  --}}


</body>
</html>


{{--  <h1>Instructions</h1>


<p>

    -- follow the instructions Readme.Md file and create this view here and render the data list.
</p>  --}}
