<!-- configuramos el plugin-->
<?php
$indice = $_SESSION["ID"];
?>
<div class="row">	
    <div class="col-md-12 margin-15-top">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">MÓDULO DE PROYECTO DE DESARROLLO INMOBILIARIO</h3>
            </div>
            <?php echo form_open_multipart(base_url() . 'index.php/controlador2/Desarrollos'); ?>  
            <div class="panel-body">
                <fieldset>
                    <blockquote>
                        <?php
                        if (isset($_SESSION["USUARIO"][0]["IdPerfil"]) && $_SESSION["USUARIO"][0]["IdPerfil"] == 1) {
                            ?>
                            <br>
                            <input type="radio" value="D1" name="DesarrolloID" id="DesarrolloID" required/>
                            Registro de Proyecto de Desarrollo Inmobiliario
                            <br>
                            <input type="radio" value="D2" name="DesarrolloID" id="DesarrolloID" required/>
                            Sembrado Inmobiliario de Manzanas
                            <br>
                            <input type="radio" value="D3" name="DesarrolloID" id="DesarrolloID" required/>
                            Sembrado Inmobiliario de Lotes
                            <br>
                            <input type="radio" value="D4" name="DesarrolloID" id="DesarrolloID" required/>
                            Sembrado Inmobiliario de Viviendas
                            <br>
                            <?php }
                        ?>
                        <input type="radio" value="D5" name="DesarrolloID" id="DesarrolloID" required/>
                        Descripción de Desarrollos
                        <br>
                        <input type="radio" value="D6" name="DesarrolloID" id="DesarrolloID" required/>
                        Distribución de la superficie
                        <br>
                        <?php
                        if (isset($_SESSION["USUARIO"][0]["IdPerfil"]) && $_SESSION["USUARIO"][0]["IdPerfil"] == 1) {
                            ?>
                            <input type="radio" value="D7" name="DesarrolloID" id="DesarrolloID" required/>
                            Actualizar Proyecto de Desarrollo Inmobiliario
                            <br>
                            <input type="radio" value="D8" name="DesarrolloID" id="DesarrolloID" required/>
                            Actualizar Sembrado Inmobiliario de Manzanas
                            <br>
                            <input type="radio" value="D9" name="DesarrolloID" id="DesarrolloID" required/>
                            Actualizar Sembrado Inmobiliario de Lotes
                            <br>
                            <input type="radio" value="D10" name="DesarrolloID" id="DesarrolloID" required/>
                            Actualizar Sembrado Inmobiliario de Viviendas
                            <br>
                            <?php }
                        ?>
                    </blockquote> 
                    <button class="btn btn-lg btn-primary btn-block" type="submit"  id="user" name="user" value="<?php echo $indice; ?>">Continuar</button>		
                </fieldset>
            </div>
            </form>
        </div>
    </div>  

    <table width="100%">
        <tr>
            <td width="80%">
            </td>
        </tr>
        <tr>
            <td width="20%" align="right">  
                <button type="button" id="salir" name="salir" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Regresar2?i=<?php echo $indice ?>'">Regresar</button>
            </td>
        </tr>
    </table>
</div>