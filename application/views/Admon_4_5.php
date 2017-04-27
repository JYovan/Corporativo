<!-- configuramos el plugin-->

<div class="row">	
    <div class="col-md-12">
        <?php
        $respuesta = '-';
        foreach ($USUARIOS as $USUARIOS1) {
            if ($USUARIOS1->Id == $User) {
                $respuesta = $USUARIOS1->nombre;
                $indice = $USUARIOS1->Id;
            }
        }
        echo '<h1>' . $respuesta . '</h1>';
        ?>
    </div>

    <?php echo form_open_multipart('controlador/xxx'); ?> 
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title text-center"> Control de pago a terceros y estados de cuenta</h3>
            </div>
            <div class="panel-body">
                <h2 class="text-center">SALDOS AL día DE HOY</h2>
                <hr>
                <div class="col-md-12">
                    <fieldset>
                        <legend>PERIODO DE MOVIMIENTOS</legend>

                        <div class="col-md-6">
                            <label for="">EMPRESA</label>
                            <select id="cmbEmpresa" class="form-control" name="cmbEmpresa">
                                <option></option>
                                <?php
                                foreach ($Directorio as $key => $value) {
                                    print '<option value="' . $value->ID . '">' . $value->NombreC . '</option>';
                                }
                                ?>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="">CUENTA</label>
                            <select id="cmbCuentas" class="form-control" name="cmbCuentas">
                                <option></option>
                                <?php
                                foreach ($Cuentas as $key => $value) {
                                    print '<option value="' . $value->ID . '">BANCO: ' . $value->Banco . ' TITULAR: ' . $value->Titular . ' CUENTA: ' . $value->NoCuenta . '</option>';
                                }
                                ?>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="">FECHA DE INICIO</label>
                            <input class="form-control" type="text" name="FechaInicio" id="datepicker"  value="<?php echo date("d/m/Y") ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="">FECHA DE TÉRMINO</label>
                            <input class="form-control" type="text" name="FechaTermino" id="datepicker2"  value="<?php echo date("d/m/Y") ?>">
                        </div>
                    </fieldset>
                    <br>
                    <div class="col-xs-12 col-sm-12" id="ResultadoCuentas"></div>  
                    <button class="btn btn-lg btn-primary btn-block" type="button" id="consultar" name="consultar" 
                            value="<?php echo $indice; ?>" >Consultar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <button type="button" id="regresar" name="regresar" class="btn btn-primary"  
                onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=82&i=<?php echo $indice ?>'">
            Regresar
        </button>
    </div>
</form>

</div>
<script>
    cli.config.ReporteCuentas();
</script>


