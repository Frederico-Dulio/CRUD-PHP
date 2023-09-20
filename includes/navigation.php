<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">CRUD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <a class="nav-link" aria-current="page" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Regitrar</a>
                <li class="nav-item">

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Registar</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <form action="<?php echo $_SERVER["PHP_SELF"];  ?>" method="post">
                                    <div class="modal-body">


                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" name="name" placeholder="nome" required>
                                            <label for="floatingInput">nome</label>
                                        </div>
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="floatingPassword" name="email" placeholder="emplo@gmail.com" required>
                                            <label for="floatingPassword">email</label>
                                        </div>


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-outline-success" name="submit" id="liveToastBtn">Cadastrar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                <li class="nav-item">

                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" Listar>Listar</a>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <?php require_once "CRUD/read.php"; ?>

                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Sair</button>
                                </div>
                            </div>
                        </div>
                    </div>


                </li>

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Atualizar</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Deletar</a>
                </li>
                </li>

            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>