<!DOCTYPE html>
<html lang="en">
<?php require '../../includes/_db.php' ?>
<?php require '../../includes/_header.php' ?>
<body>


    <div class="row">
        <div class="vur">
<a class="catelectronico" href="productosCategoria.php?categoria=<?php echo 'electronico'?>">
electronica
</a>
        </div>
<div class="vur">
<a class="catcocina" href="productosCategoria.php?categoria=<?php echo 'cocina'?>">
Cocina
</a>
</div>  
<div class="vur">
<a class="catfarmaceutico" href="productosCategoria.php?categoria=<?php echo 'farmaceutico'?>">
Farmaceutico
</a>
</div>  
</div>
<div class="row">
<div class="vur">
<a class="catjugueteria" href="productosCategoria.php?categoria=<?php echo 'jugueteria'?>">
jugueteria
</a>
</div>

<div class="vur">
<a class="catmascotas" href="productosCategoria.php?categoria=<?php echo 'mascotas'?>">
Mascotas
</a>
</div>
<div class="vur">
<a class="catautomovilstico" href="productosCategoria.php?categoria=<?php echo 'automovilistico'?>">
Autos
</a>
</div>
</div>
<div class="row">
<div class="vur">
<a class="catvestimenta" href="productosCategoria.php?categoria=<?php echo 'vestimenta'?>">
Vestimenta
</a>
</div>
<div class="vur">
<a class="cattelefonia" href="productosCategoria.php?categoria=<?php echo 'telefonia'?>">
Telefonia
</a>
</div>
<div class="vur">
<a class="catdeportes" href="productosCategoria.php?categoria=<?php echo 'deportes'?>">
Deportes
</a>
</div>
</div>
<div class="row">
    <div class="col-sm-12">
        <input class="soon" type="button" value="Mas categorias proximamenente">
    </div>
</div>


<style>
    .vur{
        text-align: center;
    }
    .vur{
        width: 1410px;
        font-size: x-large;
        border-bottom: 2px;

    }

</style>

</body>
<?php require '../../includes/_footer.php' ?> 
</html>