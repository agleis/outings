@extends('layouts.master')

@section('main')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 carousel-col">
        <div id="carousel" class="carousel slide"
        data-ride="carousel" data-interval="35000">
          <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div id="img1" class="item active">
              <div id="caption1" class="carousel-caption">
                <div class="heading">
                    <h1>Plan your excursion</h1>
                </div>
                <div class="image-subtitle">
                  <p>With Outings, take the hassle out of coordinating your
                  next adventure. Take advantage of many features designed to
                  assist you in hammering out the details of a group outing,
                  so you can focus on the experience, not worry about
                  the logistics.</p>
                </div>
                <a href="{{url('register')}}" class="btn btn-primary">Sign Up Today</a>
                &nbsp;
                &nbsp;
                <a href="{{url('about')}}" class="btn btn-primary">Learn More</a>
              </div>
              <!-- <div class="image-overlay"></div> -->
              <img src="img/bamboo.jpg" alt="Chania">
            </div>

            <div id="img2" class="item">
              <div id="caption2" class="carousel-caption">
                <div class="heading">
                    <h1>Outings around every corner</h1>
                </div>
                <div class="image-subtitle">
                  <p>Start looking today for trips leaving near you. Our
                  algorithms and highly customizable filters make it easy to
                  find a unique experience that interests you. Whether
                  your destination is a vibrant city or the great outdoors,
                  if it involves motion, Outings has got you covered.
                  </p>
                </div>
                <a href="{{url('register')}}" class="btn btn-primary">Sign Up Today</a>
                &nbsp;
                &nbsp;
                <a href="{{url('about')}}" class="btn btn-primary">Learn More</a>
              </div>
              <!-- <div class="image-overlay"></div> -->
              <img src="img/sunset.jpg" alt="Chania">
            </div>

            <div id="img3" class="item">
              <div id="caption3" class="carousel-caption">
                <div class="heading">
                    <h1>Group friendly</h1>
                </div>
                <div class="image-subtitle">
                  <p>Have a group, business, or organization needing
                  to organize a trip (or perhaps many trips)? With Outings,
                  keeping everyone informed is simple. Our administrative
                  and organizational features handle large groups with ease.</p>
                </div>
                <a href="{{url('register')}}" class="btn btn-primary">Sign Up Today</a>
                &nbsp;
                &nbsp;
                <a href="{{url('about')}}" class="btn btn-primary">Learn More</a>
              </div>
              <!-- <div class="image-overlay"></div> -->
              <img src="img/singapore.jpg" alt="Flower">
            </div>

          </div>
          <a class="left carousel-control" href="#carousel"
            role="button" data-slide="prev" >
            <span class="glyphicon glyphicon-chevron-left"
              aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel"
            role="button" data-slide="next" >
            <span class="glyphicon glyphicon-chevron-right"
              aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection
