<x-app-layout>
    @section('content')
<!-- Container  -->
    <div class="container cart_container">
        <div class="cart_container_flex">
            <div class="cart_container_flex_left">orderdetails</div>
            <div class="cart_container_flex_right">
                <p>Price Details</p>
                <div class="price_details">
                    <div class="price_details_view">
                        <p class="p_price">pakage</p>
                        <p class="p_price">&#8377;2990</p>
                    </div>
                    <div class="price_details_view">
                        <p class="p_price">Gts(18%)</p>
                        <p class="p_price">&#8377;522</p>
                    </div>
                    <div class="price_details_view">
                        <p class="p_price">Total Price</p>
                        <p class="p_price">&#8377;3422</p>
                    </div>
                </div>
                <a class="form_submit_button" style="text-align: center;text-decoration: none;">Pay Now</a>
            </div>
        </div>
    </div>
    <!-- Container  -->
@endsection
    </x-app-layout>