<!-- configuramos el plugin-->
<?php
$indice = $_SESSION["ID"];
?>
<div class="row">	
    <div class="col-md-12 margin-15-top">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Control de personal</h3>
            </div>
            <?php echo form_open_multipart(base_url() . 'index.php/controlador/Admon'); ?>  
            <div class="panel-body">
                <fieldset>
                    <div class="col-md-12">
                        <blockquote>
                            <br>
                            <input type="radio" value="A71" name="SegSocID" id="SegSocID" required/>
                            DATOS DEL EMPLEADO
                            <br>
                            
                        <?php
                        if (isset($_SESSION["USUARIO"][0]["IdPerfil"]) && $_SESSION["USUARIO"][0]["IdPerfil"] == 1) {
                            ?>
                            <input type="radio" value="A72" name="SegSocID" id="SegSocID" required/>
                            Actualizar información de personal
                            <br>
                            <input type="radio" value="A73" name="SegSocID" id="SegSocID" required/>
                            Trayectoria de formación continua
                            <br>
                            <input type="radio" value="A74" name="SegSocID" id="SegSocID" required/>
                            Trayectoria laboral en la empresa
                            <br>
                            <input type="radio" value="A75" name="SegSocID" id="SegSocID" required/>
                            Valoraciones del estado de salud
                            <br>
                        <?php 
                        
                        } 
                        ?>
                            <input type="radio" value="A76" name="SegSocID" id="SegSocID" required/>
                            Remuneraciones
                            <br>
                            
                            
                        <?php
                        if (isset($_SESSION["USUARIO"][0]["IdPerfil"]) && $_SESSION["USUARIO"][0]["IdPerfil"] == 1) {
                            ?>
                            <input type="radio" value="A77" name="SegSocID" id="SegSocID" required/>
                            Solicitud de permisos o incapacidades
                            <br>
                        <?php 
                        
                        } 
                        ?>
                            <input type="radio" value="A78" name="SegSocID" id="SegSocID" required/>
                            Permisos e incapacidades 
                            <br>
                            
                            
                        <?php
                        if (isset($_SESSION["USUARIO"][0]["IdPerfil"]) && $_SESSION["USUARIO"][0]["IdPerfil"] == 1) {
                            ?>
                            <input type="radio" value="A79" name="SegSocID" id="SegSocID" required/>
                            Ver aprobaciones de permisos o incapacidades
                            <br>
                            <input type="radio" value="A79a" name="SegSocID" id="SegSocID" required/>
                            Agregar documento de expediente
                            <br>
                            <input type="radio" value="A79d" name="SegSocID" id="SegSocID" required/>
                            Cambiar contraseña
                            <br>
                            <input type="radio" value="A79c" name="SegSocID" id="SegSocID" required/>
                            Ver registro de empleado
                            <br> 
                            <input type="radio" value="A79e" name="SegSocID" id="SegSocID" required/>
                            Dar de baja empleado
                            <br> 
                        <?php } ?>
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