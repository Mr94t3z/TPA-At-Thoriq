<!DOCTYPE html>
<html lang="en">

<head>

    @include('frontend/static/header')

    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
        rel="stylesheet" type="text/css" />

        <style>
            .berita {
                font-family: 'Lora', serif;
                font-size: 20px;
                text-align: justify;
            }
        
            .berita h1,
            .berita h2,
            .berita h3,
            .berita h4,
            .berita h5,
            .berita h6,
            .berita p {
                font-family: 'Open Sans', sans-serif;
            }
        </style>
    
</head>

<body id="page-top">
    <!-- Navigation-->
    @include('frontend/static/navbar')
    <!-- Page Header-->

    <header class="masterhead" style="background-image: url('{{ asset('storage/uploads/' . $berita->poster) }}')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="post-heading">
                        <h1 class="display-3 lh-1 mb-3 text-white">{{ $berita->title }}</h1>
                        <span class="text-white">
                            Diposting oleh
                            <strong> {{ $berita->creator }} </strong> </a>
                            pada {{ date('d F Y', strtotime($berita->created_at)) }}.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content-->
    <article class="mb-4 mt-1 berita">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    {!! html_entity_decode($berita->content) !!}
                </div>
            </div>
        </div>
    </article>


    <!-- Footer-->

    @include('frontend/static/footer')

    <!-- End Of Footer-->

</body>

</html>
