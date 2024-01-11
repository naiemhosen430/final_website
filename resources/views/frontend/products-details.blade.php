@extends('layout.frontend')
@section('content')

<section class="col-10 m-auto  ">


    <div class="py-5 d-lg-flex justify-content-center">
        <div class="w-lg-50 w-100 p--lg4  px-1">
            <img class="w-75 d-block " src="https://ladesignfashion.com/uploads/product/135.jpg" alt="">
        </div>
    
        <div class="w-lg-50 w-100 px-lg-5 px-1">
            <h1>Kids</h1>
    
            <h4 class="pt-5">DESCRIPTION</h4>
            <p class="py-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <a class="detail-page-button d-block py-2 px-4 text-center a-hover" href="/">SUBMIT QUERY</a>
    
        </div>
    </div>

    <section class="text-center">
        <h1 class="fw-bolder p-2">Related Product</h1>

        <div class="row justify-content-center py-5">
            <div class="col-3 m-2 text-center">
                <img class="w-100" src="https://ladesignfashion.com/uploads/product/132.jpg" alt="">
                <h3 class="py-1">Kids</h3>
                <a class="detail-page-button d-block py-2 px-4 text-center a-hover" href="/product/100">View Details</a>
            </div>
        </div>
    </section>

</section>

@endsection
