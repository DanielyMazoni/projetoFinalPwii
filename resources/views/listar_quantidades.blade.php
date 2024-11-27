<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Quantidades</title>
</head>
<body>
@foreach ($quantidades as $quantidade)
        <div> ID {{ $quantidade->id }} </div>
        <br>
        <div> Nome da receita: {{ $quantidade->receita->descricao }} </div>
        <br>
        <div> Ingredientes: </div>
        <br>
            @foreach ($quantidade->items as $item)
                
                {{$item->descricao}} - {{$item->pivot->qntd}} {{$item->medida}} <br> 
                
            @endforeach <br>
        <hr>
    @endforeach

</body>
</html>