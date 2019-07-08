@extends('layouts.template')

@section('title', 'Add New Mess Information')

@section('content')
<header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
      <div class="container-fluid">

        <!-- Brand -->
        <a class="navbar-brand waves-effect" href="{{url('/')}}" >
          <strong class="blue-text">Mess Finder</strong>
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
      </li>

          </ul>

        </div>

      </div>
    </nav>
    <!-- Navbar -->

    <!-- Sidebar -->
  

  </header>

   <main class="pt-5 mx-lg-5 ">
    <div class="container-fluid mt-4">
  <!--Main Navigation-->
<!-- Default form contact -->
<div class="card text-center">
  <div class="card-header h3">
   Add New Mess Information
  </div>
  <div class="card-body">
<form class="text-center border border-light p-5" action="{{route ('blogs.store')}}" method="post">
	{{ csrf_field() }}

   <h5 class="card-title">Everyone Deserves the Opportunity of the Mess </h5>

    <!-- Name -->
    <input type="text" id="defaultContactFormName"  name="title" class="form-control mb-4" placeholder="Name">

     <div class="form-group">
        <textarea class="form-control rounded-0"  name="body" id="exampleFormControlTextarea2" rows="3" placeholder="Description"></textarea>
    </div>

    <!-- Email -->
    <input type="text" id="defaultContactFormEmail"  name="location" class="form-control mb-4" placeholder="Location">
    <input type="text" id="defaultContactFormEmail"  name="number" class="form-control mb-4" placeholder="Number">
    <input type="text" id="defaultContactFormEmail"  name="room" class="form-control mb-4" placeholder="Number of Seats">
    <input type="text" id="defaultContactFormEmail"  name="cost" class="form-control mb-4" placeholder="Rent Per Month">

   

    <!-- Message -->
    

   
    <!-- Send button -->
    <button class="btn btn-unique text-right" type="submit">POST YOUR AD</button>
    <button class="btn btn-unique text-right" type="submit"><a href="{{route ('blogs.index')}}">Go Back</button>

</form>
</div>
<!-- Default form contact -->
</div>
</main>



@endsection
