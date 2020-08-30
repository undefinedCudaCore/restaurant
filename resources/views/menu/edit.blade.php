@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-12">
           <div class="card">
                <div class="card-body">
                <div class="card-header p-3 bg-secondary text-white">Meniu redagavimas</div>

                <div class="card-body shadow p-3 bg-white rounde">
                        <form method="POST" action="{{route('menu.update',[$menu])}}">
                            <label>Pavadinimas</label>
                            <input type="text" name="menu_title" value="{{$menu->title}}" class="form-control">
                            <label>Kaina eurais</label>
                            <input type="text" name="menu_price" value="{{$menu->price}}" class="form-control">
                            <label>Svoris (g)</label>
                            <input type="text" name="menu_weight" value="{{$menu->weight}}" class="form-control">
                            <label>Mėsos kiekis patiekale (g)</label>
                            <input type="text" name="menu_meat" value="{{$menu->meat}}" class="form-control">
                            <label>Atsiliepimas</label>
                            <textarea style="margin-bottom: 15px;" name="menu_about"  class="form-control" id="summernote">{{$menu->about}}"</textarea>
                            <small class="form-text text-muted">Norint pakeisti patiekalo sudetį paspauskite mygtuką "Pakeisti".</small>
                            @csrf
                            <button type="submit"  class="btn btn-secondary btn-lg btn-block">Pakeisti</button>
                        </form>
                </div>
            </div>
           </div>
       </div>
   </div>
</div>
<script>
    $(document).ready(function() {
       $('#summernote').summernote();
     });
</script>
@endsection

