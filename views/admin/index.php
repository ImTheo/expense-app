<?php
    $stats = $this->d['stats'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
    <?php require 'header.php'; ?>

    <div id="main-container">
        <?php
            $this->showMessages();
         ?>
        <div id="dashboard-container" class="container">
            <div id="left-container">
                <div id="panels-container">
                    <div class="panel">
                        <div class="title">USUARIOS</div>
                        <div class="datum"><?php echo $stats['count-users']; ?></div>
                        <div class="description">Usuarios registrados</div>
                    </div>
                    <div class="panel">
                        <div class="title">Gastos</div>
                        <div class="datum"><?php echo $stats['count-expenses']; ?></div>
                        <div class="description">Transacciones</div>
                    </div>
                    <div class="panel">
                        <div class="title">Gastos</div>
                        <div class="datum">$<?php echo number_format($stats['max-expenses'], 2); ?></div>
                        <div class="description">Donaciones máximas</div>
                    </div>
                    <div class="panel">
                        <div class="title">Gastos</div>
                        <div class="datum">$<?php echo number_format($stats['avg-expenses'], 2); ?></div>
                        <div class="description">Donaciones promedio</div>
                    </div>
                    <div class="panel">
                        <div class="title">Gastos</div>
                        <div class="datum">$<?php echo number_format($stats['min-expenses'], 2); ?></div>
                        <div class="description">Donaciones mínimo</div>
                    </div>
                    <div class="panel">
                        <div class="title">Categorías</div>
                        <div class="datum"><?php echo $stats['count-categories']; ?></div>
                        <div class="description">Donaciones creadas</div>
                    </div>
                    <div class="panel">
                        <div class="title">Categorías</div>
                        <div class="datum"><?php echo $stats['mostused-category']; ?></div>
                        <div class="description">Categorias más donadas</div>
                    </div>
                    <div class="panel">
                        <div class="title">Categorías</div>
                        <div class="datum"><?php echo $stats['lessused-category']; ?></div>
                        <div class="description">Categorias menos donadas</div>
                    </div>
                </div>
            </div>
            <div id="right-container">
                <div class="transactions-container">
                    <section class="operations-container">
                        <h2>Dashboard animalitos</h2>  
                        
                        <button class="btn-main" id="new-category">
                            <i class="material-icons">add</i>
                            <span>Registrar nueva donación</span>
                        </button>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <script src="public/js/admin.js"></script>
</body>
</html>