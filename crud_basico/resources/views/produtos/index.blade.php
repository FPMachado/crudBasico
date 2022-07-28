<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <title>Listagem de produtos</title>
</head>
<body>
    @include('flash-message')
    @yield('content')
    <table style='border: 1px solid black;'>
        <tr>
            <td style='border: 1px solid black; text-align: center'>Id</td>
            <td style='border: 1px solid black; text-align: center'>Nome</td>
            <td style='border: 1px solid black; text-align: center'>Custo</td>
            <td style='border: 1px solid black; text-align: center'>Preço</td>
            <td style='border: 1px solid black; text-align: center'>Quantidade</td>
            <td style='border: 1px solid black; text-align: center' colspan=2>Utilitários</td>
        </tr>
        @foreach($produtos as $produto)
            <tr>
                <td style='border: 1px solid black; text-align: center;'>{{$produto->id}}</td>
                <td style='border: 1px solid black; text-align: center;'>{{$produto->nome}}</td>
                <td style='border: 1px solid black; text-align: center;'>{{$produto->custo}}</td>
                <td style='border: 1px solid black; text-align: center;'>{{$produto->preco}}</td>
                <td style='border: 1px solid black; text-align: center;'>{{$produto->quantidade}}</td>
                <td style='border: 1px solid black; text-align: center;'><a href="/produto/editar/{{$produto->id}}"><i class="far fa-edit"></i></a></td>
                <td style='border: 1px solid black; text-align: center;'><a href="/produto/excluir/{{$produto->id}}"><i class="fas fa-times"></i></a></td>
            </tr>
        @endforeach
    </table>
    
    <button style='margin-top: 4px'><a href="/produto/novo/">Novo</i></a></button>
    
</body>
</html>