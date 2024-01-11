@extends('layout.frontend')
@section('content')


<section class="col-lg-10 col-12 row  m-auto py-5">


    <!-- --------------------------------- post side--------------------------------  -->
    <section class="col-lg-8 col-12">
        <div>
            <img class="w-100 d-block " src="https://ladesignfashion.com/uploads/blog/6.jpg" alt="">
            <h1 class="py-1">Lorem Ipsum</h1>
            <p class="py-1">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
        </div>
    </section>

    <!-- --------------------------------- all posts side--------------------------------  -->
    <section class="col-lg-4 col-12">
        <h2 class="fw-bold p-2 text-center">Latest Post</h2>
        <div>

            <div class="d-flex align-content-center justify-content-center ">
                <div class="w-50 p-4">
                    <img class="img-fluid" src="https://ladesignfashion.com/uploads/blog/7.jpg" alt="">
                </div>

                <div class="w-50 px-2 pt-3">
                    <h4>Blog One</h4>
                    <a class="single-post-a d-block p-2 px-4 rounded-1 a-hover text-center " href="/">View Post</a>
                </div>
            </div>

        </div>
    </section>

</section>


@endsection