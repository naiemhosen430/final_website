
@extends('layout.frontend')

@section('content')

<section class="col-lg-10 col-12 m-auto d-lg-flex py-5 justify-content-center align-content-center ">
    <div class="w-lg-50 w-100 p-5">
        <h1 class="fw-bolderpy-2 border-bottom-2">Contact Us</h1>
        
        <div class="py-2">
            <form action="/sendmessage" method="post">
                <div class="contract-input-field py-3">
                    <label for="name">Name</label>
                    <input class="p-2 px-4 rounded-1 border-1 w-100 " type="text" id="Name" placeholder="Enter your name">
                </div>

                <div class="contract-input-field py-3">
                    <label for="phone">Phone</label>
                    <input class="p-2 px-4 rounded-1 border-1 w-100 " type="number_format" id="phone" placeholder="Enter your phone">
                </div>

                <div class="contract-input-field py-3">
                    <label for="email">Email</label>
                    <input class="p-2 px-4 rounded-1 border-1 w-100 " type="email" id="email" placeholder="Enter your email">
                </div>

                <div class="contract-input-textarea py-3">
                    <label for="message">Message</label>
                    <textarea class="p-2 px-4 rounded-1 border-1 w-100 " placeholder="Enter your message" name="message" id="message" cols="10" rows="0"></textarea>
                </div>

                <div class="contract-input-submit py-3">
                    <button class="p-2 px-5 rounded-1 d-inline-block" type="submit">Send Message</button>
                </div>      

            </form>
        </div>

    </div>

    <div class="w-lg-50 w-100 d-flex align-content-center justify-content-center p-5">
        <iframe class="w-100" src="https://www.google.com/maps/@23.8698511,90.3968648,14z?entry=ttu" frameborder="0"></iframe>
    </div>
</section>

@endsection