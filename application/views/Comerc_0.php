<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

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

        <table width="100%">
            <tr>
                <td bgcolor="#ff6600" align="left">
                    <br />
                </td>
            </tr>
        </table>  


        <?php echo form_open_multipart('controlador/PreciosCementoPDF'); ?>     
        <table  width="100%">    
            <tr>
                <td width="100%">
                    <div class="col-md-12 col-xs-12">        
                        <button class="btn btn-lg btn-primary btn-block" type="submit"  id="ID" name="ID" >Ver PDF</button>		
                    </div>
                </td>
            </tr>
        </table>
        </form> 


        <table width="100%">    
            <tr>
                <td width="80%">    
                </td>
                <td width="20%" align="right">    
                    <button type="button" id="regresar" name="regresar" class="btn btn-primary"  onclick="location.href = '<?php echo base_url(); ?>index.php/controlador/Menu?ID=21&i=<?php echo $indice ?>'">Regresar</button>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
<script>

</script>