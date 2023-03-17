<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap w/ Vite</title>

        <!-- Styles -->
        @vite([
            'resources/css/app.css',
            'resources/js/app.js',
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
        ])

    </head>
    <body>
       
    <h1><b> Cadastrar - Agendamento de potenciais clientes</h1></b>
    <p> Sistema utilizado para agendamento de serviços </p>
       
    <form action="form_bootstrap">
        Nome: <input type="text" name="name"><br>
        Telefone: <input type="text" name="telefone" placeholder="(xx)xxxxx-xxxx"><br>
        Origem: <select id="origem-cel" name="origem_cel" placeholder="Celular"><br>
           <option value="cel01 "> Celular</option>
           <option value="cel01 "> Telefone</option>

        </select></br>
        Data do Contato: <input id="date" type="date"><br>
        Observação: <input type="text" size="35" name="observacao"><br>
        <input type="text" name= "btn cad"><button type="submit">Cadastrar</button>
    </form>




    <div class="container py-4 px-3 mx-auto">
            <h1>Hello, Bootstrap and Vite!"</h1>
            <button class="btn btn-primary">Primary button</button>
        </div>

    </body>
</html>