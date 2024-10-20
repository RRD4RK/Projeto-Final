<?php
    session_start();
    ?>
    <?php if (isset($_SESSION['adm'])): ?>
        <?php if ($_SESSION['adm'] == 1):  
            header('location:cadastrar.html');
            ?>
        <?php else: 
            header('location:logado.html');
            ?>
        <?php endif; ?>
        <?php else: 
        header('location:logado.html')
        ?>
        <li><a href='logout.php'>Sair</a></li>
    <?php endif; ?>