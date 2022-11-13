<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Página inicial</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body class="antialiased">
        <div class="user_box container">
            <div class="buttons">
                <a href="{{url('/')}}">Início</a>
                <a href="{{url('/exercicio3')}}">Exercício 3</a>
            </div>
            <code>
                    //CRIAR ARRAY COM 7 NÚMEROS<br>
                    $numeros = array(1,2,3,4,5,6,7);
                    <br><br>
                    //IMPRIMIR A POSIÇÃO 3 DO ARRAY<br>
                    echo $numeros[3];
                    <br><br>

                    //ADICIONANDO AS POSIÇÕES DO ARRAY NO FORMATO DE STRING EM UMA VARIÁVEL<br>
                    $string = implode(",", $numeros);
                    <br><br>

                    //Crie um novo array a partir da variável no formato de string que foi criada e destrua o anterior<br>
                    $new_array = explode(",", $string);
                    <br><br>

                    //Crie uma condição para verificar se existe o valor 14 no array<br>
                    if (in_array("14", $new_array)) { <br>
                        echo "Existe o valor 14!";<br>
                    }else{<br>
                        echo "Não existe o valor 14!";<br>
                    }
                    <br><br>

                    //Faça uma busca em cada posição. Se o número da posição atual for menor que o da posição anterior (valor anterior que não foi excluído do array ainda), exclua esta posição<br>
                    $previousValue = 0;<br>
                    foreach($new_array as $key => $value){<br>
                        //Se o valor for menor que o anterior, remove a posição<br>
                        if($value < $previousValue){<br>
                            unset($new_array[$key]);<br>
                        }<br>
                        $previousValue = $value;<br>
                    }
                    <br><br>

                    //Remova a última posição deste array<br>
                    array_pop($new_array);
                    <br><br>

                    //Conte quantos elementos tem neste array<br>
                    count($new_array);
                    <br><br>

                    //Inverta as posições deste array<br>
                    array_reverse($new_array);
            </code>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    </body>
</html>
