@extends('layouts.publicHomePageTemplate')

@section('title', 'Visitor Home Page')

@section('content')

<!--Main layout-->
  

      <!--Section: Post-->
      <section class="mt-4">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-8 mb-4">

            <!--Featured Image-->
            <div class="card mb-4 wow fadeIn">

              <img src="{{url('AD.png')}}" class="img-fluid" alt="">

            </div>
            <!--/.Featured Image-->

          

            
            
            <!--/.Card-->
@foreach($blogs as $blog)
            <!--Card-->
            <div class="card  wow fadeIn mt-3">
                

              <div class="card-header font-weight-bold">
                <span>{{$blog->title}}</span>
                
                
              </div>

              <!--Card content-->
              <div class="card-body">

                <div class="media d-block d-md-flex mt-3">
                  <img class="d-flex mb-3 mx-auto z-depth-1" src="http://www.motlob.com/oc-content/uploads/10/2358.jpg"
                    alt="Generic placeholder image" style="width: 100px;">
                  <div class="media-body text-center text-md-left ml-md-3 ml-0">
                    <h5 class="mt-0 font-weight-bold">{{$blog->location}}
                    </h5>
                    {{$blog->body}}
                  </div>
                </div>
                 <blockquote class="blockquote">
                  <p class="mb-0">Number Of Rooms: {{$blog->room}}</p>
                  <footer class="blockquote-footer">Contact Number:
                    <cite title="Source Title">{{$blog->number}}</cite>
                  </footer>
                </blockquote>
                   <div class="card-footer bg-transparent border-success">Rent Per Month:{{$blog->room}} </div>
</div>
 
              </div>
 @endforeach
          
            <!--/.Card-->
<
           
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-4 mb-4">

            <!--Card: Jumbotron-->
            <div class="card blue-gradient mb-4 wow fadeIn">

              <!-- Content -->
              <div class="card-body text-white text-center">

                <h4 class="mb-4">
                  <strong>Looking for a
quality and affordable Mess?</strong>
                </h4>
                <p>
                  <strong>Some Features that Made us Unique</strong>
                </p>
                <p class="mb-4">
                  <strong>Welcome to you from banglatolet.com. We are happy to inform you that we are trying to make online base residence search website in Bangladesh. But it is not possible without your help. If you stay and help us, we will go ahead to make this. Thanks for your valuable contribution in our website. </strong>
                </p>
                <a target="_blank" href="#" class="btn btn-outline-white btn-md">Stay With Us...
                  <i class="fas fa-graduation-cap ml-2"></i>
                </a>

              </div>
              <!-- Content -->
            </div>
            <!--Card: Jumbotron-->

            <!--Card : Dynamic content wrapper-->
            <div class="card mb-4 text-center wow fadeIn">

              <div class="card-header">Do you want to get informed about new Mess?</div>

              <!--Card content-->
              <div class="card-body">

                <!-- Default form login -->
                <form>

                  <!-- Default input email -->
                  <label for="defaultFormEmailEx" class="grey-text">Your email</label>
                  <input type="email" id="defaultFormLoginEmailEx" class="form-control">

                  <br>

                  <!-- Default input password -->
                  <label for="defaultFormNameEx" class="grey-text">Your name</label>
                  <input type="text" id="defaultFormNameEx" class="form-control">

                  <div class="text-center mt-4">
                    <button class="btn btn-info btn-md" type="submit">Sign up</button>
                  </div>
                </form>
                <!-- Default form login -->

              </div>

            </div>
            <!--/.Card : Dynamic content wrapper-->

            <!--Card-->
            <div class="card mb-4 wow fadeIn">

              <div class="card-header">Recent Mess ADs</div>

              <!--Card content-->
              <div class="card-body">

                <ul class="list-unstyled">
                  <li class="media">
                    <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/placeholder7.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                      <a href="">
                        <h5 class="mt-0 mb-1 font-weight-bold">Two bed room apt for rent at merul badda</h5>
                      </a>
                     *New building *Tiled *4th floor *For family/ Office or female Job holders *Big specious rooftop...
                    </div>
                  </li>
                  <li class="media my-4">
                    <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg" alt="An image">
                    <div class="media-body">
                      <a href="">
                        <h5 class="mt-0 mb-1 font-weight-bold">Flat for Rent </h5>
                      </a>
                      2 Bed, 2 Bath, 1 kitchen, 1 Drawing & Dining 
                    </div>
                  </li>
                  <li class="media">
                    <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/placeholder5.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                      <a href="">
                        <h5 class="mt-0 mb-1 font-weight-bold">2 BR, 700 ft² – 2 Bedroom Flat near 60 feet Agargaon</h5>
                      </a>
                      4th floor with 2 bedrooms, dining, 2 balconies, 2 washrooms. Only available for families. No...
                    </div>
                  </li>
                </ul>

              </div>

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->
            <div class="row text-center">
              {{$blogs->links()}}
            </div>
        </div>
        <!--Grid row-->

      </section>
      <!--Section: Post-->

  <!--Main layout-->

  <!--Footer-->
 

  
@endsection

  