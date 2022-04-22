
<x-app-layout>
   @section('content')
    <!-- carousel -->
    <div class="carousel_container">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="true" data-bs-pause="false"
            data-bs-interval="2000" data-bs-touch="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner custom_height_carousel">
                @foreach($banner as $b)
                <div class="carousel-item active">
                    <img src="{{URL::asset('/banner/'.$b['image'])}}" class="d-block w-100" title="{{$b['title']}}" alt="Image">
                </div>
                @endforeach
               
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- carousel -->

    <!-- Feature -->
    <h1 style="text-align: center; margin-top: 50px;">Feature</h1>
    <div class="feature_container">
        @foreach($plan as $p)
        <a class="card1" href="{{route('product_details',['slug'=>$p->slug])}}">
            <img src="{{URL::asset('/plan/'.$p['plan_image'])}}" style="width: 100%;" />
            <h5>{{$p['name']}}</h5>
            <h5>{{$p['height']}}</h5>
            <h5>Vastu {{$p['vastu']}}</h5>
            <div class="go-corner" href="#">
                <div class="go-arrow">
                    →
                </div>
            </div>
        </a>
        @endforeach
    </div>
    <!-- Feature -->
     
    
    <!-- Feature -->

    <!-- About Us -->
    <div class="container about_container" id="about">

        <div class="left_about">
            <img class="about_image" src="{{asset('assets/img/carousel/wallpaperOne.jpg')}}" alt="Image" />
        </div>
        <div class="right_about">
            <h1>About Us</h1>
            <h3>
                We Provide The <span class="primaryColor">Best Property</span> For You
            </h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s,
            </p>
            <p>
                when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                leap
                into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                publishing
                software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            <p class="primaryColor pointer">Read More</p>
        </div>

    </div>
    <!-- About Us -->

    <!-- Blog -->
    <div class="container">
        <h1 style="text-align: center; margin-top: 50px;">Review</h1>

        <div class="blog_container">

            <div class="blog_card">
                <h1>Rahul</h1>
                <p> when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap
                    into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                    the
                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing
                    software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>

            <div class="blog_card">
                <h1>Rahul</h1>
                <p> when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap
                    into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                    the
                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing
                    software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>

            <div class="blog_card">
                <h1>Rahul</h1>
                <p> when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap
                    into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                    the
                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing
                    software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>

        </div>
    </div>
    <!-- Blog -->

    <!-- Contact Us -->
    <div class="container contact_container" id="contact">
        <h1 class="center">Contact Us</h1>
        <div class="contact_flex">
       
            <div class="left_contact">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif

                <form class="form_container" action="{{route('contact.create')}}" method="post" >
                     @csrf
                    <div class="form__group field">
                        <input type="input" class="form__field" placeholder="Name" name="name" id='name'  />
                        <label for="name" class="form__label">Name</label>
                    </div>

                    <div class="form__group field">
                        <input type="email" class="form__field" placeholder="Email" name="email" id='email'  />
                        <label for="email" class="form__label">Email</label>
                    </div>

                    <div class="form__group field">
                        <input type="number" class="form__field" placeholder="Phone Number" name="mobile" id='phone'
                             />
                        <label for="phone" class="form__label">Phone Number</label>
                    </div>

                    <div class="form__group field">
                        <input type="input" class="form__field" placeholder="Subject" name="subject" id='plot'
                             />
                        <label for="plot" class="form__label">Subject</label>
                    </div>

                    <div class="form__group field">
                        
                            <textarea name="message"  class="form__field" cols="23" rows="2"></textarea>
                        <label for="plot" class="form__label">Message</label>
                    </div>


                    <button class="form_submit_button" type="submit">Submit</button>
                </form>
            </div>

            <div class="right_contact">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50721.55282977521!2d-122.09256279463926!3d37.38753703422895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb68ad0cfc739%3A0x7eb356b66bd4b50e!2sSilicon%20Valley%2C%20CA%2C%20USA!5e0!3m2!1sen!2sin!4v1641558046805!5m2!1sen!2sin"
                    width="100%" height="400px" style="border: none;" allowfullscreen="" loading="lazy"></iframe>
            </div>

        </div>

        <div class="contact_address">
            <h5 class="center">Address</h5>
            <h4 class="center">Address</h4>
            <h3 class="center">Address</h3>
        </div>

    </div>
    <!-- Contact Us -->
   @endsection
</x-app-layout>
   
