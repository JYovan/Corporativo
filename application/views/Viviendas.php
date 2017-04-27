<!-- configuramos el plugin--> 
<?php
$indice = $_SESSION["ID"];
?>
<div class="row">	
    <div class="col-md-12 margin-15-top">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">MÓDULO DE DESARROLLO INMOBILIARIO</h3>
            </div>
            <?php echo form_open_multipart(base_url() . 'index.php/controlador/Viviendas'); ?> 
            <div class="panel-body">
                <fieldset>
                    <div class="col-md-12">
                        <blockquote> 
                                <br>
                                <input type="radio" value="Viviendas_1" name="ViviendaID" id="ViviendaID" required/>
                                Registro de vivienda
                                <br>
                                <input type="radio" value="Viviendas_2" name="ViviendaID" id="ViviendaID" required/>
                                Agregar documento a expediente de vivienda
                                <br> 
                            <input type="radio" value="Viviendas_3" name="ViviendaID" id="ViviendaID" required/>
                            Prototipos de viviendas
                            <br> 
                            <input type="radio" value="Viviendas_4" name="ViviendaID" id="ViviendaID" required/>
                                Borrar registro de vivienda
                                <br>
                                <input type="radio" value="Viviendas_5" name="ViviendaID" id="ViviendaID" required/>
                                Asignar viviendas a desarrollo
                                </br> 
                        </blockquote>   
                    </div>
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
            <td width="20%" align="right">
                <button type="button" id="salir" name="salir" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Regresar2?i=<?php echo $indice ?>'">Regresar</button>
            </td>
        </tr>
    </table>
</div>


