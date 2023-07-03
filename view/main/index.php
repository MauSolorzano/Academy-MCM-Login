<?php
require 'view/header.php';
require 'view/menu.php';
?>
<div class="container-fluid p-0" id="contendorprincipal">
    <main class="">
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">LOS MEJORES CURSOS</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5"></p>
                    </div>
                </div>
            </div>
        </header>
        <div id="apartado" class="bg-light col-lg-4">
            <h1 id="P1" class="fw-bold">ACADEMIA</h1>
            <p class="fs-4">Descubre una experiencia educativa única en nuestra 
                academia, donde la excelencia y la pasión se unen para formar líderes del mañana. 
                Nuestros cursos de vanguardia, impartidos por profesores altamente calificados, te 
                brindarán las herramientas necesarias para destacarte en tu campo.
            </p>
        </div>

        <div>
            
        </div>
        <div class="card-group">
            <div class="card">
                <img src="https://www.feuga.es/wp-content/uploads/2023/01/python-curso-1024x576.jpg" 
                class="card-img-top p-1 rounded-3" alt="Curso de Python">
                <div class="card-body">
                <h5 class="card-title">Curso basico de Python</h5>
                <p class="card-text">En nuestro curso basicao de Python aprenderas todas
                    las herramientas necesarias para crear una distinta variedad de programas.
                </p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img src="https://i.ytimg.com/vi/R3MhA8vWGsg/maxresdefault.jpg" 
                class="card-img-top p-1 rounded-3" alt="Curso de ruby">
                <div class="card-body">
                <h5 class="card-title">Curso basico de Ruby</h5>
                <p class="card-text">En este curso aprenderas los fundamentos de Ruby y como implementarlo en
                    tus proyectos web, para automatizar sistemas, y mucho mas
                </p>
                <p class="card-text"><small class="text-muted">Last updated 15 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTiEhfSV3wKptaLE0pcNIF-8UkJ1o98MZydYsFpsFUrHP9VVHwo87Sn5ArarhjoFxvbVcA&usqp=CAU" 
                class="card-img-top p-1 rounded-3" alt="Curso de MYSQL">
                <div class="card-body">
                <h5 class="card-title">Curso intermedio de MYSQL</h5>
                <p class="card-text">En este curso podras avanzar al siguiente paso en la administracion de base de datos MYSQL, algunas de las cosas
                    que aprenderas son: Procedimientos almacenados, Funciones y Triggers
                </p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
       
    </main>

    <!-- Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/js/bootstrap.bundle.min.js"></script> -->
    
</div>
<?php
require 'view/footer.php';
?>