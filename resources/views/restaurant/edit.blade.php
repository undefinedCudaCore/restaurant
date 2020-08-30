@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-12">
           <div class="card">
                <div class="card-body">
                    <div class="card-header p-3 bg-secondary text-white">Restorano redagavimas</div>
                        <div class="card-body shadow p-3 bg-white rounded">
                            <form method="POST" action="{{route('restaurant.update',[$restaurant->id])}}" enctype="multipart/form-data">
                                <label>Pavadinimas</label>
                                <input type="text" name="restaurant_title" value="{{$restaurant->title}}" class="form-control">
                                <label>Pirkejai</label>
                                <input type="text" name="restaurant_customers" value="{{$restaurant->customers}}" class="form-control">
                                <label>Darbuotojai</label>
                                <input type="text" name="restaurant_employees" value="{{$restaurant->employees}}" class="form-control">
                                <label>Paveiksliukas</label>
                                <input type="file" class="form-control" name="restaurant_logo">
                                <select style="margin-bottom: 15px;" name="menu_id" class="form-control" id="exampleFormControlSelect1">
                                    @foreach ($menus as $menu)
                                        <option value="{{$menu->id}}" @if($menu->id == $menu->menu_id) selected @endif>
                                            {{$menu->title}}
                                        </option>
                                    @endforeach
                                </select>
                                <small class="form-text text-muted">Noredami išsaugoti pakeitimus spauskite mygtuką "Pakeisti".</small>
                                @csrf
                                <button type="submit" class="btn btn-secondary btn-lg btn-block">Pakeisti</button>
                            </form>
                        </div>
                </div>
            </div>
       </div>
   </div>
</div>
@endsection