<?php
    require_once '../config/conecta_mysql.inc.php';
    
    $sql = "SELECT * FROM cursos";
    $resultado = $mysqli -> query($sql);
?>
<?php include_once 'header.php'; ?>
<?php
if(!$resultado){ ?>
<div class="row">
    <h2 class="alert alert-danger col-lg-12">
        <center>Não foi possivel encontrar os Cursos, Tente mais tarde!</center>
    </h2>
</div>
<?php
    }
?>
<div class="row">
    <h1 class="alert alert-warning col-lg-12">
        Cursos
    </h1>
</div>

<div class="row" style="padding: 10px;">
    <?php
    while ($dados = $resultado -> fetch_assoc()){
        $nome = $dados['nome'];
        $sumario = $dados['sumario'];
        $carga = $dados['carga'];
        $duracao = $dados['duracao'];
        $img = $dados['imagem'];
    ?>
    <div class="card col-lg-5" style=" padding-top: 5px; margin-left: 50px; margin-right: 50px; margin-bottom: 20px;">
        <img class="card-img-top" src="../assets/img/img-cursos/<?php echo $img; ?>" alt="<?php echo $nome; ?>" title="<?php echo $nome; ?>" width="100%">
    <div class="card-block">
        <h4 class="card-title"><?php echo $nome; ?> <small>Carga Horaria: <?php echo $carga; ?> Horas - (<?php echo $duracao; ?>)</small></h4>
    <p class="card-text" ><?php echo $sumario; ?></p>
    <a href="#" class="btn btn-primary">Ver Mais</a>
  </div>
</div>
    <?php
    }
    ?>
</div>
<?php include_once 'footer.php'; ?>