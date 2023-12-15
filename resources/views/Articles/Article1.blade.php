@extends('Rollercoaster.layout')
  
@section('content')

@include('layouts.navigation')
    
    @if ($errors->any())
    <div class="w-100">
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    </div>
    @endif
    <form action="{{ route('Rollercoaster.store') }}" method="POST">
    @csrf
    <div class="w-100 flex pt-[141px] h-screen bg-slate-400">
        <div class="w-1/4 left-0">
            <!-- Header -->
            <div class="font-bold m-5">
                Werkend in bedrijven
            </div>
            <!-- Body -->
            <div class="font-normal m-5">
                bla bla bla
            </div>
        </div>
        <div class="h-full w-3/4 bg-slate-300 right-0">
                <!-- Pagina's per div -->
                <div class="flex"> 
                    <!-- Header -->
                    <div class="flex-col">
                        <div class="p-5"><img src="https://wiki.dave.eu/images/4/47/Placeholder.png" height="250px" width="250px"></div>
                        <div class="font-normal m-5">
                            bla bla bla
                        </div>
                    </div>
                    </form>
                    <div class="w-full"> 
                        <div class="font-normal m-5">
                            bla bla bla
                        </div>
                    </div>
                    
                    <!-- Body -->
                </div>
            </div>
        </div>
   </div>
    </form>
@endsection
<style>
#textbox1{
    height: 100%;
    width: 100%;
}
#textbox2{
    height: 100%;
    width: 100%;
}
</style>