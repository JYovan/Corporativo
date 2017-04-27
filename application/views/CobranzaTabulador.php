<!-- configuramos el plugin-->

<div class="container">	
   <?php
        $indice = $_SESSION["ID"]; 
        ?> 

<?php echo form_open_multipart(base_url().'index.php/ctrlCobranza/do_upload'); ?> 
    <table width="100%" border="1" bordercolor="#FF6633">
        <tr>
            <td>
                <table width="100%">    
                    <tr>
                        <td bgcolor="#ff6600">
                            <strong style="color:#FFF">Tabulador de honorarios por servicios</strong>
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
                        <td bgcolor="#99A79A">
                            <div class="col-md-1 col-xs-12">
                                No.
                            </div>
                            <div class="col-md-1 col-xs-12">
                                Tipo de trámite
                            </div>
                            <div class="col-md-2 col-xs-12">
                                Servicio
                            </div>
                            <div class="col-md-1 col-xs-12">
                                Equivalencia  SMGV
                            </div>
                            <div class="col-md-1 col-xs-12">
                                Tárifa Normal Anual
                            </div>
                            <div class="col-md-1 col-xs-12">
                                Tarifa preferencia 10%
                            </div>
                            <div class="col-md-1 col-xs-12">
                                Tarifa preferencial 30%
                            </div>
                            <div class="col-md-1 col-xs-12">
                                Tarifa preferencial 50%
                            </div>
                            <div class="col-md-1 col-xs-12">
                                Condonación 100% 
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
            <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/ctrlCobranza'">Regresar</button>
        </td>
    </tr>
</table>
</div>


