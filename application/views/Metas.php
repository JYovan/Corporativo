<!-- configuramos el plugin-->
<?php
$indice = $_SESSION["ID"];
?>
<div class="row">
    <div class="col-md-12 margin-15-top">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">MÓDULO DE INDICADORES</h3>
            </div>
            <?php echo form_open_multipart(base_url() . 'index.php/controlador/View_Metas'); ?>  
            <div class="panel-body">
                <fieldset>
                    <div class="col-md-12">
                        <blockquote>
                            <br>
                            <input type="radio" value="3" name="ID" id="ID" required/>
                            Registro de Meta<br>
                            <input type="radio" value="1" name="ID" id="ID" required/>
                            Visualización de Registro de Meta<br>
                            <input type="radio" value="2" name="ID" id="ID" required/>
                            Visualización de Metas de la Organización<br>
                            <input type="radio" value="4" name="ID" id="ID" required/>
                            Edición de Metas de la Organización
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
        </tr>
        <tr>
            <td width="20%" align="right">  
                <button type="button" id="salir" name="salir" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Regresar2?i=<?php echo $indice ?>'">Regresar</button>
            </td>
        </tr>
    </table>
</div>

