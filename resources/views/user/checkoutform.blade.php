<x-app-layout>
  @section('content')
  <sectionn class="">
    <!-- Details containerss  -->

    <div class="row checkoutForm">
      <div class="col-75">
        <div class="containerss">
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
          <form action="{{Route('checkout.store')}}" method="post">
            @csrf

            <div class="row">
              <div class="col-50">
                <h3>Contact Details</h3>
                <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                <input type="text" id="name" name="name" class="checkout_input">
                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                <input type="text" id="email" name="email">
                <label for="mobile"><i class="fa fa-envelope"></i> Mobile</label>
                <input type="text" id="mobile" name="mobile">
                <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                <input type="text" id="adr" name="address">
                <label for="city"><i class="fa fa-institution"></i> City</label>
                <input type="text" id="city" name="city">
                <div class="row">
                  <div class="col-50">
                    <label for="state">State</label>
                    <input type="text" id="state" name="state">
                  </div>
                  <div class="col-50">
                    <label for="zip">Zip</label>
                    <input type="text" id="pincode" name="zip">
                  </div>
                </div>
              </div>
             
              <input type="hidden" value="123456789" name="password">
              @foreach($plan as $p)
              <input type="hidden" value="{{{$p->price}}}" name="total">
              @endforeach
            
              <input type="hidden" value="pending" name="payment_status">

            
            </div>
            <label>
              <input type="checkbox" checked="checked" value="0" name="terms"> Accept Terms and Conditions
            </label>
            <input type="submit" value="Continue to checkout" >
          </form>
        </div>
      </div>
      <div class="col-25">
        @foreach($plan as $p)
        <div class="containerss">
          <h4>Plan Details <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b></b></span></h4>
          <p>{{{$p->name}}} <span class="price"><b>{{{$p->price}}}</b></span></p>
          <hr>
          <p>Total <span class="price" style="color:black"><b>{{{$p->price}}}</b></span></p>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- Details containerss  -->
  @endsection
 
</x-app-layout>