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
                <a href="{{url('/exercicio2')}}">Exercício 2</a>
            </div>
            <table id="users" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Usuário</th>
                        <th>Maior de 50 anos</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($query as $key => $qr)   
                        <tr>
                            <td>{{$qr->nome . ' - ' . $qr->genero}}</td>    
                            @if ((date('Y') - $qr->ano_nascimento) > 50)
                                <td>SIM</td> 
                            @else
                                <td>NÃO</td> 
                            @endif  
                                 
                        </tr>          
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Usuário</th>
                        <th>Maior de 50 anos</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#users').DataTable({
                    language: {
                        url:"https://cdn.datatables.net/plug-ins/1.13.1/i18n/pt-BR.json"
                    }
                });
            });
        </script>
    </body>
</html>
