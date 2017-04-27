<!-- configuramos el plugin-->
<?php
$indice = $_SESSION["ID"];
?>
<div class="row">	
    <div class="col-md-12 margin-15-top">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Control de artículos y materiales de oficina</h3>
            </div>
            <?php echo form_open_multipart(base_url() . 'index.php/controlador/Admon'); ?>  
            <div class="panel-body">
                <blockquote>
                    <br>
                    <input type="radio" value="A31" name="SegSocID" id="SegSocID" required/>
                    Registro de artículos y materiales 
                    <br>
                    <input type="radio" value="A32" name="SegSocID" id="SegSocID" required/>
                    Control de salidas de artículos y materiales
                    <br>
                    <input type="radio" value="A34" name="SegSocID" id="SegSocID" required/>
                    Visualización de entradas de artículos y materiales 
                    <br>
                    <input type="radio" value="A33" name="SegSocID" id="SegSocID" required/>
                    Visualización de asignación de artículos y materiales
                    <br>
                </blockquote>   

                <div class="col-xs-12 col-sm-12">
                    <button class="btn btn-lg btn-primary btn-block" type="submit"  id="user" name="user" value="<?php echo $indice; ?>">Continuar</button>		
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

<table width="100%">
    <tr>
        <td width="80%">

        </td>
    </tr>
    <tr>
        <td width="20%" align="right">  
            <button type="button" id="salir" name="salir" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=26&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table> 

