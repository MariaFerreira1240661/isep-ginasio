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