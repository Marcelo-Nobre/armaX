@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Crie o seu evento</h1>
  <form action="/events" method="POST" enctype="multipart/form-data"> 
    @csrf
    @method('POST')
    <div class="form-group">
      <label for="image">Imagem do Evento:</label>
      <input type="file" id="image" name="image" class="form control-file">
    </div>
    <div class="form-group">
      <label for="title">Evento:</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
    </div>
    <div class="form-group">
      <label for="title">Cidade:</label>
      <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
    </div>
    <div class="form-group">
      <label for="title">O evento é privado?</label>
      <select name="private" id="private" class="form-control">
        <option value="0">Não</option>
        <option value="1">Sim</option>
      </select> 
    </div> 
    <div class="form-group">
      <label for="title">Descrição:</label>
      <textarea name="descrioption" id="descrioption" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
    </div>
    <input type="submit" class="btn btn-primary" value="Criar Evento">
  </form> 
</div>

@endsection
Footer
© 2022 GitHub, Inc.