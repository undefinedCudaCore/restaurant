@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-12">
           <div class="card">
               <div class="card-header p-3 bg-secondary text-white">

                <label>Restoranų sąrašas</label> 
                
                  <form action="{{route('restaurant.index')}}" method="get">
                    <select id="exampleFormControlSelect2" class="form-control" name="menu_id">
                        <option value="0">Rodyti visus</option>
                        @foreach ($menus as $menu)
                            <option value="{{$menu->id}}" @if ($selectId == $menu->id) selected @endif>{{$menu->title}}</option>
                        @endforeach
                    </select><br>
                    Rušiuoti pagal:<br>
                    <div class="form-control" style="width: 20%;">
                      <input type="radio" name="sort" value="title" @if ('title' == $sort) checked @endif>
                      <label>Pavadinimą</label>
                    </div><br>
                    <div class="form-control" style="width: 20%;">
                      <input type="radio" name="sort" value="customers" @if ('customers' == $sort) checked @endif>
                      <label>Pirkėją</label>
                    </div><br>
                    <button class="btn btn-dark" type="submit">Rušiuoti</button>
                    <a class="btn btn-success" href="{{route('restaurant.index')}}">Atstatyti</a>
                  </form>
               </div>

               <div class="card-body">
                 @foreach ($restaurants as $restaurant)
                  <div class="card-body shadow p-3 bg-white rounded" style="margin-bottom: 20px;">
                    <div class="card-body">
                      <h1 class="col-md-6">Restoranas: {{$restaurant->title}}.</h1><br> 
                      <img src="{{asset('images/'.$restaurant->logo)}}" style="width: 150px;float: right; margin-top: -80px;" alt="User_logo">
                    </div>
                    <h4>Daugiausiai klientų: {{$restaurant->customers}}. Dirba darbuotojų: {{$restaurant->employees}}</h4>
                    <form method="POST" action="{{route('restaurant.destroy', [$restaurant])}}">
                      @csrf
                      <LABEL style="border-bottom: 1px solid black; width: 100%;">Meniu</LABEL>
                      @foreach ($menus as $menu)
                      <a href="{{route('restaurant.show', [$restaurant])}}" style="font-size: 20px; color: black;">
                        <H4>{{$menu->title}}</H4>
                      </a>
                      @endforeach
                      <a href="{{route('restaurant.edit',[$restaurant])}}" class="btn btn-dark">Redaguoti</a>
                      <button type="submit" class="btn btn-success">Ištrinti</button>
                      </form>
                      <br>
                  </div>
                  @endforeach
              </div>
           </div>
       </div>
   </div>
</div>
@endsection

