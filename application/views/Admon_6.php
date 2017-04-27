<!-- configuramos el plugin-->
<?php
$indice = $_SESSION["ID"];
?>
<div class="row">	
    <div class="col-md-12 margin-15-top">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Administración de unidades de transporte</h3>
            </div>
            <?php echo form_open_multipart(base_url() . 'index.php/controlador/Admon'); ?>  
            <div class="panel-body">
                <fieldset>
                    <div class="col-md-12">
                        <blockquote> 
                            <?php
                               ?>
                                <br>
                                <input type="radio" value="A61" name="SegSocID" id="SegSocID" required/>
                                Registro de unidades de transporte 
                                <br>
                                <input type="radio" value="A62" name="SegSocID" id="SegSocID" required/>
                                Control de mantenimiento
                                <br>
                                <input type="radio" value="A63" name="SegSocID" id="SegSocID" required/>
                                Control de verificaciones
                                <br>
                                <input type="radio" value="A64" name="SegSocID" id="SegSocID" required/>
                                Informe de accidentes y daños
                                <br>
                                <input type="radio" value="A65" name="SegSocID" id="SegSocID" required/>
                                Solicitud de transporte
                                <br>
                                <input type="radio" value="A66" name="SegSocID" id="SegSocID" required/>
                                Aprobación de transporte
                                <br>
                                <?php
                            ?>
                            <input type="radio" value="A67" name="SegSocID" id="SegSocID" required/>
                            Ver estado de solictudes de transporte
                            <br>
                            <input type="radio" value="A68" name="SegSocID" id="SegSocID" required/>
                            Ver estado de las unidades de transporte
                            <br>
                        </blockquote>   
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-lg btn-primary btn-block" type="submit"  id="user" name="user" value="<?php echo $indice; ?>">Continuar</button>		
                    </div>
                </fieldset>
            </div>
            </form>
        </div>
    </div> 
    <table width="100%">
        <tr>
            <td width="20%" align="right">  
                <button type="button" id="salir" name="salir" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Regresar2?i=<?php echo $indice ?>'">Regresar</button>
            </td>
        </tr>
    </table>
</div>

