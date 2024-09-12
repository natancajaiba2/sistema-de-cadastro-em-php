<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>formulario</title>
</head>
<body>

<form action="sistema.php" method="post">
  <div class="mb-3">
  <h1>Cadastrar Pessoa</h1>
    <label  for="exampleInputEmail1" class="form-label">Nome</label>
    <input type="text" class="form-control" name="nome">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="text" class="form-control"  name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">CPF</label>
    <input type="text" class="form-control"  name="cpf">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Telefone</label>
    <input type="text" class="form-control"  name="telefone">
  </div>

  <h1>Cadastrar cliente</h1>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tipo de cliente</label>
    <input type="text" class="form-control" name="tipo">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Endereço</label>
    <input type="text" class="form-control"  name="endereco">
  </div>
 
  <h1>Funcionario</h1>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">CEP</label>
    <input type="text" class="form-control"  name="cep">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Cargo</label>
    <input type="text" class="form-control" name="cargo">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Turno</label>
    <input type="text" class="form-control" name="turno">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Registro</label>
    <input type="text" class="form-control" name="registro">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Data de nascimento</label>
    <input type="date" class="form-control" name="dataNasc">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tipo do contrato</label>
    <input type="text" class="form-control" name="tipoContrato">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">salario</label>
    <input type="text" class="form-control" name="salario">
    
  </div>
  <h1>Gerente</h1>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Setor</label>
    <input type="text" class="form-control" name="setor">
    
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>