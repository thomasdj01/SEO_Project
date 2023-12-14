@extends('Rollercoaster.layout')
@section('content')
<head>
</head>
<body>
@include('layouts.navigation')
    
    <!-- Mainpage -->
   <div class="flex w-100 pt-[141px]">
        <div class="w-1/4">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif 
        </div>
        <div class="w-full fixed text-center">
            <!-- Header -->
            <div class="font-bold m-5">
                Meld je aan voor de nieuwsbrief!
            </div>
            <!-- Body -->
            <div class="font-normal m-5">
                <form action="{{ route('Rollercoaster.store') }}" method="POST">
                @csrf
                <div class="px-4 py-2 rounded-t-lg bg-neutral-200">
                    <strong>Email:</strong>
                    <input type="email" class="px-4 py-2 rounded-full bg-neutral-100">
                </div>
                <div class="px-4 py-2 bg-neutral-200">
                    <strong>Algemene voorwaarden / privacy</strong>
                    <input type="checkbox" class="">
                </div>
                <div class="px-4 py-2 rounded-b-lg bg-neutral-200">
                    <button type="submit" class="px-4 py-2 rounded-full bg-green-500">Aanmelden</button>
                </div>
            </div>
        </div>
   </div>
  
    
      
</div>
</body> 
@endsection