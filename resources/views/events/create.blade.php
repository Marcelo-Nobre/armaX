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
    <div class="form-group">
      <label for="title">Adicione itens de infraestrututa:</label>
     <div class="form-group=">
      <input type="checkbox" name="items[]" value="cadeiras"> Cadeiras
     </div>
     <div class="form-group=">
      <input type="checkbox" name="items[]" value="Palco"> Palco
     </div>
     <div class="form-group=">
      <input type="checkbox" name="items[]" value="Aula do Jubilão">Aula do Jubilão
     </div>
     <div class="form-group=">
      <input type="checkbox" name="items[]" value="Open Food"> Open Food
     </div>
     <div class="form-group=">
      <input type="checkbox" name="items[]" value="Brindes"> Brindes
     </div>
     <div class="form-group=">
      <input type="checkbox" name="items[]" value="Eu"> Eu
     </div>
     <div class="form-group=">
      <input type="checkbox" name="items[]" value="Você"> Você
     </div>
     <div class="form-group=">
      <input type="checkbox" name="items[]" value=" E Nosso Amor">E Nosso Amor
     </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Criar Evento">
  </form> 
</div>

@endsection
Footer
© 2022 GitHub, Inc.