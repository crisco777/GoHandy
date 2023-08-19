<x-layout>
    @push('css')
    <style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background: linear-gradient(to right, #ffffff, #ffffff);

      }

.team .member{
    position: relative;
    padding: 30px;
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    background: #fff;
}
.team .member .teampic{
    overflow: hidden;
    width: 50px;
    border-radius: 50%;
}
.team .member .member-info{
    padding-left: 10px;
}
.team .member h4{
    font-weight: 200;
    margin-bottom: 5px;
    font-size: 20px;
    color: rgb(7, 7, 7);
}
.team .member span{
    display: block;
    font-size: 15px;
    padding-bottom: 10px;
    position: 500;
}
.team .member span::after{
    content: "";
    position: absolute;
    display: block;
    width: 50px;
    height: 2px;
    background: black;
    bottom: 0;
    left: 0;
}
.team .memberp{
    margin: 10px 0 0 0;
    font-size: 14px;
}
.team .member .social{
    margin-top: 12px;
    display: flex;
    align-items: center;
    justify-content: flex-start;
}
.team .member .social a{
    display: flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: #eff2f8;
}
.team .member .social a i{
    color: red;
    font-size: 16px;
    margin: 0 2px;
}
.team .member .social a:hover{
    background: red;
}
.team .member .social a:hover i{
    background: white;
}
.team .member .social a+a{
    margin-left: 8px;
}
section{
    padding: 60px 0;
    overflow: hidden;
}
.section-title{
    text-align: center;
    padding-bottom: 30px;
}
.underline{
    width: 150px;
    height: 1px;
    background-color: black;
    margin: auto;
    margin-top: -30px;
}
.section-title h2{
    font-size: 32px;
    font-weight: bold;
    margin-bottom: 20px;
    padding-bottom: 20px;
    position: relative;
    color: rgb(255, 255, 255);
}
.section-title p{
    margin-top: 20px;
}

</style>
@endpush
<body>
    <nav class="navbar bg-body-tertiary" style="background: linear-gradient(to right, #91c8e4, #91c8e4)">
        <a class="nav-link" href="/home">
            <i class="bi bi-house-fill fs-1"></i>
        </a>
        <a class="nav-link d-flex justify-content-start" href="/weare"
            style="color: rgb(255, 255, 255); font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:large;">
            <b> ¿Quienes somos?</b>
        </a>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-primary" type="submit">Buscar</button>
        </form>
        <a class="nav-link" href="/viewprofile"
            style="color: rgb(255, 255, 255); font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:large;">
            <b> Ver perfil</b>
        </a>
        <a class="nav-link" href="/login"
        style="color: rgb(255, 255, 255); font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:large;">
        <b>Logout</b>
    </a>
    </nav>

    <div class="team">
        <div class="container">

            <div class="section-title">
                <h2>GO HANDY</h2>
            </div>

            <div class="row"></div>
            <!--team member 1-->
            <div class="col-lg-6 mt-4">
                <div class="member d-flex align-items-start">
                    <div class="teampic">
                        <img src="img/profile.png" class="img-fluid" alt="team1">
                    </div>
                    <div class="member-info">
                        <h4>Ricardo Bautista</h4>
                        <span>ricardo1@poma.superate.org</span>
                        <span>18 años</span>
                        <span>Jardinero</span>
                        <p>Deseo prestar mi servicio a quien lo necesite.</p>
                        <p>Dirección: Santa tecla, El Salvador</p>
                        <p>Contacto: 1234-5678</p>
                        <button type="button" class="btn btn-primary">Solicitar servicio</button>

                        <div class="social">
                            <a href=""> <i class="bi bi-house-gear"></i> </a>
                            <a href=""> <i class="bi bi-wrench-adjustable"></i> </a>
                            <a href=""> <i class="bi bi-wrench"></i> </a>
                        </div>
                    </div>
                </div>
            </div>

            <!--team member 2-->
            <div class="col-lg-6 mt-4">
                <div class="member d-flex align-items-start">
                    <div class="teampic">
                        <img src="img/profile.png" class="img-fluid" alt="team1">
                    </div>
                    <div class="member-info">
                        <h4>Brisslie Gonzales</h4>
                        <span>gonzales2@poma.superate.org</span>
                        <span>16 años</span>
                        <span>Sastreria</span>
                        <p>Quiero prestar mi servicio.</p>
                        <p>Dirección: Colón, El Salvador</p>
                        <p>Contacto: 1234-5678</p>
                        <button type="button" class="btn btn-primary">Solicitar servicio</button>

                    <div class="social">
                        <a href=""> <i class="bi bi-house-gear"></i> </a>
                        <a href=""> <i class="bi bi-wrench-adjustable"></i> </a>
                        <a href=""> <i class="bi bi-wrench"></i> </a>
                    </div>
                    </div>
                </div>
            </div>


                    <!--team member 3-->
                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start">
                            <div class="teampic">
                                <img src="img/profile.png" class="img-fluid" alt="team1">
                            </div>

                            <div class="member-info">
                                <h4>Alexandra Rodriguez</h4>
                                <span>alexandra@poma.superate.org</span>
                                <span>20 años</span>
                                <span>Ama de casa</span>
                                <p>Soy una estudiante, la cual tambien quiero prestar mi servicio</p>
                                <p>Dirección: San salvador, El Salvador</p>
                                <p>Contacto: 1234-5678</p>
                                <button type="button" class="btn btn-primary">Solicitar servicio</button>

                                <div class="social">
                                <a href=""> <i class="bi bi-house-gear"></i> </a>
                                <a href=""> <i class="bi bi-wrench-adjustable"></i> </a>
                                <a href=""> <i class="bi bi-wrench"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--team member 4-->
            <div class="col-lg-6 mt-4">
                <div class="member d-flex align-items-start">
                    <div class="teampic">
                        <img src="img/profile.png" class="img-fluid" alt="team1">
                    </div>
                    <div class="member-info">
                        <h4>Nestor Ayala</h4>
                        <span>nestor.ayala@poma.superate.org</span>
                        <span>21 años</span>
                        <span>Fontanero</span>
                        <p>Estudiante, que tambien deseo prestar mi servicio </p>
                        <p>Dirección: La libertad, El Salvador</p>
                        <p>Contacto: 1234-5678</p>
                        <button type="button" class="btn btn-primary">Solicitar servicio</button>

                        <div class="social">
                            <a href=""> <i class="bi bi-house-gear"></i> </a>
                            <a href=""> <i class="bi bi-wrench-adjustable"></i> </a>
                            <a href=""> <i class="bi bi-wrench"></i> </a>
                        </div>
                    </div>
                </div>
            </div>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        </div>
    </div>

</body>
</x-layout>
