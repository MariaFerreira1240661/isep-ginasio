<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISEP Ginásio</title>
    <link rel="stylesheet" href="../frontend/assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../frontend/assets/css/estilos.css">
    <link rel="shortcut icon" href="../frontend/assets/img/gym125.png" type="image/png">
    <link rel="stylesheet" href="../frontend/assets/img/fontawesome/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;700&display=swap" rel="stylesheet">

</head>
<body>
    <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-lg5 col-md-6 col-sm-8 col-10">
                <!--borda à volta do formulário-->
                <div class="card p-4">

                    <div class="d-flex align-items-center justify-content-center my-4">
                        <img src="../frontend/assets/img/gym125.png">
                        <h2><strong>ISEP-Ginásio</strong></h2>
                    </div>

                    <div class="row"> <!--cria uma linha no layout para as colunas-->
                        <div class="col">
                            <form action="../backend/index.html" method="post">
                                <div class="mb-3">
                                    <!-- Utilizador -->
                                    <label for="email" class="form-label">Utilizador</label>
                                    <input type="email" name="email" id="email" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <!-- Password -->
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                                <div class="mb-3 text-center">
                                    <!-- Submit -->
                                    <button type="submit" class="btn btn-secondary px-4">
                                        Entrar <i class="fa-solid fa-right-to-bracket ms-2"></i>
                                    </button>
                                </div>
                                <div>
                                    <!-- Erros -->
                                    <div class="alert alert-danger p-2 text-center">
                                        Erro: Utilizador não registado.
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</body>
</html>