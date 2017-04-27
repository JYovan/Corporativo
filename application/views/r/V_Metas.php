<!-- configuramos el plugin-->
<?php
$indice = $_SESSION["ID"];
?>
<div class="row">
    <div class="col-md-12 margin-15-top">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">METAS</h3>
            </div>
            <?php echo form_open_multipart(base_url() . 'index.php/controlador/Confirmar'); ?> 
            <div class="panel-body">
                <fieldset> 
                    <div class="col-xs-12 col-sm-12">
                        <?php foreach ($Metas as $datos1) { ?>
                            <div class="col-xs-12 col-sm-12">  
                                </br>
                                <?php echo "Meta " . $datos1->ID; ?>
                            </div>
                            <div class="col-xs-12 col-sm-12"> 
                                <?php echo $datos1->Descripcion; ?>
                                <button type="button" id="Meta" name="Meta" class="btn btn-lg btn-primary btn-block"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/AgregaEvidencia?M=<?php echo $datos1->ID ?>&i=<?php echo $indice ?>'">Agregar evidencias</button>
                                </br>
                            </div>        
                        <?php } ?>
                    </div>
                </fieldset>
            </div>
            </form>
        </div>
    </div>
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td align="center">
                            <div class="col-xs-12 col-sm-12" align="left">
                                </br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF">Metas</strong>		
                            </div>
                        </td>
                    </tr>    
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                </br>		
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td> 	
                            <div class="col-xs-12 col-sm-12">  
                                </br>
                            </div>
                        </td>
                    </tr>
                </table>   
            </td>
        </tr>
    </table>
</form>

<table width="100%">    
    <tr>
        <td width="80%">    
        </td>
        <td width="20%" align="right">    
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=10&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>


