<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Casa Vision</title>
    <meta property="og:title" content="{{$product->title}}" />
    <meta property="og:type" content="index" />
    <meta property="og:url" content="{{url("/?product=".encrypt($product->id))}}" />
    <meta property="og:image" content="{{url('storage/'.$product->image)}}" />

</head>
<body>
<header>
    <div class="fixed-top">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <h5 class="text-white h4">{{$product->title}}</h5>
                <span class="text-muted">Toggleable via the navbar brand.</span>
            </div>
        </div>
        <nav class="navbar navbar-dark ">
            <a class="navbar-brand" href="#">
                <img src="./images/Logo Blanca vision icon.png" alt=""width="50" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars fa-2x"></i>
                <!-- <span class="navbar-toggler-icon"></span> -->
            </button>
        </nav>
    </div>
    <!-- <div class="nav-top">
      <nav class="navbar navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="./images/Logo Blanca vision icon.png" width="50" height="50" class="d-inline-block align-top" alt="">
          </a>
        </div>
      </nav>
    </div> -->
    <div class="content-header">
        <div class="row display">
            <div class="col-lg-8 flt-right">
                <div class="icons">
                    <a href="/?p={{encrypt($page-1)}}"><i class="fas fa-caret-square-left fa-2x"></i></a>
                    <a href="/?p={{encrypt($page+1)}}"><i class="fas fa-caret-square-right fa-2x"></i></a>
                </div>
                <img src="{{url('storage/'.$product->image)}}" alt="">
            </div>
            <div class="col-lg-4 flt-left">
                <div class="container">
                    <h2>{{$product->title}}</h2>
                    <div>{!! $product->description !!}</div>
                    <h4>{{$product->price}} Dh</h4>
                    <a href="{{"https://wa.me/".setting('social.whatsapp')."?text=".urlencode(url("/?product=".encrypt($product->id)))}}" class="">Shop Now</a> <button class="cart"><i class="fas fa-cart-plus"></i></button>
                    <div class="social">
                        <ul>
                            <li><a href="{{setting('social.instagram')}}"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="{{setting('social.facebook')}}"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="{{"https://wa.me/".setting('social.whatsapp')."?text=".urlencode(url("/?product=".encrypt($product->id)))}}"><i class="fab fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script></body>
</html>
