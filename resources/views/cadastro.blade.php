<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cadastro de usuário</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body class="antialiased">
        <div class="form_box">
            <h2>Cadastro de usuários</h2>
            <form class="needs-validation" novalidate method="POST" action="{{url('/cadastrar')}}">
                @csrf
                <div class="mb-3">
                  <label for="name" class="form-label">Nome completo:</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                  <div class="valid-feedback">Parece bom!</div>
                  <div class="invalid-feedback">Preencha o campo nome corretamente.</div>
                </div>
                <div class="mb-3">
                    <label for="userName" class="form-label">Nome de login:</label>
                    <input type="text" class="form-control" id="userName" name="username" required>
                    <div class="valid-feedback">Parece bom!</div>
                    <div class="invalid-feedback">Preencha o campo nome de login corretamente.</div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                    <div class="valid-feedback">Parece bom!</div>
                    <div class="invalid-feedback">Insira um endereço de e-mail válido.</div>
                </div>
                <div class="mb-3">
                    <label for="zipCode" class="form-label">CEP:</label>
                    <input type="text" class="form-control" id="zipCode" onkeypress="mascara(this, '##.###-###')" maxlength="10" name="zipcode" required>
                    <div class="valid-feedback">Parece bom!</div>
                    <div class="invalid-feedback">Preencha o campo CEP corretamente.</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Senha:</label>
                    <input type="password" id="password" pattern="^(?=.*[a-zA-Z])(?=\w*[0-9])\w{8,20}$" class="form-control" name="password" required>
                    <span class="lnr lnr-eye"></span>
                    <div class="valid-feedback">Parece bom!</div>
                    <div class="invalid-feedback">Sua senha deve ter de 8 a 20 caracteres, conter letras e números e não deve conter espaços, caracteres especiais ou emoji.</div>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script>
            (function () {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission
                Array.prototype.slice.call(forms)
                    .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                    })
                })()
        </script>
        <script>
            let btn = document.querySelector('.lnr-eye');
            btn.addEventListener('click', function() {
                let input = document.querySelector('#password');
                if(input.getAttribute('type') == 'password') {
                    input.setAttribute('type', 'text');
                } else {
                    input.setAttribute('type', 'password');
                }
            });
            function mascara(t, mask){
                var i = t.value.length;
                var saida = mask.substring(1,0);
                var texto = mask.substring(i)
                if (texto.substring(0,1) != saida){
                t.value += texto.substring(0,1);
                }
            }
        </script>
    </body>
</html>
