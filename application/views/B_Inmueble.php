<!-- configuramos el plugin-->
<?php
$indice = $_SESSION["ID"];
?>
<div class="row">	
    <div class="col-md-12 margin-15-top">

    </div>
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">MÓDULO DE BIENES INMUEBLES</h3>
            </div>
            <?php echo form_open_multipart(base_url() . 'index.php/controlador/BInmueble'); ?> 
            <div class="panel-body">
                <fieldset>
                    <div class="col-md-12">
                        <blockquote>
                                <br>
                                <input type="radio" value="BInmueble_1" name="BInmuebleID" id="BInmuebleID" required/>
                                Registro de inmueble 
                                <br>
                                <input type="radio" value="BInmueble_2" name="BInmuebleID" id="BInmuebleID" required/>
                                Datos de compraventa de inmueble
                                <br>
                                <input type="radio" value="BInmueble_7" name="BInmuebleID" id="BInmuebleID" required/>
                                Datos de fideicomiso
                                <br>
                                <input type="radio" value="BInmueble_3" name="BInmuebleID" id="BInmuebleID" required/>
                                Actualización del registro de inmueble 
                                <br>
                                <input type="radio" value="BInmueble_4" name="BInmuebleID" id="BInmuebleID" required/>
                                Agregar documento a expediente de inmueble
                                <br>
                                <input type="radio" value="BInmueble_6" name="BInmuebleID" id="BInmuebleID" required/>
                                Borrar registro de inmueble
                                <br>
                                <input type="radio" value="BInmueble_5" name="BInmuebleID" id="BInmuebleID" required/>
                                Expediente de inmueble
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
                <td width="80%">

                </td>
                <td width="20%" align="right">
                    <button type="button" id="salir" name="salir" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Regresar2?i=<?php echo $indice ?>'">Regresar</button>
            </td>
        </tr>
    </table>
</div>


