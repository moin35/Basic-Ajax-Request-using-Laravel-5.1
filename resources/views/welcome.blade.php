@extends('layouts.admin')
  @section('content')
  
  <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
      <strong> Genero Actualizado Correctamente.</strong>
  </div>
    <table class="table">
      <thead>
        <th>ID</th>
        <th>Value</th>
      </thead>
      
      <tbody id="datos"></tbody>
    </table>

  @endsection

  @section('scripts')
    {!!Html::script('js/script2.js')!!}
  @endsection