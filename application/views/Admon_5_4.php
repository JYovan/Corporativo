<!-- configuramos el plugin-->
<?php
$indice = $_SESSION["ID"];
?>
<div class="row">	
    <?php echo form_open_multipart(base_url() . 'index.php/controlador/Admon'); ?>  
    <div class="col-md-12 margin-15-top">
    </div>
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">CONTROL DE PROVEEDORES</h3>
            </div>
            <div class="panel-body">
                <blockquote>
                    <br>
                    <input type="radio" value="A541" name="SegSocID" id="SegSocID" required/>
                    Agregar material, producto o servicio
                    <br>
                    <input type="radio" value="A544" name="SegSocID" id="SegSocID" required/>
                    Actualizar material, producto o servicio 
                    <br>
                    <input type="radio" value="A542" name="SegSocID" id="SegSocID" required/>
                    Precios por material, producto o servicio
                    <br>
                    <input type="radio" value="A543" name="SegSocID" id="SegSocID" required/>
                    Precios por proveedor
                    <br>
                </blockquote>   
                <button class="btn btn-lg btn-primary btn-block" type="submit"  id="user" name="user" value="<?php echo $indice; ?>">Continuar</button>
            </div>
        </div>
    </div>
</form>

<table width="100%">    
    <tr>
        <td width="80%">    
        </td>
        <td width="20%" align="right">    
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=83&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>

