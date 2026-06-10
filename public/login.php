<?php include '../private/includes/header.php'; ?>


<div class="container-fluid mt-5">
    <div class="row justify-content-center">
        <div class="col-lg5 col-md-6 col-sm-8 col-10">
            <!--borda à volta do formulário-->
            <div class="card p-4">

                <div class="d-flex align-items-center justify-content-center my-4">
                    <img src="/isep-ginasio/private/assets/img/gym125.png" class="img-fluid me-3">
                    <h2><strong> <?php echo APP_NAME; ?></strong></h2>
                </div>

                <div class="row"> <!--cria uma linha no layout para as colunas-->
                    <div class="col">
                        <form action="../private/index.php" method="post">
                            <div class="mb-3">
                                <!-- Utilizador -->
                                <label for="email" class="form-label">Utilizador</label>
                                <input type="email" class="form-control" name="text_username" id=""> 
                            </div>
                            <div class="mb-3">
                                <!-- Password -->
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="text_password" id="">
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


<?php include '../private/includes/footer.php'; ?>