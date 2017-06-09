<?php
require_once '../config/conecta_mysql.inc.php';
$codigo = $_REQUEST['codigo'];
$sql = "SELECT * FROM cursos where codigo = $codigo";
$resultado = $mysqli->query($sql);

if ($dados = $resultado->fetch_assoc()) {
    $codigo = $dados['codigo'];
    $nome = $dados['nome'];
    $desc = $dados['descricao'];
    $carga = $dados['carga'];
    $duracao = $dados['duracao'];
    $img = $dados['imagem'];
    $curtidas = $dados['curtidas'];
}
?>
<?php include_once 'header.php'; ?>
<div class="row">
    <h1 class="alert bg-danger col-lg-8" style="color: #fff; margin-top: 10px;"><center><?php echo $nome; ?></center></h1>
</div>
<section class="row">
    <div class="col-lg-12" style="text-align: justify;">
        <?php echo $desc; ?>
        <img class="rounded" src="../assets/img/img-cursos/<?php echo $img; ?>" width="100%" alt="<?php echo $nome; ?>" title="<?php echo $nome; ?>"/>
    </div>
</section>

<div class="row" style="padding: 10px;">
    <div class="card col-lg-3" style="margin-left: 50px; margin-right: 50px;">
        <div class="card-block">
            <h4 class="card-title">Carga Horaria</h4>
            <p class="card-text"><?php echo $carga; ?> Horas</p>
        </div>
    </div>
    
    <div class="card col-lg-3" style="margin-left: 50px; margin-right: 50px;">
        <div class="card-block">
            <h4 class="card-title">Duração</h4>
            <p class="card-text"><?php echo $duracao; ?></p>
        </div>
    </div>
    
    <div class="card col-lg-3" style="margin-left: 50px; margin-right: 50px;">
        <div class="card-block">
            <h4 class="card-title">Quantas Pessoas Ja Curtiram este Curso?</h4>
            <p class="card-text"><?php echo $curtidas; ?> Pessoas</p>
            <p><a href="curtirCurso.php?codigo=<?php echo $codigo; ?>"><h5>Curtir Este Curso!</h5></a></p>
        </div>
    </div>
</div>


<?php include_once 'footer.php'; ?>

