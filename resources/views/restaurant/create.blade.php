@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-12">
           <div class="card">
                <div class="card-body">
                    <div class="card-header p-3 bg-secondary text-white">Naujas restoranas</div>
                            <div class="card-body shadow p-3 bg-white rounded">
                                <form method="POST" action="{{route('restaurant.store')}}" enctype="multipart/form-data">
                                    <label>Pavadinimas</label>
                                    <input type="text" name="restaurant_title" class="form-control" value="{{old('restaurant_title')}}">
                                    <label>Pirkėjai</label>
                                    <input type="text" name="restaurant_customers" class="form-control" value="{{old('restaurant_customers')}}">
                                    <label>Darbuotojai</label>
                                    <input type="text" name="restaurant_employees" class="form-control" value="{{old('restaurant_employees')}}">
                                    <label>Paveiksliukas</label>
                                    <input type="file" class="form-control" name="restaurant_logo">
                                    <select style="margin-bottom: 15px;" name="menu_id" class="form-control" id="exampleFormControlSelect1">
                                        @foreach ($menus as $menu)
                                            <option value="{{$menu->id}}">{{$menu->title}}</option>
                                        @endforeach
                                    </select>
                                    <small class="form-text text-muted">Norint sukurti restoraną paspauskite mygtuką "Sukurti".</small>
                                    @csrf
                                    <button type="submit" class="btn btn-secondary btn-lg btn-block">Sukurti</button>
                                </form>
                            </div>
                    </div>
                </div>
           </div>
       </div>
   </div>
</div>
@endsection