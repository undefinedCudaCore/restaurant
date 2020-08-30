
@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-12">
           <div class="card">
               <div class="card-header p-3 bg-secondary text-white">Menu sąrašas</div>

               <div class="card-body">
                 @foreach ($menus as $menu)
                  <div class="card-body  shadow p-3 bg-white rounded">
                    <form method="POST" action="{{route('menu.destroy', [$menu])}}">
                      @csrf
                      <label style="font-size: 15px; width: 100%;" class="border-bottom">Patiekalas</label>
                      <a href="{{route('menu.show', [$menu])}}" style="font-size: 20px; color: black;">{{$menu->title}}</a><br>
                      <a  href="{{route('menu.edit',[$menu])}}" class="btn btn-dark">Redaguoti</a>
                      <button type="submit" class="btn btn-success">Ištrinti patiekalą</button>
                    </form>
                  </div>
                    <br>
                  @endforeach
               </div>
           </div>
       </div>
   </div>
</div>
@endsection

