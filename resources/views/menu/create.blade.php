@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-12">
           <div class="card">
            <div class="card-body">
               <div class="card-header p-3 bg-secondary text-white">Patiekalo sukūrimas</div>
                <div class="card-body shadow p-3 bg-white rounded">
                        <form method="POST" action="{{route('menu.store')}}">
                            <label>Pavadinimas</label>
                            <input type="text" name="menu_title" class="form-control" value="{{old('menu_title')}}">
                            <label>Kaina eurais</label>
                            <input type="text" name="menu_price" class="form-control" value="{{old('menu_price')}}">
                            <label>Svoris (g)</label>
                            <input type="text" name="menu_weight" class="form-control" value="{{old('menu_weight')}}">
                            <label>Mėsos kiekis patiekale (g)</label>
                            <input type="text" name="menu_meat" class="form-control" value="{{old('menu_meat')}}">
                            <label>Atsiliepimas</label>
                            <textarea style="margin-bottom: 15px;" name="menu_about" class="form-control" id="summernote"  value="{{old('menu_about')}}"></textarea>
                            <small class="form-text text-muted">Norint pridėti patiekalą paspauskite mygtuką "Sukurti".</small>
                            @csrf
                            <button type="submit" class="btn btn-secondary btn-lg btn-block">Sukurti</button>
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

