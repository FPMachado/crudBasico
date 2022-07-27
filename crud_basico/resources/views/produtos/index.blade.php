<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de produtos</title>
</head>
<body>
    <table style='border: 1px solid black;'>
        <tr>
            <td style='border: 1px solid black;'>Id</td>
            <td style='border: 1px solid black;'>Nome</td>
            <td style='border: 1px solid black;'>Custo</td>
            <td style='border: 1px solid black;'>Preço</td>
            <td style='border: 1px solid black;'>Quantidade</td>
        </tr>
        @foreach($produtos as $p)
            <tr>
                <td style='border: 1px solid black; text-align: center;'>{{$p->id}}</td>
                <td style='border: 1px solid black; text-align: center;'>{{$p->nome}}</td>
                <td style='border: 1px solid black; text-align: center;'>{{$p->custo}}</td>
                <td style='border: 1px solid black; text-align: center;'>{{$p->preco}}</td>
                <td style='border: 1px solid black; text-align: center;'>{{$p->quantidade}}</td>
            </tr>
        @endforeach
    </table>
    
    <button>Cadastrar Novo</button>
    
</body>
</html>