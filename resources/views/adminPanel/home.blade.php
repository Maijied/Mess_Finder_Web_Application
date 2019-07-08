@extends('layouts.template')

@section('title', 'Mess Finder Admin Panel')

@section('content')




  <!--Main Navigation-->
  <header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
      <div class="container-fluid">

        <!-- Brand -->
        <a class="navbar-brand waves-effect" href="{{url('/')}}" >
          <strong class="blue-text">MESS FINDER</strong>
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Left -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link waves-effect" href="#">
                <span class="sr-only">(current)</span>
              </a>
           
          </ul>

          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
           
            <li class="nav-item">
              <a href="{{route('blogs.create')}}" class="nav-link border border-light rounded waves-effect"
               >
                <i class="fas fa-plus-circle mr-2"></i>Add New Mess
              </a>
            </li>
             <li class="nav-item dropdown  ">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i>  {{ Auth::user()->name }} </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
          <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout</a>
                                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
          
        </div>
          </ul>

        </div>

      </div>
    </nav>
    <!-- Navbar -->

    <!-- Sidebar -->
  

  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-4">

      <!-- Heading -->
      <div class="card mb-4 wow fadeIn">

        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-2 mb-sm-0 pt-1">
            <a href="#/" target="_blank">Admin Panel</a>
           
          </h4>

          <form class="d-flex justify-content-center">
            <!-- Default input -->
            <input type="search" placeholder="Type your query" aria-label="Search" class="form-control">
            <button class="btn btn-primary btn-sm my-0 p" type="submit">
              <i class="fas fa-search"></i>
            </button>

          </form>


        </div>

      </div>
      <!-- Heading -->

   

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-12 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card content-->
            <div class="card-body">

              <!-- Table  -->
              <table class="table table-hover">
                <!-- Table head -->
                <thead class="blue-grey lighten-4">
                  <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>location</th>
                    <th>Number</th>
                    <th>Room</th>
                    <th>Cost per Month</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <!-- Table head -->

                <!-- Table body -->
                <tbody>
                	@foreach($blogs as $blog)
                  <tr>
                    <th scope="row">{{$blog->id}}</th>
                    <td>{{$blog->title}}</td>
                    <td>{{$blog->body}}</td>
                    <td>{{$blog->location}}</td>
                    <td>{{$blog->number}}</td>
                    <td>{{$blog->room}}</td>
                    <td>{{$blog->cost}}</td>
                    <td><button class="btn btn-outline-info waves-effect"><i class="fas fa-magic mr-1"></i> Edit</button></td>
                     <td><button class="btn btn-outline-danger waves-effect"><i class="fas fa-magic mr-1"></i> Delete</button></td>
                  </tr>
                  @endforeach
                 
                 
                </tbody>
                <!-- Table body -->
              </table>
              <!-- Table  -->

            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        
        
      </div>
      <!--Grid row-->


    

    </div>

  </main>
  <!--Main layout-->


  

@endsection



