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

<div class="row">
    
</div>
<?php include_once 'footer.php'; ?>