@extends('layouts/include')
<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <title>RABO</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

   <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars mfa-white"></span>
            </button>
        </div>
    </nav>

    
    <header class="masthead text-white ">
        <div class="overlay"></div>
        <div class="container slider-top-text">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="my-heading">Gestion de Stock</h3> 
                    <a class="btn btn-primary btn-join" href="{{route('login')}}">Connexion</a>
                </div>
                <div class="col-md-12 text-center mt-5">
                    <div class="scroll-down">
                        <a class="btn btn-default btn-scroll floating-arrow" href="#gobottom" id="bottom"><i class="fa fa-angle-down"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>

<!--                  -->
    </body> 
</html>
