<!-- configuramos el plugin-->
<?php
$indice = $_SESSION["ID"];
?>
<div class="row">	
    <div class="col-md-12 margin-15-top">  
        <!---------------------------------------------------------------------------------------------------------------------->
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title text-center">Módulo de Contabilidad</h3>
            </div>
            <?php echo form_open_multipart(base_url() . 'index.php/controlador/Contabilidad'); ?> 
            <div class="panel-body">
                <div class="col-xs-12 col-sm-12">
                    <blockquote>
                        <?php
                        if (isset($_SESSION["USUARIO"][0]["IdPerfil"]) && $_SESSION["USUARIO"][0]["IdPerfil"] == 1) {
                            ?>
                            <br>
                            <input type="radio" value="Cont9" name="ContabilidadID" id="ContabilidadID" required/>
                            Agregar documento a expediente de trámites de la empresa 
                            <br>
                        <?php } ?>
                        <input type="radio" value="Cont0" name="ContabilidadID" id="ContabilidadID" required/>
                        Expediente de trámites  de la empresa 
                        <br>

                        <?php
                        if (isset($_SESSION["USUARIO"][0]["IdPerfil"]) && $_SESSION["USUARIO"][0]["IdPerfil"] == 1) {
                            ?>
                            <input type="radio" value="Cont1" name="ContabilidadID" id="ContabilidadID" required/>
                            Revisión del expediente contable mensual  de la empresa
                            <br>
                            <input type="radio" value="Cont2" name="ContabilidadID" id="ContabilidadID" required/>
                            Emisión de balanza general
                            <br>
                            <input type="radio" value="Cont6" name="ContabilidadID" id="ContabilidadID" required/>
                            Emisión de balanza de comprobación de pagos
                            <br>
                            <input type="radio" value="Cont3" name="ContabilidadID" id="ContabilidadID" required/>
                            Emisión de estado de resultados 
                            <br>

                            <input type="radio" value="Cont7" name="ContabilidadID" id="ContabilidadID" required/>
                            Declaración Anual
                            <br>
                            <input type="radio" value="Cont8" name="ContabilidadID" id="ContabilidadID" required/>
                            Declaración DIOT 
                            <br>
                        <?php } ?>
                        <input type="radio" value="Cont4" name="ContabilidadID" id="ContabilidadID" required/>
                        Trámites contables en proceso
                        <br>
                        <input type="radio" value="Cont5" name="ContabilidadID" id="ContabilidadID" required/>
                        Trámites contables concluidos 
                        <br>
                        <input type="radio" value="Cont10" name="ContabilidadID" id="ContabilidadID" required/>
                        Trámites
                        <br>
                    </blockquote>   
                </div>
                <div class="col-xs-12 col-sm-12" align="left">
                    <button class="btn btn-lg btn-primary btn-block" type="submit"  id="user" name="user" value="<?php echo $indice; ?>">Continuar</button>
                </div>
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


