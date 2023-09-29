<!DOCTYPE html>
<html lang="es">

<head>
    <?php
        include('./head.php')
    ?>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand color" href="#">Navbar</a>
            <button class="navbar-toggler color" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item space">
                        <a class="nav-link active" aria-current="page" href="../form/hola.html">Inicio</a>
                    </li>
                    <li class="nav-item dropdown space">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" href="#">
                            Cultura Huilense
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Historia</a></li>
                            <li><a class="dropdown-item" href="#">Ritmos Musicales</a></li>
                            <li><a class="dropdown-item" href="#">Talento Huilense</a></li>
                            <li><a class="dropdown-item" href="#">Fiestas</a></li>
                            <li><a class="dropdown-item" href="#">Gastronomia</a></li>
                            <li><a class="dropdown-item" href="#">Mitos y Leyendas</a></li>
                            <li><a class="dropdown-item" href="#">vocabulario Opita</a></li>
                        </ul>
                    </li>
                    <li class="nav-item spacer">
                        <button class="btn btn-outline-warning color" type="button"><a class="nodecorate" href="./signUp.php">REGISTRO</a></button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-outline-success" type="submit">INICIAR SESIÓN</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <section>
            <article class="container-fluid" style="padding: 0;">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item padre active">
                            <img src="../img/montaña.jpg" class="d-block w-100" alt="">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item padre2">
                            <img src="../img/manos_cafe.jpg" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item padre3">
                            <img src="../img/maquina.jpg" alt="" class="d-block w-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                </div>
            </article>
        </section>
        <section class="container-xxl">
            <article>
                <div class="titulo-descubre anime">
                    <h1>Descubre Iquira</h1>
                    <p>Estos destinos tienen mucho que ofrecer, ya que se ha convertido en un buen productor de café</p>
                </div>
            </article>
            <article >
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <img src="../img/comida.jpeg" class="img-fluid rounded-start" width="100%" alt="">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Productos de café</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-outline-success" type="submit">IR</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <img src="../img/iquira.jpeg" class="img-fluid rounded-start" width="100%" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Fincas productoras</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-outline-success" type="submit">IR</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <img src="../img/cafe.jpeg" class="img-fluid rounded-start" width="100%" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Productores</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-outline-success" type="submit">IR</button>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>

        <section class="container-xxl espaciado">
            <article>
                <div>
                    <h1>Nuestra Historia</h1>
                </div>
                
                <div class="parrafo row">
                    <div class="col-6">
                        <p class="juts">El poblado fue fundado por los indígenas Paeces como Yávilco que significa Sitio de observación o Montes Altos. Posteriormente comenzaron a llegar los conquistadores españoles y junto con ellos los indígenas Yanaconas quienes hablaban el Quechua y le colocaron el nombre de Íquira.</p>
                    </div>
                    <div class="col-6">
                        <p>Acatuamente Iquira ofrece servicios turisticos para conocer todo nuestro atractivo cultural, ve a disfrutar de
                            nuestra gente, nuestras comidas, nuestros paisajes.
                        </p>
                    </div>
                </div>
            </article>
            <article>
                <div class="title">
                    <h1>Ubicación</h1>

                </div>
                <div class="mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.553158849861!2d-75.63765042411752!3d2.6495218560188407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3b217694c5905f%3A0x8ae6570dc2678f92!2sIquira%2C%20Huila!5e0!3m2!1ses!2sco!4v1695155908819!5m2!1ses!2sco" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </article>
        </section>
    </main>
    <footer class="py-5 fondo">
        <div class="container-fluid">
            <p class="text_footer">Dirección: </p>
        </div>
    </footer>

</body>

</html>