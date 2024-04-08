<section>
    <div class="col-md-4">
        <h3 align="center">PROGRAMACIÓN DE LUNES A VIERNES</h3>

        <table class="table table-responsive-sm" id="table_id">

            <thead class="thead-colored thead-primary">
                <tr>
                    <td>HORARIO</td>
                    <td>PROGRAMACIÓN</td>
                    
                     </tr>
            </thead>
            <tbody>
                <?php foreach( $pro_lav as $li){?>
                <tr>
                    <td><?php echo $li->hora_guion?></td>
                    <td><?php echo $li->descrfipcion_guion?></td>
                    
                </tr>
                <?php }?>
            </tbody>

        </table>
    </div>

    <div class="col-md-4">
        <h3 align="center">PROGRAMACIÓN DE SABADOS</h3>

        <table class="table table-responsive-sm" id="table_id">

            <thead class="thead-colored thead-primary">
                <tr>
                <td>HORARIO</td>
                    <td>PROGRAMACIÓN</td>
                    </tr>
            </thead>
            <tbody>
            <?php foreach( $pro_s as $li){?>
                <tr>
                    <td><?php echo $li->hora_guion?></td>
                    <td><?php echo $li->descrfipcion_guion?></td>
                    
                </tr>
                <?php }?>

            </tbody>

        </table>
    </div>
    <div class="col-md-4">
        <h3 align="center">PROGRAMACIÓN DE DOMINGOS</h3>

        <table class="table table-responsive-sm" id="table_id">

            <thead class="thead-colored thead-primary">
                <tr>
                <td>HORARIO</td>
                    <td>PROGRAMACIÓN</td>
                    </tr>
            </thead>
            <tbody>
            <?php foreach( $pro_d as $li){?>
                <tr>
                    <td><?php echo $li->hora_guion?></td>
                    <td><?php echo $li->descrfipcion_guion?></td>
                    
                </tr>
                <?php }?>

            </tbody>

        </table>
    </div>
</section>


    
<br>    
<br>    
<br>    
<br>    
<br>    
<br>    
<br>    