<?php include_once 'header.php'; ?>

<div class="row">
    <div class="jumbotron jumbotron-fluid col-lg-12" style="background: url('../assets/img/banner_header.jpg') center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <center><img src="../assets/img/Logo - Central de Informatica.png" alt="Central de Informatica e Idiomas" title="Central de Informatica e Idiomas" width="60%"/></center>
                </div>
                <div class="col-lg-8" style="color: #fff;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <center><h1  class="display-4" style="font-weight: 500;">Central de Informatica e Idiomas</h1>
                                <p  class="lead" >Qualidade de ensino para Você alcançar o sucesso!</p></center>
                            </div>
                        </div>
                        
                        <div class="row">
                <div class="col-lg-12">
                    <center>
                        <a href="#" target="_blank"><img src="../assets/img/facebook.png" alt="Facebook" title="Acesse nossa Página no Facebook" width="9%"/></a>
                        <img style="cursor: pointer;" src="../assets/img/whatsapp.png" alt="Whatsapp" title="Entre em contato pelo nosso Whatsapp" width="7%" data-toggle="modal" data-target="#myModal" />
                    </center>
                </div>
            </div>
                    </div> 
                </div>
            </div>

            


            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Contato Pelo Whatsapp</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            (31) XXXXX-XXXX
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="row">
    <div id="carouselExampleIndicators" class="carousel slide col-lg-12" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img width="100%" class="d-block img-fluid" src="../assets/img/banner_rotativo.cdr" alt="First slide">
            </div>
            <div class="carousel-item">
                <img width="100%" class="d-block img-fluid" src="https://lh3.googleusercontent.com/-OFfbRGVMGqk/VEuKZHaQG0I/AAAAAAAAK0M/guJ3cyq3JGs/w1038-h415-no/Injusti%C3%A7a.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img width="100%" class="d-block img-fluid" src="https://lh4.googleusercontent.com/-ry4-M7jHNUo/U7RMRiyyQII/AAAAAAAAGto/XG-mg4C7Y2c/w1038-h415-no/Deadpool+The+Gauntlet.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<?php include_once 'footer.php'; ?>