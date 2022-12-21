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
        <title>JobPortal</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/assets/fonts/FontAwesome.Pro.5.15.2.Web/css/all.min.css">
         {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}
         {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
        {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  --}}
    
    
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
                <div class="col-md-12 d-flex p-5" >
                    <div class="row">
                        <div class="col-md-2 pb-5">
                            <img src="/asset/img/codeDA Logo1.png" class="rounded-circle"
                                 alt="logoimage">
                        </div>
                        <div class="col-md-8 pt-5">
                            <div class="d-flex justify-content-between align-item-baseline">
                                <div class="d-flex align-item-center">
                                    <div class="h4 pb-3">{{ $user->name }}</div>
                                    <fallow-button></fallow-button>
                                </div>
                               
                                  <a href="{{ route('p/create') }}">Add New Post</a>
                                
                                
                            </div>
                            <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
                            <div class="d-flex">
                                <div class="pr-5" style="padding-right: 8px;"><strong>{{ $user->posts->count() }}</strong>post</div>
                                <div class="pr-5" style="padding-right: 8px;"><strong>231</strong> followers</div>
                                <div class="pr-5" style="padding-right: 8px;"><strong>231</strong> following</div>
                            </div>
                            <div class="pt-4 font-weight-bold">{{ $user->profile->title ?? 'N/A' }}</div>
                            <div>{{$user->profile->description ?? 'N/A'}}</div>
                            <div><a href="www.freecodecamp.org">{{ $user->profile->url ?? 'N/A'}}</a></div>
                        </div>
                    </div>
                    
                </div>
                <div class="row pt-5">
                    @foreach ($user->posts as $post)
                        <div class="col-4">
                            <a href="/p/{{ $post->id }}">
                              <img class="responsive" src="{{ $post->image }}" class="w-100" alt="{{ $post->caption }}">
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <p>views 
                            <span>
                                @foreach ($projects as $project)
                                {{ $project->views }}
                                    
                                @endforeach
                            </span>
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </p>
                        
                           
                        
                    </div>
                </div> 
            </div>
        </div>
          
    </body>


</x-app-layout>




{{-- <img src="https://images-platform.99static.com//dv2duVb2Gpo_…tests-attachments/110/110279/attachment_110279298" alt=""> --}}

