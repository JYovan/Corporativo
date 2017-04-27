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

<?php echo form_open_multipart('controlador/FCEmpleados'); ?> 
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">    
                    <tr>
                        <td bgcolor="#ff6600" align="center">
                            <div class="col-xs-12 col-sm-12">
                                <strong style="color:#FFF"> Trayectoria de formación continua </strong>
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
                            <div class="col-xs-12 col-sm-12">
                                <div class="col-md-3 col-xs-6">
                                    Modalidad de formación:
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <select class="form-control" id="Modalidad" name="Modalidad"  required>
                                        <option value="">Selecciona</option>
                                        <option value="Conferencia">Conferencia</option>
                                        <option value="Coloquio">Coloquio</option>
                                        <option value="Congreso">Congreso</option>
                                        <option value="Curso">Curso</option>
                                        <option value="Diplomado">Diplomado</option>
                                        <option value="Foro">Foro</option>
                                        <option value="Jornada">Jornada</option>
                                        <option value="Mesa redonda">Mesa redonda</option>
                                        <option value="Taller">Taller</option>
                                        <option value="Seminario">Seminario</option>
                                        <option value="Simposium">Simposium</option>
                                    </select>
                                    </br>
                                </div>   
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
                            <div class="col-md-6 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    Nombre del programa que cursó:
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Programa" id="Programa" required="required" >
                                    </br>
                                </div>    
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    Nombre de la institución que le impartió:
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="Institucion" id="Institucion" required="required" >
                                    </br>
                                </div>    
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
                            <div class="col-md-3 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    Fecha en que inició el curso:
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  value="<?php echo date("d/m/Y") ?>" class="form-control" type="text" name="FechaInicio" id="datepicker" required="required" >
                                    </br>
                                </div>    
                            </div>
                            <div class="col-md-3 col-xs-12">
                                <div class="col-md-12 col-xs-12">
                                    Fecha en que concluyó el curso:
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input  value="<?php echo date("d/m/Y") ?>" class="form-control" type="text" name="FechaTermino" id="datepicker2" required="required" >
                                    </br>
                                </div>    
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
                            <div class="col-xs-12 col-sm-12">
                                <button class="btn btn-lg btn-primary btn-block" type="submit" id="user" name="user" value="<?php echo $indice; ?>" >Registrar</button>
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
    </tr>
    <tr>
        <td width="20%" align="right">
            <button type="button" id="regresar" name="regresar" class="btn  btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=85&i=<?php echo $indice ?>'">Regresar</button>
        </td>
    </tr>
</table> 
</div>

