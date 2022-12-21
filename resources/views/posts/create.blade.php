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
                        <form action="{{ route('p.store') }}", enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-8 offset-2">
                                    <div class="row">
                                        <h1>Add New Post</h1>
                                    </div>
                                    <div class="form-group">
                                        <label for="caption" class="col-md-4 col-form-label">Post Caption</label>
                                        <div class="col-md-12">
                                            <input id="caption" type="text"
                                                class="form-control 
                                                @error('caption') is-invalid @enderror"
                                                name="caption" value="{{ old('caption') }}" 
                                                autocomplete="caption" autofocus>
                                            @error('caption')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row offset-2">
                                <label for="image" class="col-md-4 col-form-label">Post Image</label>

                                <input type="file" class="form-control-file" id="image" name="image">
                                @if ($errors->has('image'))                       
                                      <strong>{{ $errors->first('image') }}</strong>
                                @endif
                            </div>

                            <div class="row col-md-2 offset-2 pt-4">
                                <button class="btn btn-outline-primary">Add New Post</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</x-app-layout>
