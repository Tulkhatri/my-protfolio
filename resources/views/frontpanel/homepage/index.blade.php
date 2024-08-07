@extends('frontpanel.layouts.design')
@section('frontpanel-page-title')
    Home Page
@endsection

{{-- @section('meta_keywords')
@foreach ($combineMetaTags as $tags)
{{ $tags->meta_keywords }},
@endforeach
@endsection --}}

{{-- @section('meta_description')
@foreach ($combineMetaTags as $tags)
{{ $tags->meta_description }},
@endforeach
@endsection --}}

@section('front-contents')
    <section class="home-page">
        <div class="container">
            <div class="head-section">
                <div class="my-short-bio">
                    <h1>HI, I AM TUL BAHADUR KHATRI</h1>
                    <h1 class="mt-4 mb-4">EXPERIENCE <span>WEB Developer</span></h1>
                    <p>I'm a passionate web designer and developer I specialize in translating complex ideas</p>
                        <p>into user-friendly interfaces that captivate and engage.</p>

                    <div class="mt-4"><button class="btn-primary me-4">Download CV  <i class="fa-solid fa-download"></i></button><span ><a href="#" class="hire-me">Hire Me</a></span></div>
                </div>
                <div class="image-section">
                    <img src="{{ asset('frontpanel/assets/images/Tulkhatri.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script></script>
@endsection
