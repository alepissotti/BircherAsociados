<?php include('header.php'); ?>
<div class="container">
    <div class="row m-5">
        <div class="col-sm-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Seleccion de Jugadores</h5>
                    <p class="card-text">Filtre su búsqueda de Jugador</p>
                    <form action="buscar.php" method="get">
                        <div class="form-row">
                            <div class="col-5">
                                <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                            </div>
                            <div class="col">
                                <select class="custom-select custom-select" name="pais">
                                    <option selected value="Argentina">Argentina</option>
                                    <option value="Brasil">Brasil</option>
                                    <option value="Uruguay">Uruguay</option>
                                </select>
                            </div>
                            <input type="submit" class="btn btn-success" value="buscar">
                        </div>
            
                    </form>
                </div>
            </div>
        </div>    
    <div class="col-sm-6 offset-1">
        
    </div>
</div>
</div>
<?php include('footer.php'); ?>
    
    