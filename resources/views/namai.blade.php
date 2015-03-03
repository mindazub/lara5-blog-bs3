@extends('layouts.master')

@section('content')
 <!-- Page Content -->

    <div class="row" style="top-margin: -25px;"> 

                <div class="col-md-12"> 

                        <!-- slider -->
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                        <img class="img-responsive" src="http://lorempixel.com/1920/400/transport/{{ rand(1, 10) }}/Dummy-Text" alt="">
                        </div>

                        <div class="item">
                        <img class="img-responsive" src="http://lorempixel.com/1920/400/transport/{{ rand(1, 10) }}/Dummy-Text" alt="">
                        </div>

                        <div class="item">
                        <img class="img-responsive" src="http://lorempixel.com/1920/400/transport/{{ rand(1, 10) }}/Dummy-Text" alt="">
                        </div>

                        <div class="item">
                        <img class="img-responsive" src="http://lorempixel.com/1920/400/transport/{{ rand(1, 10) }}/Dummy-Text" alt="">
                        </div>
                      </div>

                      <!-- Left and right controls -->
                      <!-- <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span> -->
                      </a>
                    </div>

                <!-- slider ends  -->

                </div>  


        </div><!--  row ends -->



    <div class="container container-fluid">

        


        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8" style="font-family: 'Lato', sans-serif; font-weigth: 700;">

                


                <h1 class="page-header" style="font-family: 'Quicksand', sans-serif;">
                    <i>"Citius, Altius, Fortius"</i>
                    <small>autorius nežinomas</small>
                </h1>

                <!-- First Blog Post -->
        @if($posts->count())
                @foreach($posts as $post) 
		                <h2 style="font-family: 'Lato', sans-serif;">
		                    <a href="{{ route('postShow', $post ) }}">{{ $post->title }}</a>
		                </h2>
		                <p class="lead">
		                    by <a href="index.php"> {{ $post->username }}</a>
		                </p>
		                <p><span class="glyphicon glyphicon-time"></span> Posted on {{ $post->published_at }}&nbsp&nbsp||&nbsp&nbspAugust 28, 2013 at 10:00 PM</p>
		                <hr>
		                <img class="img-responsive" src="http://lorempixel.com/900/300/sports/{{ rand(1, 10) }}/Dummy-Text" alt="">
		                <hr>
		                <p>{{ $post->body }}</p>
		                <a class="btn btn-primary" href="{{ route('postShow', $post ) }}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

		                <hr>		                
		        @endforeach
		@else
			<h1>No posts today, buddy. Go, seed your database!</h1>
		@endif


        <div class="text-center">
                <ul class="pagination pagination-large">
                    {!! $posts->render() !!}
                </ul>                
        </div>    
                

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; mindazub 2015</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->
@endsection