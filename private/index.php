<?php
require_once __DIR__ . '/../config/config.php';
?> 

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo APP_NAME; ?></title> 
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,300;0,700;1,400&display=swap"rel="stylesheet"> 
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/fontawesome/all.min.css">
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css"> 
</head>
<!-- favicon -->
    <link rel="shortcut icon" href="/assets/img/gym125.png" type="image/png">

 <!--folha de estilos css-->
    <link rel="stylesheet" href="assets/css/admin.css">

<body>
    <!--Navbar-->
    <header class="container-fluid bg-dark text-white">
        <div class="row align-items-center">
            <div class="col-6 d-flex aligh-items-center p-3">
            <!--Logo e Nome -->
            <a href="index.html">
                <img alt="Logo do ISEP Ginásio" height="50" src="assets/img/gym125_white.png"   class="me-3"> <!--alt é para descrever a imagem-->
            </a>
            <h3 class="mb-0"><?php echo APP_NAME; ?></h3> 
            </div>
        
            <div class="col-6 text-end p-3">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-regular fa-user me-2"></i> Utilizador
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-key me-2"></i>Alterar password</a></li> <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="login_form.html"><i class="fa-solid fa-right-from-bracket me-2"></i>Sair</a></li> </ul>
                </div>
            </div>
        </div>

    </header>
    <div class="container-fluid">
        <div class="row">
            <aside class="col-md-3 col-lg-2 bg-secondary text-white p-3 min-vh-100">
        <h4>Menu</h4>
        <nav>
            <a href="views/clientes/lista.html" class="nav-link text-white px-0 mb-2 d-block"><i class="fas fa-users"></i> &ensp;Clientes</a>
            <a href="views/agendamento/agendamento.html" class="nav-lnk text-white px-0 mb-2 d-block"><i class="fas fa-calendar-alt"></i> &ensp;Agendamento de treinos</a>
            <a href="views/plano_treino/plano_treino.html" class="nav-lnk text-white px-0 mb-2 d-block"><i class="fas fa-dumbbell"></i> &ensp;Planos de treino</a>
            <a href="views/equipamentos/equipamentos.html" class="nav-lnk text-white px-0 mb-2 d-block"><i class="fas fa-cogs"></i> &ensp;Equipamentos</a>
            <a href="views/produtos_servicos/produtos_servicos.html" class="nav-lnk text-white px-0 mb-2 d-block"><i class="fas fa-box-open"></i> &ensp;Produtos e Serviços</a>
        </nav>
    </aside>

    <!-- Conteúdo Principal-->
    <main class="col-md-9 col-lg-10 p-4">
        <section>
            <h2>ISEP Ginásio</h2>
            <p>Escolha uma opção no menu lateral para continuar</p>
        </section>
    </main>
    <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>

        </div>
    </div>
    <!--Sidebar-->
    

</body>

</html>