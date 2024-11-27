<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  @if(count($produtos) == 0)
    <h3>Sem produtos</h3>      
  @else
  <table border="1">
    <tr>
        <th>Descrição do Produto</th>
        @foreach ($produtos as $produto)
        <tr>
          <td>{{$produto->descricao}}</td>
          <td>{{$produto->medida}}</td>
        </tr>
      @endforeach
    </tr>
   </table>       
  @endif

</body>
</html>