<?php
    $this->view('home/cabecario');
?>
<!-- Navigation-->
<?php
    $this->view('home/menu');
?>
<!-- Masthead-->
<header class="masthead">
    <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
            <h1 class="mx-auto my-0 text-uppercase">Seja Bem-Vindo</h1>
            <h2 class="text-white-50 mx-auto mt-2 mb-5">Esta página foi criada para atividade de conclusão do curso
                Programador Web - IFTO campus Araguaína.</h2>
            <a class="btn btn-primary js-scroll-trigger" href="#about">Começar</a>
        </div>
    </div>
</header>
<!-- About-->
<section class="about-section text-center" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="text-white mb-4">Marcus Vinicius Souza Batista</h2>
                <p class="text-white-50">
                    Comecei com a programação na adolescência com o curso técnico de montagem e manutenção de computadores integrado ao ensino médio. Com o passar do tempo, fui me apaixonando cada vez mais com esta arte que é programar. Hoje sou acadêmico de Licenciatura em Computação pelo IFTO - Campus Araguatins, e espero ter um futuro promissor nesta área.
                </p>
            </div>
        </div>
        <img class="img-fluid" src="assets/img/ipad.png" alt="" />
    </div>
</section>
<!-- Projects-->
<section class="projects-section bg-light" id="projects">
    <div class="container">
        <!-- Featured Project Row-->
        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
            <div class="col-xl-7 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/ifto.svg" alt="" />
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="featured-text text-center text-lg-left">
                    <h4>Programador Web</h4>
                    <p class="text-black-50 mb-0">Capacitar o aluno a projetar, testar e realizar manutenção em Web
                        
                    </p>
                </div>
            </div>
        </div>
        <!-- Project One Row-->
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
            <div class="col-lg-6"><img class="img-fluid" src="assets/img/ifro.jpg" alt="" /></div>
            <div class="col-lg-6">
                <div class="bg-transparent text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-left">
                            <h4 class="text-dark">Administrador de Banco de Dados (BD)</h4>
                            <p class="mb-0 text-black-50">Implementar, administrar, instalar e realizar manutenção em
                                servidores de banco de dados.</p>
                            <hr class="d-none d-lg-block mb-0 ml-0" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project Two Row-->
        <div class="row justify-content-center no-gutters">
            <div class="col-lg-6"><img class="img-fluid" src="assets/img/ifrn2.png" alt="" /></div>
            <div class="col-lg-6 order-lg-first">
                <div class="bg-transparent text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-right">
                            <h4 class="text-dark">Instalador e Reparador de redes de Computadores</h4>
                            <p class="mb-0 text-black-50">Instalar e realizar manutenção em infraestrutura física,
                                sistemas operacionais cliente e equipamentos ativos de rede.</p>
                            <hr class="d-none d-lg-block mb-0 mr-0" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Signup-->
<section class="signup-section" id="signup">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto text-center">
                <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                <h2 class="text-white mb-5">Inscreva-se para ficar por dentro!</h2>
                <form class="form-inline d-flex">
                    <input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" type="email"
                        placeholder="Insira endereço de Email..." />
                    <button class="btn btn-primary mx-auto" type="submit">Inscreva-se</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Contact-->
<section class="contact-section bg-black">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Endereço</h4>
                        <hr class="my-4" />
                        <div class="small text-black-50">Rua 02, Nova Araguatins</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-envelope text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Email</h4>
                        <hr class="my-4" />
                        <div class="small text-black-50"><a href="#!">marcus.batista3@estudante.ifto.edu.br</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-mobile-alt text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Telefone</h4>
                        <hr class="my-4" />
                        <div class="small text-black-50">(63) 4002-8922</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="social d-flex justify-content-center">
            <a class="mx-2" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
            <a class="mx-2" href="https://pt-br.facebook.com/"><i class="fab fa-facebook-f"></i></a>
            <a class="mx-2" href="https://github.com/RicardoLMattos"><i class="fab fa-github"></i></a>
        </div>
    </div>
</section>
<!-- Footer-->
<?php
    $this->view('home/rodape');
?>