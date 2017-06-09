<?php
require_once '../config/conecta_mysql.inc.php';
    $codigo = $_REQUEST['codigo'];
    $sql = "SELECT * FROM cursos where codigo = $codigo";
    $resultado = $mysqli -> query($sql);
    
    while ($dados = $resultado -> fetch_assoc()){
        $codigo = $dados['codigo'];
        $nome = $dados['nome'];
        $desc = $dados['descricao'];
        $carga = $dados['carga'];
        $duracao = $dados['duracao'];
        $img = $dados['imagem'];
    }
?>
<?php include_once 'header.php'; ?>
<div class="row">
    <h1 class="alert bg-success col-lg-12"><center><?php echo $nome; ?></center></h1>
</div>
<section class="row">
   
</section>


<?php include_once 'footer.php'; ?>

