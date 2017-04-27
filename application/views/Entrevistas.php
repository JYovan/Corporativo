<!-- configuramos el plugin-->

<div class="container">	
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
            </td>
        </tr>
    </table>
    <?php echo form_open_multipart('controlador/Entrevista'); ?> 
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <div class="col-xs-12 col-sm-12">
                    <label for="1" class="control-label">Nombre completo</label><br>		
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-xs-12 col-sm-12">
                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="E0" id="E0" required>		
                </div>
            </td>
        </tr> 
        <tr>
            <td>
                <div class="col-xs-12 col-sm-12">
                    <label for="1" class="control-label">Formación académica</label><br>		
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-xs-12 col-sm-12">
                    <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="E1" id="E1" required>		
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-xs-12 col-sm-12">
                    <label for="2" class="control-label">Habilidades en equipos computacionales y manejo de programas</label><br>		
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-md-12 col-xs-12" align="right">
                    <textarea id="E2" name="E2" rows="3" cols="70%" class="form-control"></textarea>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-xs-12 col-sm-12">
                    <label for="3" class="control-label">Trayectoria en la organización</label><br>		
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-md-12 col-xs-12" align="right">
                    <textarea id="E3" name="E3" rows="3" cols="70%" class="form-control"></textarea>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-xs-12 col-sm-12">
                    <label for="4" class="control-label">Nombre del puesto</label><br>		
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-md-12 col-xs-12" align="right">
                    <div class="col-xs-12 col-sm-12">
                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="E4" id="E4" required>		
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-xs-12 col-sm-12">
                    <label for="5" class="control-label">Ubicación en el corporativo</label><br>		
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-md-12 col-xs-12" align="right">
                    <div class="col-xs-12 col-sm-12">
                        <input  style="text-transform:uppercase" onkeyup="javascript:this.value = this.value.toUpperCase()" class="form-control" type="text" name="E5" id="E5" required>		
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-xs-12 col-sm-12">
                    <label for="6" class="control-label">Objetivo del puesto</label><br>		
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-md-12 col-xs-12" align="right">
                    <textarea id="E6" name="E6" rows="3" cols="70%" class="form-control"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-xs-12 col-sm-12">
                    <label for="7" class="control-label">Metas del puesto</label><br>		
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-md-12 col-xs-12" align="right">
                    <textarea id="E7" name="E7" rows="3" cols="70%" class="form-control"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-xs-12 col-sm-12">
                    <label for="8" class="control-label">Funciones del puesto</label><br>		
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-md-12 col-xs-12" align="right">
                    <textarea id="E8" name="E8" rows="3" cols="70%" class="form-control"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-xs-12 col-sm-12">
                    <label for="9" class="control-label">Actividades del puesto</label><br>		
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-md-12 col-xs-12" align="right">
                    <textarea id="E9" name="E9" rows="3" cols="70%" class="form-control"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-xs-12 col-sm-12">
                    <label for="10" class="control-label">Decisiones que toma</label><br>		
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-md-12 col-xs-12" align="right">
                    <textarea id="E10" name="E10" rows="3" cols="70%" class="form-control"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-xs-12 col-sm-12">
                    <label for="11" class="control-label">Relaciones internas y externas (Con quien y para qué)
                    </label><br>		
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-md-12 col-xs-12" align="right">
                    <textarea id="E11" name="E11" rows="3" cols="70%" class="form-control"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-xs-12 col-sm-12">
                    <label for="12" class="control-label">Documentos que genera o procesa (físicos y electrónicos)
                    </label><br>		
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-md-12 col-xs-12" align="right">
                    <textarea id="E12" name="E12" rows="3" cols="70%" class="form-control"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-xs-12 col-sm-12">
                    <label for="13" class="control-label">Reportes que genera (Frecuencia, para quien y para que)

                    </label><br>		
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-md-12 col-xs-12" align="right">
                    <textarea id="E13" name="E13" rows="3" cols="70%" class="form-control"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-xs-12 col-sm-12">
                    <label for="14" class="control-label">Recursos y Equipamiento que requiere para su trabajo
                    </label><br>		
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-md-12 col-xs-12" align="right">
                    <textarea id="E14" name="E14" rows="3" cols="70%" class="form-control"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-xs-12 col-sm-12">
                    <label for="15" class="control-label">Materiales de apoyo para su trabajo (normatividad, tablas de datos, etc.,) 

                    </label><br>		
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-md-12 col-xs-12" align="right">
                    <textarea id="E15" name="E15" rows="3" cols="70%" class="form-control"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-xs-12 col-sm-12">
                    <label for="16" class="control-label">Prácticas que recomienda para mejorar la actividad 

                    </label><br>		
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-md-12 col-xs-12" align="right">
                    <textarea id="E16" name="E16" rows="3" cols="70%" class="form-control"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-xs-12 col-sm-12">
                    <label for="17" class="control-label">Estrategias que considera para mejorar su desempeño

                    </label><br>		
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-md-12 col-xs-12" align="right">
                    <textarea id="E17" name="E17" rows="3" cols="70%" class="form-control"></textarea>
            </td>
        </tr>
        <tr>
            <td height="27" colspan="2">
                <button class="btn btn-lg btn-primary btn-block" type="submit" id="user" name="user" value="<?php echo $indice; ?>" >Registrar</button>
            </td>
        </tr>
    </table>
    <!--</td>
    </tr>
    </table>-->
</form>
<?php echo form_open_multipart('controlador/Regresar'); ?>     
<table  width="100%">
    <tr>
        <td width="80%">
        </td>
        <td width="20%" align="right">
            <button type="submit" id="user" name="user" class="btn btn-primary" value="<?php echo $indice; ?>">Regresar</button>
        </td>
    </tr>
</table>
</form>
</div>


