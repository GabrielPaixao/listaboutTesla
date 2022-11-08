<!doctype html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" defer></script>
</head>
<body>
<div class="card mb-4" style="margin:3%;">
  <div class="card-body">   
  <div class="row">
          <div class="col-md-6">
          <h3>Adicionar conteúdo</h3>
          </div>
          <div class="col-md-6">
             <a href="list" style="float:right"><button type="button" class="btn btn-block btn-success btn-xs"><i class="fa-solid fa-circle-arrow-left"></i> VOLTAR</button></a>
          </div>
</div>

<hr>
@if(isset($msg))
<div class="alert alert-success" role="alert">
 {{ $msg }}
</div>
@endif


<form action="store" method="post">
    @csrf
  <!-- Titulo input -->
  <div class="form-outline mb-4">    
  <select class="form-select" name="playlist_id" aria-label="Default select example" required>
  <option selected>Selecione uma playlist</option>
  @if(isset($all))
    @foreach ($all as $a)
    <option value="{{ $a->id }}">{{ $a->title }}</option>
    @endforeach
  @endif
</select>
   
  </div>

  <!-- Titulo input -->
  <div class="form-outline mb-4">
      <input type="text" name="title" maxlength="150" class="form-control" placeholder="Titulo" required/>
  </div>

  <!-- Url input -->
  <div class="form-outline mb-4">
      <input type="text" name="url" maxlength="255" class="form-control" placeholder="url" required/>
  </div>

  <!-- Author input -->
  <div class="form-outline mb-4">
    <input type="text" name="author" maxlength="150"  class="form-control" placeholder="Autor" />
   
  </div>

 
  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4" style="float:right">Salvar</button>
</form>
</div>
</div>

</body>
</html>