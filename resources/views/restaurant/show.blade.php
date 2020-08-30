@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-12">
           <div class="card">
            <div class="card-header p-3 bg-secondary text-white">Meniu</div>

               <div class="card-body">
               <div class="card-body shadow p-3 bg-white rounded">
                @foreach ($menus as $menu)
                    <label>Patiekalas</label>
                    <h4>{{$menu->title}}.</h4>
                    <label>Kaina</label>
                    <h4>{{$menu->price}} €.</h4>
                    <label>Svoris</label>
                    <h4>{{$menu->weight}} g.</h4>
                    <label>Viduje mesos</label>
                    <h4>{{$menu->meat}} g.</h4>
                    <label>Komentaras</label>
                    <h4 style="border-bottom: solid 1px black;">{!!$menu->about!!}</h4>
                    @endforeach
               </div>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
