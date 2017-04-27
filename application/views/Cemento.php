<!-- configuramos el plugin-->
<?php
$indice = $_SESSION["ID"];
?>
<div class="row"> 
    <div class="col-md-12 margin-15-top">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title text-center"><span class="fa fa-bar-chart fa-lg fa-2x"></span> MÓDULO DE PRECIO DEL CEMENTO EN EL MERCADO</h3> 
                <input  class="form-control" type="hidden" name="user" id="user" value="<?php echo $indice; ?>">
            </div> 
            <?php echo form_open_multipart(base_url().'index.php/controlador/Cemento'); ?> 
            <div class="panel-body">
                <blockquote>
                    <br> 
                    <input type="radio" value="Cemento_1" name="CementoID" id="CementoID" required/>
                    Comercializadores de cemento
                    <br>
                    <input type="radio" value="Cemento_2" name="CementoID" id="CementoID" required/>
                    Precios del cemento
                    <br>
                    <?php
                    if (isset($_SESSION["USUARIO"][0]["IdPerfil"]) && $_SESSION["USUARIO"][0]["IdPerfil"] == 1) {
                        ?>
                    <input type="radio" value="Cemento_3" name="CementoID" id="CementoID" required/>
                    Visualizador de directorio de comercializadores del cemento
                    <br>
                    <input type="radio" value="Cemento_4" name="CementoID" id="CementoID" required/>
                    Visualización de precios del cemento
                    <br>
                    <?php }
                    ?>
                    <input type="radio" value="Cemento_5" name="CementoID" id="CementoID" required/>
                    Gráfico de precios del cemento
                    <br>
                </blockquote>
                <button class="btn btn-lg btn-primary btn-block" type="submit"  id="user" name="user" value="<?php echo $indice; ?>">Continuar</button>

            </div>
            </form>
        </div>
    </div>
    <table width="100%">
        <tr>
            <td width="80%">

            </td>
            <td width="20%" align="right">
                <button type="button" id="salir" name="salir" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Regresar2?i=<?php echo $indice ?>'">Regresar</button>
            </td>
        </tr>
    </table>
</div>


