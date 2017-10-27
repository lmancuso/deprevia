<?php
include("soporte.php");
$usuarios = $db->traerTodosLosUsuarios();
?>

<?php include("templates\header.php"); ?>
    <div class="jumbotron">Mis usuarios</div>
    <ul>
        <?php foreach($usuarios as $usuario) : ?>
            <li>
                <a href="perfil.php?email=<?=$usuario->getEmail()?>">
                    <?=$usuario->getEmail()?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>


<?php include("templates\footer.php"); ?>