@extends('layouts.base')
@section('buscador')
<form class="input-icon my-3 my-lg-0"> <input id="search" class="form-control header-search"
    placeholder="Buscar @yield('buscar')..." tabindex="1" type="search">
  <div class="input-icon-addon"> <i class="fe fe-search"></i> </div>
</form>
@endsection