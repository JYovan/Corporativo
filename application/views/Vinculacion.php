<!-- configuramos el plugin-->
<?php
$indice = $_SESSION["ID"];
?>  
<div class="row">
    <div class="col-md-12 margin-15-top">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title text-center" >MÓDULO DE VINCULACIÓN</h3>
            </div>
            <?php echo form_open_multipart(base_url() . 'index.php/controlador/Vinculacion'); ?> 
            <div class="panel-body">
                <fieldset>
                    <h1 class="text-center">ESTANCIAS PROFESIONALES LABORALES</h1>
                    <hr>
                    <blockquote>
                        <br> 
                        <div class="radio">
                            <label><input type="radio" value="E1" name="Vinculacion" id="Vinculacion" required /> Proyectos de Estancias Laborales
                            </label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" value="E2" name="Vinculacion" id="Vinculacion" required/>
                        Solicitud de Estancia Laboral </label>
                        </div> 
                        <div class="radio">
                            <label>
                        <input type="radio" value="E3" name="Vinculacion" id="Vinculacion" required/>
                        Aprobar Estancia Laboral</label>
                        </div>  
                        <div class="radio">
                            <label>
                        <input type="radio" value="E4" name="Vinculacion" id="Vinculacion" required/>
                        Visualizador de Histórico de Estancias Laborales </label>
                        </div> 
                    </blockquote>  

                    <h1 class="text-center">FORMACIÓN CONTINUA</h1>
                    <hr>
                    <blockquote>
                        <br>
                        <input type="radio" value="F1" name="Vinculacion" id="Vinculacion" required/>
                        Temas de Impartición
                        <br>
                        <input type="radio" value="F2" name="Vinculacion" id="Vinculacion" required/>
                        Modalidades de Formación
                        <br>
                        <input type="radio" value="F3" name="Vinculacion" id="Vinculacion" required/>
                        Registro de Impartición de Formación Continua
                        <br>
                        <input type="radio" value="F4" name="Vinculacion" id="Vinculacion" required/>
                        Aprobación de la Formación Continua
                        <br>
                        <input type="radio" value="F5" name="Vinculacion" id="Vinculacion" required/>
                        Evaluación de la Formación Continua
                    </blockquote>
                    <h1 class="text-center">OPORTUNIDADES DE EMPLEO</h1>
                    <hr>
                    <blockquote>
                        <br>
                        <input type="radio" value="O1" name="Vinculacion" id="Vinculacion" required/>
                        Solicitar Recursos Humanos
                        <br>
                        <input type="radio" value="O3" name="Vinculacion" id="Vinculacion" required/>
                        Editar Solicitudes de Recursos Humanos
                        <br>
                    </blockquote>  
                    <h1 class="text-center">SOLICITUDES DE EMPLEO RECIBIDAS</h1>
                    <hr> 
                    <blockquote>
                        <br>
                        <input type="radio" value="S2" name="Vinculacion" id="Vinculacion" required/>
                        Ver Solicitud en Línea
                        <br>
                        <input type="radio" value="S1" name="Vinculacion" id="Vinculacion" required/>
                        Ver Registros Recibidos
                    </blockquote>  
                    <h1 class="text-center">APOYO A LA SOCIEDAD</h1>
                    <hr> 
                    <blockquote>
                        <br>
                        <input type="radio" value="A1" name="Vinculacion" id="Vinculacion" required/>
                        Registro de apoyo
                        <br>
                        <input type="radio" value="A2" name="Vinculacion" id="Vinculacion" required/>
                        Ver Solicitudes de Apoyo
                    </blockquote> 

                    <div class="col-md-12 col-sm-12 "align="center">  
                        <button class="btn btn-lg btn-success  btn-lg" type="submit"  id="user" name="user" value="<?php echo $indice; ?>">Continuar</button>
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

