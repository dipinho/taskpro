<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TaskPro - Sistema de Gestão de Tarefas</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">TaskPro</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tarefas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-light text-primary" href="#">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <header class="bg-light text-center py-5">
        <div class="container">
            <h1 class="display-4">Bem-vindo ao TaskPro</h1>
            <p class="lead">Gerencie suas tarefas de forma simples e eficaz.</p>
            <a href="#crud-actions" class="btn btn-primary btn-lg">Começar</a>
        </div>
    </header>

    <section id="crud-actions" class="container my-5">
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Adicionar Tarefa</h5>
                        <p class="card-text">Crie novas tarefas para organizar seu trabalho.</p>
                        <a href="#" class="btn btn-primary">Adicionar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Ver Tarefas</h5>
                        <p class="card-text">Veja todas as suas tarefas criadas.</p>
                        <a href="#" class="btn btn-primary">Visualizar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Editar Tarefa</h5>
                        <p class="card-text">Modifique detalhes de uma tarefa existente.</p>
                        <a href="#" class="btn btn-primary">Editar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Excluir Tarefa</h5>
                        <p class="card-text">Remova uma tarefa que não seja mais necessária.</p>
                        <a href="#" class="btn btn-primary">Excluir</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-light py-3 text-center">
        <p class="mb-0">TaskPro &copy; 2024 - Sistema de Gestão de Tarefas</p>
    </footer>

    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
