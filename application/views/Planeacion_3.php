<!-- configuramos el plugin-->

<div class="container">	
    <table width="100%">
        <tr>
            <td>
                <?php
                $respuesta = '-';
                foreach ($USUARIOS as $USUARIOS1) {
                    if ($USUARIOS1->Id == $User) {
                        $respuesta = $USUARIOS1->nombre;
                        $indice = $USUARIOS1->Id;
                    }
                }
                echo $respuesta;
                ?>
            </td>
        </tr>
    </table>

    <?php echo form_open_multipart('controlador3/Planeacion3'); ?> 

    <script type="text/javascript">
        var myPicker1 = new jscolor.color(document.getElementById("myField1"), {})
        myPicker1.fromString('517C87')   // now you can access API via 'myPicker' variable
    </script> 

    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <strong style="color:#FFF"> Registro técnico del proyecto de fabricación </strong>
                        </td>
                    </tr>   
                    <tr>
                        <td>
                            <div class="col-md-12 col-xs-12">
                                </br>		
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td> 
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Proyecto</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12">
                                    <select class="form-control" id="Proyecto" name="Proyecto"   required="required">
                                        <option value="">Selecciona</option>
                                        <?php
                                        foreach ($Proyecto as $Proyecto1) {
                                            foreach ($TipoP as $Tipo1) {
                                                if ($Tipo1->id_tipo == $Proyecto1->Tipo) {
                                                    $Resp = $Tipo1->dsc_tipo;
                                                }
                                            }
                                            ?>                    
                                            <option value="<?php echo $Proyecto1->ID; ?>"><?php echo $Resp . " " . $Proyecto1->Numero . " " . $Proyecto1->Proyecto; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td> 
                            <div class="col-md-4 col-xs-12">	
                                <div class="col-md-12 col-xs-12">
                                    <label for="1" class="control-label">Orden</label><br>
                                </div>  
                                <div class="col-md-12 col-xs-12" id="Ordenes">
                                    <select class="form-control" id="Orden" name="Orden"   required="required">
                                        <option value="">Selecciona</option>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <blockquote>
                                    <br>
                                    <input type="radio" value="1" name="Procedimiento" id="Procedimiento" required/> Tejido
                                    <br>
                                    <input type="radio" value="2" name="Procedimiento" id="Procedimiento" required/> Lavado y teñido
                                    <br>
                                    <input type="radio" value="3" name="Procedimiento" id="Procedimiento" required/> Costura
                                    <br>
                                    <input type="radio" value="4" name="Procedimiento" id="Procedimiento" required/> Empaque
                                    <br>
                                    <input type="radio" value="5" name="Procedimiento" id="Procedimiento" required/> Entrega
                                    <br>
                                </blockquote>   
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <button class="btn btn-lg btn-primary btn-block" type="submit" id="user" name="user" value="<?php echo $indice; ?>" >Continuar</button>
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
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador3/Menu?ID=27&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table>
</div>
<script>
    cli.config.OrdenesSolicitadasB();
</script>

