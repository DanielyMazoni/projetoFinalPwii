<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar quantidade</title>
</head>
<body>
  <div class="quantidade">

    <form action="/cadastrar_quantidade" method="post">
      @csrf
      <label for="receita">Receita:</label>
      <select name="receita" id="receita">
        @foreach($receitas as $receita)
          <option value="{{$receita->id}}">{{$receita->descricao}}</option>  
        @endforeach
      </select>
      <ul>
        @foreach($produtos as $produto)
          <li>
              <span>{{ $produto->descricao }} - {{ $produto->medida }}</span>
              <input type="text" name="items[{{ $produto->id }}]">
          </li>
        @endforeach
    </ul>

      <button type="submit">Cadastrar</button>
    </form>
  </div>
</body>
</html>

