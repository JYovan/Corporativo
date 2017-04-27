<!-- configuramos el plugin-->
<?php
$indice = $_SESSION["ID"];
?>
<div class="row"> 
    <div class="col-md-12 margin-15-top">   
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title text-center"><span class="fa fa-cog fa-lg"></span> MÓDULO DE TRANSMISIÓN</h3>
                <input  class="form-control" type="hidden" name="user" id="user" value="<?php echo $indice; ?>">
            </div>
            <div class="panel-body">

                <?php echo form_open_multipart(base_url() . 'index.php/controlador/Comercializacion'); ?>  
                <fieldset> 
                    <div class="col-xs-12 col-sm-12">
                        <blockquote>
                            <br> 
                            <?php
                            if (isset($_SESSION["USUARIO"][0]["IdPerfil"]) && $_SESSION["USUARIO"][0]["IdPerfil"] == 1) {
                                ?>
                                <input type="radio" value="COM_5" name="COMID" id="COMID" required/>
                                Transmisión
                                <br> 
                            <?php }
                            ?>
                            <input type="radio" value="COM_8" name="COMID" id="COMID" required/>
                            Transmisiones
                            <br>
                            <?php
                            if (isset($_SESSION["USUARIO"][0]["IdPerfil"]) && $_SESSION["USUARIO"][0]["IdPerfil"] == 1) {
                                ?>
                                <input type="radio" value="COM_9" name="COMID" id="COMID" required/>
                                Actualizar transmisiones
                                <br> 
                            <?php }
                            ?>
                            <input type="radio" value="COM_91" name="COMID" id="COMID" required/>
                            Gráfico de Transmisiones
                            <br>
                            <?php
                            if (isset($_SESSION["USUARIO"][0]["IdPerfil"]) && $_SESSION["USUARIO"][0]["IdPerfil"] == 1) {
                                ?>
                                <input type="radio" value="COM_7" name="COMID" id="COMID" required/>
                                Dispersión
                                <br>
                            <?php }
                            ?>
                            <input type="radio" value="COM_10" name="COMID" id="COMID" required/>
                            Dispersiones
                            <br>
                            <?php
                            if (isset($_SESSION["USUARIO"][0]["IdPerfil"]) && $_SESSION["USUARIO"][0]["IdPerfil"] == 1) {
                                ?>
                                <input type="radio" value="COM_11" name="COMID" id="COMID" required/>
                                Actualizar Dispersión
                                <br>
                            <?php }
                            ?>
                            <input type="radio" value="COM_16" name="COMID" id="COMID" required/>
                            Gráficos de Dispersión
                            <br>
                        </blockquote>   
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <button class="btn btn-lg btn-primary btn-block" type="submit"  id="user" name="user" value="<?php echo $indice; ?>">Continuar <span class="fa fa-arrow-right fa-lg"></span></button>		
                    </div>
                </fieldset>
                </form>
            </div>
        </div>
        <fieldset> 
            <div class="col-md-10"></div>
            <div class="col-md-1">
                <button type="button" id="salir" name="salir" class="btn btn-primary btn-lg"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Regresar2?i=<?php echo $indice ?>'">
                    <span class="fa fa-arrow-left fa-lg"></span> Regresar</button>
            </div>
        </fieldset>
        <!-----------------------------END OPTIONS------------------------------------->
    </div>

</div>
<!--<div class="container">	

    <table width="100%" border="1" bordercolor="#FF6633">
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

                <table width="100%">
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <strong style="color:#FFF">MÓDULO DE TRANSMISIÓN</strong>
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
                            <div class="col-xs-12 col-sm-12">
                                <blockquote>
                                    <br>
                                    <input type="radio" value="COM_5" name="COMID" id="COMID" required/>
                                    Transmisión
                                    <br>
                                    <input type="radio" value="COM_8" name="COMID" id="COMID" required/>
                                    Visualizar transmisiones
                                    <br>
                                    <input type="radio" value="COM_9" name="COMID" id="COMID" required/>
                                    Actualizar transmisiones
                                    <br>
                                    <input type="radio" value="COM_7" name="COMID" id="COMID" required/>
                                    Dispersión
                                    <br>
                                    <input type="radio" value="COM_91" name="COMID" id="COMID" required/>
                                    Gráficos de transmisión
                                    <br>
                                </blockquote>   
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="col-xs-12 col-sm-12">
                                <button class="btn btn-lg btn-primary btn-block" type="submit"  id="user" name="user" value="<?php echo $indice; ?>">Continuar</button>		
                            </div>
                        </td>
                    </tr> 
                </table>   
            </td>
        </tr>
    </table>
</form>-->

<table width="100%">
    <tr>
        <td width="80%">

        </td>
    </tr>
    <tr>
        <td width="20%" align="right">  
        </td>
    </tr>
</table>
<!--</div>-->

