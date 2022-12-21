<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('codDA') }}

        </h2>
        <div><img
                src="https://images-platform.99static.com//dv2duVb2Gpo_…tests-attachments/110/110279/attachment_110279298"
                alt=""></div>
    </x-slot>

    <head>
        <title>Instagram</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/assets/fonts/FontAwesome.Pro.5.15.2.Web/css/all.min.css">
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}
        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
        {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">



        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

        </style>
    </head>

    <body>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="col-md-12 d-flex p-5">
                    <div class="container">
                      <img src="/storage/{{ $post->image }}" alt="">
                    </div>
                    <div class="col-4">
                        <div class="">
                            <div class="d-flex">
                                <div class="">
                                    <img src="/storage/{{ $post->user->profile->image }}" class="w-100" alt="">
                                </div>
                                <div>
                                   <div class="font-wieght-bold"><a href="/profile/{{ $post->user->id }}"></a></div>
                                </div>
                            </div>
                           
                        </div>
                        <div class="">
                            <p><span class="font-weight-bold"><a href="/profile/{{ $post->user->id }}"></a></span>{{ $post->caption }}</p>
                        </div>
                        <div class="">
                            <p><span class="font-weight-bold"><a href="/profile/{{ $post->reads }}"></a></span>{{ $post->caption }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</x-app-layout>

