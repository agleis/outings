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
                    <h1>Need to go in the city?</h1>
                </div>
                <div class="image-subtitle">
                  <p>With Flushr, you never have to worry about holding it in
                  on the subway. Find the best bathroom near you in just seconds,
                  and rate it for others to see.</p>
                </div>
                <form method="get" action="search" class="form-inline">
                  <input type="text" class="form-control search" id="searchCity"
                    name="searchCity" placeholder="Search bathrooms in...">
                  <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                </form>
              </div>
              <div class="image-overlay"></div>
              <img src="img/singapore.jpg" alt="Chania">
            </div>

            <div id="img2" class="item">
              <div id="caption2" class="carousel-caption">
                <div class="heading">
                    <h1>On a long road trip?</h1>
                </div>
                <div class="image-subtitle">
                  <p>We've all had a bad rest stop experience out on the open
                  road. Flushr aims to change that. Look miles ahead to
                  scout out the best option for your trip,
                  and never suffer through that nasty gas station bathroom again.
                  </p>
                </div>
                <form method="get" action="search" class="form-inline">
                  <input type="text" class="form-control search"
                    id="searchRoad" name="searchRoad"
                    placeholder="Search for rest stops near...">
                  <button type="submit" class="btn btn-default">
                    <span class="glyphicon glyphicon-search"></span>
                  </button>
                </form>
              </div>
              <div class="image-overlay"></div>
              <img src="img/highway.jpg" alt="Chania">
            </div>

            <div id="img3" class="item">
              <div id="caption3" class="carousel-caption">
                <div class="heading">
                    <h1>On your way to class?</h1>
                </div>
                <div class="image-subtitle">
                  <p>Flushr was created with students in mind. We all want
                  to scout out the best bathrooms on campus for those mid-day
                  breaks. Find the best rated restroom at your school,
                  and contribute to the ratings for your favorites!</p>
                </div>
                <form method="get" action="search" class="form-inline">
                  <input type="text" class="form-control search"
                    id="searchCollege" name="searchCollege"
                    placeholder="Search bathrooms at...">
                  <button type="submit" class="btn btn-default">
                    <span class="glyphicon glyphicon-search"></span>
                  </button>
                </form>
              </div>
              <div class="image-overlay"></div>
              <img src="img/washington_blossom.jpg" alt="Flower">
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
