 
<div id="" class="container">
    <form id="frmLogin" name="frmLogin">
        <div class="row margin-15-top"> 
            <fieldset> 
                <div class="col-md-3" align="center" > </div>
                <div class="col-md-6" align="center" >  
                    <div id="vLogin" class="">
                        <div id="form-login" class="well shadow-effect zoomInDown"> 

                            <h2 class="text-white">BIENVENIDO</h2> 
                            <div class="form-group has-primary glow-blue">
                                <input type="text" id="txtUsr" name="login" placeholder="USUARIO" required="" class="form-control input-lg chat-input glow-blue"/>
                            </div>
                            <div class="form-group has-primary glow-blue">
                                <input type="password"  id="txtPwd" name="password" placeholder="CONTRASEÑA" required="" class="form-control input-lg chat-input" />
                            </div> 
                            <div class="">  
                                <label class="text-white">
                                    <input id="chkRobot" name="chkRobot" type="checkbox" required="" class="option-input-check checkbox"> No soy un robot
                                </label>  
                            </div>
                            <div class="">
                                <span class="group-btn">     
                                    <button id="btnReset" type="reset" class="btn btn-danger btn3d btn-lg"  data-toggle="tooltip" data-placement="top" title="" data-original-title="BORRAR"><i class="fa fa-exclamation faa-vertical fa-2x animated"></i></button>  
                                    <button id="btnOnLogIn" type="button" class="btn btn-success btn3d btn-lg"  data-toggle="tooltip" data-placement="top" title="" data-original-title="ACCEDER"><span class="fa fa-check faa-horizontal fa-2x animated"></span></button>  
                                </span>
                                <br>
                                <div id="msgOnLogIn"><?php
                                    if (isset($_GET['STATUS'])) {
                                        $IDESTATUS = $_GET['STATUS'];
                                        switch ($IDESTATUS) {
                                            case 0:
                                                $msg = '<br><div class="alert alert-dismissible alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>';
                                                $msg .= 'USUARIO O CONTRASEÑA INCORRECTOS';
                                                $msg .= '</div>';
                                                print $msg;
                                                break;

                                            default:
                                                break;
                                        }
                                    }
                                    ?></div>
                            </div>

                            <p class="span6 text-white" align="center">
                                LOMA DEL PEDREGAL #417, COL. LOMAS DEL CAMPESTRE<br>
                                LEÓN GUANAJUATO, MÉXICO. <br>
                                TEL. +52 (477) 779 72 21   &nbsp; | &nbsp;  +52 (477) 779 72 27
                            </p> 
                        </div> 
                    </div>
                </div> 
            </fieldset>
        </div>    
    </form>
</div> 
<script>
    $(document).ready(function () {
        
        var btnLogin = $("#frmLogin #btnOnLogIn");
        var txtUsr = $("#frmLogin #txtUsr");
        var txtPwd = $("#frmLogin #txtPwd");
        
        btnLogin.click(function (e) {
            var frm = $("#frmLogin");
            console.log(frm)
            if (txtUsr.val() !== '' && txtPwd.val() !== '') {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "ESPERE.."
                });
                btnLogin.addClass("disabled").find("span").removeClass("fa-sign-in").addClass("fa-cog fa-spin");
                $.ajax({
                    url: base_url + 'index.php/ctrlsesion/onLogIn',
                    type: "POST",
                    data: frm.serialize()
                }).done(function (data, x, jq) {
                    console.log(data);
                    if (parseInt(data) === 1) {
                        location.href = base_url + 'index.php/ctrlsesion/onLogIn';
                    } else {
                        onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'USUARIO O CONTRASEÑA INVÁLIDO.', 'danger');
                    }
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                    btnLogin.removeClass("disabled").find("span").removeClass("fa-cog fa-spin").addClass("fa-check");
                    console.log('PROCESADO LOGIN')
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'USUARIO O CONTRASEÑA INVÁLIDO.', 'danger');
                frm.effect("shake");
            }
        });
        
//        $("body").vegas({
//            slides: [
//                {src: base_url + "imagenes/11.jpg"},
//                {src: base_url + "imagenes/00.jpg"},
//                {src: base_url + "imagenes/01.jpg"},
//                {src: base_url + "imagenes/02.jpg"},
//                {src: base_url + "imagenes/03.jpg"},
//                {src: base_url + "imagenes/04.jpg"},
//                {src: base_url + "imagenes/05.jpg"},
//                {src: base_url + "imagenes/06.jpg"},
//                {src: base_url + "imagenes/07.jpg"},
//                {src: base_url + "imagenes/08.jpg"},
//                {src: base_url + "imagenes/09.jpg"},
//                {src: base_url + "imagenes/10.jpg"}
//            ],
//            animation: 'random',
//            overlay: base_url + 'js/vegas/overlays/03.png'
//        });


    });
</script>