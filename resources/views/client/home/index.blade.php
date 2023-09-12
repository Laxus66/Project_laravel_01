@extends('client.layouts.app')

@section('content')
<!---- Hero Section Start------->
@include('client.layouts.hero')
<!-- Hero Section Start -->

<!-- Feature of Design Section Start --->
@include('client.layouts.design')
<!-- Feature of Design Section End -->

<section class="section-bg-icons position-relative">
    <!--- Product Section Start---->
    @include('client.layouts.product')
    <!--- Product Section End ---->

    <!--- Awasome Feature Section Start ----->
    <!-- @include('client.layouts.feature') -->
    <!----Awasome Feature Section End---->
</section>

<!-- Our Portflio Section Start -->
@include('client.layouts.ourportlio')
<!-- Our Portflio Section End -->

<!-- Pricing Plans Section Start -->
<!-- @include('client.layouts.pricingplans') -->
<!-- Pricing Plans Section End -->

<!---- Contact Section Start --->
@include('client.layouts.contact')
<!-- Contact Section End  -->
@endsection