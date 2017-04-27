/* global base_url */

// JavaScript Document 
var cli = window.cli || {};

cli.config = (function () {
    return {
        /*
         * 
         * ID_EN_MI_HTML: function () {ReporteCuentas
         * //EVENTO ESTE ES DE UN SELECT, PUEDE SER DE UN TXT O UN OBJETO USANDO JQUERY
         $(document).on('change', '#cliente', function (e) {
         var idcliente = $('#cliente').get(0).value;
         //alert(idcliente);
         //var palabra = $('#palabra').get(0).value;                  
         $('#Tipo_cliente2').load('cambiartipocliente', {idcliente: idcliente});
         $('#Mi_ID').load('MI_METODO_EN_PHP_QUE_RECIBE_POST_O_GET', {MI_VARIABLE_DE_PHP: VALOR});
         });
         * 
         * NOTA: EN EL PHP DEBE DE ESTAR DECLARADO EL FORMULARIO DE LO CONTRARIO NO ENCONTRARA EL METODO QUE SE MANDA A LLAMAR EN EL LOAD
         */
        onCambiarEstado: function () {
            $("#cmbEstado").on('change', function (e) {

            });
        },
        tipocliente: function () {
            $(document).on('change', '#cliente', function (e) {
                var idcliente = $('#cliente').get(0).value;
                //alert(idcliente);
                //var palabra = $('#palabra').get(0).value;                  
                $('#Tipo_cliente2').load('cambiartipocliente', {idcliente: idcliente});
            });
        },
        Subtipocliente: function () {
            $(document).on('change', '#Tipo_cliente', function (e) {
                var idSubcliente = $('#Tipo_cliente').get(0).value;
                //alert(idSubcliente);
                //var palabra = $('#palabra').get(0).value;                  
                $('#SubTipo_cliente2').load('cambiarSubtipocliente', {idSubcliente: idSubcliente});
            });
        },
        Estado: function () {
            $(document).on('change', '#Pais', function (e) {
                var idPais = $('#Pais').get(0).value;
                //alert(idPais);
                //var palabra = $('#palabra').get(0).value;                  
                $('#Estado2').load('cambiarEstado', {idPais: idPais});
            });
        },
        Ciudad: function () {
            $(document).on('change', '#Estado', function (e) {
                var idEstado = $('#Estado').get(0).value;
                //alert(idEstado);
                //var palabra = $('#palabra').get(0).value;                  
                $('#Ciudad2').load('cambiarCiudad', {idEstado: idEstado});
            });
        },
        Informacion: function () {
            $(document).on('change', '#ID_cliente', function (e) {
                var idcliente = $('#ID_cliente').get(0).value;
                //alert(idcliente);
                //var palabra = $('#palabra').get(0).value;  
                if (idcliente !== undefined || idcliente !== null)
                {
                    $('#Informacion').load('cambiarInformacion', {idcliente: idcliente});
                    $('fieldset.hide').removeClass("hide");
                    $('div.panel-danger.hide').removeClass("hide");
                    $("#btnModificarEstatus").removeClass("disabled");
                    $("#btnCalcularImpuestos").removeClass("disabled");
                    $("#btnConsultarInformes").removeClass("disabled");
                    $("#btnNotificar").removeClass("disabled");
                    $("#btnBorrar").removeClass("disabled");
                }
            });
        },
        Informacion2: function () {
            $(document).on('change', '#ID_cliente2', function (e) {
                var idcliente2 = $('#ID_cliente2').get(0).value;
                //alert(idcliente);
                //var palabra = $('#palabra').get(0).value;                  
                $('#Informacion2').load('cambiarInformacion2', {idcliente2: idcliente2});
            });
        },
        Oculto: function () {
            $(document).on('change', '#ID_cliente', function (e) {
                var idcliente = $('#ID_cliente').get(0).value;
                $('#Oculto').load('CambiarOculto', {idcliente: idcliente});
                $('#Oculto2').load('CambiarOculto2', {idcliente: idcliente});
                $('#Oculto3').load('CambiarOculto3', {idcliente: idcliente});
                $('#Oculto4').load('CambiarOculto4', {idcliente: idcliente});
            });
        },
        ISR_R1_1: function () {
            $(document).on('change', '#Ingresosact', function (e) {
                var suma1 = $('#Ingresosact').get(0).value;
                var suma2 = $('#Ingresosant').get(0).value;
                var coeficiente = $('#Coeficiente').get(0).value;
                var perdidas = $('#Perdidas').get(0).value;
                var Pagos = $('#Pagos').get(0).value;
                var ImpuestoB = $('#ImpuestoB').get(0).value;

                var parteact = $('#ParteAct').get(0).value;
                var ieps = $('#IEPS').get(0).value;
                var parterecargos = $('#ParteRecargos').get(0).value;
                var disel = $('#Disel').get(0).value;
                var subsidioEmp = $('#SubsidioEmp').get(0).value;
                var ide = $('#IDE').get(0).value;

                $('#L_Total').load('Suma', {suma1: suma1, suma2: suma2});
                $('#L_Utilidad').load('Utilidad', {suma1: suma1, suma2: suma2, coeficiente: coeficiente});
                $('#L_Base').load('Base', {perdidas: perdidas, suma1: suma1, suma2: suma2, coeficiente: coeficiente});
                $('#L_ISRcausado').load('ISRcausado', {perdidas: perdidas, suma1: suma1, suma2: suma2, coeficiente: coeficiente});
                $('#L_ImpuestoP').load('ImpuestoP', {perdidas: perdidas, suma1: suma1, suma2: suma2, coeficiente: coeficiente});
                $('#L_ImpuestoCargo').load('ImpuestoCargo', {perdidas: perdidas, suma1: suma1, suma2: suma2, coeficiente: coeficiente, Pagos: Pagos, ImpuestoB: ImpuestoB});
                $('#L_CantPagar').load('CantPagar', {perdidas: perdidas, suma1: suma1, suma2: suma2, coeficiente: coeficiente, Pagos: Pagos, ImpuestoB: ImpuestoB, parteact: parteact, ieps: ieps, parterecargos: parterecargos, disel: disel, subsidioEmp: subsidioEmp, ide: ide});
            });
        },
        ISR_R1_2: function () {
            $(document).on('change', '#Ingresosant', function (e) {
                var suma1 = $('#Ingresosact').get(0).value;
                var suma2 = $('#Ingresosant').get(0).value;
                var coeficiente = $('#Coeficiente').get(0).value;
                var perdidas = $('#Perdidas').get(0).value;
                var Pagos = $('#Pagos').get(0).value;
                var ImpuestoB = $('#ImpuestoB').get(0).value;

                var parteact = $('#ParteAct').get(0).value;
                var ieps = $('#IEPS').get(0).value;
                var parterecargos = $('#ParteRecargos').get(0).value;
                var disel = $('#Disel').get(0).value;
                var subsidioEmp = $('#SubsidioEmp').get(0).value;
                var ide = $('#IDE').get(0).value;
                $('#L_Total').load('Suma', {suma1: suma1, suma2: suma2});
                $('#L_Utilidad').load('Utilidad', {suma1: suma1, suma2: suma2, coeficiente: coeficiente});
                $('#L_Base').load('Base', {perdidas: perdidas, suma1: suma1, suma2: suma2, coeficiente: coeficiente});
                $('#L_ISRcausado').load('ISRcausado', {perdidas: perdidas, suma1: suma1, suma2: suma2, coeficiente: coeficiente});
                $('#L_ImpuestoP').load('ImpuestoP', {perdidas: perdidas, suma1: suma1, suma2: suma2, coeficiente: coeficiente});
                $('#L_ImpuestoCargo').load('ImpuestoCargo', {perdidas: perdidas, suma1: suma1, suma2: suma2, coeficiente: coeficiente, Pagos: Pagos, ImpuestoB: ImpuestoB});
                $('#L_CantPagar').load('CantPagar', {perdidas: perdidas, suma1: suma1, suma2: suma2, coeficiente: coeficiente, Pagos: Pagos, ImpuestoB: ImpuestoB, parteact: parteact, ieps: ieps, parterecargos: parterecargos, disel: disel, subsidioEmp: subsidioEmp, ide: ide});
            });
        },
        ISR_R1_3: function () {
            $(document).on('change', '#Coeficiente', function (e) {
                var suma1 = $('#Ingresosant').get(0).value;
                var suma2 = $('#Ingresosact').get(0).value;
                var coeficiente = $('#Coeficiente').get(0).value;
                var perdidas = $('#Perdidas').get(0).value;

                var Pagos = $('#Pagos').get(0).value;
                var ImpuestoB = $('#ImpuestoB').get(0).value;

                var parteact = $('#ParteAct').get(0).value;
                var ieps = $('#IEPS').get(0).value;
                var parterecargos = $('#ParteRecargos').get(0).value;
                var disel = $('#Disel').get(0).value;
                var subsidioEmp = $('#SubsidioEmp').get(0).value;
                var ide = $('#IDE').get(0).value;
                $('#L_Utilidad').load('Utilidad', {suma1: suma1, suma2: suma2, coeficiente: coeficiente});
                $('#L_Base').load('Base', {perdidas: perdidas, suma1: suma1, suma2: suma2, coeficiente: coeficiente});
                $('#L_ISRcausado').load('ISRcausado', {perdidas: perdidas, suma1: suma1, suma2: suma2, coeficiente: coeficiente});
                $('#L_ImpuestoP').load('ImpuestoP', {perdidas: perdidas, suma1: suma1, suma2: suma2, coeficiente: coeficiente});
                $('#L_ImpuestoCargo').load('ImpuestoCargo', {perdidas: perdidas, suma1: suma1, suma2: suma2, coeficiente: coeficiente, Pagos: Pagos, ImpuestoB: ImpuestoB});
                $('#L_CantPagar').load('CantPagar', {perdidas: perdidas, suma1: suma1, suma2: suma2, coeficiente: coeficiente, Pagos: Pagos, ImpuestoB: ImpuestoB, parteact: parteact, ieps: ieps, parterecargos: parterecargos, disel: disel, subsidioEmp: subsidioEmp, ide: ide});
            });
        },
        ISR_R1_4: function () {
            $(document).on('change', '#Pagos', function (e) {
                var suma1 = $('#Ingresosant').get(0).value;
                var suma2 = $('#Ingresosact').get(0).value;
                var coeficiente = $('#Coeficiente').get(0).value;
                var perdidas = $('#Perdidas').get(0).value;

                var Pagos = $('#Pagos').get(0).value;
                var ImpuestoB = $('#ImpuestoB').get(0).value;

                var parteact = $('#ParteAct').get(0).value;
                var ieps = $('#IEPS').get(0).value;
                var parterecargos = $('#ParteRecargos').get(0).value;
                var disel = $('#Disel').get(0).value;
                var subsidioEmp = $('#SubsidioEmp').get(0).value;
                var ide = $('#IDE').get(0).value;
                $('#L_Utilidad').load('Utilidad', {suma1: suma1, suma2: suma2, coeficiente: coeficiente});
                $('#L_Base').load('Base', {perdidas: perdidas, suma1: suma1, suma2: suma2, coeficiente: coeficiente});
                $('#L_ISRcausado').load('ISRcausado', {perdidas: perdidas, suma1: suma1, suma2: suma2, coeficiente: coeficiente});
                $('#L_ImpuestoP').load('ImpuestoP', {perdidas: perdidas, suma1: suma1, suma2: suma2, coeficiente: coeficiente});
                $('#L_ImpuestoCargo').load('ImpuestoCargo', {perdidas: perdidas, suma1: suma1, suma2: suma2, coeficiente: coeficiente, Pagos: Pagos, ImpuestoB: ImpuestoB});
                $('#L_CantPagar').load('CantPagar', {perdidas: perdidas, suma1: suma1, suma2: suma2, coeficiente: coeficiente, Pagos: Pagos, ImpuestoB: ImpuestoB, parteact: parteact, ieps: ieps, parterecargos: parterecargos, disel: disel, subsidioEmp: subsidioEmp, ide: ide});
            });
        },
        ISR_R1_5: function () {
            $(document).on('change', '#ImpuestoB', function (e) {
                var suma1 = $('#Ingresosant').get(0).value;
                var suma2 = $('#Ingresosact').get(0).value;
                var coeficiente = $('#Coeficiente').get(0).value;
                var perdidas = $('#Perdidas').get(0).value;

                var Pagos = $('#Pagos').get(0).value;
                var ImpuestoB = $('#ImpuestoB').get(0).value;

                var parteact = $('#ParteAct').get(0).value;
                var ieps = $('#IEPS').get(0).value;
                var parterecargos = $('#ParteRecargos').get(0).value;
                var disel = $('#Disel').get(0).value;
                var subsidioEmp = $('#SubsidioEmp').get(0).value;
                var ide = $('#IDE').get(0).value;
                $('#L_Utilidad').load('Utilidad', {suma1: suma1, suma2: suma2, coeficiente: coeficiente});
                $('#L_Base').load('Base', {perdidas: perdidas, suma1: suma1, suma2: suma2, coeficiente: coeficiente});
                $('#L_ISRcausado').load('ISRcausado', {perdidas: perdidas, suma1: suma1, suma2: suma2, coeficiente: coeficiente});
                $('#L_ImpuestoP').load('ImpuestoP', {perdidas: perdidas, suma1: suma1, suma2: suma2, coeficiente: coeficiente});
                $('#L_ImpuestoCargo').load('ImpuestoCargo', {perdidas: perdidas, suma1: suma1, suma2: suma2, coeficiente: coeficiente, Pagos: Pagos, ImpuestoB: ImpuestoB});
                $('#L_CantPagar').load('CantPagar', {perdidas: perdidas, suma1: suma1, suma2: suma2, coeficiente: coeficiente, Pagos: Pagos, ImpuestoB: ImpuestoB, parteact: parteact, ieps: ieps, parterecargos: parterecargos, disel: disel, subsidioEmp: subsidioEmp, ide: ide});
            });
        },
        Total: function () {
            $(document).on('change', '#Ingresosact', function (e) {
                var suma1 = $('#Ingresosant').get(0).value;
                var suma2 = $('#Ingresosact').get(0).value;
                //alert(suma2);
                var coeficiente = $('#Coeficiente').get(0).value;
                $('#L_Total').load('Suma', {suma1: suma1, suma2: suma2});
                $('#L_Utilidad').load('Utilidad', {suma1: suma1, suma2: suma2, coeficiente: coeficiente});
            });
        },
        Coeficiente: function () {
            $(document).on('change', '#Coeficiente', function (e) {
                var suma1 = $('#Ingresosant').get(0).value;
                var suma2 = $('#Ingresosact').get(0).value;
                var coeficiente = $('#Coeficiente').get(0).value;
                $('#L_Utilidad').load('Utilidad', {suma1: suma1, suma2: suma2, coeficiente: coeficiente});
            });
        },
        Perdidas: function () {
            $(document).on('change', '#Perdidas', function (e) {
                var perdidas = $('#Perdidas').get(0).value;
                var utilidad = $('#Utilidad').get(0).value;
                $('#L_Base').load('Base', {perdidas: perdidas, utilidad: utilidad});
                $('#L_ISRcausado').load('ISRcausado', {perdidas: perdidas, utilidad: utilidad});
                $('#L_ImpuestoP').load('ImpuestoP', {perdidas: perdidas, utilidad: utilidad});
            });
        },
        Perdidas2: function () {
            $(document).on('change', '#Utilidad', function (e) {
                var perdidas = $('#Perdidas').get(0).value;
                var utilidad = $('#Utilidad').get(0).value;
                $('#L_Base').load('Base', {perdidas: perdidas, utilidad: utilidad});
                $('#L_ISRcausado').load('ISRcausado', {perdidas: perdidas, utilidad: utilidad});
                $('#L_ImpuestoP').load('ImpuestoP', {perdidas: perdidas, utilidad: utilidad});
            });
        },
        ImpuestoCargoA: function () {
            $(document).on('change', '#ImpuestoP', function (e) {
                var ImpuestoP = $('#ImpuestoP').get(0).value;
                var Pagos = $('#Pagos').get(0).value;
                var ImpuestoB = $('#ImpuestoB').get(0).value;
                $('#L_ImpuestoCargo').load('ImpuestoCargo', {ImpuestoP: ImpuestoP, Pagos: Pagos, ImpuestoB: ImpuestoB});
            });
        },
        ImpuestoCargoB: function () {
            $(document).on('change', '#Pagos', function (e) {
                var ImpuestoP = $('#ImpuestoP').get(0).value;
                var Pagos = $('#Pagos').get(0).value;
                var ImpuestoB = $('#ImpuestoB').get(0).value;

                var impuestocargo = $('#ImpuestoCargo').get(0).value;
                var parteact = $('#ParteAct').get(0).value;
                var ieps = $('#IEPS').get(0).value;
                var parterecargos = $('#ParteRecargos').get(0).value;
                var disel = $('#Disel').get(0).value;
                var subsidioEmp = $('#SubsidioEmp').get(0).value;
                var ide = $('#IDE').get(0).value;
                $('#L_ImpuestoCargo').load('ImpuestoCargo', {ImpuestoP: ImpuestoP, Pagos: Pagos, ImpuestoB: ImpuestoB});
                $('#L_CantPagar').load('CantPagar', {impuestocargo: impuestocargo, parteact: parteact, ieps: ieps, parterecargos: parterecargos, disel: disel, subsidioEmp: subsidioEmp, ide: ide});
            });
        },
        ImpuestoCargoC: function () {
            $(document).on('change', '#ImpuestoB', function (e) {
                var ImpuestoP = $('#ImpuestoP').get(0).value;
                var Pagos = $('#Pagos').get(0).value;
                var ImpuestoB = $('#ImpuestoB').get(0).value;

                var impuestocargo = $('#ImpuestoCargo').get(0).value;
                var parteact = $('#ParteAct').get(0).value;
                var ieps = $('#IEPS').get(0).value;
                var parterecargos = $('#ParteRecargos').get(0).value;
                var disel = $('#Disel').get(0).value;
                var subsidioEmp = $('#SubsidioEmp').get(0).value;
                var ide = $('#IDE').get(0).value;
                $('#L_ImpuestoCargo').load('ImpuestoCargo', {ImpuestoP: ImpuestoP, Pagos: Pagos, ImpuestoB: ImpuestoB});
                $('#L_CantPagar').load('CantPagar', {impuestocargo: impuestocargo, parteact: parteact, ieps: ieps, parterecargos: parterecargos, disel: disel, subsidioEmp: subsidioEmp, ide: ide});
            });
        },
        ParteAct1: function () {
            $(document).on('change', '#ParteAct', function (e) {
                var suma1 = $('#Ingresosant').get(0).value;
                var suma2 = $('#Ingresosact').get(0).value;
                var coeficiente = $('#Coeficiente').get(0).value;
                var perdidas = $('#Perdidas').get(0).value;

                var Pagos = $('#Pagos').get(0).value;
                var ImpuestoB = $('#ImpuestoB').get(0).value;


                var parteact = $('#ParteAct').get(0).value;
                var ieps = $('#IEPS').get(0).value;
                var parterecargos = $('#ParteRecargos').get(0).value;
                var disel = $('#Disel').get(0).value;
                var subsidioEmp = $('#SubsidioEmp').get(0).value;
                var ide = $('#IDE').get(0).value;
                //alert(parteact);			                 
                $('#L_TotalApp').load('TotalApp', {ieps: ieps, disel: disel, subsidioEmp: subsidioEmp, ide: ide});
                $('#L_CantPagar').load('CantPagar', {perdidas: perdidas, suma1: suma1, suma2: suma2, coeficiente: coeficiente, Pagos: Pagos, ImpuestoB: ImpuestoB, parteact: parteact, ieps: ieps, parterecargos: parterecargos, disel: disel, subsidioEmp: subsidioEmp, ide: ide});
            });
        },
        ParteRecargos1: function () {
            $(document).on('change', '#ParteRecargos', function (e) {
                var suma1 = $('#Ingresosant').get(0).value;
                var suma2 = $('#Ingresosact').get(0).value;
                var coeficiente = $('#Coeficiente').get(0).value;
                var perdidas = $('#Perdidas').get(0).value;

                var Pagos = $('#Pagos').get(0).value;
                var ImpuestoB = $('#ImpuestoB').get(0).value;


                var parteact = $('#ParteAct').get(0).value;
                var ieps = $('#IEPS').get(0).value;
                var parterecargos = $('#ParteRecargos').get(0).value;
                var disel = $('#Disel').get(0).value;
                var subsidioEmp = $('#SubsidioEmp').get(0).value;
                var ide = $('#IDE').get(0).value;
                $('#L_TotalApp').load('TotalApp', {ieps: ieps, disel: disel, subsidioEmp: subsidioEmp, ide: ide});
                $('#L_CantPagar').load('CantPagar', {perdidas: perdidas, suma1: suma1, suma2: suma2, coeficiente: coeficiente, Pagos: Pagos, ImpuestoB: ImpuestoB, parteact: parteact, ieps: ieps, parterecargos: parterecargos, disel: disel, subsidioEmp: subsidioEmp, ide: ide});
            });
        },
        IEPS1: function () {
            $(document).on('change', '#IEPS', function (e) {
                var suma1 = $('#Ingresosant').get(0).value;
                var suma2 = $('#Ingresosact').get(0).value;
                var coeficiente = $('#Coeficiente').get(0).value;
                var perdidas = $('#Perdidas').get(0).value;

                var Pagos = $('#Pagos').get(0).value;
                var ImpuestoB = $('#ImpuestoB').get(0).value;


                var parteact = $('#ParteAct').get(0).value;
                var ieps = $('#IEPS').get(0).value;
                var parterecargos = $('#ParteRecargos').get(0).value;
                var disel = $('#Disel').get(0).value;
                var subsidioEmp = $('#SubsidioEmp').get(0).value;
                var ide = $('#IDE').get(0).value;
                $('#L_TotalApp').load('TotalApp', {ieps: ieps, disel: disel, subsidioEmp: subsidioEmp, ide: ide});
                $('#L_CantPagar').load('CantPagar', {perdidas: perdidas, suma1: suma1, suma2: suma2, coeficiente: coeficiente, Pagos: Pagos, ImpuestoB: ImpuestoB, parteact: parteact, ieps: ieps, parterecargos: parterecargos, disel: disel, subsidioEmp: subsidioEmp, ide: ide});
            });
        },
        Disel1: function () {
            $(document).on('change', '#Disel', function (e) {
                var suma1 = $('#Ingresosant').get(0).value;
                var suma2 = $('#Ingresosact').get(0).value;
                var coeficiente = $('#Coeficiente').get(0).value;
                var perdidas = $('#Perdidas').get(0).value;

                var Pagos = $('#Pagos').get(0).value;
                var ImpuestoB = $('#ImpuestoB').get(0).value;


                var parteact = $('#ParteAct').get(0).value;
                var ieps = $('#IEPS').get(0).value;
                var parterecargos = $('#ParteRecargos').get(0).value;
                var disel = $('#Disel').get(0).value;
                var subsidioEmp = $('#SubsidioEmp').get(0).value;
                var ide = $('#IDE').get(0).value;
                $('#L_TotalApp').load('TotalApp', {ieps: ieps, disel: disel, subsidioEmp: subsidioEmp, ide: ide});
                $('#L_CantPagar').load('CantPagar', {perdidas: perdidas, suma1: suma1, suma2: suma2, coeficiente: coeficiente, Pagos: Pagos, ImpuestoB: ImpuestoB, parteact: parteact, ieps: ieps, parterecargos: parterecargos, disel: disel, subsidioEmp: subsidioEmp, ide: ide});
            });
        },
        SubsidioEmp1: function () {
            $(document).on('change', '#SubsidioEmp', function (e) {
                var suma1 = $('#Ingresosant').get(0).value;
                var suma2 = $('#Ingresosact').get(0).value;
                var coeficiente = $('#Coeficiente').get(0).value;
                var perdidas = $('#Perdidas').get(0).value;

                var Pagos = $('#Pagos').get(0).value;
                var ImpuestoB = $('#ImpuestoB').get(0).value;


                var parteact = $('#ParteAct').get(0).value;
                var ieps = $('#IEPS').get(0).value;
                var parterecargos = $('#ParteRecargos').get(0).value;
                var disel = $('#Disel').get(0).value;
                var subsidioEmp = $('#SubsidioEmp').get(0).value;
                var ide = $('#IDE').get(0).value;
                $('#L_TotalApp').load('TotalApp', {ieps: ieps, disel: disel, subsidioEmp: subsidioEmp, ide: ide});
                $('#L_CantPagar').load('CantPagar', {perdidas: perdidas, suma1: suma1, suma2: suma2, coeficiente: coeficiente, Pagos: Pagos, ImpuestoB: ImpuestoB, parteact: parteact, ieps: ieps, parterecargos: parterecargos, disel: disel, subsidioEmp: subsidioEmp, ide: ide});
            });
        },
        IDE1: function () {
            $(document).on('change', '#IDE', function (e) {
                var suma1 = $('#Ingresosant').get(0).value;
                var suma2 = $('#Ingresosact').get(0).value;
                var coeficiente = $('#Coeficiente').get(0).value;
                var perdidas = $('#Perdidas').get(0).value;

                var Pagos = $('#Pagos').get(0).value;
                var ImpuestoB = $('#ImpuestoB').get(0).value;


                var parteact = $('#ParteAct').get(0).value;
                var ieps = $('#IEPS').get(0).value;
                var parterecargos = $('#ParteRecargos').get(0).value;
                var disel = $('#Disel').get(0).value;
                var subsidioEmp = $('#SubsidioEmp').get(0).value;
                var ide = $('#IDE').get(0).value;
                $('#L_TotalApp').load('TotalApp', {ieps: ieps, disel: disel, subsidioEmp: subsidioEmp, ide: ide});
                $('#L_CantPagar').load('CantPagar', {perdidas: perdidas, suma1: suma1, suma2: suma2, coeficiente: coeficiente, Pagos: Pagos, ImpuestoB: ImpuestoB, parteact: parteact, ieps: ieps, parterecargos: parterecargos, disel: disel, subsidioEmp: subsidioEmp, ide: ide});
            });
        },
        Cargo_R1: function () {
            $(document).on('change', '#Cargo_R', function (e) {
                var Cargo_R = $('#Cargo_R').get(0).value;
                var ParteAct_R = $('#ParteAct_R').get(0).value;
                var ParteRec_R = $('#ParteRec_R').get(0).value;
                $('#L_TotalCont_R').load('Cargo_R1', {Cargo_R: Cargo_R, ParteAct_R: ParteAct_R, ParteRec_R: ParteRec_R});

                var IEPS_R = $('#IEPS_R').get(0).value;
                var Disel_R = $('#Disel_R').get(0).value;
                var OtrosEst_R = $('#OtrosEst_R').get(0).value;
                var TESOFE_R = $('#TESOFE_R').get(0).value;
                var CreditoSal_R = $('#CreditoSal_R').get(0).value;
                var DiselMinero_R = $('#DiselMinero_R').get(0).value;
                var Subsidio_R = $('#Subsidio_R').get(0).value;
                var IDE_R = $('#IDE_R').get(0).value;
                var Compensaciones_R = $('#Compensaciones_R').get(0).value;
                $('#L_CantCargo_R').load('CantCargo_R', {Cargo_R: Cargo_R, ParteAct_R: ParteAct_R, ParteRec_R: ParteRec_R, IEPS_R: IEPS_R, Disel_R: Disel_R, OtrosEst_R: OtrosEst_R, TESOFE_R: TESOFE_R, CreditoSal_R: CreditoSal_R, DiselMinero_R: DiselMinero_R, Subsidio_R: Subsidio_R, IDE_R: IDE_R, Compensaciones_R: Compensaciones_R});
            });
        },
        ParteAct_R1: function () {
            $(document).on('change', '#ParteAct_R', function (e) {
                var Cargo_R = $('#Cargo_R').get(0).value;
                var ParteAct_R = $('#ParteAct_R').get(0).value;
                var ParteRec_R = $('#ParteRec_R').get(0).value;
                $('#L_TotalCont_R').load('Cargo_R1', {Cargo_R: Cargo_R, ParteAct_R: ParteAct_R, ParteRec_R: ParteRec_R});

                var IEPS_R = $('#IEPS_R').get(0).value;
                var Disel_R = $('#Disel_R').get(0).value;
                var OtrosEst_R = $('#OtrosEst_R').get(0).value;
                var TESOFE_R = $('#TESOFE_R').get(0).value;
                var CreditoSal_R = $('#CreditoSal_R').get(0).value;
                var DiselMinero_R = $('#DiselMinero_R').get(0).value;
                var Subsidio_R = $('#Subsidio_R').get(0).value;
                var IDE_R = $('#IDE_R').get(0).value;
                var Compensaciones_R = $('#Compensaciones_R').get(0).value;
                $('#L_CantCargo_R').load('CantCargo_R', {Cargo_R: Cargo_R, ParteAct_R: ParteAct_R, ParteRec_R: ParteRec_R, IEPS_R: IEPS_R, Disel_R: Disel_R, OtrosEst_R: OtrosEst_R, TESOFE_R: TESOFE_R, CreditoSal_R: CreditoSal_R, DiselMinero_R: DiselMinero_R, Subsidio_R: Subsidio_R, IDE_R: IDE_R, Compensaciones_R: Compensaciones_R});

            });
        },
        ParteRec_R1: function () {
            $(document).on('change', '#ParteRec_R', function (e) {
                var Cargo_R = $('#Cargo_R').get(0).value;
                var ParteAct_R = $('#ParteAct_R').get(0).value;
                var ParteRec_R = $('#ParteRec_R').get(0).value;
                $('#L_TotalCont_R').load('Cargo_R1', {Cargo_R: Cargo_R, ParteAct_R: ParteAct_R, ParteRec_R: ParteRec_R});

                var IEPS_R = $('#IEPS_R').get(0).value;
                var Disel_R = $('#Disel_R').get(0).value;
                var OtrosEst_R = $('#OtrosEst_R').get(0).value;
                var TESOFE_R = $('#TESOFE_R').get(0).value;
                var CreditoSal_R = $('#CreditoSal_R').get(0).value;
                var DiselMinero_R = $('#DiselMinero_R').get(0).value;
                var Subsidio_R = $('#Subsidio_R').get(0).value;
                var IDE_R = $('#IDE_R').get(0).value;
                var Compensaciones_R = $('#Compensaciones_R').get(0).value;
                $('#L_CantCargo_R').load('CantCargo_R', {Cargo_R: Cargo_R, ParteAct_R: ParteAct_R, ParteRec_R: ParteRec_R, IEPS_R: IEPS_R, Disel_R: Disel_R, OtrosEst_R: OtrosEst_R, TESOFE_R: TESOFE_R, CreditoSal_R: CreditoSal_R, DiselMinero_R: DiselMinero_R, Subsidio_R: Subsidio_R, IDE_R: IDE_R, Compensaciones_R: Compensaciones_R});
            });
        },
        TotalApp_R1: function () {
            $(document).on('change', '#IEPS_R', function (e) {
                var IEPS_R = $('#IEPS_R').get(0).value;
                var Disel_R = $('#Disel_R').get(0).value;
                var OtrosEst_R = $('#OtrosEst_R').get(0).value;
                var TESOFE_R = $('#TESOFE_R').get(0).value;
                var CreditoSal_R = $('#CreditoSal_R').get(0).value;
                var DiselMinero_R = $('#DiselMinero_R').get(0).value;
                var Subsidio_R = $('#Subsidio_R').get(0).value;
                var IDE_R = $('#IDE_R').get(0).value;
                var Compensaciones_R = $('#Compensaciones_R').get(0).value;

                var Cargo_R = $('#Cargo_R').get(0).value;
                var ParteAct_R = $('#ParteAct_R').get(0).value;
                var ParteRec_R = $('#ParteRec_R').get(0).value;
                $('#L_CantCargo_R').load('CantCargo_R', {Cargo_R: Cargo_R, ParteAct_R: ParteAct_R, ParteRec_R: ParteRec_R, IEPS_R: IEPS_R, Disel_R: Disel_R, OtrosEst_R: OtrosEst_R, TESOFE_R: TESOFE_R, CreditoSal_R: CreditoSal_R, DiselMinero_R: DiselMinero_R, Subsidio_R: Subsidio_R, IDE_R: IDE_R, Compensaciones_R: Compensaciones_R});

                $('#L_TotalApp_R').load('TotalApp_R1', {IEPS_R: IEPS_R, Disel_R: Disel_R, OtrosEst_R: OtrosEst_R, TESOFE_R: TESOFE_R, CreditoSal_R: CreditoSal_R, DiselMinero_R: DiselMinero_R, Subsidio_R: Subsidio_R, IDE_R: IDE_R, Compensaciones_R: Compensaciones_R});
            });
        },
        TotalApp_R2: function () {
            $(document).on('change', '#Disel_R', function (e) {
                var IEPS_R = $('#IEPS_R').get(0).value;
                var Disel_R = $('#Disel_R').get(0).value;
                var OtrosEst_R = $('#OtrosEst_R').get(0).value;
                var TESOFE_R = $('#TESOFE_R').get(0).value;
                var CreditoSal_R = $('#CreditoSal_R').get(0).value;
                var DiselMinero_R = $('#DiselMinero_R').get(0).value;
                var Subsidio_R = $('#Subsidio_R').get(0).value;
                var IDE_R = $('#IDE_R').get(0).value;
                var Compensaciones_R = $('#Compensaciones_R').get(0).value;

                var Cargo_R = $('#Cargo_R').get(0).value;
                var ParteAct_R = $('#ParteAct_R').get(0).value;
                var ParteRec_R = $('#ParteRec_R').get(0).value;
                $('#L_CantCargo_R').load('CantCargo_R', {Cargo_R: Cargo_R, ParteAct_R: ParteAct_R, ParteRec_R: ParteRec_R, IEPS_R: IEPS_R, Disel_R: Disel_R, OtrosEst_R: OtrosEst_R, TESOFE_R: TESOFE_R, CreditoSal_R: CreditoSal_R, DiselMinero_R: DiselMinero_R, Subsidio_R: Subsidio_R, IDE_R: IDE_R, Compensaciones_R: Compensaciones_R});

                $('#L_TotalApp_R').load('TotalApp_R1', {IEPS_R: IEPS_R, Disel_R: Disel_R, OtrosEst_R: OtrosEst_R, TESOFE_R: TESOFE_R, CreditoSal_R: CreditoSal_R, DiselMinero_R: DiselMinero_R, Subsidio_R: Subsidio_R, IDE_R: IDE_R, Compensaciones_R: Compensaciones_R});
            });
        },
        TotalApp_R3: function () {
            $(document).on('change', '#OtrosEst_R', function (e) {
                var IEPS_R = $('#IEPS_R').get(0).value;
                var Disel_R = $('#Disel_R').get(0).value;
                var OtrosEst_R = $('#OtrosEst_R').get(0).value;
                var TESOFE_R = $('#TESOFE_R').get(0).value;
                var CreditoSal_R = $('#CreditoSal_R').get(0).value;
                var DiselMinero_R = $('#DiselMinero_R').get(0).value;
                var Subsidio_R = $('#Subsidio_R').get(0).value;
                var IDE_R = $('#IDE_R').get(0).value;
                var Compensaciones_R = $('#Compensaciones_R').get(0).value;

                var Cargo_R = $('#Cargo_R').get(0).value;
                var ParteAct_R = $('#ParteAct_R').get(0).value;
                var ParteRec_R = $('#ParteRec_R').get(0).value;
                $('#L_CantCargo_R').load('CantCargo_R', {Cargo_R: Cargo_R, ParteAct_R: ParteAct_R, ParteRec_R: ParteRec_R, IEPS_R: IEPS_R, Disel_R: Disel_R, OtrosEst_R: OtrosEst_R, TESOFE_R: TESOFE_R, CreditoSal_R: CreditoSal_R, DiselMinero_R: DiselMinero_R, Subsidio_R: Subsidio_R, IDE_R: IDE_R, Compensaciones_R: Compensaciones_R});

                $('#L_TotalApp_R').load('TotalApp_R1', {IEPS_R: IEPS_R, Disel_R: Disel_R, OtrosEst_R: OtrosEst_R, TESOFE_R: TESOFE_R, CreditoSal_R: CreditoSal_R, DiselMinero_R: DiselMinero_R, Subsidio_R: Subsidio_R, IDE_R: IDE_R, Compensaciones_R: Compensaciones_R});
            });
        },
        TotalApp_R4: function () {
            $(document).on('change', '#TESOFE_R', function (e) {
                var IEPS_R = $('#IEPS_R').get(0).value;
                var Disel_R = $('#Disel_R').get(0).value;
                var OtrosEst_R = $('#OtrosEst_R').get(0).value;
                var TESOFE_R = $('#TESOFE_R').get(0).value;
                var CreditoSal_R = $('#CreditoSal_R').get(0).value;
                var DiselMinero_R = $('#DiselMinero_R').get(0).value;
                var Subsidio_R = $('#Subsidio_R').get(0).value;
                var IDE_R = $('#IDE_R').get(0).value;
                var Compensaciones_R = $('#Compensaciones_R').get(0).value;

                var Cargo_R = $('#Cargo_R').get(0).value;
                var ParteAct_R = $('#ParteAct_R').get(0).value;
                var ParteRec_R = $('#ParteRec_R').get(0).value;
                $('#L_CantCargo_R').load('CantCargo_R', {Cargo_R: Cargo_R, ParteAct_R: ParteAct_R, ParteRec_R: ParteRec_R, IEPS_R: IEPS_R, Disel_R: Disel_R, OtrosEst_R: OtrosEst_R, TESOFE_R: TESOFE_R, CreditoSal_R: CreditoSal_R, DiselMinero_R: DiselMinero_R, Subsidio_R: Subsidio_R, IDE_R: IDE_R, Compensaciones_R: Compensaciones_R});

                $('#L_TotalApp_R').load('TotalApp_R1', {IEPS_R: IEPS_R, Disel_R: Disel_R, OtrosEst_R: OtrosEst_R, TESOFE_R: TESOFE_R, CreditoSal_R: CreditoSal_R, DiselMinero_R: DiselMinero_R, Subsidio_R: Subsidio_R, IDE_R: IDE_R, Compensaciones_R: Compensaciones_R});
            });
        },
        TotalApp_R5: function () {
            $(document).on('change', '#CreditoSal_R', function (e) {
                var IEPS_R = $('#IEPS_R').get(0).value;
                var Disel_R = $('#Disel_R').get(0).value;
                var OtrosEst_R = $('#OtrosEst_R').get(0).value;
                var TESOFE_R = $('#TESOFE_R').get(0).value;
                var CreditoSal_R = $('#CreditoSal_R').get(0).value;
                var DiselMinero_R = $('#DiselMinero_R').get(0).value;
                var Subsidio_R = $('#Subsidio_R').get(0).value;
                var IDE_R = $('#IDE_R').get(0).value;
                var Compensaciones_R = $('#Compensaciones_R').get(0).value;

                var Cargo_R = $('#Cargo_R').get(0).value;
                var ParteAct_R = $('#ParteAct_R').get(0).value;
                var ParteRec_R = $('#ParteRec_R').get(0).value;
                $('#L_CantCargo_R').load('CantCargo_R', {Cargo_R: Cargo_R, ParteAct_R: ParteAct_R, ParteRec_R: ParteRec_R, IEPS_R: IEPS_R, Disel_R: Disel_R, OtrosEst_R: OtrosEst_R, TESOFE_R: TESOFE_R, CreditoSal_R: CreditoSal_R, DiselMinero_R: DiselMinero_R, Subsidio_R: Subsidio_R, IDE_R: IDE_R, Compensaciones_R: Compensaciones_R});

                $('#L_TotalApp_R').load('TotalApp_R1', {IEPS_R: IEPS_R, Disel_R: Disel_R, OtrosEst_R: OtrosEst_R, TESOFE_R: TESOFE_R, CreditoSal_R: CreditoSal_R, DiselMinero_R: DiselMinero_R, Subsidio_R: Subsidio_R, IDE_R: IDE_R, Compensaciones_R: Compensaciones_R});
            });
        },
        TotalApp_R6: function () {
            $(document).on('change', '#DiselMinero_R', function (e) {
                var IEPS_R = $('#IEPS_R').get(0).value;
                var Disel_R = $('#Disel_R').get(0).value;
                var OtrosEst_R = $('#OtrosEst_R').get(0).value;
                var TESOFE_R = $('#TESOFE_R').get(0).value;
                var CreditoSal_R = $('#CreditoSal_R').get(0).value;
                var DiselMinero_R = $('#DiselMinero_R').get(0).value;
                var Subsidio_R = $('#Subsidio_R').get(0).value;
                var IDE_R = $('#IDE_R').get(0).value;
                var Compensaciones_R = $('#Compensaciones_R').get(0).value;

                var Cargo_R = $('#Cargo_R').get(0).value;
                var ParteAct_R = $('#ParteAct_R').get(0).value;
                var ParteRec_R = $('#ParteRec_R').get(0).value;
                $('#L_CantCargo_R').load('CantCargo_R', {Cargo_R: Cargo_R, ParteAct_R: ParteAct_R, ParteRec_R: ParteRec_R, IEPS_R: IEPS_R, Disel_R: Disel_R, OtrosEst_R: OtrosEst_R, TESOFE_R: TESOFE_R, CreditoSal_R: CreditoSal_R, DiselMinero_R: DiselMinero_R, Subsidio_R: Subsidio_R, IDE_R: IDE_R, Compensaciones_R: Compensaciones_R});

                $('#L_TotalApp_R').load('TotalApp_R1', {IEPS_R: IEPS_R, Disel_R: Disel_R, OtrosEst_R: OtrosEst_R, TESOFE_R: TESOFE_R, CreditoSal_R: CreditoSal_R, DiselMinero_R: DiselMinero_R, Subsidio_R: Subsidio_R, IDE_R: IDE_R, Compensaciones_R: Compensaciones_R});
            });
        },
        TotalApp_R7: function () {
            $(document).on('change', '#Subsidio_R', function (e) {
                var IEPS_R = $('#IEPS_R').get(0).value;
                var Disel_R = $('#Disel_R').get(0).value;
                var OtrosEst_R = $('#OtrosEst_R').get(0).value;
                var TESOFE_R = $('#TESOFE_R').get(0).value;
                var CreditoSal_R = $('#CreditoSal_R').get(0).value;
                var DiselMinero_R = $('#DiselMinero_R').get(0).value;
                var Subsidio_R = $('#Subsidio_R').get(0).value;
                var IDE_R = $('#IDE_R').get(0).value;
                var Compensaciones_R = $('#Compensaciones_R').get(0).value;

                var Cargo_R = $('#Cargo_R').get(0).value;
                var ParteAct_R = $('#ParteAct_R').get(0).value;
                var ParteRec_R = $('#ParteRec_R').get(0).value;
                $('#L_CantCargo_R').load('CantCargo_R', {Cargo_R: Cargo_R, ParteAct_R: ParteAct_R, ParteRec_R: ParteRec_R, IEPS_R: IEPS_R, Disel_R: Disel_R, OtrosEst_R: OtrosEst_R, TESOFE_R: TESOFE_R, CreditoSal_R: CreditoSal_R, DiselMinero_R: DiselMinero_R, Subsidio_R: Subsidio_R, IDE_R: IDE_R, Compensaciones_R: Compensaciones_R});

                $('#L_TotalApp_R').load('TotalApp_R1', {IEPS_R: IEPS_R, Disel_R: Disel_R, OtrosEst_R: OtrosEst_R, TESOFE_R: TESOFE_R, CreditoSal_R: CreditoSal_R, DiselMinero_R: DiselMinero_R, Subsidio_R: Subsidio_R, IDE_R: IDE_R, Compensaciones_R: Compensaciones_R});
            });
        },
        TotalApp_R8: function () {
            $(document).on('change', '#IDE_R', function (e) {
                var IEPS_R = $('#IEPS_R').get(0).value;
                var Disel_R = $('#Disel_R').get(0).value;
                var OtrosEst_R = $('#OtrosEst_R').get(0).value;
                var TESOFE_R = $('#TESOFE_R').get(0).value;
                var CreditoSal_R = $('#CreditoSal_R').get(0).value;
                var DiselMinero_R = $('#DiselMinero_R').get(0).value;
                var Subsidio_R = $('#Subsidio_R').get(0).value;
                var IDE_R = $('#IDE_R').get(0).value;
                var Compensaciones_R = $('#Compensaciones_R').get(0).value;

                var Cargo_R = $('#Cargo_R').get(0).value;
                var ParteAct_R = $('#ParteAct_R').get(0).value;
                var ParteRec_R = $('#ParteRec_R').get(0).value;
                $('#L_CantCargo_R').load('CantCargo_R', {Cargo_R: Cargo_R, ParteAct_R: ParteAct_R, ParteRec_R: ParteRec_R, IEPS_R: IEPS_R, Disel_R: Disel_R, OtrosEst_R: OtrosEst_R, TESOFE_R: TESOFE_R, CreditoSal_R: CreditoSal_R, DiselMinero_R: DiselMinero_R, Subsidio_R: Subsidio_R, IDE_R: IDE_R, Compensaciones_R: Compensaciones_R});

                $('#L_TotalApp_R').load('TotalApp_R1', {IEPS_R: IEPS_R, Disel_R: Disel_R, OtrosEst_R: OtrosEst_R, TESOFE_R: TESOFE_R, CreditoSal_R: CreditoSal_R, DiselMinero_R: DiselMinero_R, Subsidio_R: Subsidio_R, IDE_R: IDE_R, Compensaciones_R: Compensaciones_R});
            });
        },
        TotalApp_R9: function () {
            $(document).on('change', '#Compensaciones_R', function (e) {
                var IEPS_R = $('#IEPS_R').get(0).value;
                var Disel_R = $('#Disel_R').get(0).value;
                var OtrosEst_R = $('#OtrosEst_R').get(0).value;
                var TESOFE_R = $('#TESOFE_R').get(0).value;
                var CreditoSal_R = $('#CreditoSal_R').get(0).value;
                var DiselMinero_R = $('#DiselMinero_R').get(0).value;
                var Subsidio_R = $('#Subsidio_R').get(0).value;
                var IDE_R = $('#IDE_R').get(0).value;
                var Compensaciones_R = $('#Compensaciones_R').get(0).value;

                var Cargo_R = $('#Cargo_R').get(0).value;
                var ParteAct_R = $('#ParteAct_R').get(0).value;
                var ParteRec_R = $('#ParteRec_R').get(0).value;
                $('#L_CantCargo_R').load('CantCargo_R', {Cargo_R: Cargo_R, ParteAct_R: ParteAct_R, ParteRec_R: ParteRec_R, IEPS_R: IEPS_R, Disel_R: Disel_R, OtrosEst_R: OtrosEst_R, TESOFE_R: TESOFE_R, CreditoSal_R: CreditoSal_R, DiselMinero_R: DiselMinero_R, Subsidio_R: Subsidio_R, IDE_R: IDE_R, Compensaciones_R: Compensaciones_R});

                $('#L_TotalApp_R').load('TotalApp_R1', {IEPS_R: IEPS_R, Disel_R: Disel_R, OtrosEst_R: OtrosEst_R, TESOFE_R: TESOFE_R, CreditoSal_R: CreditoSal_R, DiselMinero_R: DiselMinero_R, Subsidio_R: Subsidio_R, IDE_R: IDE_R, Compensaciones_R: Compensaciones_R});
            });
        },
        IVAretenciones: function () {
            $(document).on('change', '#Importe', function (e) {
                var Importe = $('#Importe').get(0).value;
                $('#L_IVAretenciones4').load('IVAretenciones4', {Importe: Importe});
                $('#L_IVAretenciones10').load('IVAretenciones10', {Importe: Importe});
                $('#L_IVAretenciones').load('IVAretenciones', {Importe: Importe});
            });
        },
        ISR_R7_1: function () {
            $(document).on('change', '#Suma_Ing', function (e) {
                var Suma_Ing = $('#Suma_Ing').get(0).value;
                var Ing = $('#Ing').get(0).value;
                var meses = $('#meses').get(0).value;
                var GastosAnt = $('#GastosAnt').get(0).value;
                var GastosAct = $('#GastosAct').get(0).value;
                $('#L_Total_Ing').load('ISR_R7_Op1', {Suma_Ing: Suma_Ing, Ing: Ing});
                $('#L_TAcargo').load('ISR_R7_Op0', {Suma_Ing: Suma_Ing, Ing: Ing, meses: meses, GastosAnt: GastosAnt, GastosAct: GastosAct});
            });
        },
        ISR_R7_2: function () {
            $(document).on('change', '#Ing', function (e) {
                var Suma_Ing = $('#Suma_Ing').get(0).value;
                var Ing = $('#Ing').get(0).value;
                var meses = $('#meses').get(0).value;
                var GastosAnt = $('#GastosAnt').get(0).value;
                var GastosAct = $('#GastosAct').get(0).value;
                $('#L_Total_Ing').load('ISR_R7_Op1', {Suma_Ing: Suma_Ing, Ing: Ing});
                $('#L_TAcargo').load('ISR_R7_Op0', {Suma_Ing: Suma_Ing, Ing: Ing, meses: meses, GastosAnt: GastosAnt, GastosAct: GastosAct});
            });
        },
        ISR_R7_3: function () {
            $(document).on('change', '#GastosAnt', function (e) {
                var GastosAnt = $('#GastosAnt').get(0).value;
                var GastosAct = $('#GastosAct').get(0).value;
                var Suma_Ing = $('#Suma_Ing').get(0).value;
                var Ing = $('#Ing').get(0).value;
                var meses = $('#meses').get(0).value;
                $('#L_TotalGastos').load('ISR_R7_Op2', {GastosAnt: GastosAnt, GastosAct: GastosAct});
                $('#L_TAcargo').load('ISR_R7_Op0', {Suma_Ing: Suma_Ing, Ing: Ing, meses: meses, GastosAnt: GastosAnt, GastosAct: GastosAct});
            });
        },
        ISR_R7_4: function () {
            $(document).on('change', '#GastosAct', function (e) {
                var GastosAnt = $('#GastosAnt').get(0).value;
                var GastosAct = $('#GastosAct').get(0).value;
                var Suma_Ing = $('#Suma_Ing').get(0).value;
                var Ing = $('#Ing').get(0).value;
                var meses = $('#meses').get(0).value;
                $('#L_TotalGastos').load('ISR_R7_Op2', {GastosAnt: GastosAnt, GastosAct: GastosAct});
                $('#L_TAcargo').load('ISR_R7_Op0', {Suma_Ing: Suma_Ing, Ing: Ing, meses: meses, GastosAnt: GastosAnt, GastosAct: GastosAct});
            });
        },
        ISR_R7_5: function () {
            $(document).on('change', '#ACargo', function (e) {
                var ACargo = $('#ACargo').get(0).value;
                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;

                var Credito_sal = $('#Credito_sal').get(0).value;
                var Sub_Empleo = $('#Sub_Empleo').get(0).value;
                var Imp_Depositos = $('#Imp_Depositos').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Diesel = $('#Diesel').get(0).value;
                var Carreteras = $('#Carreteras').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel_Marino = $('#Diesel_Marino').get(0).value;

                var Monto_Ant = $('#Monto_Ant').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;

                $('#L_TotalCont').load('ISR_R7_Op3', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos});
                $('#L_CFavor').load('ISR_R7_Op4', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Credito_sal: Credito_sal, Sub_Empleo: Sub_Empleo, Imp_Depositos: Imp_Depositos, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carreteras: Carreteras, Otros: Otros, Diesel_Marino: Diesel_Marino, Monto_Ant: Monto_Ant, Imp_UltHrs: Imp_UltHrs});
                $('#L_CPagar').load('ISR_R7_Op5', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Credito_sal: Credito_sal, Sub_Empleo: Sub_Empleo, Imp_Depositos: Imp_Depositos, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carreteras: Carreteras, Otros: Otros, Diesel_Marino: Diesel_Marino, Monto_Ant: Monto_Ant, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R7_6: function () {
            $(document).on('change', '#ParteAct', function (e) {
                var ACargo = $('#ACargo').get(0).value;
                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;

                var Credito_sal = $('#Credito_sal').get(0).value;
                var Sub_Empleo = $('#Sub_Empleo').get(0).value;
                var Imp_Depositos = $('#Imp_Depositos').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Diesel = $('#Diesel').get(0).value;
                var Carreteras = $('#Carreteras').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel_Marino = $('#Diesel_Marino').get(0).value;

                var Monto_Ant = $('#Monto_Ant').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;

                $('#L_TotalCont').load('ISR_R7_Op3', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos});
                $('#L_CFavor').load('ISR_R7_Op4', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Credito_sal: Credito_sal, Sub_Empleo: Sub_Empleo, Imp_Depositos: Imp_Depositos, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carreteras: Carreteras, Otros: Otros, Diesel_Marino: Diesel_Marino, Monto_Ant: Monto_Ant, Imp_UltHrs: Imp_UltHrs});
                $('#L_CPagar').load('ISR_R7_Op5', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Credito_sal: Credito_sal, Sub_Empleo: Sub_Empleo, Imp_Depositos: Imp_Depositos, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carreteras: Carreteras, Otros: Otros, Diesel_Marino: Diesel_Marino, Monto_Ant: Monto_Ant, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R7_7: function () {
            $(document).on('change', '#Recargos', function (e) {
                var ACargo = $('#ACargo').get(0).value;
                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;

                var Credito_sal = $('#Credito_sal').get(0).value;
                var Sub_Empleo = $('#Sub_Empleo').get(0).value;
                var Imp_Depositos = $('#Imp_Depositos').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Diesel = $('#Diesel').get(0).value;
                var Carreteras = $('#Carreteras').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel_Marino = $('#Diesel_Marino').get(0).value;

                var Monto_Ant = $('#Monto_Ant').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;

                $('#L_TotalCont').load('ISR_R7_Op3', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos});
                $('#L_CFavor').load('ISR_R7_Op4', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Credito_sal: Credito_sal, Sub_Empleo: Sub_Empleo, Imp_Depositos: Imp_Depositos, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carreteras: Carreteras, Otros: Otros, Diesel_Marino: Diesel_Marino, Monto_Ant: Monto_Ant, Imp_UltHrs: Imp_UltHrs});
                $('#L_CPagar').load('ISR_R7_Op5', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Credito_sal: Credito_sal, Sub_Empleo: Sub_Empleo, Imp_Depositos: Imp_Depositos, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carreteras: Carreteras, Otros: Otros, Diesel_Marino: Diesel_Marino, Monto_Ant: Monto_Ant, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R7_8: function () {
            $(document).on('change', '#Credito_sal', function (e) {
                var ACargo = $('#ACargo').get(0).value;
                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;

                var Credito_sal = $('#Credito_sal').get(0).value;
                var Sub_Empleo = $('#Sub_Empleo').get(0).value;
                var Imp_Depositos = $('#Imp_Depositos').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Diesel = $('#Diesel').get(0).value;
                var Carreteras = $('#Carreteras').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel_Marino = $('#Diesel_Marino').get(0).value;

                var Monto_Ant = $('#Monto_Ant').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;

                $('#L_TotalCont').load('ISR_R7_Op3', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos});
                $('#L_CFavor').load('ISR_R7_Op4', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Credito_sal: Credito_sal, Sub_Empleo: Sub_Empleo, Imp_Depositos: Imp_Depositos, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carreteras: Carreteras, Otros: Otros, Diesel_Marino: Diesel_Marino, Monto_Ant: Monto_Ant, Imp_UltHrs: Imp_UltHrs});
                $('#L_CPagar').load('ISR_R7_Op5', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Credito_sal: Credito_sal, Sub_Empleo: Sub_Empleo, Imp_Depositos: Imp_Depositos, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carreteras: Carreteras, Otros: Otros, Diesel_Marino: Diesel_Marino, Monto_Ant: Monto_Ant, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R7_9: function () {
            $(document).on('change', '#Sub_Empleo', function (e) {
                var ACargo = $('#ACargo').get(0).value;
                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;

                var Credito_sal = $('#Credito_sal').get(0).value;
                var Sub_Empleo = $('#Sub_Empleo').get(0).value;
                var Imp_Depositos = $('#Imp_Depositos').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Diesel = $('#Diesel').get(0).value;
                var Carreteras = $('#Carreteras').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel_Marino = $('#Diesel_Marino').get(0).value;

                var Monto_Ant = $('#Monto_Ant').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;

                $('#L_TotalCont').load('ISR_R7_Op3', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos});
                $('#L_CFavor').load('ISR_R7_Op4', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Credito_sal: Credito_sal, Sub_Empleo: Sub_Empleo, Imp_Depositos: Imp_Depositos, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carreteras: Carreteras, Otros: Otros, Diesel_Marino: Diesel_Marino, Monto_Ant: Monto_Ant, Imp_UltHrs: Imp_UltHrs});
                $('#L_CPagar').load('ISR_R7_Op5', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Credito_sal: Credito_sal, Sub_Empleo: Sub_Empleo, Imp_Depositos: Imp_Depositos, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carreteras: Carreteras, Otros: Otros, Diesel_Marino: Diesel_Marino, Monto_Ant: Monto_Ant, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R7_10: function () {
            $(document).on('change', '#Imp_Depositos', function (e) {
                var ACargo = $('#ACargo').get(0).value;
                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;

                var Credito_sal = $('#Credito_sal').get(0).value;
                var Sub_Empleo = $('#Sub_Empleo').get(0).value;
                var Imp_Depositos = $('#Imp_Depositos').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Diesel = $('#Diesel').get(0).value;
                var Carreteras = $('#Carreteras').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel_Marino = $('#Diesel_Marino').get(0).value;

                var Monto_Ant = $('#Monto_Ant').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;

                $('#L_TotalCont').load('ISR_R7_Op3', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos});
                $('#L_CFavor').load('ISR_R7_Op4', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Credito_sal: Credito_sal, Sub_Empleo: Sub_Empleo, Imp_Depositos: Imp_Depositos, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carreteras: Carreteras, Otros: Otros, Diesel_Marino: Diesel_Marino, Monto_Ant: Monto_Ant, Imp_UltHrs: Imp_UltHrs});
                $('#L_CPagar').load('ISR_R7_Op5', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Credito_sal: Credito_sal, Sub_Empleo: Sub_Empleo, Imp_Depositos: Imp_Depositos, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carreteras: Carreteras, Otros: Otros, Diesel_Marino: Diesel_Marino, Monto_Ant: Monto_Ant, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R7_11: function () {
            $(document).on('change', '#Compensaciones', function (e) {
                var ACargo = $('#ACargo').get(0).value;
                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;

                var Credito_sal = $('#Credito_sal').get(0).value;
                var Sub_Empleo = $('#Sub_Empleo').get(0).value;
                var Imp_Depositos = $('#Imp_Depositos').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Diesel = $('#Diesel').get(0).value;
                var Carreteras = $('#Carreteras').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel_Marino = $('#Diesel_Marino').get(0).value;

                var Monto_Ant = $('#Monto_Ant').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;

                $('#L_TotalCont').load('ISR_R7_Op3', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos});
                $('#L_CFavor').load('ISR_R7_Op4', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Credito_sal: Credito_sal, Sub_Empleo: Sub_Empleo, Imp_Depositos: Imp_Depositos, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carreteras: Carreteras, Otros: Otros, Diesel_Marino: Diesel_Marino, Monto_Ant: Monto_Ant, Imp_UltHrs: Imp_UltHrs});
                $('#L_CPagar').load('ISR_R7_Op5', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Credito_sal: Credito_sal, Sub_Empleo: Sub_Empleo, Imp_Depositos: Imp_Depositos, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carreteras: Carreteras, Otros: Otros, Diesel_Marino: Diesel_Marino, Monto_Ant: Monto_Ant, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R7_12: function () {
            $(document).on('change', '#IEPS', function (e) {
                var ACargo = $('#ACargo').get(0).value;
                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;

                var Credito_sal = $('#Credito_sal').get(0).value;
                var Sub_Empleo = $('#Sub_Empleo').get(0).value;
                var Imp_Depositos = $('#Imp_Depositos').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Diesel = $('#Diesel').get(0).value;
                var Carreteras = $('#Carreteras').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel_Marino = $('#Diesel_Marino').get(0).value;

                var Monto_Ant = $('#Monto_Ant').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;

                $('#L_TotalCont').load('ISR_R7_Op3', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos});
                $('#L_CFavor').load('ISR_R7_Op4', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Credito_sal: Credito_sal, Sub_Empleo: Sub_Empleo, Imp_Depositos: Imp_Depositos, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carreteras: Carreteras, Otros: Otros, Diesel_Marino: Diesel_Marino, Monto_Ant: Monto_Ant, Imp_UltHrs: Imp_UltHrs});
                $('#L_CPagar').load('ISR_R7_Op5', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Credito_sal: Credito_sal, Sub_Empleo: Sub_Empleo, Imp_Depositos: Imp_Depositos, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carreteras: Carreteras, Otros: Otros, Diesel_Marino: Diesel_Marino, Monto_Ant: Monto_Ant, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R7_13: function () {
            $(document).on('change', '#Diesel', function (e) {
                var ACargo = $('#ACargo').get(0).value;
                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;

                var Credito_sal = $('#Credito_sal').get(0).value;
                var Sub_Empleo = $('#Sub_Empleo').get(0).value;
                var Imp_Depositos = $('#Imp_Depositos').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Diesel = $('#Diesel').get(0).value;
                var Carreteras = $('#Carreteras').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel_Marino = $('#Diesel_Marino').get(0).value;

                var Monto_Ant = $('#Monto_Ant').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;

                $('#L_TotalCont').load('ISR_R7_Op3', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos});
                $('#L_CFavor').load('ISR_R7_Op4', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Credito_sal: Credito_sal, Sub_Empleo: Sub_Empleo, Imp_Depositos: Imp_Depositos, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carreteras: Carreteras, Otros: Otros, Diesel_Marino: Diesel_Marino, Monto_Ant: Monto_Ant, Imp_UltHrs: Imp_UltHrs});
                $('#L_CPagar').load('ISR_R7_Op5', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Credito_sal: Credito_sal, Sub_Empleo: Sub_Empleo, Imp_Depositos: Imp_Depositos, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carreteras: Carreteras, Otros: Otros, Diesel_Marino: Diesel_Marino, Monto_Ant: Monto_Ant, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R7_14: function () {
            $(document).on('change', '#Carreteras', function (e) {
                var ACargo = $('#ACargo').get(0).value;
                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;

                var Credito_sal = $('#Credito_sal').get(0).value;
                var Sub_Empleo = $('#Sub_Empleo').get(0).value;
                var Imp_Depositos = $('#Imp_Depositos').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Diesel = $('#Diesel').get(0).value;
                var Carreteras = $('#Carreteras').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel_Marino = $('#Diesel_Marino').get(0).value;

                var Monto_Ant = $('#Monto_Ant').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;

                $('#L_TotalCont').load('ISR_R7_Op3', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos});
                $('#L_CFavor').load('ISR_R7_Op4', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Credito_sal: Credito_sal, Sub_Empleo: Sub_Empleo, Imp_Depositos: Imp_Depositos, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carreteras: Carreteras, Otros: Otros, Diesel_Marino: Diesel_Marino, Monto_Ant: Monto_Ant, Imp_UltHrs: Imp_UltHrs});
                $('#L_CPagar').load('ISR_R7_Op5', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Credito_sal: Credito_sal, Sub_Empleo: Sub_Empleo, Imp_Depositos: Imp_Depositos, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carreteras: Carreteras, Otros: Otros, Diesel_Marino: Diesel_Marino, Monto_Ant: Monto_Ant, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R7_15: function () {
            $(document).on('change', '#Otros', function (e) {
                var ACargo = $('#ACargo').get(0).value;
                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;

                var Credito_sal = $('#Credito_sal').get(0).value;
                var Sub_Empleo = $('#Sub_Empleo').get(0).value;
                var Imp_Depositos = $('#Imp_Depositos').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Diesel = $('#Diesel').get(0).value;
                var Carreteras = $('#Carreteras').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel_Marino = $('#Diesel_Marino').get(0).value;

                var Monto_Ant = $('#Monto_Ant').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;

                $('#L_TotalCont').load('ISR_R7_Op3', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos});
                $('#L_CFavor').load('ISR_R7_Op4', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Credito_sal: Credito_sal, Sub_Empleo: Sub_Empleo, Imp_Depositos: Imp_Depositos, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carreteras: Carreteras, Otros: Otros, Diesel_Marino: Diesel_Marino, Monto_Ant: Monto_Ant, Imp_UltHrs: Imp_UltHrs});
                $('#L_CPagar').load('ISR_R7_Op5', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Credito_sal: Credito_sal, Sub_Empleo: Sub_Empleo, Imp_Depositos: Imp_Depositos, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carreteras: Carreteras, Otros: Otros, Diesel_Marino: Diesel_Marino, Monto_Ant: Monto_Ant, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R7_16: function () {
            $(document).on('change', '#Diesel_Marino', function (e) {
                var ACargo = $('#ACargo').get(0).value;
                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;

                var Credito_sal = $('#Credito_sal').get(0).value;
                var Sub_Empleo = $('#Sub_Empleo').get(0).value;
                var Imp_Depositos = $('#Imp_Depositos').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Diesel = $('#Diesel').get(0).value;
                var Carreteras = $('#Carreteras').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel_Marino = $('#Diesel_Marino').get(0).value;

                var Monto_Ant = $('#Monto_Ant').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;

                $('#L_TotalCont').load('ISR_R7_Op3', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos});
                $('#L_CFavor').load('ISR_R7_Op4', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Credito_sal: Credito_sal, Sub_Empleo: Sub_Empleo, Imp_Depositos: Imp_Depositos, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carreteras: Carreteras, Otros: Otros, Diesel_Marino: Diesel_Marino, Monto_Ant: Monto_Ant, Imp_UltHrs: Imp_UltHrs});
                $('#L_CPagar').load('ISR_R7_Op5', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Credito_sal: Credito_sal, Sub_Empleo: Sub_Empleo, Imp_Depositos: Imp_Depositos, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carreteras: Carreteras, Otros: Otros, Diesel_Marino: Diesel_Marino, Monto_Ant: Monto_Ant, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R7_17: function () {
            $(document).on('change', '#Monto_Ant', function (e) {
                var ACargo = $('#ACargo').get(0).value;
                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;

                var Credito_sal = $('#Credito_sal').get(0).value;
                var Sub_Empleo = $('#Sub_Empleo').get(0).value;
                var Imp_Depositos = $('#Imp_Depositos').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Diesel = $('#Diesel').get(0).value;
                var Carreteras = $('#Carreteras').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel_Marino = $('#Diesel_Marino').get(0).value;

                var Monto_Ant = $('#Monto_Ant').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;

                $('#L_TotalCont').load('ISR_R7_Op3', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos});
                $('#L_CFavor').load('ISR_R7_Op4', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Credito_sal: Credito_sal, Sub_Empleo: Sub_Empleo, Imp_Depositos: Imp_Depositos, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carreteras: Carreteras, Otros: Otros, Diesel_Marino: Diesel_Marino, Monto_Ant: Monto_Ant, Imp_UltHrs: Imp_UltHrs});
                $('#L_CPagar').load('ISR_R7_Op5', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Credito_sal: Credito_sal, Sub_Empleo: Sub_Empleo, Imp_Depositos: Imp_Depositos, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carreteras: Carreteras, Otros: Otros, Diesel_Marino: Diesel_Marino, Monto_Ant: Monto_Ant, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R7_18: function () {
            $(document).on('change', '#Imp_UltHrs', function (e) {
                var ACargo = $('#ACargo').get(0).value;
                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;

                var Credito_sal = $('#Credito_sal').get(0).value;
                var Sub_Empleo = $('#Sub_Empleo').get(0).value;
                var Imp_Depositos = $('#Imp_Depositos').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Diesel = $('#Diesel').get(0).value;
                var Carreteras = $('#Carreteras').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel_Marino = $('#Diesel_Marino').get(0).value;

                var Monto_Ant = $('#Monto_Ant').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;

                $('#L_TotalCont').load('ISR_R7_Op3', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos});
                $('#L_CFavor').load('ISR_R7_Op4', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Credito_sal: Credito_sal, Sub_Empleo: Sub_Empleo, Imp_Depositos: Imp_Depositos, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carreteras: Carreteras, Otros: Otros, Diesel_Marino: Diesel_Marino, Monto_Ant: Monto_Ant, Imp_UltHrs: Imp_UltHrs});
                $('#L_CPagar').load('ISR_R7_Op5', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Credito_sal: Credito_sal, Sub_Empleo: Sub_Empleo, Imp_Depositos: Imp_Depositos, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carreteras: Carreteras, Otros: Otros, Diesel_Marino: Diesel_Marino, Monto_Ant: Monto_Ant, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R97_1: function () {
            $(document).on('change', '#Suma_Ing', function (e) {
                var Suma_Ing = $('#Suma_Ing').get(0).value;
                var Ing = $('#Ing').get(0).value;

                var Ing_Externos = $('#Ing_Externos').get(0).value;
                var Suma_Deduc = $('#Suma_Deduc').get(0).value;
                var Deduc_Auto = $('#Deduc_Auto').get(0).value;
                var Part_Utilidad = $('#Part_Utilidad').get(0).value;
                var Perdidas = $('#Perdidas').get(0).value;
                var Reducciones = $('#Reducciones').get(0).value;

                var Pagos_Prov = $('#Pagos_Prov').get(0).value;
                var Imp_Ret = $('#Imp_Ret').get(0).value;
                var OtrasCargo = $('#OtrasCargo').get(0).value;
                var OtrasFavor = $('#OtrasFavor').get(0).value;
                //alert(Suma_Ing);	

                $('#L_Total_Ing').load('ISR_R97_Op1', {Suma_Ing: Suma_Ing, Ing: Ing});
                $('#L_BaseG').load('ISR_R97_OpB', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas});
                $('#L_ISRDet').load('ISR_R97_OpD', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas});
                $('#L_ISRC').load('ISR_R97_OpC', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas, Reducciones: Reducciones});
                $('#L_ACargo').load('ISR_R97_OpA', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas, Reducciones: Reducciones, Pagos_Prov: Pagos_Prov, Imp_Ret: Imp_Ret, OtrasCargo: OtrasCargo, OtrasFavor: OtrasFavor});
                $('#L_ACargo2').load('ISR_R97_OpA2', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas, Reducciones: Reducciones, Pagos_Prov: Pagos_Prov, Imp_Ret: Imp_Ret, OtrasCargo: OtrasCargo, OtrasFavor: OtrasFavor});
            });
        },
        ISR_R97_2: function () {
            $(document).on('change', '#Ing', function (e) {
                var Suma_Ing = $('#Suma_Ing').get(0).value;
                var Ing = $('#Ing').get(0).value;

                var Ing_Externos = $('#Ing_Externos').get(0).value;
                var Suma_Deduc = $('#Suma_Deduc').get(0).value;
                var Deduc_Auto = $('#Deduc_Auto').get(0).value;
                var Part_Utilidad = $('#Part_Utilidad').get(0).value;
                var Perdidas = $('#Perdidas').get(0).value;
                var Reducciones = $('#Reducciones').get(0).value;

                var Pagos_Prov = $('#Pagos_Prov').get(0).value;
                var Imp_Ret = $('#Imp_Ret').get(0).value;
                var OtrasCargo = $('#OtrasCargo').get(0).value;
                var OtrasFavor = $('#OtrasFavor').get(0).value;
                $('#L_Total_Ing').load('ISR_R97_Op1', {Suma_Ing: Suma_Ing, Ing: Ing});
                $('#L_BaseG').load('ISR_R97_OpB', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas});
                $('#L_ISRDet').load('ISR_R97_OpD', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas});
                $('#L_ISRC').load('ISR_R97_OpC', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas, Reducciones: Reducciones});
                $('#L_ACargo').load('ISR_R97_OpA', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas, Reducciones: Reducciones, Pagos_Prov: Pagos_Prov, Imp_Ret: Imp_Ret, OtrasCargo: OtrasCargo, OtrasFavor: OtrasFavor});
                $('#L_ACargo2').load('ISR_R97_OpA2', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas, Reducciones: Reducciones, Pagos_Prov: Pagos_Prov, Imp_Ret: Imp_Ret, OtrasCargo: OtrasCargo, OtrasFavor: OtrasFavor});
            });
        },
        ISR_R97_3: function () {
            $(document).on('change', '#Suma_Deduc', function (e) {
                var Suma_Ing = $('#Suma_Ing').get(0).value;
                var Ing = $('#Ing').get(0).value;

                var Ing_Externos = $('#Ing_Externos').get(0).value;
                var Suma_Deduc = $('#Suma_Deduc').get(0).value;
                var Deduc_Auto = $('#Deduc_Auto').get(0).value;
                var Part_Utilidad = $('#Part_Utilidad').get(0).value;
                var Perdidas = $('#Perdidas').get(0).value;
                var Reducciones = $('#Reducciones').get(0).value;

                var Pagos_Prov = $('#Pagos_Prov').get(0).value;
                var Imp_Ret = $('#Imp_Ret').get(0).value;
                var OtrasCargo = $('#OtrasCargo').get(0).value;
                var OtrasFavor = $('#OtrasFavor').get(0).value;
                $('#L_Total_Deduc').load('ISR_R97_Op2', {Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto});
                $('#L_BaseG').load('ISR_R97_OpB', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas});
                $('#L_ISRDet').load('ISR_R97_OpD', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas});
                $('#L_ISRC').load('ISR_R97_OpC', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas, Reducciones: Reducciones});
                $('#L_ACargo').load('ISR_R97_OpA', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas, Reducciones: Reducciones, Pagos_Prov: Pagos_Prov, Imp_Ret: Imp_Ret, OtrasCargo: OtrasCargo, OtrasFavor: OtrasFavor});
                $('#L_ACargo2').load('ISR_R97_OpA2', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas, Reducciones: Reducciones, Pagos_Prov: Pagos_Prov, Imp_Ret: Imp_Ret, OtrasCargo: OtrasCargo, OtrasFavor: OtrasFavor});
            });
        },
        ISR_R97_4: function () {
            $(document).on('change', '#Deduc_Auto', function (e) {
                var Suma_Ing = $('#Suma_Ing').get(0).value;
                var Ing = $('#Ing').get(0).value;
                //alert(Deduc_Auto);	    

                var Ing_Externos = $('#Ing_Externos').get(0).value;
                var Suma_Deduc = $('#Suma_Deduc').get(0).value;
                var Deduc_Auto = $('#Deduc_Auto').get(0).value;
                var Part_Utilidad = $('#Part_Utilidad').get(0).value;
                var Perdidas = $('#Perdidas').get(0).value;
                var Reducciones = $('#Reducciones').get(0).value;

                var Pagos_Prov = $('#Pagos_Prov').get(0).value;
                var Imp_Ret = $('#Imp_Ret').get(0).value;
                var OtrasCargo = $('#OtrasCargo').get(0).value;
                var OtrasFavor = $('#OtrasFavor').get(0).value;
                $('#L_Total_Deduc').load('ISR_R97_Op2', {Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto});
                $('#L_BaseG').load('ISR_R97_OpB', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas});
                $('#L_ISRDet').load('ISR_R97_OpD', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas});
                $('#L_ISRC').load('ISR_R97_OpC', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas, Reducciones: Reducciones});
                $('#L_ACargo').load('ISR_R97_OpA', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas, Reducciones: Reducciones, Pagos_Prov: Pagos_Prov, Imp_Ret: Imp_Ret, OtrasCargo: OtrasCargo, OtrasFavor: OtrasFavor});
                $('#L_ACargo2').load('ISR_R97_OpA2', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas, Reducciones: Reducciones, Pagos_Prov: Pagos_Prov, Imp_Ret: Imp_Ret, OtrasCargo: OtrasCargo, OtrasFavor: OtrasFavor});
            });
        },
        ISR_R97_41: function () {
            $(document).on('change', '#Ing_Externos', function (e) {
                var Suma_Ing = $('#Suma_Ing').get(0).value;
                var Ing = $('#Ing').get(0).value;
                //alert(Deduc_Auto);	
                var Ing_Externos = $('#Ing_Externos').get(0).value;
                var Suma_Deduc = $('#Suma_Deduc').get(0).value;
                var Deduc_Auto = $('#Deduc_Auto').get(0).value;
                var Part_Utilidad = $('#Part_Utilidad').get(0).value;
                var Perdidas = $('#Perdidas').get(0).value;
                var Reducciones = $('#Reducciones').get(0).value;

                var Pagos_Prov = $('#Pagos_Prov').get(0).value;
                var Imp_Ret = $('#Imp_Ret').get(0).value;
                var OtrasCargo = $('#OtrasCargo').get(0).value;
                var OtrasFavor = $('#OtrasFavor').get(0).value;
                $('#L_BaseG').load('ISR_R97_OpB', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas});
                $('#L_ISRDet').load('ISR_R97_OpD', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas});
                $('#L_ISRC').load('ISR_R97_OpC', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas, Reducciones: Reducciones});
                $('#L_ACargo').load('ISR_R97_OpA', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas, Reducciones: Reducciones, Pagos_Prov: Pagos_Prov, Imp_Ret: Imp_Ret, OtrasCargo: OtrasCargo, OtrasFavor: OtrasFavor});
                $('#L_ACargo2').load('ISR_R97_OpA2', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas, Reducciones: Reducciones, Pagos_Prov: Pagos_Prov, Imp_Ret: Imp_Ret, OtrasCargo: OtrasCargo, OtrasFavor: OtrasFavor});
            });
        },
        ISR_R97_42: function () {
            $(document).on('change', '#Part_Utilidad', function (e) {
                var Suma_Ing = $('#Suma_Ing').get(0).value;
                var Ing = $('#Ing').get(0).value;
                //alert(Deduc_Auto);	
                var Ing_Externos = $('#Ing_Externos').get(0).value;
                var Suma_Deduc = $('#Suma_Deduc').get(0).value;
                var Deduc_Auto = $('#Deduc_Auto').get(0).value;
                var Part_Utilidad = $('#Part_Utilidad').get(0).value;
                var Perdidas = $('#Perdidas').get(0).value;
                var Reducciones = $('#Reducciones').get(0).value;

                var Pagos_Prov = $('#Pagos_Prov').get(0).value;
                var Imp_Ret = $('#Imp_Ret').get(0).value;
                var OtrasCargo = $('#OtrasCargo').get(0).value;
                var OtrasFavor = $('#OtrasFavor').get(0).value;
                $('#L_BaseG').load('ISR_R97_OpB', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas});
                $('#L_ISRDet').load('ISR_R97_OpD', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas});
                $('#L_ISRC').load('ISR_R97_OpC', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas, Reducciones: Reducciones});
                $('#L_ACargo').load('ISR_R97_OpA', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas, Reducciones: Reducciones, Pagos_Prov: Pagos_Prov, Imp_Ret: Imp_Ret, OtrasCargo: OtrasCargo, OtrasFavor: OtrasFavor});
                $('#L_ACargo2').load('ISR_R97_OpA2', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas, Reducciones: Reducciones, Pagos_Prov: Pagos_Prov, Imp_Ret: Imp_Ret, OtrasCargo: OtrasCargo, OtrasFavor: OtrasFavor});
            });
        },
        ISR_R97_43: function () {
            $(document).on('change', '#Perdidas', function (e) {
                var Suma_Ing = $('#Suma_Ing').get(0).value;
                var Ing = $('#Ing').get(0).value;
                //alert(Deduc_Auto);	
                var Ing_Externos = $('#Ing_Externos').get(0).value;
                var Suma_Deduc = $('#Suma_Deduc').get(0).value;
                var Deduc_Auto = $('#Deduc_Auto').get(0).value;
                var Part_Utilidad = $('#Part_Utilidad').get(0).value;
                var Perdidas = $('#Perdidas').get(0).value;
                var Reducciones = $('#Reducciones').get(0).value;

                var Pagos_Prov = $('#Pagos_Prov').get(0).value;
                var Imp_Ret = $('#Imp_Ret').get(0).value;
                var OtrasCargo = $('#OtrasCargo').get(0).value;
                var OtrasFavor = $('#OtrasFavor').get(0).value;
                $('#L_BaseG').load('ISR_R97_OpB', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas});
                $('#L_ISRDet').load('ISR_R97_OpD', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas});
                $('#L_ISRC').load('ISR_R97_OpC', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas, Reducciones: Reducciones});
                $('#L_ACargo').load('ISR_R97_OpA', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas, Reducciones: Reducciones, Pagos_Prov: Pagos_Prov, Imp_Ret: Imp_Ret, OtrasCargo: OtrasCargo, OtrasFavor: OtrasFavor});
                $('#L_ACargo2').load('ISR_R97_OpA2', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas, Reducciones: Reducciones, Pagos_Prov: Pagos_Prov, Imp_Ret: Imp_Ret, OtrasCargo: OtrasCargo, OtrasFavor: OtrasFavor});
            });
        },
        ISR_R97_44: function () {
            $(document).on('change', '#Reducciones', function (e) {
                var Suma_Ing = $('#Suma_Ing').get(0).value;
                var Ing = $('#Ing').get(0).value;
                //alert(Deduc_Auto);	
                var Ing_Externos = $('#Ing_Externos').get(0).value;
                var Suma_Deduc = $('#Suma_Deduc').get(0).value;
                var Deduc_Auto = $('#Deduc_Auto').get(0).value;
                var Part_Utilidad = $('#Part_Utilidad').get(0).value;
                var Perdidas = $('#Perdidas').get(0).value;
                var Reducciones = $('#Reducciones').get(0).value;

                var Pagos_Prov = $('#Pagos_Prov').get(0).value;
                var Imp_Ret = $('#Imp_Ret').get(0).value;
                var OtrasCargo = $('#OtrasCargo').get(0).value;
                var OtrasFavor = $('#OtrasFavor').get(0).value;

                $('#L_ISRC').load('ISR_R97_OpC', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas, Reducciones: Reducciones});
                $('#L_ACargo').load('ISR_R97_OpA', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas, Reducciones: Reducciones, Pagos_Prov: Pagos_Prov, Imp_Ret: Imp_Ret, OtrasCargo: OtrasCargo, OtrasFavor: OtrasFavor});
                $('#L_ACargo2').load('ISR_R97_OpA2', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas, Reducciones: Reducciones, Pagos_Prov: Pagos_Prov, Imp_Ret: Imp_Ret, OtrasCargo: OtrasCargo, OtrasFavor: OtrasFavor});
            });
        },
        ISR_R97_45: function () {
            $(document).on('change', '#Pagos_Prov', function (e) {
                var Suma_Ing = $('#Suma_Ing').get(0).value;
                var Ing = $('#Ing').get(0).value;
                //alert(Deduc_Auto);	
                var Ing_Externos = $('#Ing_Externos').get(0).value;
                var Suma_Deduc = $('#Suma_Deduc').get(0).value;
                var Deduc_Auto = $('#Deduc_Auto').get(0).value;
                var Part_Utilidad = $('#Part_Utilidad').get(0).value;
                var Perdidas = $('#Perdidas').get(0).value;
                var Reducciones = $('#Reducciones').get(0).value;

                var Pagos_Prov = $('#Pagos_Prov').get(0).value;
                var Imp_Ret = $('#Imp_Ret').get(0).value;
                var OtrasCargo = $('#OtrasCargo').get(0).value;
                var OtrasFavor = $('#OtrasFavor').get(0).value;

                $('#L_ACargo').load('ISR_R97_OpA', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas, Reducciones: Reducciones, Pagos_Prov: Pagos_Prov, Imp_Ret: Imp_Ret, OtrasCargo: OtrasCargo, OtrasFavor: OtrasFavor});
                $('#L_ACargo2').load('ISR_R97_OpA2', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas, Reducciones: Reducciones, Pagos_Prov: Pagos_Prov, Imp_Ret: Imp_Ret, OtrasCargo: OtrasCargo, OtrasFavor: OtrasFavor});
            });
        },
        ISR_R97_46: function () {
            $(document).on('change', '#Imp_Ret', function (e) {
                var Suma_Ing = $('#Suma_Ing').get(0).value;
                var Ing = $('#Ing').get(0).value;
                //alert(Deduc_Auto);	
                var Ing_Externos = $('#Ing_Externos').get(0).value;
                var Suma_Deduc = $('#Suma_Deduc').get(0).value;
                var Deduc_Auto = $('#Deduc_Auto').get(0).value;
                var Part_Utilidad = $('#Part_Utilidad').get(0).value;
                var Perdidas = $('#Perdidas').get(0).value;
                var Reducciones = $('#Reducciones').get(0).value;

                var Pagos_Prov = $('#Pagos_Prov').get(0).value;
                var Imp_Ret = $('#Imp_Ret').get(0).value;
                var OtrasCargo = $('#OtrasCargo').get(0).value;
                var OtrasFavor = $('#OtrasFavor').get(0).value;

                $('#L_ACargo').load('ISR_R97_OpA', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas, Reducciones: Reducciones, Pagos_Prov: Pagos_Prov, Imp_Ret: Imp_Ret, OtrasCargo: OtrasCargo, OtrasFavor: OtrasFavor});
                $('#L_ACargo2').load('ISR_R97_OpA2', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas, Reducciones: Reducciones, Pagos_Prov: Pagos_Prov, Imp_Ret: Imp_Ret, OtrasCargo: OtrasCargo, OtrasFavor: OtrasFavor});
            });
        },
        ISR_R97_47: function () {
            $(document).on('change', '#OtrasCargo', function (e) {
                var Suma_Ing = $('#Suma_Ing').get(0).value;
                var Ing = $('#Ing').get(0).value;
                //alert(Deduc_Auto);	
                var Ing_Externos = $('#Ing_Externos').get(0).value;
                var Suma_Deduc = $('#Suma_Deduc').get(0).value;
                var Deduc_Auto = $('#Deduc_Auto').get(0).value;
                var Part_Utilidad = $('#Part_Utilidad').get(0).value;
                var Perdidas = $('#Perdidas').get(0).value;
                var Reducciones = $('#Reducciones').get(0).value;

                var Pagos_Prov = $('#Pagos_Prov').get(0).value;
                var Imp_Ret = $('#Imp_Ret').get(0).value;
                var OtrasCargo = $('#OtrasCargo').get(0).value;
                var OtrasFavor = $('#OtrasFavor').get(0).value;

                $('#L_ACargo').load('ISR_R97_OpA', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas, Reducciones: Reducciones, Pagos_Prov: Pagos_Prov, Imp_Ret: Imp_Ret, OtrasCargo: OtrasCargo, OtrasFavor: OtrasFavor});
                $('#L_ACargo2').load('ISR_R97_OpA2', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas, Reducciones: Reducciones, Pagos_Prov: Pagos_Prov, Imp_Ret: Imp_Ret, OtrasCargo: OtrasCargo, OtrasFavor: OtrasFavor});
            });
        },
        ISR_R97_48: function () {
            $(document).on('change', '#OtrasFavor', function (e) {
                var Suma_Ing = $('#Suma_Ing').get(0).value;
                var Ing = $('#Ing').get(0).value;
                //alert(Deduc_Auto);	
                var Ing_Externos = $('#Ing_Externos').get(0).value;
                var Suma_Deduc = $('#Suma_Deduc').get(0).value;
                var Deduc_Auto = $('#Deduc_Auto').get(0).value;
                var Part_Utilidad = $('#Part_Utilidad').get(0).value;
                var Perdidas = $('#Perdidas').get(0).value;
                var Reducciones = $('#Reducciones').get(0).value;

                var Pagos_Prov = $('#Pagos_Prov').get(0).value;
                var Imp_Ret = $('#Imp_Ret').get(0).value;
                var OtrasCargo = $('#OtrasCargo').get(0).value;
                var OtrasFavor = $('#OtrasFavor').get(0).value;

                $('#L_ACargo').load('ISR_R97_OpA', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas, Reducciones: Reducciones, Pagos_Prov: Pagos_Prov, Imp_Ret: Imp_Ret, OtrasCargo: OtrasCargo, OtrasFavor: OtrasFavor});
                $('#L_ACargo2').load('ISR_R97_OpA2', {Suma_Ing: Suma_Ing, Ing: Ing, Ing_Externos: Ing_Externos, Suma_Deduc: Suma_Deduc, Deduc_Auto: Deduc_Auto, Part_Utilidad: Part_Utilidad, Perdidas: Perdidas, Reducciones: Reducciones, Pagos_Prov: Pagos_Prov, Imp_Ret: Imp_Ret, OtrasCargo: OtrasCargo, OtrasFavor: OtrasFavor});
            });
        },
        ISR_R97_5: function () {
            $(document).on('change', '#ACargo', function (e) {
                var ACargo = $('#ACargo').get(0).value;
                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;

                var Sub_Emple = $('#Sub_Emple').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel = $('#Diesel').get(0).value;


                var MontoPagado = $('#MontoPagado').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;
                //alert(IEPS);

                $('#L_TotalC').load('ISR_R97_Op3', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas});
                $('#L_TotalApp').load('ISR_R97_Op4', {Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel});
                $('#L_CantCargo').load('ISR_R97_Op5', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantFavor').load('ISR_R97_Op6', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantPagar').load('ISR_R97_Op7', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R97_6: function () {
            $(document).on('change', '#ParteAct', function (e) {
                var ACargo = $('#ACargo').get(0).value;
                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;

                var Sub_Emple = $('#Sub_Emple').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel = $('#Diesel').get(0).value;


                var MontoPagado = $('#MontoPagado').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;
                //alert(IEPS);

                $('#L_TotalC').load('ISR_R97_Op3', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas});
                $('#L_TotalApp').load('ISR_R97_Op4', {Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel});
                $('#L_CantCargo').load('ISR_R97_Op5', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantFavor').load('ISR_R97_Op6', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantPagar').load('ISR_R97_Op7', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R97_7: function () {
            $(document).on('change', '#Recargos', function (e) {
                var ACargo = $('#ACargo').get(0).value;
                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;

                var Sub_Emple = $('#Sub_Emple').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel = $('#Diesel').get(0).value;


                var MontoPagado = $('#MontoPagado').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;
                //alert(IEPS);

                $('#L_TotalC').load('ISR_R97_Op3', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas});
                $('#L_TotalApp').load('ISR_R97_Op4', {Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel});
                $('#L_CantCargo').load('ISR_R97_Op5', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantFavor').load('ISR_R97_Op6', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantPagar').load('ISR_R97_Op7', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R97_8: function () {
            $(document).on('change', '#Multas', function (e) {
                var ACargo = $('#ACargo').get(0).value;
                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;

                var Sub_Emple = $('#Sub_Emple').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel = $('#Diesel').get(0).value;


                var MontoPagado = $('#MontoPagado').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;
                //alert(IEPS);

                $('#L_TotalC').load('ISR_R97_Op3', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas});
                $('#L_TotalApp').load('ISR_R97_Op4', {Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel});
                $('#L_CantCargo').load('ISR_R97_Op5', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantFavor').load('ISR_R97_Op6', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantPagar').load('ISR_R97_Op7', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R97_9: function () {
            $(document).on('change', '#Sub_Emple', function (e) {
                var ACargo = $('#ACargo').get(0).value;
                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;

                var Sub_Emple = $('#Sub_Emple').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel = $('#Diesel').get(0).value;


                var MontoPagado = $('#MontoPagado').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;
                //alert(IEPS);

                $('#L_TotalC').load('ISR_R97_Op3', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas});
                $('#L_TotalApp').load('ISR_R97_Op4', {Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel});
                $('#L_CantCargo').load('ISR_R97_Op5', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantFavor').load('ISR_R97_Op6', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantPagar').load('ISR_R97_Op7', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R97_10: function () {
            $(document).on('change', '#Compensaciones', function (e) {
                var ACargo = $('#ACargo').get(0).value;
                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;

                var Sub_Emple = $('#Sub_Emple').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel = $('#Diesel').get(0).value;


                var MontoPagado = $('#MontoPagado').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;
                //alert(IEPS);

                $('#L_TotalC').load('ISR_R97_Op3', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas});
                $('#L_TotalApp').load('ISR_R97_Op4', {Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel});
                $('#L_CantCargo').load('ISR_R97_Op5', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantFavor').load('ISR_R97_Op6', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantPagar').load('ISR_R97_Op7', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R97_11: function () {
            $(document).on('change', '#IEPS', function (e) {
                var ACargo = $('#ACargo').get(0).value;
                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;

                var Sub_Emple = $('#Sub_Emple').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel = $('#Diesel').get(0).value;


                var MontoPagado = $('#MontoPagado').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;
                //alert(IEPS);

                $('#L_TotalC').load('ISR_R97_Op3', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas});
                $('#L_TotalApp').load('ISR_R97_Op4', {Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel});
                $('#L_CantCargo').load('ISR_R97_Op5', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantFavor').load('ISR_R97_Op6', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantPagar').load('ISR_R97_Op7', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R97_12: function () {
            $(document).on('change', '#Otros', function (e) {
                var ACargo = $('#ACargo').get(0).value;
                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;

                var Sub_Emple = $('#Sub_Emple').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel = $('#Diesel').get(0).value;


                var MontoPagado = $('#MontoPagado').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;
                //alert(IEPS);

                $('#L_TotalC').load('ISR_R97_Op3', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas});
                $('#L_TotalApp').load('ISR_R97_Op4', {Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel});
                $('#L_CantCargo').load('ISR_R97_Op5', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantFavor').load('ISR_R97_Op6', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantPagar').load('ISR_R97_Op7', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R97_13: function () {
            $(document).on('change', '#Diesel', function (e) {
                var ACargo = $('#ACargo').get(0).value;
                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;

                var Sub_Emple = $('#Sub_Emple').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel = $('#Diesel').get(0).value;


                var MontoPagado = $('#MontoPagado').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;
                //alert(IEPS);

                $('#L_TotalC').load('ISR_R97_Op3', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas});
                $('#L_TotalApp').load('ISR_R97_Op4', {Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel});
                $('#L_CantCargo').load('ISR_R97_Op5', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantFavor').load('ISR_R97_Op6', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantPagar').load('ISR_R97_Op7', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R97_14: function () {
            $(document).on('change', '#MontoPagado', function (e) {
                var ACargo = $('#ACargo').get(0).value;
                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;

                var Sub_Emple = $('#Sub_Emple').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel = $('#Diesel').get(0).value;


                var MontoPagado = $('#MontoPagado').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;
                //alert(IEPS);

                $('#L_TotalC').load('ISR_R97_Op3', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas});
                $('#L_TotalApp').load('ISR_R97_Op4', {Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel});
                $('#L_CantCargo').load('ISR_R97_Op5', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantFavor').load('ISR_R97_Op6', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantPagar').load('ISR_R97_Op7', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R97_15: function () {
            $(document).on('change', '#Imp_UltHrs', function (e) {
                var ACargo = $('#ACargo').get(0).value;
                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;

                var Sub_Emple = $('#Sub_Emple').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel = $('#Diesel').get(0).value;


                var MontoPagado = $('#MontoPagado').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;
                //alert(IEPS);

                $('#L_TotalC').load('ISR_R97_Op3', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas});
                $('#L_TotalApp').load('ISR_R97_Op4', {Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel});
                $('#L_CantCargo').load('ISR_R97_Op5', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantFavor').load('ISR_R97_Op6', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantPagar').load('ISR_R97_Op7', {ACargo: ACargo, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Sub_Emple: Sub_Emple, Compensaciones: Compensaciones, IEPS: IEPS, Otros: Otros, Diesel: Diesel, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R10_0: function () {
            $(document).on('change', '#meses', function (e) {
                var meses = $('#meses').get(0).value;
                var DeduccionOp = $('#DeduccionOp').get(0).value;
                var Ing = $('#Ing').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var DImp_Local = $('#DImp_Local').get(0).value;
                var Predial = $('#Predial').get(0).value;
                var D_PrimerEm = $('#D_PrimerEm').get(0).value;
                var Imp_Rete = $('#Imp_Rete').get(0).value;
                var Otras_Cargo = $('#Otras_Cargo').get(0).value;
                var Otras_Favor = $('#Otras_Favor').get(0).value;
                //alert(IEPS);
                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;

                var Credito = $('#Credito').get(0).value;
                var Sub_Empleo = $('#Sub_Empleo').get(0).value;
                var Imp_Dep = $('#Imp_Dep').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Diesel = $('#Diesel').get(0).value;
                var Carretera = $('#Carretera').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel_Marino = $('#Diesel_Marino').get(0).value;


                var MontoPagado = $('#MontoPagado').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;
                $('#L_DA').load('ISR_R10_Op_1_1', {DeduccionOp: DeduccionOp});
                $('#L_DO').load('ISR_R10_Op_1_2', {DeduccionOp: DeduccionOp, Ing: Ing});
                $('#L_Base').load('ISR_R10_Op_1_3', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm});
                $('#L_ACargoTablas').load('ISR_R10_Op_1_4', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, meses: meses});
                $('#L_ACargo').load('ISR_R10_Op_1_5', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses});
                $('#L_ACargo2').load('ISR_R10_Op_1_52', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses});
                $('#L_TotalC').load('ISR_R10_Op3', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas});
                $('#L_CantCargo').load('ISR_R10_Op5', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantFavor').load('ISR_R10_Op6', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantPagar').load('ISR_R10_Op7', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R10_1: function () {
            $(document).on('change', '#DeduccionOp', function (e) {
                var meses = $('#meses').get(0).value;
                var DeduccionOp = $('#DeduccionOp').get(0).value;
                var Ing = $('#Ing').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var DImp_Local = $('#DImp_Local').get(0).value;
                var Predial = $('#Predial').get(0).value;
                var D_PrimerEm = $('#D_PrimerEm').get(0).value;
                var Imp_Rete = $('#Imp_Rete').get(0).value;
                var Otras_Cargo = $('#Otras_Cargo').get(0).value;
                var Otras_Favor = $('#Otras_Favor').get(0).value;
                //alert(IEPS);
                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;

                var Credito = $('#Credito').get(0).value;
                var Sub_Empleo = $('#Sub_Empleo').get(0).value;
                var Imp_Dep = $('#Imp_Dep').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Diesel = $('#Diesel').get(0).value;
                var Carretera = $('#Carretera').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel_Marino = $('#Diesel_Marino').get(0).value;


                var MontoPagado = $('#MontoPagado').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;
                $('#L_DA').load('ISR_R10_Op_1_1', {DeduccionOp: DeduccionOp});
                $('#L_DO').load('ISR_R10_Op_1_2', {DeduccionOp: DeduccionOp, Ing: Ing});
                $('#L_Base').load('ISR_R10_Op_1_3', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm});
                $('#L_ACargoTablas').load('ISR_R10_Op_1_4', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, meses: meses});
                $('#L_ACargo').load('ISR_R10_Op_1_5', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses});
                $('#L_ACargo2').load('ISR_R10_Op_1_52', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses});
                $('#L_TotalC').load('ISR_R10_Op3', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas});
                $('#L_CantCargo').load('ISR_R10_Op5', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantFavor').load('ISR_R10_Op6', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantPagar').load('ISR_R10_Op7', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R10_2: function () {
            $(document).on('change', '#Ing', function (e) {
                var meses = $('#meses').get(0).value;
                var DeduccionOp = $('#DeduccionOp').get(0).value;
                var Ing = $('#Ing').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var DImp_Local = $('#DImp_Local').get(0).value;
                var Predial = $('#Predial').get(0).value;
                var D_PrimerEm = $('#D_PrimerEm').get(0).value;
                var Imp_Rete = $('#Imp_Rete').get(0).value;
                var Otras_Cargo = $('#Otras_Cargo').get(0).value;
                var Otras_Favor = $('#Otras_Favor').get(0).value;
                //alert(IEPS);
                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;

                var Credito = $('#Credito').get(0).value;
                var Sub_Empleo = $('#Sub_Empleo').get(0).value;
                var Imp_Dep = $('#Imp_Dep').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Diesel = $('#Diesel').get(0).value;
                var Carretera = $('#Carretera').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel_Marino = $('#Diesel_Marino').get(0).value;


                var MontoPagado = $('#MontoPagado').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;
                $('#L_DA').load('ISR_R10_Op_1_1', {DeduccionOp: DeduccionOp});
                $('#L_DO').load('ISR_R10_Op_1_2', {DeduccionOp: DeduccionOp, Ing: Ing});
                $('#L_Base').load('ISR_R10_Op_1_3', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm});
                $('#L_ACargoTablas').load('ISR_R10_Op_1_4', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, meses: meses});
                $('#L_ACargo').load('ISR_R10_Op_1_5', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses});
                $('#L_ACargo2').load('ISR_R10_Op_1_52', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses});
                $('#L_TotalC').load('ISR_R10_Op3', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas});
                $('#L_CantCargo').load('ISR_R10_Op5', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantFavor').load('ISR_R10_Op6', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantPagar').load('ISR_R10_Op7', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R10_3: function () {
            $(document).on('change', '#Deducciones', function (e) {
                var meses = $('#meses').get(0).value;
                var DeduccionOp = $('#DeduccionOp').get(0).value;
                var Ing = $('#Ing').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var DImp_Local = $('#DImp_Local').get(0).value;
                var Predial = $('#Predial').get(0).value;
                var D_PrimerEm = $('#D_PrimerEm').get(0).value;
                var Imp_Rete = $('#Imp_Rete').get(0).value;
                var Otras_Cargo = $('#Otras_Cargo').get(0).value;
                var Otras_Favor = $('#Otras_Favor').get(0).value;
                //alert(IEPS);
                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;

                var Credito = $('#Credito').get(0).value;
                var Sub_Empleo = $('#Sub_Empleo').get(0).value;
                var Imp_Dep = $('#Imp_Dep').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Diesel = $('#Diesel').get(0).value;
                var Carretera = $('#Carretera').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel_Marino = $('#Diesel_Marino').get(0).value;


                var MontoPagado = $('#MontoPagado').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;
                $('#L_DA').load('ISR_R10_Op_1_1', {DeduccionOp: DeduccionOp});
                $('#L_DO').load('ISR_R10_Op_1_2', {DeduccionOp: DeduccionOp, Ing: Ing});
                $('#L_Base').load('ISR_R10_Op_1_3', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm});
                $('#L_ACargoTablas').load('ISR_R10_Op_1_4', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, meses: meses});
                $('#L_ACargo').load('ISR_R10_Op_1_5', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses});
                $('#L_ACargo2').load('ISR_R10_Op_1_52', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses});
                $('#L_TotalC').load('ISR_R10_Op3', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas});
                $('#L_CantCargo').load('ISR_R10_Op5', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantFavor').load('ISR_R10_Op6', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantPagar').load('ISR_R10_Op7', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R10_4: function () {
            $(document).on('change', '#DImp_Local', function (e) {
                var meses = $('#meses').get(0).value;
                var DeduccionOp = $('#DeduccionOp').get(0).value;
                var Ing = $('#Ing').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var DImp_Local = $('#DImp_Local').get(0).value;
                var Predial = $('#Predial').get(0).value;
                var D_PrimerEm = $('#D_PrimerEm').get(0).value;
                var Imp_Rete = $('#Imp_Rete').get(0).value;
                var Otras_Cargo = $('#Otras_Cargo').get(0).value;
                var Otras_Favor = $('#Otras_Favor').get(0).value;
                //alert(IEPS);
                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;

                var Credito = $('#Credito').get(0).value;
                var Sub_Empleo = $('#Sub_Empleo').get(0).value;
                var Imp_Dep = $('#Imp_Dep').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Diesel = $('#Diesel').get(0).value;
                var Carretera = $('#Carretera').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel_Marino = $('#Diesel_Marino').get(0).value;


                var MontoPagado = $('#MontoPagado').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;
                $('#L_DA').load('ISR_R10_Op_1_1', {DeduccionOp: DeduccionOp});
                $('#L_DO').load('ISR_R10_Op_1_2', {DeduccionOp: DeduccionOp, Ing: Ing});
                $('#L_Base').load('ISR_R10_Op_1_3', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm});
                $('#L_ACargoTablas').load('ISR_R10_Op_1_4', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, meses: meses});
                $('#L_ACargo').load('ISR_R10_Op_1_5', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses});
                $('#L_ACargo2').load('ISR_R10_Op_1_52', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses});
                $('#L_TotalC').load('ISR_R10_Op3', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas});
                $('#L_CantCargo').load('ISR_R10_Op5', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantFavor').load('ISR_R10_Op6', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantPagar').load('ISR_R10_Op7', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R10_5: function () {
            $(document).on('change', '#Predial', function (e) {
                var meses = $('#meses').get(0).value;
                var DeduccionOp = $('#DeduccionOp').get(0).value;
                var Ing = $('#Ing').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var DImp_Local = $('#DImp_Local').get(0).value;
                var Predial = $('#Predial').get(0).value;
                var D_PrimerEm = $('#D_PrimerEm').get(0).value;
                var Imp_Rete = $('#Imp_Rete').get(0).value;
                var Otras_Cargo = $('#Otras_Cargo').get(0).value;
                var Otras_Favor = $('#Otras_Favor').get(0).value;
                //alert(IEPS);
                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;

                var Credito = $('#Credito').get(0).value;
                var Sub_Empleo = $('#Sub_Empleo').get(0).value;
                var Imp_Dep = $('#Imp_Dep').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Diesel = $('#Diesel').get(0).value;
                var Carretera = $('#Carretera').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel_Marino = $('#Diesel_Marino').get(0).value;


                var MontoPagado = $('#MontoPagado').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;
                $('#L_DA').load('ISR_R10_Op_1_1', {DeduccionOp: DeduccionOp});
                $('#L_DO').load('ISR_R10_Op_1_2', {DeduccionOp: DeduccionOp, Ing: Ing});
                $('#L_Base').load('ISR_R10_Op_1_3', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm});
                $('#L_ACargoTablas').load('ISR_R10_Op_1_4', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, meses: meses});
                $('#L_ACargo').load('ISR_R10_Op_1_5', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses});
                $('#L_ACargo2').load('ISR_R10_Op_1_52', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses});
                $('#L_TotalC').load('ISR_R10_Op3', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas});
                $('#L_CantCargo').load('ISR_R10_Op5', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantFavor').load('ISR_R10_Op6', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantPagar').load('ISR_R10_Op7', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R10_6: function () {
            $(document).on('change', '#D_PrimerEm', function (e) {
                var meses = $('#meses').get(0).value;
                var DeduccionOp = $('#DeduccionOp').get(0).value;
                var Ing = $('#Ing').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var DImp_Local = $('#DImp_Local').get(0).value;
                var Predial = $('#Predial').get(0).value;
                var D_PrimerEm = $('#D_PrimerEm').get(0).value;
                var Imp_Rete = $('#Imp_Rete').get(0).value;
                var Otras_Cargo = $('#Otras_Cargo').get(0).value;
                var Otras_Favor = $('#Otras_Favor').get(0).value;
                //alert(IEPS);
                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;

                var Credito = $('#Credito').get(0).value;
                var Sub_Empleo = $('#Sub_Empleo').get(0).value;
                var Imp_Dep = $('#Imp_Dep').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Diesel = $('#Diesel').get(0).value;
                var Carretera = $('#Carretera').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel_Marino = $('#Diesel_Marino').get(0).value;


                var MontoPagado = $('#MontoPagado').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;
                $('#L_DA').load('ISR_R10_Op_1_1', {DeduccionOp: DeduccionOp});
                $('#L_DO').load('ISR_R10_Op_1_2', {DeduccionOp: DeduccionOp, Ing: Ing});
                $('#L_Base').load('ISR_R10_Op_1_3', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm});
                $('#L_ACargoTablas').load('ISR_R10_Op_1_4', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, meses: meses});
                $('#L_ACargo').load('ISR_R10_Op_1_5', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses});
                $('#L_ACargo2').load('ISR_R10_Op_1_52', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses});
                $('#L_TotalC').load('ISR_R10_Op3', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas});
                $('#L_CantCargo').load('ISR_R10_Op5', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantFavor').load('ISR_R10_Op6', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantPagar').load('ISR_R10_Op7', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R10_7: function () {
            $(document).on('change', '#Imp_Rete', function (e) {
                var meses = $('#meses').get(0).value;
                var DeduccionOp = $('#DeduccionOp').get(0).value;
                var Ing = $('#Ing').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var DImp_Local = $('#DImp_Local').get(0).value;
                var Predial = $('#Predial').get(0).value;
                var D_PrimerEm = $('#D_PrimerEm').get(0).value;
                var Imp_Rete = $('#Imp_Rete').get(0).value;
                var Otras_Cargo = $('#Otras_Cargo').get(0).value;
                var Otras_Favor = $('#Otras_Favor').get(0).value;
                //alert(IEPS);
                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;

                var Credito = $('#Credito').get(0).value;
                var Sub_Empleo = $('#Sub_Empleo').get(0).value;
                var Imp_Dep = $('#Imp_Dep').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Diesel = $('#Diesel').get(0).value;
                var Carretera = $('#Carretera').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel_Marino = $('#Diesel_Marino').get(0).value;


                var MontoPagado = $('#MontoPagado').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;
                $('#L_DA').load('ISR_R10_Op_1_1', {DeduccionOp: DeduccionOp});
                $('#L_DO').load('ISR_R10_Op_1_2', {DeduccionOp: DeduccionOp, Ing: Ing});
                $('#L_Base').load('ISR_R10_Op_1_3', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm});
                $('#L_ACargoTablas').load('ISR_R10_Op_1_4', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, meses: meses});
                $('#L_ACargo').load('ISR_R10_Op_1_5', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses});
                $('#L_ACargo2').load('ISR_R10_Op_1_52', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses});
                $('#L_TotalC').load('ISR_R10_Op3', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas});
                $('#L_CantCargo').load('ISR_R10_Op5', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantFavor').load('ISR_R10_Op6', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantPagar').load('ISR_R10_Op7', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R10_8: function () {
            $(document).on('change', '#Otras_Cargo', function (e) {
                var meses = $('#meses').get(0).value;
                var DeduccionOp = $('#DeduccionOp').get(0).value;
                var Ing = $('#Ing').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var DImp_Local = $('#DImp_Local').get(0).value;
                var Predial = $('#Predial').get(0).value;
                var D_PrimerEm = $('#D_PrimerEm').get(0).value;
                var Imp_Rete = $('#Imp_Rete').get(0).value;
                var Otras_Cargo = $('#Otras_Cargo').get(0).value;
                var Otras_Favor = $('#Otras_Favor').get(0).value;
                //alert(IEPS);
                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;

                var Credito = $('#Credito').get(0).value;
                var Sub_Empleo = $('#Sub_Empleo').get(0).value;
                var Imp_Dep = $('#Imp_Dep').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Diesel = $('#Diesel').get(0).value;
                var Carretera = $('#Carretera').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel_Marino = $('#Diesel_Marino').get(0).value;


                var MontoPagado = $('#MontoPagado').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;
                $('#L_DA').load('ISR_R10_Op_1_1', {DeduccionOp: DeduccionOp});
                $('#L_DO').load('ISR_R10_Op_1_2', {DeduccionOp: DeduccionOp, Ing: Ing});
                $('#L_Base').load('ISR_R10_Op_1_3', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm});
                $('#L_ACargoTablas').load('ISR_R10_Op_1_4', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, meses: meses});
                $('#L_ACargo').load('ISR_R10_Op_1_5', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses});
                $('#L_ACargo2').load('ISR_R10_Op_1_52', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses});
                $('#L_TotalC').load('ISR_R10_Op3', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas});
                $('#L_CantCargo').load('ISR_R10_Op5', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantFavor').load('ISR_R10_Op6', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantPagar').load('ISR_R10_Op7', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R10_9: function () {
            $(document).on('change', '#Otras_Favor', function (e) {
                var meses = $('#meses').get(0).value;
                var DeduccionOp = $('#DeduccionOp').get(0).value;
                var Ing = $('#Ing').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var DImp_Local = $('#DImp_Local').get(0).value;
                var Predial = $('#Predial').get(0).value;
                var D_PrimerEm = $('#D_PrimerEm').get(0).value;
                var Imp_Rete = $('#Imp_Rete').get(0).value;
                var Otras_Cargo = $('#Otras_Cargo').get(0).value;
                var Otras_Favor = $('#Otras_Favor').get(0).value;
                //alert(IEPS);
                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;

                var Credito = $('#Credito').get(0).value;
                var Sub_Empleo = $('#Sub_Empleo').get(0).value;
                var Imp_Dep = $('#Imp_Dep').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Diesel = $('#Diesel').get(0).value;
                var Carretera = $('#Carretera').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel_Marino = $('#Diesel_Marino').get(0).value;


                var MontoPagado = $('#MontoPagado').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;
                $('#L_DA').load('ISR_R10_Op_1_1', {DeduccionOp: DeduccionOp});
                $('#L_DO').load('ISR_R10_Op_1_2', {DeduccionOp: DeduccionOp, Ing: Ing});
                $('#L_Base').load('ISR_R10_Op_1_3', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm});
                $('#L_ACargoTablas').load('ISR_R10_Op_1_4', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, meses: meses});
                $('#L_ACargo').load('ISR_R10_Op_1_5', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses});
                $('#L_ACargo2').load('ISR_R10_Op_1_52', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses});

                $('#L_TotalC').load('ISR_R10_Op3', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas});
                $('#L_CantCargo').load('ISR_R10_Op5', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantFavor').load('ISR_R10_Op6', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantPagar').load('ISR_R10_Op7', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R10_91: function () {
            $(document).on('change', '#ParteAct', function (e) {
                var meses = $('#meses').get(0).value;
                var DeduccionOp = $('#DeduccionOp').get(0).value;
                var Ing = $('#Ing').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var DImp_Local = $('#DImp_Local').get(0).value;
                var Predial = $('#Predial').get(0).value;
                var D_PrimerEm = $('#D_PrimerEm').get(0).value;
                var Imp_Rete = $('#Imp_Rete').get(0).value;
                var Otras_Cargo = $('#Otras_Cargo').get(0).value;
                var Otras_Favor = $('#Otras_Favor').get(0).value;

                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;

                var Credito = $('#Credito').get(0).value;
                var Sub_Empleo = $('#Sub_Empleo').get(0).value;
                var Imp_Dep = $('#Imp_Dep').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Diesel = $('#Diesel').get(0).value;
                var Carretera = $('#Carretera').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel_Marino = $('#Diesel_Marino').get(0).value;
                //alert(ParteAct);				 
                $('#L_TotalC').load('ISR_R10_Op3', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas});

            });
        },
        ISR_R10_xx: function () {
            $(document).on('change', '#ParteAct', function (e) {
                var meses = $('#meses').get(0).value;
                var DeduccionOp = $('#DeduccionOp').get(0).value;
                var Ing = $('#Ing').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var DImp_Local = $('#DImp_Local').get(0).value;
                var Predial = $('#Predial').get(0).value;
                var D_PrimerEm = $('#D_PrimerEm').get(0).value;
                var Imp_Rete = $('#Imp_Rete').get(0).value;
                var Otras_Cargo = $('#Otras_Cargo').get(0).value;
                var Otras_Favor = $('#Otras_Favor').get(0).value;

                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;

                var Credito = $('#Credito').get(0).value;
                var Sub_Empleo = $('#Sub_Empleo').get(0).value;
                var Imp_Dep = $('#Imp_Dep').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Diesel = $('#Diesel').get(0).value;
                var Carretera = $('#Carretera').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel_Marino = $('#Diesel_Marino').get(0).value;


                var MontoPagado = $('#MontoPagado').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;
                alert(ParteAct);

                $('#L_TotalC').load('ISR_R10_Op3', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas});
                $('#L_TotalApp').load('ISR_R10_Op4', {Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino});
                $('#L_CantCargo').load('ISR_R10_Op5', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantFavor').load('ISR_R10_Op6', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantPagar').load('ISR_R10_Op7', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R10_12: function () {
            $(document).on('change', '#Recargos', function (e) {
                var meses = $('#meses').get(0).value;
                var DeduccionOp = $('#DeduccionOp').get(0).value;
                var Ing = $('#Ing').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var DImp_Local = $('#DImp_Local').get(0).value;
                var Predial = $('#Predial').get(0).value;
                var D_PrimerEm = $('#D_PrimerEm').get(0).value;
                var Imp_Rete = $('#Imp_Rete').get(0).value;
                var Otras_Cargo = $('#Otras_Cargo').get(0).value;
                var Otras_Favor = $('#Otras_Favor').get(0).value;

                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;

                var Credito = $('#Credito').get(0).value;
                var Sub_Empleo = $('#Sub_Empleo').get(0).value;
                var Imp_Dep = $('#Imp_Dep').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Diesel = $('#Diesel').get(0).value;
                var Carretera = $('#Carretera').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel_Marino = $('#Diesel_Marino').get(0).value;


                var MontoPagado = $('#MontoPagado').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;
                //alert(IEPS);

                $('#L_TotalC').load('ISR_R10_Op3', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas});
                $('#L_TotalApp').load('ISR_R10_Op4', {Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino});
                $('#L_CantCargo').load('ISR_R10_Op5', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantFavor').load('ISR_R10_Op6', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantPagar').load('ISR_R10_Op7', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R10_13: function () {
            $(document).on('change', '#Multas', function (e) {
                var meses = $('#meses').get(0).value;
                var DeduccionOp = $('#DeduccionOp').get(0).value;
                var Ing = $('#Ing').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var DImp_Local = $('#DImp_Local').get(0).value;
                var Predial = $('#Predial').get(0).value;
                var D_PrimerEm = $('#D_PrimerEm').get(0).value;
                var Imp_Rete = $('#Imp_Rete').get(0).value;
                var Otras_Cargo = $('#Otras_Cargo').get(0).value;
                var Otras_Favor = $('#Otras_Favor').get(0).value;


                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;

                var Credito = $('#Credito').get(0).value;
                var Sub_Empleo = $('#Sub_Empleo').get(0).value;
                var Imp_Dep = $('#Imp_Dep').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Diesel = $('#Diesel').get(0).value;
                var Carretera = $('#Carretera').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel_Marino = $('#Diesel_Marino').get(0).value;


                var MontoPagado = $('#MontoPagado').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;
                //alert(IEPS);

                $('#L_TotalC').load('ISR_R10_Op3', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas});
                $('#L_TotalApp').load('ISR_R10_Op4', {Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino});
                $('#L_CantCargo').load('ISR_R10_Op5', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantFavor').load('ISR_R10_Op6', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantPagar').load('ISR_R10_Op7', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R10_14: function () {
            $(document).on('change', '#Credito', function (e) {
                var meses = $('#meses').get(0).value;
                var DeduccionOp = $('#DeduccionOp').get(0).value;
                var Ing = $('#Ing').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var DImp_Local = $('#DImp_Local').get(0).value;
                var Predial = $('#Predial').get(0).value;
                var D_PrimerEm = $('#D_PrimerEm').get(0).value;
                var Imp_Rete = $('#Imp_Rete').get(0).value;
                var Otras_Cargo = $('#Otras_Cargo').get(0).value;
                var Otras_Favor = $('#Otras_Favor').get(0).value;

                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;

                var Credito = $('#Credito').get(0).value;
                var Sub_Empleo = $('#Sub_Empleo').get(0).value;
                var Imp_Dep = $('#Imp_Dep').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Diesel = $('#Diesel').get(0).value;
                var Carretera = $('#Carretera').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel_Marino = $('#Diesel_Marino').get(0).value;


                var MontoPagado = $('#MontoPagado').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;
                //alert(IEPS);

                $('#L_TotalC').load('ISR_R10_Op3', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas});
                $('#L_TotalApp').load('ISR_R10_Op4', {Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino});
                $('#L_CantCargo').load('ISR_R10_Op5', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantFavor').load('ISR_R10_Op6', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantPagar').load('ISR_R10_Op7', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R10_15: function () {
            $(document).on('change', '#Sub_Empleo', function (e) {
                var meses = $('#meses').get(0).value;
                var DeduccionOp = $('#DeduccionOp').get(0).value;
                var Ing = $('#Ing').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var DImp_Local = $('#DImp_Local').get(0).value;
                var Predial = $('#Predial').get(0).value;
                var D_PrimerEm = $('#D_PrimerEm').get(0).value;
                var Imp_Rete = $('#Imp_Rete').get(0).value;
                var Otras_Cargo = $('#Otras_Cargo').get(0).value;
                var Otras_Favor = $('#Otras_Favor').get(0).value;

                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;

                var Credito = $('#Credito').get(0).value;
                var Sub_Empleo = $('#Sub_Empleo').get(0).value;
                var Imp_Dep = $('#Imp_Dep').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Diesel = $('#Diesel').get(0).value;
                var Carretera = $('#Carretera').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel_Marino = $('#Diesel_Marino').get(0).value;


                var MontoPagado = $('#MontoPagado').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;
                //alert(IEPS);

                $('#L_TotalC').load('ISR_R10_Op3', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas});
                $('#L_TotalApp').load('ISR_R10_Op4', {Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino});
                $('#L_CantCargo').load('ISR_R10_Op5', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantFavor').load('ISR_R10_Op6', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantPagar').load('ISR_R10_Op7', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R10_16: function () {
            $(document).on('change', '#Imp_Dep', function (e) {
                var meses = $('#meses').get(0).value;
                var DeduccionOp = $('#DeduccionOp').get(0).value;
                var Ing = $('#Ing').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var DImp_Local = $('#DImp_Local').get(0).value;
                var Predial = $('#Predial').get(0).value;
                var D_PrimerEm = $('#D_PrimerEm').get(0).value;
                var Imp_Rete = $('#Imp_Rete').get(0).value;
                var Otras_Cargo = $('#Otras_Cargo').get(0).value;
                var Otras_Favor = $('#Otras_Favor').get(0).value;

                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;

                var Credito = $('#Credito').get(0).value;
                var Sub_Empleo = $('#Sub_Empleo').get(0).value;
                var Imp_Dep = $('#Imp_Dep').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Diesel = $('#Diesel').get(0).value;
                var Carretera = $('#Carretera').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel_Marino = $('#Diesel_Marino').get(0).value;


                var MontoPagado = $('#MontoPagado').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;
                //alert(IEPS);

                $('#L_TotalC').load('ISR_R10_Op3', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas});
                $('#L_TotalApp').load('ISR_R10_Op4', {Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino});
                $('#L_CantCargo').load('ISR_R10_Op5', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantFavor').load('ISR_R10_Op6', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantPagar').load('ISR_R10_Op7', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R10_17: function () {
            $(document).on('change', '#Compensaciones', function (e) {
                var meses = $('#meses').get(0).value;
                var DeduccionOp = $('#DeduccionOp').get(0).value;
                var Ing = $('#Ing').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var DImp_Local = $('#DImp_Local').get(0).value;
                var Predial = $('#Predial').get(0).value;
                var D_PrimerEm = $('#D_PrimerEm').get(0).value;
                var Imp_Rete = $('#Imp_Rete').get(0).value;
                var Otras_Cargo = $('#Otras_Cargo').get(0).value;
                var Otras_Favor = $('#Otras_Favor').get(0).value;

                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;

                var Credito = $('#Credito').get(0).value;
                var Sub_Empleo = $('#Sub_Empleo').get(0).value;
                var Imp_Dep = $('#Imp_Dep').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Diesel = $('#Diesel').get(0).value;
                var Carretera = $('#Carretera').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel_Marino = $('#Diesel_Marino').get(0).value;


                var MontoPagado = $('#MontoPagado').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;
                //alert(IEPS);

                $('#L_TotalC').load('ISR_R10_Op3', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas});
                $('#L_TotalApp').load('ISR_R10_Op4', {Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino});
                $('#L_CantCargo').load('ISR_R10_Op5', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantFavor').load('ISR_R10_Op6', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantPagar').load('ISR_R10_Op7', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R10_18: function () {
            $(document).on('change', '#IEPS', function (e) {
                var meses = $('#meses').get(0).value;
                var DeduccionOp = $('#DeduccionOp').get(0).value;
                var Ing = $('#Ing').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var DImp_Local = $('#DImp_Local').get(0).value;
                var Predial = $('#Predial').get(0).value;
                var D_PrimerEm = $('#D_PrimerEm').get(0).value;
                var Imp_Rete = $('#Imp_Rete').get(0).value;
                var Otras_Cargo = $('#Otras_Cargo').get(0).value;
                var Otras_Favor = $('#Otras_Favor').get(0).value;

                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;

                var Credito = $('#Credito').get(0).value;
                var Sub_Empleo = $('#Sub_Empleo').get(0).value;
                var Imp_Dep = $('#Imp_Dep').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Diesel = $('#Diesel').get(0).value;
                var Carretera = $('#Carretera').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel_Marino = $('#Diesel_Marino').get(0).value;


                var MontoPagado = $('#MontoPagado').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;
                //alert(IEPS);

                $('#L_TotalC').load('ISR_R10_Op3', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas});
                $('#L_TotalApp').load('ISR_R10_Op4', {Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino});
                $('#L_CantCargo').load('ISR_R10_Op5', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantFavor').load('ISR_R10_Op6', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantPagar').load('ISR_R10_Op7', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R10_19: function () {
            $(document).on('change', '#Diesel', function (e) {
                var meses = $('#meses').get(0).value;
                var DeduccionOp = $('#DeduccionOp').get(0).value;
                var Ing = $('#Ing').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var DImp_Local = $('#DImp_Local').get(0).value;
                var Predial = $('#Predial').get(0).value;
                var D_PrimerEm = $('#D_PrimerEm').get(0).value;
                var Imp_Rete = $('#Imp_Rete').get(0).value;
                var Otras_Cargo = $('#Otras_Cargo').get(0).value;
                var Otras_Favor = $('#Otras_Favor').get(0).value;

                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;

                var Credito = $('#Credito').get(0).value;
                var Sub_Empleo = $('#Sub_Empleo').get(0).value;
                var Imp_Dep = $('#Imp_Dep').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Diesel = $('#Diesel').get(0).value;
                var Carretera = $('#Carretera').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel_Marino = $('#Diesel_Marino').get(0).value;


                var MontoPagado = $('#MontoPagado').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;
                //alert(IEPS);

                $('#L_TotalC').load('ISR_R10_Op3', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas});
                $('#L_TotalApp').load('ISR_R10_Op4', {Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino});
                $('#L_CantCargo').load('ISR_R10_Op5', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantFavor').load('ISR_R10_Op6', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantPagar').load('ISR_R10_Op7', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R10_20: function () {
            $(document).on('change', '#Carretera', function (e) {
                var meses = $('#meses').get(0).value;
                var DeduccionOp = $('#DeduccionOp').get(0).value;
                var Ing = $('#Ing').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var DImp_Local = $('#DImp_Local').get(0).value;
                var Predial = $('#Predial').get(0).value;
                var D_PrimerEm = $('#D_PrimerEm').get(0).value;
                var Imp_Rete = $('#Imp_Rete').get(0).value;
                var Otras_Cargo = $('#Otras_Cargo').get(0).value;
                var Otras_Favor = $('#Otras_Favor').get(0).value;

                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;

                var Credito = $('#Credito').get(0).value;
                var Sub_Empleo = $('#Sub_Empleo').get(0).value;
                var Imp_Dep = $('#Imp_Dep').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Diesel = $('#Diesel').get(0).value;
                var Carretera = $('#Carretera').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel_Marino = $('#Diesel_Marino').get(0).value;


                var MontoPagado = $('#MontoPagado').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;
                //alert(IEPS);

                $('#L_TotalC').load('ISR_R10_Op3', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas});
                $('#L_TotalApp').load('ISR_R10_Op4', {Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino});
                $('#L_CantCargo').load('ISR_R10_Op5', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantFavor').load('ISR_R10_Op6', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantPagar').load('ISR_R10_Op7', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R10_21: function () {
            $(document).on('change', '#Otros', function (e) {
                var meses = $('#meses').get(0).value;
                var DeduccionOp = $('#DeduccionOp').get(0).value;
                var Ing = $('#Ing').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var DImp_Local = $('#DImp_Local').get(0).value;
                var Predial = $('#Predial').get(0).value;
                var D_PrimerEm = $('#D_PrimerEm').get(0).value;
                var Imp_Rete = $('#Imp_Rete').get(0).value;
                var Otras_Cargo = $('#Otras_Cargo').get(0).value;
                var Otras_Favor = $('#Otras_Favor').get(0).value;

                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;

                var Credito = $('#Credito').get(0).value;
                var Sub_Empleo = $('#Sub_Empleo').get(0).value;
                var Imp_Dep = $('#Imp_Dep').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Diesel = $('#Diesel').get(0).value;
                var Carretera = $('#Carretera').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel_Marino = $('#Diesel_Marino').get(0).value;


                var MontoPagado = $('#MontoPagado').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;
                //alert(IEPS);

                $('#L_TotalC').load('ISR_R10_Op3', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas});
                $('#L_TotalApp').load('ISR_R10_Op4', {Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino});
                $('#L_CantCargo').load('ISR_R10_Op5', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantFavor').load('ISR_R10_Op6', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantPagar').load('ISR_R10_Op7', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R10_22: function () {
            $(document).on('change', '#Diesel_Marino', function (e) {
                var meses = $('#meses').get(0).value;
                var DeduccionOp = $('#DeduccionOp').get(0).value;
                var Ing = $('#Ing').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var DImp_Local = $('#DImp_Local').get(0).value;
                var Predial = $('#Predial').get(0).value;
                var D_PrimerEm = $('#D_PrimerEm').get(0).value;
                var Imp_Rete = $('#Imp_Rete').get(0).value;
                var Otras_Cargo = $('#Otras_Cargo').get(0).value;
                var Otras_Favor = $('#Otras_Favor').get(0).value;

                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;

                var Credito = $('#Credito').get(0).value;
                var Sub_Empleo = $('#Sub_Empleo').get(0).value;
                var Imp_Dep = $('#Imp_Dep').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Diesel = $('#Diesel').get(0).value;
                var Carretera = $('#Carretera').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel_Marino = $('#Diesel_Marino').get(0).value;


                var MontoPagado = $('#MontoPagado').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;
                //alert(IEPS);

                $('#L_TotalC').load('ISR_R10_Op3', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas});
                $('#L_TotalApp').load('ISR_R10_Op4', {Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino});
                $('#L_CantCargo').load('ISR_R10_Op5', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantFavor').load('ISR_R10_Op6', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantPagar').load('ISR_R10_Op7', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R10_23: function () {
            $(document).on('change', '#MontoPagado', function (e) {
                var meses = $('#meses').get(0).value;
                var DeduccionOp = $('#DeduccionOp').get(0).value;
                var Ing = $('#Ing').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var DImp_Local = $('#DImp_Local').get(0).value;
                var Predial = $('#Predial').get(0).value;
                var D_PrimerEm = $('#D_PrimerEm').get(0).value;
                var Imp_Rete = $('#Imp_Rete').get(0).value;
                var Otras_Cargo = $('#Otras_Cargo').get(0).value;
                var Otras_Favor = $('#Otras_Favor').get(0).value;

                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;

                var Credito = $('#Credito').get(0).value;
                var Sub_Empleo = $('#Sub_Empleo').get(0).value;
                var Imp_Dep = $('#Imp_Dep').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Diesel = $('#Diesel').get(0).value;
                var Carretera = $('#Carretera').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel_Marino = $('#Diesel_Marino').get(0).value;


                var MontoPagado = $('#MontoPagado').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;
                //alert(IEPS);

                $('#L_TotalC').load('ISR_R10_Op3', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas});
                $('#L_TotalApp').load('ISR_R10_Op4', {Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino});
                $('#L_CantCargo').load('ISR_R10_Op5', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantFavor').load('ISR_R10_Op6', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantPagar').load('ISR_R10_Op7', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
            });
        },
        ISR_R10_24: function () {
            $(document).on('change', '#Imp_UltHrs', function (e) {
                var meses = $('#meses').get(0).value;
                var DeduccionOp = $('#DeduccionOp').get(0).value;
                var Ing = $('#Ing').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var DImp_Local = $('#DImp_Local').get(0).value;
                var Predial = $('#Predial').get(0).value;
                var D_PrimerEm = $('#D_PrimerEm').get(0).value;
                var Imp_Rete = $('#Imp_Rete').get(0).value;
                var Otras_Cargo = $('#Otras_Cargo').get(0).value;
                var Otras_Favor = $('#Otras_Favor').get(0).value;

                var ParteAct = $('#ParteAct').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;

                var Credito = $('#Credito').get(0).value;
                var Sub_Empleo = $('#Sub_Empleo').get(0).value;
                var Imp_Dep = $('#Imp_Dep').get(0).value;
                var Compensaciones = $('#Compensaciones').get(0).value;
                var IEPS = $('#IEPS').get(0).value;
                var Diesel = $('#Diesel').get(0).value;
                var Carretera = $('#Carretera').get(0).value;
                var Otros = $('#Otros').get(0).value;
                var Diesel_Marino = $('#Diesel_Marino').get(0).value;


                var MontoPagado = $('#MontoPagado').get(0).value;
                var Imp_UltHrs = $('#Imp_UltHrs').get(0).value;
                //alert(IEPS);
                $('#L_TotalApp').load('ISR_R10_Op4', {Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino});
                $('#L_TotalC').load('ISR_R10_Op3', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas});
                $('#L_CantCargo').load('ISR_R10_Op5', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantFavor').load('ISR_R10_Op6', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
                $('#L_CantPagar').load('ISR_R10_Op7', {DeduccionOp: DeduccionOp, Ing: Ing, Deducciones: Deducciones, DImp_Local: DImp_Local, Predial: Predial, D_PrimerEm: D_PrimerEm, Imp_Rete: Imp_Rete, Otras_Cargo: Otras_Cargo, Otras_Favor: Otras_Favor, meses: meses, ParteAct: ParteAct, Recargos: Recargos, Multas: Multas, Credito: Credito, Sub_Empleo: Sub_Empleo, Imp_Dep: Imp_Dep, Compensaciones: Compensaciones, IEPS: IEPS, Diesel: Diesel, Carretera: Carretera, Otros: Otros, Diesel_Marino: Diesel_Marino, MontoPagado: MontoPagado, Imp_UltHrs: Imp_UltHrs});
            });
        },
        IVA_R21_2_1: function () {
            $(document).on('change', '#Imp_Cobrado', function (e) {
                var Imp_Cobrado = $('#Imp_Cobrado').get(0).value;
                var Imp_Pagado = $('#Imp_Pagado').get(0).value;
                var Imp_Retenido = $('#Imp_Retenido').get(0).value;
                var Parte_Act = $('#Parte_Act').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;
                var Disminucion_Cont = $('#Disminucion_Cont').get(0).value;
                var Pagado_Ant = $('#Pagado_Ant').get(0).value;
                var Imp_UltHoras = $('#Imp_UltHoras').get(0).value;
                $('#L_ACargo').load('IVA_R21_Op1', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido});
                $('#L_AFavor').load('IVA_R21_Op2', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido});
                $('#L_TContr').load('IVA_R21_Op3', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido, Parte_Act: Parte_Act, Recargos: Recargos, Multas: Multas});
                $('#L_Cant_Pagar').load('IVA_R21_Op4', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido, Parte_Act: Parte_Act, Recargos: Recargos, Multas: Multas, Disminucion_Cont: Disminucion_Cont, Pagado_Ant: Pagado_Ant, Imp_UltHoras: Imp_UltHoras});
                $('#L_Cant_Favor').load('IVA_R21_Op5', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido, Parte_Act: Parte_Act, Recargos: Recargos, Multas: Multas, Disminucion_Cont: Disminucion_Cont, Pagado_Ant: Pagado_Ant, Imp_UltHoras: Imp_UltHoras});
            });
        },
        IVA_R21_2_2: function () {
            $(document).on('change', '#Imp_Pagado', function (e) {
                var Imp_Cobrado = $('#Imp_Cobrado').get(0).value;
                var Imp_Pagado = $('#Imp_Pagado').get(0).value;
                var Imp_Retenido = $('#Imp_Retenido').get(0).value;
                var Parte_Act = $('#Parte_Act').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;
                var Disminucion_Cont = $('#Disminucion_Cont').get(0).value;
                var Pagado_Ant = $('#Pagado_Ant').get(0).value;
                var Imp_UltHoras = $('#Imp_UltHoras').get(0).value;
                $('#L_ACargo').load('IVA_R21_Op1', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido});
                $('#L_AFavor').load('IVA_R21_Op2', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido});
                $('#L_TContr').load('IVA_R21_Op3', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido, Parte_Act: Parte_Act, Recargos: Recargos, Multas: Multas});
                $('#L_Cant_Pagar').load('IVA_R21_Op4', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido, Parte_Act: Parte_Act, Recargos: Recargos, Multas: Multas, Disminucion_Cont: Disminucion_Cont, Pagado_Ant: Pagado_Ant, Imp_UltHoras: Imp_UltHoras});
                $('#L_Cant_Favor').load('IVA_R21_Op5', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido, Parte_Act: Parte_Act, Recargos: Recargos, Multas: Multas, Disminucion_Cont: Disminucion_Cont, Pagado_Ant: Pagado_Ant, Imp_UltHoras: Imp_UltHoras});
            });
        },
        IVA_R21_2_3: function () {
            $(document).on('change', '#Imp_Retenido', function (e) {
                var Imp_Cobrado = $('#Imp_Cobrado').get(0).value;
                var Imp_Pagado = $('#Imp_Pagado').get(0).value;
                var Imp_Retenido = $('#Imp_Retenido').get(0).value;
                var Parte_Act = $('#Parte_Act').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;
                var Disminucion_Cont = $('#Disminucion_Cont').get(0).value;
                var Pagado_Ant = $('#Pagado_Ant').get(0).value;
                var Imp_UltHoras = $('#Imp_UltHoras').get(0).value;
                $('#L_ACargo').load('IVA_R21_Op1', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido});
                $('#L_AFavor').load('IVA_R21_Op2', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido});
                $('#L_TContr').load('IVA_R21_Op3', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido, Parte_Act: Parte_Act, Recargos: Recargos, Multas: Multas});
                $('#L_Cant_Pagar').load('IVA_R21_Op4', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido, Parte_Act: Parte_Act, Recargos: Recargos, Multas: Multas, Disminucion_Cont: Disminucion_Cont, Pagado_Ant: Pagado_Ant, Imp_UltHoras: Imp_UltHoras});
                $('#L_Cant_Favor').load('IVA_R21_Op5', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido, Parte_Act: Parte_Act, Recargos: Recargos, Multas: Multas, Disminucion_Cont: Disminucion_Cont, Pagado_Ant: Pagado_Ant, Imp_UltHoras: Imp_UltHoras});
            });
        },
        IVA_R21_2_4: function () {
            $(document).on('change', '#Parte_Act', function (e) {
                var Imp_Cobrado = $('#Imp_Cobrado').get(0).value;
                var Imp_Pagado = $('#Imp_Pagado').get(0).value;
                var Imp_Retenido = $('#Imp_Retenido').get(0).value;
                var Parte_Act = $('#Parte_Act').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;
                var Disminucion_Cont = $('#Disminucion_Cont').get(0).value;
                var Pagado_Ant = $('#Pagado_Ant').get(0).value;
                var Imp_UltHoras = $('#Imp_UltHoras').get(0).value;
                $('#L_ACargo').load('IVA_R21_Op1', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido});
                $('#L_AFavor').load('IVA_R21_Op2', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido});
                $('#L_TContr').load('IVA_R21_Op3', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido, Parte_Act: Parte_Act, Recargos: Recargos, Multas: Multas});
                $('#L_Cant_Pagar').load('IVA_R21_Op4', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido, Parte_Act: Parte_Act, Recargos: Recargos, Multas: Multas, Disminucion_Cont: Disminucion_Cont, Pagado_Ant: Pagado_Ant, Imp_UltHoras: Imp_UltHoras});
                $('#L_Cant_Favor').load('IVA_R21_Op5', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido, Parte_Act: Parte_Act, Recargos: Recargos, Multas: Multas, Disminucion_Cont: Disminucion_Cont, Pagado_Ant: Pagado_Ant, Imp_UltHoras: Imp_UltHoras});
            });
        },
        IVA_R21_2_5: function () {
            $(document).on('change', '#Recargos', function (e) {
                var Imp_Cobrado = $('#Imp_Cobrado').get(0).value;
                var Imp_Pagado = $('#Imp_Pagado').get(0).value;
                var Imp_Retenido = $('#Imp_Retenido').get(0).value;
                var Parte_Act = $('#Parte_Act').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;
                var Disminucion_Cont = $('#Disminucion_Cont').get(0).value;
                var Pagado_Ant = $('#Pagado_Ant').get(0).value;
                var Imp_UltHoras = $('#Imp_UltHoras').get(0).value;
                $('#L_ACargo').load('IVA_R21_Op1', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido});
                $('#L_AFavor').load('IVA_R21_Op2', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido});
                $('#L_TContr').load('IVA_R21_Op3', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido, Parte_Act: Parte_Act, Recargos: Recargos, Multas: Multas});
                $('#L_Cant_Pagar').load('IVA_R21_Op4', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido, Parte_Act: Parte_Act, Recargos: Recargos, Multas: Multas, Disminucion_Cont: Disminucion_Cont, Pagado_Ant: Pagado_Ant, Imp_UltHoras: Imp_UltHoras});
                $('#L_Cant_Favor').load('IVA_R21_Op5', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido, Parte_Act: Parte_Act, Recargos: Recargos, Multas: Multas, Disminucion_Cont: Disminucion_Cont, Pagado_Ant: Pagado_Ant, Imp_UltHoras: Imp_UltHoras});
            });
        },
        IVA_R21_2_6: function () {
            $(document).on('change', '#Multas', function (e) {
                var Imp_Cobrado = $('#Imp_Cobrado').get(0).value;
                var Imp_Pagado = $('#Imp_Pagado').get(0).value;
                var Imp_Retenido = $('#Imp_Retenido').get(0).value;
                var Parte_Act = $('#Parte_Act').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;
                var Disminucion_Cont = $('#Disminucion_Cont').get(0).value;
                var Pagado_Ant = $('#Pagado_Ant').get(0).value;
                var Imp_UltHoras = $('#Imp_UltHoras').get(0).value;
                $('#L_ACargo').load('IVA_R21_Op1', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido});
                $('#L_AFavor').load('IVA_R21_Op2', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido});
                $('#L_TContr').load('IVA_R21_Op3', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido, Parte_Act: Parte_Act, Recargos: Recargos, Multas: Multas});
                $('#L_Cant_Pagar').load('IVA_R21_Op4', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido, Parte_Act: Parte_Act, Recargos: Recargos, Multas: Multas, Disminucion_Cont: Disminucion_Cont, Pagado_Ant: Pagado_Ant, Imp_UltHoras: Imp_UltHoras});
                $('#L_Cant_Favor').load('IVA_R21_Op5', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido, Parte_Act: Parte_Act, Recargos: Recargos, Multas: Multas, Disminucion_Cont: Disminucion_Cont, Pagado_Ant: Pagado_Ant, Imp_UltHoras: Imp_UltHoras});
            });
        },
        IVA_R21_2_7: function () {
            $(document).on('change', '#Disminucion_Cont', function (e) {
                var Imp_Cobrado = $('#Imp_Cobrado').get(0).value;
                var Imp_Pagado = $('#Imp_Pagado').get(0).value;
                var Imp_Retenido = $('#Imp_Retenido').get(0).value;
                var Parte_Act = $('#Parte_Act').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;
                var Disminucion_Cont = $('#Disminucion_Cont').get(0).value;
                var Pagado_Ant = $('#Pagado_Ant').get(0).value;
                var Imp_UltHoras = $('#Imp_UltHoras').get(0).value;
                $('#L_ACargo').load('IVA_R21_Op1', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido});
                $('#L_AFavor').load('IVA_R21_Op2', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido});
                $('#L_TContr').load('IVA_R21_Op3', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido, Parte_Act: Parte_Act, Recargos: Recargos, Multas: Multas});
                $('#L_Cant_Pagar').load('IVA_R21_Op4', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido, Parte_Act: Parte_Act, Recargos: Recargos, Multas: Multas, Disminucion_Cont: Disminucion_Cont, Pagado_Ant: Pagado_Ant, Imp_UltHoras: Imp_UltHoras});
                $('#L_Cant_Favor').load('IVA_R21_Op5', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido, Parte_Act: Parte_Act, Recargos: Recargos, Multas: Multas, Disminucion_Cont: Disminucion_Cont, Pagado_Ant: Pagado_Ant, Imp_UltHoras: Imp_UltHoras});
            });
        },
        IVA_R21_2_8: function () {
            $(document).on('change', '#Pagado_Ant', function (e) {
                var Imp_Cobrado = $('#Imp_Cobrado').get(0).value;
                var Imp_Pagado = $('#Imp_Pagado').get(0).value;
                var Imp_Retenido = $('#Imp_Retenido').get(0).value;
                var Parte_Act = $('#Parte_Act').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;
                var Disminucion_Cont = $('#Disminucion_Cont').get(0).value;
                var Pagado_Ant = $('#Pagado_Ant').get(0).value;
                var Imp_UltHoras = $('#Imp_UltHoras').get(0).value;
                $('#L_ACargo').load('IVA_R21_Op1', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido});
                $('#L_AFavor').load('IVA_R21_Op2', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido});
                $('#L_TContr').load('IVA_R21_Op3', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido, Parte_Act: Parte_Act, Recargos: Recargos, Multas: Multas});
                $('#L_Cant_Pagar').load('IVA_R21_Op4', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido, Parte_Act: Parte_Act, Recargos: Recargos, Multas: Multas, Disminucion_Cont: Disminucion_Cont, Pagado_Ant: Pagado_Ant, Imp_UltHoras: Imp_UltHoras});
                $('#L_Cant_Favor').load('IVA_R21_Op5', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido, Parte_Act: Parte_Act, Recargos: Recargos, Multas: Multas, Disminucion_Cont: Disminucion_Cont, Pagado_Ant: Pagado_Ant, Imp_UltHoras: Imp_UltHoras});
            });
        },
        IVA_R21_2_9: function () {
            $(document).on('change', '#Imp_UltHoras', function (e) {
                var Imp_Cobrado = $('#Imp_Cobrado').get(0).value;
                var Imp_Pagado = $('#Imp_Pagado').get(0).value;
                var Imp_Retenido = $('#Imp_Retenido').get(0).value;
                var Parte_Act = $('#Parte_Act').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multas = $('#Multas').get(0).value;
                var Disminucion_Cont = $('#Disminucion_Cont').get(0).value;
                var Pagado_Ant = $('#Pagado_Ant').get(0).value;
                var Imp_UltHoras = $('#Imp_UltHoras').get(0).value;
                $('#L_ACargo').load('IVA_R21_Op1', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido});
                $('#L_AFavor').load('IVA_R21_Op2', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido});
                $('#L_TContr').load('IVA_R21_Op3', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido, Parte_Act: Parte_Act, Recargos: Recargos, Multas: Multas});
                $('#L_Cant_Pagar').load('IVA_R21_Op4', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido, Parte_Act: Parte_Act, Recargos: Recargos, Multas: Multas, Disminucion_Cont: Disminucion_Cont, Pagado_Ant: Pagado_Ant, Imp_UltHoras: Imp_UltHoras});
                $('#L_Cant_Favor').load('IVA_R21_Op5', {Imp_Cobrado: Imp_Cobrado, Imp_Pagado: Imp_Pagado, Imp_Retenido: Imp_Retenido, Parte_Act: Parte_Act, Recargos: Recargos, Multas: Multas, Disminucion_Cont: Disminucion_Cont, Pagado_Ant: Pagado_Ant, Imp_UltHoras: Imp_UltHoras});
            });
        },
        CedularG_1: function () {
            $(document).on('change', '#Ingresos', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var Perdidas = $('#Perdidas').get(0).value;
                var PagoProv = $('#PagoProv').get(0).value;
                var Imp_pagado = $('#Imp_pagado').get(0).value;

                var Imp_Cedular = $('#Imp_Cedular').get(0).value;
                var Actualizacion = $('#Actualizacion').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multa_Pagos = $('#Multa_Pagos').get(0).value;
                var Compensacion = $('#Compensacion').get(0).value;
                $('#L_Base').load('Cedular_Op1', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas});
                $('#L_IDeterminado').load('Cedular_Op2', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas});
                $('#LImp_Cargo').load('Cedular_Op3', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv});
                $('#LACargo2').load('Cedular_Op4', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado});
                $('#L_Cedular').load('Cedular_C1', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado});

                $('#L_Subtotal').load('Cedular_Op5', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Redondeo').load('Cedular_Op6', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Total').load('Cedular_Op7', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});


            });
        },
        CedularG_2: function () {
            $(document).on('change', '#Deducciones', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var Perdidas = $('#Perdidas').get(0).value;
                var PagoProv = $('#PagoProv').get(0).value;
                var Imp_pagado = $('#Imp_pagado').get(0).value;

                var Imp_Cedular = $('#Imp_Cedular').get(0).value;
                var Actualizacion = $('#Actualizacion').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multa_Pagos = $('#Multa_Pagos').get(0).value;
                var Compensacion = $('#Compensacion').get(0).value;
                $('#L_Base').load('Cedular_Op1', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas});
                $('#L_IDeterminado').load('Cedular_Op2', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas});
                $('#LImp_Cargo').load('Cedular_Op3', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv});
                $('#LACargo2').load('Cedular_Op4', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado});
                $('#L_Cedular').load('Cedular_C1', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado});
                $('#L_Subtotal').load('Cedular_Op5', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Redondeo').load('Cedular_Op6', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Total').load('Cedular_Op7', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});

            });
        },
        CedularG_3: function () {
            $(document).on('change', '#Perdidas', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var Perdidas = $('#Perdidas').get(0).value;
                var PagoProv = $('#PagoProv').get(0).value;
                var Imp_pagado = $('#Imp_pagado').get(0).value;

                var Imp_Cedular = $('#Imp_Cedular').get(0).value;
                var Actualizacion = $('#Actualizacion').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multa_Pagos = $('#Multa_Pagos').get(0).value;
                var Compensacion = $('#Compensacion').get(0).value;
                $('#L_Base').load('Cedular_Op1', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas});
                $('#L_IDeterminado').load('Cedular_Op2', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas});
                $('#LImp_Cargo').load('Cedular_Op3', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv});
                $('#LACargo2').load('Cedular_Op4', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado});
                $('#L_Cedular').load('Cedular_C1', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado});

                $('#L_Subtotal').load('Cedular_Op5', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Redondeo').load('Cedular_Op6', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Total').load('Cedular_Op7', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});

            });
        },
        CedularG_4: function () {
            $(document).on('change', '#PagoProv', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var Perdidas = $('#Perdidas').get(0).value;
                var PagoProv = $('#PagoProv').get(0).value;
                var Imp_pagado = $('#Imp_pagado').get(0).value;

                var Imp_Cedular = $('#Imp_Cedular').get(0).value;
                var Actualizacion = $('#Actualizacion').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multa_Pagos = $('#Multa_Pagos').get(0).value;
                var Compensacion = $('#Compensacion').get(0).value;
                $('#L_Base').load('Cedular_Op1', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas});
                $('#L_IDeterminado').load('Cedular_Op2', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas});
                $('#LImp_Cargo').load('Cedular_Op3', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv});
                $('#LACargo2').load('Cedular_Op4', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado});
                $('#L_Cedular').load('Cedular_C1', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado});

                $('#L_Subtotal').load('Cedular_Op5', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Redondeo').load('Cedular_Op6', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Total').load('Cedular_Op7', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});

            });
        },
        CedularG_5: function () {
            $(document).on('change', '#Imp_pagado', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var Perdidas = $('#Perdidas').get(0).value;
                var PagoProv = $('#PagoProv').get(0).value;
                var Imp_pagado = $('#Imp_pagado').get(0).value;

                var Imp_Cedular = $('#Imp_Cedular').get(0).value;
                var Actualizacion = $('#Actualizacion').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multa_Pagos = $('#Multa_Pagos').get(0).value;
                var Compensacion = $('#Compensacion').get(0).value;
                $('#L_Base').load('Cedular_Op1', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas});
                $('#L_IDeterminado').load('Cedular_Op2', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas});
                $('#LImp_Cargo').load('Cedular_Op3', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv});
                $('#LACargo2').load('Cedular_Op4', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado});
                $('#L_Cedular').load('Cedular_C1', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado});

                $('#L_Subtotal').load('Cedular_Op5', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Redondeo').load('Cedular_Op6', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Total').load('Cedular_Op7', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});


            });
        },
        CedularG_6: function () {
            $(document).on('change', '#Imp_Cedular', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var Perdidas = $('#Perdidas').get(0).value;
                var PagoProv = $('#PagoProv').get(0).value;
                var Imp_pagado = $('#Imp_pagado').get(0).value;

                var Imp_Cedular = $('#Imp_Cedular').get(0).value;
                var Actualizacion = $('#Actualizacion').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multa_Pagos = $('#Multa_Pagos').get(0).value;
                var Compensacion = $('#Compensacion').get(0).value;

                $('#L_Subtotal').load('Cedular_Op5', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Redondeo').load('Cedular_Op6', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Total').load('Cedular_Op7', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
            });
        },
        CedularG_7: function () {
            $(document).on('change', '#Actualizacion', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var Perdidas = $('#Perdidas').get(0).value;
                var PagoProv = $('#PagoProv').get(0).value;
                var Imp_pagado = $('#Imp_pagado').get(0).value;

                var Imp_Cedular = $('#Imp_Cedular').get(0).value;
                var Actualizacion = $('#Actualizacion').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multa_Pagos = $('#Multa_Pagos').get(0).value;
                var Compensacion = $('#Compensacion').get(0).value;

                $('#L_Subtotal').load('Cedular_Op5', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Redondeo').load('Cedular_Op6', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Total').load('Cedular_Op7', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
            });
        },
        CedularG_8: function () {
            $(document).on('change', '#Recargos', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var Perdidas = $('#Perdidas').get(0).value;
                var PagoProv = $('#PagoProv').get(0).value;
                var Imp_pagado = $('#Imp_pagado').get(0).value;

                var Imp_Cedular = $('#Imp_Cedular').get(0).value;
                var Actualizacion = $('#Actualizacion').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multa_Pagos = $('#Multa_Pagos').get(0).value;
                var Compensacion = $('#Compensacion').get(0).value;

                $('#L_Subtotal').load('Cedular_Op5', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Redondeo').load('Cedular_Op6', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Total').load('Cedular_Op7', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
            });
        },
        CedularG_9: function () {
            $(document).on('change', '#Multa_Pagos', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var Perdidas = $('#Perdidas').get(0).value;
                var PagoProv = $('#PagoProv').get(0).value;
                var Imp_pagado = $('#Imp_pagado').get(0).value;

                var Imp_Cedular = $('#Imp_Cedular').get(0).value;
                var Actualizacion = $('#Actualizacion').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multa_Pagos = $('#Multa_Pagos').get(0).value;
                var Compensacion = $('#Compensacion').get(0).value;

                $('#L_Subtotal').load('Cedular_Op5', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Redondeo').load('Cedular_Op6', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Total').load('Cedular_Op7', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
            });
        },
        CedularG_10: function () {
            $(document).on('change', '#Compensacion', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var Perdidas = $('#Perdidas').get(0).value;
                var PagoProv = $('#PagoProv').get(0).value;
                var Imp_pagado = $('#Imp_pagado').get(0).value;

                var Imp_Cedular = $('#Imp_Cedular').get(0).value;
                var Actualizacion = $('#Actualizacion').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multa_Pagos = $('#Multa_Pagos').get(0).value;
                var Compensacion = $('#Compensacion').get(0).value;

                $('#L_Subtotal').load('Cedular_Op5', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Redondeo').load('Cedular_Op6', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Total').load('Cedular_Op7', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
            });
        },
        CedularA_1: function () {
            $(document).on('change', '#Ingresos', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var Perdidas = $('#Perdidas').get(0).value;
                var PagoProv = $('#PagoProv').get(0).value;
                var TotalRetenido = $('#TotalRetenido').get(0).value;
                var Imp_pagado = $('#Imp_pagado').get(0).value;
                $('#L_Base').load('Cedular_Op1', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas});
                $('#L_IDeterminado').load('Cedular_Op2', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas});
                $('#LImp_Cargo').load('Cedular_OpA8', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, TotalRetenido: TotalRetenido});
                $('#LACargo2').load('Cedular_OpA9', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido});

                $('#L_Cedular').load('Cedular_OpAC9', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido});
                var Actualizacion = $('#Actualizacion').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multa_Pagos = $('#Multa_Pagos').get(0).value;
                var Compensacion = $('#Compensacion').get(0).value;
                $('#L_Subtotal').load('Cedular_OpA5', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Redondeo').load('Cedular_OpA6', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Total').load('Cedular_OpA7', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});

            });
        },
        CedularA_2: function () {
            $(document).on('change', '#Deducciones', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var Perdidas = $('#Perdidas').get(0).value;
                var PagoProv = $('#PagoProv').get(0).value;
                var TotalRetenido = $('#TotalRetenido').get(0).value;
                var Imp_pagado = $('#Imp_pagado').get(0).value;
                $('#L_Base').load('Cedular_Op1', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas});
                $('#L_IDeterminado').load('Cedular_Op2', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas});
                $('#LImp_Cargo').load('Cedular_OpA8', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, TotalRetenido: TotalRetenido});
                $('#LACargo2').load('Cedular_OpA9', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido});

                $('#L_Cedular').load('Cedular_OpAC9', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido});
                var Actualizacion = $('#Actualizacion').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multa_Pagos = $('#Multa_Pagos').get(0).value;
                var Compensacion = $('#Compensacion').get(0).value;
                $('#L_Subtotal').load('Cedular_OpA5', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Redondeo').load('Cedular_OpA6', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Total').load('Cedular_OpA7', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
            });
        },
        CedularA_3: function () {
            $(document).on('change', '#Perdidas', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var Perdidas = $('#Perdidas').get(0).value;
                var PagoProv = $('#PagoProv').get(0).value;
                var TotalRetenido = $('#TotalRetenido').get(0).value;
                var Imp_pagado = $('#Imp_pagado').get(0).value;
                $('#L_Base').load('Cedular_Op1', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas});
                $('#L_IDeterminado').load('Cedular_Op2', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas});
                $('#LImp_Cargo').load('Cedular_OpA8', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, TotalRetenido: TotalRetenido});
                $('#LACargo2').load('Cedular_OpA9', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido});

                $('#L_Cedular').load('Cedular_OpAC9', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido});
                var Actualizacion = $('#Actualizacion').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multa_Pagos = $('#Multa_Pagos').get(0).value;
                var Compensacion = $('#Compensacion').get(0).value;
                $('#L_Subtotal').load('Cedular_OpA5', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Redondeo').load('Cedular_OpA6', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Total').load('Cedular_OpA7', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
            });
        },
        CedularA_4: function () {
            $(document).on('change', '#PagoProv', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var Perdidas = $('#Perdidas').get(0).value;
                var PagoProv = $('#PagoProv').get(0).value;
                var TotalRetenido = $('#TotalRetenido').get(0).value;
                var Imp_pagado = $('#Imp_pagado').get(0).value;
                $('#L_Base').load('Cedular_Op1', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas});
                $('#L_IDeterminado').load('Cedular_Op2', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas});
                $('#LImp_Cargo').load('Cedular_OpA8', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, TotalRetenido: TotalRetenido});
                $('#LACargo2').load('Cedular_OpA9', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido});

                $('#L_Cedular').load('Cedular_OpAC9', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido});
                var Actualizacion = $('#Actualizacion').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multa_Pagos = $('#Multa_Pagos').get(0).value;
                var Compensacion = $('#Compensacion').get(0).value;
                $('#L_Subtotal').load('Cedular_OpA5', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Redondeo').load('Cedular_OpA6', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Total').load('Cedular_OpA7', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
            });
        },
        CedularA_5: function () {
            $(document).on('change', '#TotalRetenido', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var Perdidas = $('#Perdidas').get(0).value;
                var PagoProv = $('#PagoProv').get(0).value;
                var TotalRetenido = $('#TotalRetenido').get(0).value;
                var Imp_pagado = $('#Imp_pagado').get(0).value;
                $('#L_Base').load('Cedular_Op1', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas});
                $('#L_IDeterminado').load('Cedular_Op2', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas});
                $('#LImp_Cargo').load('Cedular_OpA8', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, TotalRetenido: TotalRetenido});
                $('#LACargo2').load('Cedular_OpA9', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido});

                $('#L_Cedular').load('Cedular_OpAC9', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido});
                var Actualizacion = $('#Actualizacion').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multa_Pagos = $('#Multa_Pagos').get(0).value;
                var Compensacion = $('#Compensacion').get(0).value;
                $('#L_Subtotal').load('Cedular_OpA5', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Redondeo').load('Cedular_OpA6', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Total').load('Cedular_OpA7', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
            });
        },
        CedularA_6: function () {
            $(document).on('change', '#Imp_pagado', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var Perdidas = $('#Perdidas').get(0).value;
                var PagoProv = $('#PagoProv').get(0).value;
                var TotalRetenido = $('#TotalRetenido').get(0).value;
                var Imp_pagado = $('#Imp_pagado').get(0).value;
                $('#L_Base').load('Cedular_Op1', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas});
                $('#L_IDeterminado').load('Cedular_Op2', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas});
                $('#LImp_Cargo').load('Cedular_OpA8', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, TotalRetenido: TotalRetenido});
                $('#LACargo2').load('Cedular_OpA9', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido});

                $('#L_Cedular').load('Cedular_OpAC9', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido});
                var Actualizacion = $('#Actualizacion').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multa_Pagos = $('#Multa_Pagos').get(0).value;
                var Compensacion = $('#Compensacion').get(0).value;
                $('#L_Subtotal').load('Cedular_OpA5', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Redondeo').load('Cedular_OpA6', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Total').load('Cedular_OpA7', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
            });
        },
        CedularA_7: function () {
            $(document).on('change', '#Imp_Cedular', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var Perdidas = $('#Perdidas').get(0).value;
                var PagoProv = $('#PagoProv').get(0).value;
                var TotalRetenido = $('#TotalRetenido').get(0).value;
                var Imp_pagado = $('#Imp_pagado').get(0).value;

                var Imp_Cedular = $('#Imp_Cedular').get(0).value;
                var Actualizacion = $('#Actualizacion').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multa_Pagos = $('#Multa_Pagos').get(0).value;
                var Compensacion = $('#Compensacion').get(0).value;
                $('#L_Subtotal').load('Cedular_OpA5', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Redondeo').load('Cedular_OpA6', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Total').load('Cedular_OpA7', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
            });
        },
        CedularA_8: function () {
            $(document).on('change', '#Actualizacion', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var Perdidas = $('#Perdidas').get(0).value;
                var PagoProv = $('#PagoProv').get(0).value;
                var TotalRetenido = $('#TotalRetenido').get(0).value;
                var Imp_pagado = $('#Imp_pagado').get(0).value;

                var Imp_Cedular = $('#Imp_Cedular').get(0).value;
                var Actualizacion = $('#Actualizacion').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multa_Pagos = $('#Multa_Pagos').get(0).value;
                var Compensacion = $('#Compensacion').get(0).value;
                $('#L_Subtotal').load('Cedular_OpA5', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Redondeo').load('Cedular_OpA6', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Total').load('Cedular_OpA7', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
            });
        },
        CedularA_9: function () {
            $(document).on('change', '#Recargos', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var Perdidas = $('#Perdidas').get(0).value;
                var PagoProv = $('#PagoProv').get(0).value;
                var TotalRetenido = $('#TotalRetenido').get(0).value;
                var Imp_pagado = $('#Imp_pagado').get(0).value;

                var Imp_Cedular = $('#Imp_Cedular').get(0).value;
                var Actualizacion = $('#Actualizacion').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multa_Pagos = $('#Multa_Pagos').get(0).value;
                var Compensacion = $('#Compensacion').get(0).value;
                $('#L_Subtotal').load('Cedular_OpA5', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Redondeo').load('Cedular_OpA6', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Total').load('Cedular_OpA7', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
            });
        },
        CedularA_10: function () {
            $(document).on('change', '#Multa_Pagos', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var Perdidas = $('#Perdidas').get(0).value;
                var PagoProv = $('#PagoProv').get(0).value;
                var TotalRetenido = $('#TotalRetenido').get(0).value;
                var Imp_pagado = $('#Imp_pagado').get(0).value;

                var Imp_Cedular = $('#Imp_Cedular').get(0).value;
                var Actualizacion = $('#Actualizacion').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multa_Pagos = $('#Multa_Pagos').get(0).value;
                var Compensacion = $('#Compensacion').get(0).value;
                $('#L_Subtotal').load('Cedular_OpA5', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Redondeo').load('Cedular_OpA6', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Total').load('Cedular_OpA7', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
            });
        },
        CedularA_11: function () {
            $(document).on('change', '#Compensacion', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var Perdidas = $('#Perdidas').get(0).value;
                var PagoProv = $('#PagoProv').get(0).value;
                var TotalRetenido = $('#TotalRetenido').get(0).value;
                var Imp_pagado = $('#Imp_pagado').get(0).value;

                var Imp_Cedular = $('#Imp_Cedular').get(0).value;
                var Actualizacion = $('#Actualizacion').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multa_Pagos = $('#Multa_Pagos').get(0).value;
                var Compensacion = $('#Compensacion').get(0).value;
                $('#L_Subtotal').load('Cedular_OpA5', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Redondeo').load('Cedular_OpA6', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Total').load('Cedular_OpA7', {Ingresos: Ingresos, Deducciones: Deducciones, Perdidas: Perdidas, PagoProv: PagoProv, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
            });
        },
        CedularH_1: function () {
            $(document).on('change', '#Ingresos', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var TotalRetenido = $('#TotalRetenido').get(0).value;
                var Imp_pagado = $('#Imp_pagado').get(0).value;
                $('#L_Base').load('Cedular_OpH1', {Ingresos: Ingresos, Deducciones: Deducciones});
                $('#L_IDeterminado').load('Cedular_OpH2', {Ingresos: Ingresos, Deducciones: Deducciones});
                $('#LImp_Cargo').load('Cedular_OpH3', {Ingresos: Ingresos, Deducciones: Deducciones, TotalRetenido: TotalRetenido});
                $('#LACargo2').load('Cedular_OpH4', {Ingresos: Ingresos, Deducciones: Deducciones, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido});
                $('#L_Cedular').load('Cedular_OpHC4', {Ingresos: Ingresos, Deducciones: Deducciones, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido});
                var Actualizacion = $('#Actualizacion').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multa_Pagos = $('#Multa_Pagos').get(0).value;
                var Compensacion = $('#Compensacion').get(0).value;
                $('#L_Subtotal').load('Cedular_OpH5', {Ingresos: Ingresos, Deducciones: Deducciones, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Redondeo').load('Cedular_OpH6', {Ingresos: Ingresos, Deducciones: Deducciones, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Total').load('Cedular_OpH7', {Ingresos: Ingresos, Deducciones: Deducciones, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
            });
        },
        CedularH_2: function () {
            $(document).on('change', '#Deducciones', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var TotalRetenido = $('#TotalRetenido').get(0).value;
                var Imp_pagado = $('#Imp_pagado').get(0).value;
                $('#L_Base').load('Cedular_OpH1', {Ingresos: Ingresos, Deducciones: Deducciones});
                $('#L_IDeterminado').load('Cedular_OpH2', {Ingresos: Ingresos, Deducciones: Deducciones});
                $('#LImp_Cargo').load('Cedular_OpH3', {Ingresos: Ingresos, Deducciones: Deducciones, TotalRetenido: TotalRetenido});
                $('#LACargo2').load('Cedular_OpH4', {Ingresos: Ingresos, Deducciones: Deducciones, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido});
                $('#L_Cedular').load('Cedular_OpHC4', {Ingresos: Ingresos, Deducciones: Deducciones, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido});
                var Actualizacion = $('#Actualizacion').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multa_Pagos = $('#Multa_Pagos').get(0).value;
                var Compensacion = $('#Compensacion').get(0).value;
                $('#L_Subtotal').load('Cedular_OpH5', {Ingresos: Ingresos, Deducciones: Deducciones, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Redondeo').load('Cedular_OpH6', {Ingresos: Ingresos, Deducciones: Deducciones, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Total').load('Cedular_OpH7', {Ingresos: Ingresos, Deducciones: Deducciones, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
            });
        },
        CedularH_5: function () {
            $(document).on('change', '#TotalRetenido', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var TotalRetenido = $('#TotalRetenido').get(0).value;
                var Imp_pagado = $('#Imp_pagado').get(0).value;
                $('#L_Base').load('Cedular_OpH1', {Ingresos: Ingresos, Deducciones: Deducciones});
                $('#L_IDeterminado').load('Cedular_OpH2', {Ingresos: Ingresos, Deducciones: Deducciones});
                $('#LImp_Cargo').load('Cedular_OpH3', {Ingresos: Ingresos, Deducciones: Deducciones, TotalRetenido: TotalRetenido});
                $('#LACargo2').load('Cedular_OpH4', {Ingresos: Ingresos, Deducciones: Deducciones, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido});
                $('#L_Cedular').load('Cedular_OpHC4', {Ingresos: Ingresos, Deducciones: Deducciones, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido});
                var Actualizacion = $('#Actualizacion').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multa_Pagos = $('#Multa_Pagos').get(0).value;
                var Compensacion = $('#Compensacion').get(0).value;
                $('#L_Subtotal').load('Cedular_OpH5', {Ingresos: Ingresos, Deducciones: Deducciones, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Redondeo').load('Cedular_OpH6', {Ingresos: Ingresos, Deducciones: Deducciones, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Total').load('Cedular_OpH7', {Ingresos: Ingresos, Deducciones: Deducciones, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
            });
        },
        CedularH_6: function () {
            $(document).on('change', '#Imp_pagado', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var TotalRetenido = $('#TotalRetenido').get(0).value;
                var Imp_pagado = $('#Imp_pagado').get(0).value;
                $('#L_Base').load('Cedular_OpH1', {Ingresos: Ingresos, Deducciones: Deducciones});
                $('#L_IDeterminado').load('Cedular_OpH2', {Ingresos: Ingresos, Deducciones: Deducciones});
                $('#LImp_Cargo').load('Cedular_OpH3', {Ingresos: Ingresos, Deducciones: Deducciones, TotalRetenido: TotalRetenido});
                $('#LACargo2').load('Cedular_OpH4', {Ingresos: Ingresos, Deducciones: Deducciones, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido});
                $('#L_Cedular').load('Cedular_OpHC4', {Ingresos: Ingresos, Deducciones: Deducciones, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido});

                var Actualizacion = $('#Actualizacion').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multa_Pagos = $('#Multa_Pagos').get(0).value;
                var Compensacion = $('#Compensacion').get(0).value;
                $('#L_Subtotal').load('Cedular_OpH5', {Ingresos: Ingresos, Deducciones: Deducciones, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Redondeo').load('Cedular_OpH6', {Ingresos: Ingresos, Deducciones: Deducciones, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Total').load('Cedular_OpH7', {Ingresos: Ingresos, Deducciones: Deducciones, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
            });
        },
        CedularH_7: function () {
            $(document).on('change', '#Imp_Cedular', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var TotalRetenido = $('#TotalRetenido').get(0).value;
                var Imp_pagado = $('#Imp_pagado').get(0).value;

                var Imp_Cedular = $('#Imp_Cedular').get(0).value;
                var Actualizacion = $('#Actualizacion').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multa_Pagos = $('#Multa_Pagos').get(0).value;
                var Compensacion = $('#Compensacion').get(0).value;
                $('#L_Subtotal').load('Cedular_OpH5', {Ingresos: Ingresos, Deducciones: Deducciones, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Redondeo').load('Cedular_OpH6', {Ingresos: Ingresos, Deducciones: Deducciones, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Total').load('Cedular_OpH7', {Ingresos: Ingresos, Deducciones: Deducciones, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
            });
        },
        CedularH_8: function () {
            $(document).on('change', '#Actualizacion', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var TotalRetenido = $('#TotalRetenido').get(0).value;
                var Imp_pagado = $('#Imp_pagado').get(0).value;

                var Imp_Cedular = $('#Imp_Cedular').get(0).value;
                var Actualizacion = $('#Actualizacion').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multa_Pagos = $('#Multa_Pagos').get(0).value;
                var Compensacion = $('#Compensacion').get(0).value;
                $('#L_Subtotal').load('Cedular_OpH5', {Ingresos: Ingresos, Deducciones: Deducciones, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Redondeo').load('Cedular_OpH6', {Ingresos: Ingresos, Deducciones: Deducciones, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Total').load('Cedular_OpH7', {Ingresos: Ingresos, Deducciones: Deducciones, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
            });
        },
        CedularH_9: function () {
            $(document).on('change', '#Recargos', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var TotalRetenido = $('#TotalRetenido').get(0).value;
                var Imp_pagado = $('#Imp_pagado').get(0).value;

                var Imp_Cedular = $('#Imp_Cedular').get(0).value;
                var Actualizacion = $('#Actualizacion').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multa_Pagos = $('#Multa_Pagos').get(0).value;
                var Compensacion = $('#Compensacion').get(0).value;
                $('#L_Subtotal').load('Cedular_OpH5', {Ingresos: Ingresos, Deducciones: Deducciones, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Redondeo').load('Cedular_OpH6', {Ingresos: Ingresos, Deducciones: Deducciones, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Total').load('Cedular_OpH7', {Ingresos: Ingresos, Deducciones: Deducciones, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
            });
        },
        CedularH_10: function () {
            $(document).on('change', '#Multa_Pagos', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var TotalRetenido = $('#TotalRetenido').get(0).value;
                var Imp_pagado = $('#Imp_pagado').get(0).value;

                var Imp_Cedular = $('#Imp_Cedular').get(0).value;
                var Actualizacion = $('#Actualizacion').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multa_Pagos = $('#Multa_Pagos').get(0).value;
                var Compensacion = $('#Compensacion').get(0).value;
                $('#L_Subtotal').load('Cedular_OpH5', {Ingresos: Ingresos, Deducciones: Deducciones, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Redondeo').load('Cedular_OpH6', {Ingresos: Ingresos, Deducciones: Deducciones, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Total').load('Cedular_OpH7', {Ingresos: Ingresos, Deducciones: Deducciones, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
            });
        },
        CedularH_11: function () {
            $(document).on('change', '#Compensacion', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Deducciones = $('#Deducciones').get(0).value;
                var TotalRetenido = $('#TotalRetenido').get(0).value;
                var Imp_pagado = $('#Imp_pagado').get(0).value;

                var Imp_Cedular = $('#Imp_Cedular').get(0).value;
                var Actualizacion = $('#Actualizacion').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                var Multa_Pagos = $('#Multa_Pagos').get(0).value;
                var Compensacion = $('#Compensacion').get(0).value;
                $('#L_Subtotal').load('Cedular_OpH5', {Ingresos: Ingresos, Deducciones: Deducciones, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Redondeo').load('Cedular_OpH6', {Ingresos: Ingresos, Deducciones: Deducciones, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
                $('#L_Total').load('Cedular_OpH7', {Ingresos: Ingresos, Deducciones: Deducciones, Imp_pagado: Imp_pagado, TotalRetenido: TotalRetenido, Actualizacion: Actualizacion, Recargos: Recargos, Multa_Pagos: Multa_Pagos, Compensacion: Compensacion});
            });
        },
        S_nomina: function () {
            $(document).on('click', '#Calcular', function (e) {
                var Importe = $('#Importe').get(0).value;
                var Actualizaciones = $('#Actualizaciones').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                $('#L_Importe').load('SNomina', {Importe: Importe, Actualizaciones: Actualizaciones, Recargos: Recargos});
                $('#L_Acargo').load('SNomina_2', {Importe: Importe});
            });
        },
        Hospedaje: function () {
            $(document).on('click', '#Calcular', function (e) {
                var Importe = $('#Importe').get(0).value;
                var Actualizaciones = $('#Actualizaciones').get(0).value;
                var Recargos = $('#Recargos').get(0).value;
                $('#L_Importe').load('Hospedj', {Importe: Importe, Actualizaciones: Actualizaciones, Recargos: Recargos});
                $('#L_Acargo').load('Hospedj_2', {Importe: Importe});
            });
        },
        Recargos: function () {
            $(document).on('click', '#RecargosB', function (e) {
                var MesaDeclarar = $('#meses').get(0).value;
                var MesActual = $('#RecargosB').get(0).value;

                var Impuestos = $('#ACargo').get(0).value;
                //alert(MesaDeclarar);		                 
                $('#L_Act').load('C_Actualizaciones', {MesaDeclarar: MesaDeclarar, MesActual: MesActual, Impuestos: Impuestos});
                $('#L_Rec').load('C_Recargos', {MesaDeclarar: MesaDeclarar, MesActual: MesActual, Impuestos: Impuestos});
            });
        },
        SumaIngresos: function () {
            $(document).on('change', '#Ingresos', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Otrosingresos = $('#Otrosingresos').get(0).value;
                var Ingresoscobrados = $('#Ingresoscobrados').get(0).value;
                var Ingresosnocobrados = $('#Ingresosnocobrados').get(0).value;
                $('#L_TotalIngresos').load('SumaIngresos', {Ingresos: Ingresos, Otrosingresos: Otrosingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados});
            });
        },
        SumaIngresos1: function () {
            $(document).on('change', '#Otrosingresos', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Otrosingresos = $('#Otrosingresos').get(0).value;
                var Ingresoscobrados = $('#Ingresoscobrados').get(0).value;
                var Ingresosnocobrados = $('#Ingresosnocobrados').get(0).value;
                $('#L_TotalIngresos').load('SumaIngresos', {Ingresos: Ingresos, Otrosingresos: Otrosingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados});
            });
        },
        SumaIngresos2: function () {
            $(document).on('change', '#Ingresoscobrados', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Otrosingresos = $('#Otrosingresos').get(0).value;
                var Ingresoscobrados = $('#Ingresoscobrados').get(0).value;
                var Ingresosnocobrados = $('#Ingresosnocobrados').get(0).value;
                $('#L_TotalIngresos').load('SumaIngresos', {Ingresos: Ingresos, Otrosingresos: Otrosingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados});
            });
        },
        SumaIngresos3: function () {
            $(document).on('change', '#Ingresosnocobrados', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Otrosingresos = $('#Otrosingresos').get(0).value;
                var Ingresoscobrados = $('#Ingresoscobrados').get(0).value;
                var Ingresosnocobrados = $('#Ingresosnocobrados').get(0).value;
                $('#L_TotalIngresos').load('SumaIngresos', {Ingresos: Ingresos, Otrosingresos: Otrosingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados});
            });
        },
        IVAtrasladado1: function () {
            $(document).on('change', '#Ingresos', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Ingresoscobrados = $('#Ingresoscobrados').get(0).value;
                var Ingresosnocobrados = $('#Ingresosnocobrados').get(0).value;
                $('#L_IVAtrasladado').load('IVAtrasladado', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados});
            });
        },
        IVAtrasladado2: function () {
            $(document).on('change', '#Ingresoscobrados', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Ingresoscobrados = $('#Ingresoscobrados').get(0).value;
                var Ingresosnocobrados = $('#Ingresosnocobrados').get(0).value;
                $('#L_IVAtrasladado').load('IVAtrasladado', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados});
            });
        },
        IVAtrasladado3: function () {
            $(document).on('change', '#Ingresosnocobrados', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Ingresoscobrados = $('#Ingresoscobrados').get(0).value;
                var Ingresosnocobrados = $('#Ingresosnocobrados').get(0).value;
                $('#L_IVAtrasladado').load('IVAtrasladado', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados});
            });
        },
        GastosConIVA: function () {
            $(document).on('change', '#ivaacreditable', function (e) {
                var ivaacreditable = $('#ivaacreditable').get(0).value;
                $('#L_GastosConIVA').load('GastosConIVA', {ivaacreditable: ivaacreditable});
            });
        },
        GastosSinIVA1: function () {
            $(document).on('change', '#ivaacreditable', function (e) {
                var ivaacreditable = $('#ivaacreditable').get(0).value;
                var Totalgastos = $('#Totalgastos').get(0).value;
                $('#L_GastossinIVA').load('GastossinIVA', {ivaacreditable: ivaacreditable, Totalgastos: Totalgastos});
            });
        },
        GastosSinIVA2: function () {
            $(document).on('change', '#Totalgastos', function (e) {
                var ivaacreditable = $('#ivaacreditable').get(0).value;
                var Totalgastos = $('#Totalgastos').get(0).value;
                $('#L_GastossinIVA').load('GastossinIVA', {ivaacreditable: ivaacreditable, Totalgastos: Totalgastos});
            });
        },
        IVAFavor1: function () {
            $(document).on('change', '#Ingresos', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Ingresoscobrados = $('#Ingresoscobrados').get(0).value;
                var Ingresosnocobrados = $('#Ingresosnocobrados').get(0).value;
                var ivaacreditable = $('#ivaacreditable').get(0).value;
                $('#L_IVAfavor').load('IVAFavor', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados, ivaacreditable: ivaacreditable});
            });
        },
        IVAFavor2: function () {
            $(document).on('change', '#Ingresoscobrados', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Ingresoscobrados = $('#Ingresoscobrados').get(0).value;
                var Ingresosnocobrados = $('#Ingresosnocobrados').get(0).value;
                var ivaacreditable = $('#ivaacreditable').get(0).value;
                $('#L_IVAfavor').load('IVAFavor', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados, ivaacreditable: ivaacreditable});
            });
        },
        IVAFavor3: function () {
            $(document).on('change', '#Ingresosnocobrados', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Ingresoscobrados = $('#Ingresoscobrados').get(0).value;
                var Ingresosnocobrados = $('#Ingresosnocobrados').get(0).value;
                var ivaacreditable = $('#ivaacreditable').get(0).value;
                $('#L_IVAfavor').load('IVAFavor', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados, ivaacreditable: ivaacreditable});
            });
        },
        IVAFavor4: function () {
            $(document).on('change', '#ivaacreditable', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Ingresoscobrados = $('#Ingresoscobrados').get(0).value;
                var Ingresosnocobrados = $('#Ingresosnocobrados').get(0).value;
                var ivaacreditable = $('#ivaacreditable').get(0).value;
                $('#L_IVAfavor').load('IVAFavor', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados, ivaacreditable: ivaacreditable});
            });
        },
        IVAPagar1: function () {
            $(document).on('change', '#Ingresos', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Ingresoscobrados = $('#Ingresoscobrados').get(0).value;
                var Ingresosnocobrados = $('#Ingresosnocobrados').get(0).value;
                var ivaacreditable = $('#ivaacreditable').get(0).value;
                $('#L_IVAPagar').load('IVAPagar', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados, ivaacreditable: ivaacreditable});
            });
        },
        IVAPagar2: function () {
            $(document).on('change', '#Ingresoscobrados', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Ingresoscobrados = $('#Ingresoscobrados').get(0).value;
                var Ingresosnocobrados = $('#Ingresosnocobrados').get(0).value;
                var ivaacreditable = $('#ivaacreditable').get(0).value;
                $('#L_IVAPagar').load('IVAPagar', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados, ivaacreditable: ivaacreditable});
            });
        },
        IVAPagar3: function () {
            $(document).on('change', '#Ingresosnocobrados', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Ingresoscobrados = $('#Ingresoscobrados').get(0).value;
                var Ingresosnocobrados = $('#Ingresosnocobrados').get(0).value;
                var ivaacreditable = $('#ivaacreditable').get(0).value;
                $('#L_IVAPagar').load('IVAPagar', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados, ivaacreditable: ivaacreditable});
            });
        },
        IVAPagar4: function () {
            $(document).on('change', '#ivaacreditable', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Ingresoscobrados = $('#Ingresoscobrados').get(0).value;
                var Ingresosnocobrados = $('#Ingresosnocobrados').get(0).value;
                var ivaacreditable = $('#ivaacreditable').get(0).value;
                $('#L_IVAPagar').load('IVAPagar', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados, ivaacreditable: ivaacreditable});
            });
        },
        //faltan
        GastosConIVA2: function () {
            $(document).on('change', '#ivaacreditable', function (e) {
                var ivaacreditable = $('#ivaacreditable').get(0).value;
                $('#L_Total_actos16').load('GastosConIVA2', {ivaacreditable: ivaacreditable});
            });
        },
        GastosSinIVA3: function () {
            $(document).on('change', '#ivaacreditable', function (e) {
                var ivaacreditable = $('#ivaacreditable').get(0).value;
                var Totalgastos = $('#Totalgastos').get(0).value;
                $('#L_Total_actos0').load('GastosSinIVA3', {ivaacreditable: ivaacreditable, Totalgastos: Totalgastos});
            });
        },
        GastosSinIVA4: function () {
            $(document).on('change', '#Totalgastos', function (e) {
                var ivaacreditable = $('#ivaacreditable').get(0).value;
                var Totalgastos = $('#Totalgastos').get(0).value;
                $('#L_Total_actos0').load('GastosSinIVA3', {ivaacreditable: ivaacreditable, Totalgastos: Totalgastos});
            });
        },
        GastosConIVA3: function () {
            $(document).on('change', '#ivaacreditable', function (e) {
                var ivaacreditable = $('#ivaacreditable').get(0).value;
                $('#L_DTotal_actos16').load('GastosConIVA3', {ivaacreditable: ivaacreditable});
            });
        },
        IVAtrasladado4: function () {
            $(document).on('change', '#Ingresos', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Ingresoscobrados = $('#Ingresoscobrados').get(0).value;
                var Ingresosnocobrados = $('#Ingresosnocobrados').get(0).value;
                $('#L_Valor_actos16').load('Valor_actos16', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados});
            });
        },
        IVAtrasladado5: function () {
            $(document).on('change', '#Ingresoscobrados', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Ingresoscobrados = $('#Ingresoscobrados').get(0).value;
                var Ingresosnocobrados = $('#Ingresosnocobrados').get(0).value;
                $('#L_Valor_actos16').load('Valor_actos16', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados});
            });
        },
        IVAtrasladado6: function () {
            $(document).on('change', '#Ingresosnocobrados', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Ingresoscobrados = $('#Ingresoscobrados').get(0).value;
                var Ingresosnocobrados = $('#Ingresosnocobrados').get(0).value;
                $('#L_Valor_actos16').load('Valor_actos16', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados});
            });
        },
        IVAtrasladado7: function () {
            $(document).on('change', '#Otrosingresos', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Ingresoscobrados = $('#Ingresoscobrados').get(0).value;
                var Ingresosnocobrados = $('#Ingresosnocobrados').get(0).value;
                $('#L_Valor_actos16').load('Valor_actos16', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados});
            });
        },
        PA_Cargo1: function () {
            $(document).on('change', '#Ingresos', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Ingresoscobrados = $('#Ingresoscobrados').get(0).value;
                var Ingresosnocobrados = $('#Ingresosnocobrados').get(0).value;
                var ivaacreditable = $('#ivaacreditable').get(0).value;
                var Acredit_Saldo_favor = $('#Acredit_Saldo_favor').get(0).value;
                $('#L_PA_Cargo').load('PA_Cargo', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados, ivaacreditable: ivaacreditable, Acredit_Saldo_favor: Acredit_Saldo_favor});
            });
        },
        PA_Cargo2: function () {
            $(document).on('change', '#Ingresoscobrados', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Ingresoscobrados = $('#Ingresoscobrados').get(0).value;
                var Ingresosnocobrados = $('#Ingresosnocobrados').get(0).value;
                var ivaacreditable = $('#ivaacreditable').get(0).value;
                var Acredit_Saldo_favor = $('#Acredit_Saldo_favor').get(0).value;
                $('#L_PA_Cargo').load('PA_Cargo', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados, ivaacreditable: ivaacreditable, Acredit_Saldo_favor: Acredit_Saldo_favor});
            });
        },
        PA_Cargo3: function () {
            $(document).on('change', '#Ingresosnocobrados', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Ingresoscobrados = $('#Ingresoscobrados').get(0).value;
                var Ingresosnocobrados = $('#Ingresosnocobrados').get(0).value;
                var ivaacreditable = $('#ivaacreditable').get(0).value;
                var Acredit_Saldo_favor = $('#Acredit_Saldo_favor').get(0).value;
                $('#L_PA_Cargo').load('PA_Cargo', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados, ivaacreditable: ivaacreditable, Acredit_Saldo_favor: Acredit_Saldo_favor});
            });
        },
        PA_Cargo4: function () {
            $(document).on('change', '#ivaacreditable', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Ingresoscobrados = $('#Ingresoscobrados').get(0).value;
                var Ingresosnocobrados = $('#Ingresosnocobrados').get(0).value;
                var ivaacreditable = $('#ivaacreditable').get(0).value;
                var Acredit_Saldo_favor = $('#Acredit_Saldo_favor').get(0).value;
                $('#L_PA_Cargo').load('PA_Cargo', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados, ivaacreditable: ivaacreditable, Acredit_Saldo_favor: Acredit_Saldo_favor});
            });
        },
        PA_Cargo5: function () {
            $(document).on('change', '#Acredit_Saldo_favor', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Ingresoscobrados = $('#Ingresoscobrados').get(0).value;
                var Ingresosnocobrados = $('#Ingresosnocobrados').get(0).value;
                var ivaacreditable = $('#ivaacreditable').get(0).value;
                var Acredit_Saldo_favor = $('#Acredit_Saldo_favor').get(0).value;
                $('#L_PA_Cargo').load('PA_Cargo', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados, ivaacreditable: ivaacreditable, Acredit_Saldo_favor: Acredit_Saldo_favor});
            });
        },
        CantPagar: function () {
            $(document).on('change', '#Ingresos', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Ingresoscobrados = $('#Ingresoscobrados').get(0).value;
                var Ingresosnocobrados = $('#Ingresosnocobrados').get(0).value;
                var ivaacreditable = $('#ivaacreditable').get(0).value;
                var Acredit_Saldo_favor = $('#Acredit_Saldo_favor').get(0).value;
                var Pparte_Actualizada = $('#Pparte_Actualizada').get(0).value;
                var PParte_recargos = $('#PParte_recargos').get(0).value;
                $('#L_PTotal_contribuciones').load('CantPagar21', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados, ivaacreditable: ivaacreditable, Acredit_Saldo_favor: Acredit_Saldo_favor, Pparte_Actualizada: Pparte_Actualizada, PParte_recargos: PParte_recargos});
                $('#L_PCant_cargo').load('CantPagar22', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados, ivaacreditable: ivaacreditable, Acredit_Saldo_favor: Acredit_Saldo_favor, Pparte_Actualizada: Pparte_Actualizada, PParte_recargos: PParte_recargos});
                $('#L_PCant_pagar').load('CantPagar23', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados, ivaacreditable: ivaacreditable, Acredit_Saldo_favor: Acredit_Saldo_favor, Pparte_Actualizada: Pparte_Actualizada, PParte_recargos: PParte_recargos});
            });
        },
        CantPagar1: function () {
            $(document).on('change', '#Ingresoscobrados', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Ingresoscobrados = $('#Ingresoscobrados').get(0).value;
                var Ingresosnocobrados = $('#Ingresosnocobrados').get(0).value;
                var ivaacreditable = $('#ivaacreditable').get(0).value;
                var Acredit_Saldo_favor = $('#Acredit_Saldo_favor').get(0).value;
                var Pparte_Actualizada = $('#Pparte_Actualizada').get(0).value;
                var PParte_recargos = $('#PParte_recargos').get(0).value;
                $('#L_PTotal_contribuciones').load('CantPagar21', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados, ivaacreditable: ivaacreditable, Acredit_Saldo_favor: Acredit_Saldo_favor, Pparte_Actualizada: Pparte_Actualizada, PParte_recargos: PParte_recargos});
                $('#L_PCant_cargo').load('CantPagar22', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados, ivaacreditable: ivaacreditable, Acredit_Saldo_favor: Acredit_Saldo_favor, Pparte_Actualizada: Pparte_Actualizada, PParte_recargos: PParte_recargos});
                $('#L_PCant_pagar').load('CantPagar23', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados, ivaacreditable: ivaacreditable, Acredit_Saldo_favor: Acredit_Saldo_favor, Pparte_Actualizada: Pparte_Actualizada, PParte_recargos: PParte_recargos});
            });
        },
        CantPagar2: function () {
            $(document).on('change', '#Ingresosnocobrados', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Ingresoscobrados = $('#Ingresoscobrados').get(0).value;
                var Ingresosnocobrados = $('#Ingresosnocobrados').get(0).value;
                var ivaacreditable = $('#ivaacreditable').get(0).value;
                var Acredit_Saldo_favor = $('#Acredit_Saldo_favor').get(0).value;
                var Pparte_Actualizada = $('#Pparte_Actualizada').get(0).value;
                var PParte_recargos = $('#PParte_recargos').get(0).value;
                $('#L_PTotal_contribuciones').load('CantPagar21', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados, ivaacreditable: ivaacreditable, Acredit_Saldo_favor: Acredit_Saldo_favor, Pparte_Actualizada: Pparte_Actualizada, PParte_recargos: PParte_recargos});
                $('#L_PCant_cargo').load('CantPagar22', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados, ivaacreditable: ivaacreditable, Acredit_Saldo_favor: Acredit_Saldo_favor, Pparte_Actualizada: Pparte_Actualizada, PParte_recargos: PParte_recargos});
                $('#L_PCant_pagar').load('CantPagar23', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados, ivaacreditable: ivaacreditable, Acredit_Saldo_favor: Acredit_Saldo_favor, Pparte_Actualizada: Pparte_Actualizada, PParte_recargos: PParte_recargos});
            });
        },
        CantPagar3: function () {
            $(document).on('change', '#ivaacreditable', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Ingresoscobrados = $('#Ingresoscobrados').get(0).value;
                var Ingresosnocobrados = $('#Ingresosnocobrados').get(0).value;
                var ivaacreditable = $('#ivaacreditable').get(0).value;
                var Acredit_Saldo_favor = $('#Acredit_Saldo_favor').get(0).value;
                var Pparte_Actualizada = $('#Pparte_Actualizada').get(0).value;
                var PParte_recargos = $('#PParte_recargos').get(0).value;
                $('#L_PTotal_contribuciones').load('CantPagar21', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados, ivaacreditable: ivaacreditable, Acredit_Saldo_favor: Acredit_Saldo_favor, Pparte_Actualizada: Pparte_Actualizada, PParte_recargos: PParte_recargos});
                $('#L_PCant_cargo').load('CantPagar22', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados, ivaacreditable: ivaacreditable, Acredit_Saldo_favor: Acredit_Saldo_favor, Pparte_Actualizada: Pparte_Actualizada, PParte_recargos: PParte_recargos});
                $('#L_PCant_pagar').load('CantPagar23', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados, ivaacreditable: ivaacreditable, Acredit_Saldo_favor: Acredit_Saldo_favor, Pparte_Actualizada: Pparte_Actualizada, PParte_recargos: PParte_recargos});
            });
        },
        CantPagar4: function () {
            $(document).on('change', '#Acredit_Saldo_favor', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Ingresoscobrados = $('#Ingresoscobrados').get(0).value;
                var Ingresosnocobrados = $('#Ingresosnocobrados').get(0).value;
                var ivaacreditable = $('#ivaacreditable').get(0).value;
                var Acredit_Saldo_favor = $('#Acredit_Saldo_favor').get(0).value;
                var Pparte_Actualizada = $('#Pparte_Actualizada').get(0).value;
                var PParte_recargos = $('#PParte_recargos').get(0).value;
                $('#L_PTotal_contribuciones').load('CantPagar21', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados, ivaacreditable: ivaacreditable, Acredit_Saldo_favor: Acredit_Saldo_favor, Pparte_Actualizada: Pparte_Actualizada, PParte_recargos: PParte_recargos});
                $('#L_PCant_cargo').load('CantPagar22', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados, ivaacreditable: ivaacreditable, Acredit_Saldo_favor: Acredit_Saldo_favor, Pparte_Actualizada: Pparte_Actualizada, PParte_recargos: PParte_recargos});
                $('#L_PCant_pagar').load('CantPagar23', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados, ivaacreditable: ivaacreditable, Acredit_Saldo_favor: Acredit_Saldo_favor, Pparte_Actualizada: Pparte_Actualizada, PParte_recargos: PParte_recargos});
            });
        },
        CantPagar5: function () {
            $(document).on('change', '#Pparte_Actualizada', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Ingresoscobrados = $('#Ingresoscobrados').get(0).value;
                var Ingresosnocobrados = $('#Ingresosnocobrados').get(0).value;
                var ivaacreditable = $('#ivaacreditable').get(0).value;
                var Acredit_Saldo_favor = $('#Acredit_Saldo_favor').get(0).value;
                var Pparte_Actualizada = $('#Pparte_Actualizada').get(0).value;
                var PParte_recargos = $('#PParte_recargos').get(0).value;
                $('#L_PTotal_contribuciones').load('CantPagar21', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados, ivaacreditable: ivaacreditable, Acredit_Saldo_favor: Acredit_Saldo_favor, Pparte_Actualizada: Pparte_Actualizada, PParte_recargos: PParte_recargos});
                $('#L_PCant_cargo').load('CantPagar22', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados, ivaacreditable: ivaacreditable, Acredit_Saldo_favor: Acredit_Saldo_favor, Pparte_Actualizada: Pparte_Actualizada, PParte_recargos: PParte_recargos});
                $('#L_PCant_pagar').load('CantPagar23', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados, ivaacreditable: ivaacreditable, Acredit_Saldo_favor: Acredit_Saldo_favor, Pparte_Actualizada: Pparte_Actualizada, PParte_recargos: PParte_recargos});
            });
        },
        CantPagar6: function () {
            $(document).on('change', '#PParte_recargos', function (e) {
                var Ingresos = $('#Ingresos').get(0).value;
                var Ingresoscobrados = $('#Ingresoscobrados').get(0).value;
                var Ingresosnocobrados = $('#Ingresosnocobrados').get(0).value;
                var ivaacreditable = $('#ivaacreditable').get(0).value;
                var Acredit_Saldo_favor = $('#Acredit_Saldo_favor').get(0).value;
                var Pparte_Actualizada = $('#Pparte_Actualizada').get(0).value;
                var PParte_recargos = $('#PParte_recargos').get(0).value;
                $('#L_PTotal_contribuciones').load('CantPagar21', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados, ivaacreditable: ivaacreditable, Acredit_Saldo_favor: Acredit_Saldo_favor, Pparte_Actualizada: Pparte_Actualizada, PParte_recargos: PParte_recargos});
                $('#L_PCant_cargo').load('CantPagar22', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados, ivaacreditable: ivaacreditable, Acredit_Saldo_favor: Acredit_Saldo_favor, Pparte_Actualizada: Pparte_Actualizada, PParte_recargos: PParte_recargos});
                $('#L_PCant_pagar').load('CantPagar23', {Ingresos: Ingresos, Ingresoscobrados: Ingresoscobrados, Ingresosnocobrados: Ingresosnocobrados, ivaacreditable: ivaacreditable, Acredit_Saldo_favor: Acredit_Saldo_favor, Pparte_Actualizada: Pparte_Actualizada, PParte_recargos: PParte_recargos});
            });
        },
        Notificar: function () {
            $(document).on('change', '#meses', function (e) {
                var meses = $('#meses').get(0).value;
                var Folio = $('#Folio').get(0).value;
                var Anio = $('#Anio').get(0).value;
                $('#L_ISR').load('NotificandoISR', {Anio: Anio, meses: meses, Folio: Folio});
                $('#L_IVA').load('NotificandoIVA', {Anio: Anio, meses: meses, Folio: Folio});
                $('#L_Nomina').load('NotificandoNomina', {Anio: Anio, meses: meses, Folio: Folio});
                $('#L_CEDULAR').load('NotificandoCedular', {Anio: Anio, meses: meses, Folio: Folio});
                $('#L_Hospedaje').load('NotificandoHospedaje', {Anio: Anio, meses: meses, Folio: Folio});
                $('#L_Federales').load('NotificandoFederal', {Anio: Anio, meses: meses, Folio: Folio});
                $('#L_Estatales').load('NotificandoEstatal', {Anio: Anio, meses: meses, Folio: Folio});
                $('#L_Total').load('NotificandoTotal', {Anio: Anio, meses: meses, Folio: Folio});
            });
        },
        Consultar: function () {
            $(document).on('change', '#Folio', function (e) {
                var Importe = $('#Folio').get(0).value;
                $('#Consulta').load('FunConsulta', {Importe: Importe});
            });
        },
        Consultar2: function () {
            $(document).on('change', '#Tipo', function (e) {
                var Importe = $('#Tipo').get(0).value;
                $('#Consulta').load('FunConsulta2', {Importe: Importe});
            });
        },
        Consultar3: function () {
            $(document).on('change', '#Estatus', function (e) {
                var Importe = $('#Estatus').get(0).value;
                $('#Consulta').load('FunConsulta3', {Importe: Importe});
            });
        },
        ConsultarRef1: function () {
            $(document).on('change', '#Folio', function (e) {
                var ID = $('#Folio').get(0).value;
                $('#Consulta').load('ResultadoRef', {ID: ID});
            });
        },
        ConsultarRef2: function () {
            $(document).on('change', '#Historico', function (e) {
                var ID = $('#Historico').get(0).value;
                $('#Consulta').load('ResultadoRef', {ID: ID});
            });
        },
        ConsultarTramite: function () {
            $(document).on('change', '#Historico', function (e) {
                var ID = $('#Historico').get(0).value;
                var user = $('#user').get(0).value;
                $('#Consulta').load('ResultadoTramite', {ID: ID, user: user});
            });
        },
        ConsultarMetas: function () {
            $(document).on('change', '#Metas', function (e) {
                var ID = $('#Metas').get(0).value;
                $('#Consulta').load('ResultadoMetas', {ID: ID});
            });
        },
        ConsultarPagoPendiente: function () {
            $(document).on('change', '#ID_cliente', function (e) {
                var ID = $('#ID_cliente').get(0).value;
                //alert(ID);             
                $('#Resultado').load('ResultadoPagoPendiente', {ID: ID});
            });
        },
        PagosParaRecibo: function () {
            $(document).on('change', '#ID_cliente', function (e) {
                var ID = $('#ID_cliente').get(0).value;
                //alert(ID);             
                $("#Resultado").removeClass("hide");
                $('#Resultado').load('ResultadoRecibo', {ID: ID});
            });
        },
        PaguitosRecibo: function () {
//            $(document).on('change', '#ReciboCantidad', function (e) {
//                var ReciboCantidad = $('#ReciboCantidad').get(0).value;
                //alert(ID);             
//                var string = numeral(ReciboCantidad).format('$0,0.00');
//                $("#ReciboTotal").val(string);
//                $('#ModificarRecibo').load('PaguitosRecibo', {ReciboCantidad: ReciboCantidad});
//                $.ajax({
//                    ulr: base_url + 'index.php/ctrlCobranza/PaguitosRecibo',
//                    type: 'POST',
//                    data: {
//                        ReciboCantidad: ReciboCantidad
//                    }
//                }).done(function (data) {
//                    console.log(data);
//                    console.log(ReciboCantidad);
//                });
//            });
        },
        LlenarRecibo: function () {
//            $(document).on('change', '#CobroPendiente', function (e) {
//                var CobroPendiente = $('#CobroPendiente').get(0).value;
//                $('#ResultadoRecibo').load('LlenadoRecibo', {CobroPendiente: CobroPendiente});
//            });
        },
        EdoCuenta: function () {
//            $(document).on('click', '#consultar', function (e) {
//                var Cliente = $('#Cliente').get(0).value;
//                var FechaInicioEdo = $('#datepicker').get(0).value;
//                var FechaTerminoEdo = $('#datepicker2').get(0).value;
//                $('#ResultadoEdoCuenta').load('EdoCuenta', {Cliente: Cliente, FechaInicioEdo: FechaInicioEdo, FechaTerminoEdo: FechaTerminoEdo});
//            });
            $("#FechaInicioEdo").on('change', function () {
                $("#ResultadoEdoCuenta").html('<div class="text-center" align="center"><h2><i class="fa fa-circle-o faa-burst animated"></i> ESPERE...</h2></div>');
                onChangeEdoCuenta();
            });
            $("#FechaTerminoEdo").on('change', function () {
                $("#ResultadoEdoCuenta").html('<div class="text-center" align="center"><h2><i class="fa fa-circle-o faa-burst animated"></i> ESPERE...</h2></div>');
                console.log('.....')
                onChangeEdoCuenta()
            });
        },
        EdoCuentaDepositos: function () {
            $(document).on('click', '#consultar', function (e) {
                var Cliente = $('#Cliente').get(0).value;
                var FechaInicioEdo = $('#datepicker').get(0).value;
                var FechaTerminoEdo = $('#datepicker2').get(0).value;
                $('#ResultadoEdoCuenta').load(base_url + 'index.php/ctrlCobranza/EdoCuentaDepositos', {Cliente: Cliente, FechaInicioEdo: FechaInicioEdo, FechaTerminoEdo: FechaTerminoEdo});
            });
        },
        EdoCuentaIngresos: function () {
            $(document).on('click', '#consultar', function (e) {
                var Cliente = $('#Cliente').get(0).value;
                var FechaInicioEdo = $('#datepicker').get(0).value;
                var FechaTerminoEdo = $('#datepicker2').get(0).value;
                $('#ResultadoEdoCuenta').load(base_url + 'index.php/ctrlCobranza/EdoCuentaIngresos', {Cliente: Cliente, FechaInicioEdo: FechaInicioEdo, FechaTerminoEdo: FechaTerminoEdo});
            });
        },
        EnProceso: function () {
            $(document).on('click', '#consultar', function (e) {
                var Cliente = $('#Cliente').get(0).value;
                var FechaInicioEdo = $('#FechaInicioEdo').get(0).value;
                var FechaTerminoEdo = $('#FechaTerminoEdo').get(0).value;
                $('#ResultadoEdoCuenta').load('EnProceso', {Cliente: Cliente, FechaInicioEdo: FechaInicioEdo, FechaTerminoEdo: FechaTerminoEdo});
            });
        },
        Concluidos: function () {
            $(document).on('click', '#consultar', function (e) {
                var Cliente = $('#Cliente').get(0).value;
                var FechaInicioEdo = $('#FechaInicioEdo').get(0).value;
                var FechaTerminoEdo = $('#FechaTerminoEdo').get(0).value;
                $('#ResultadoEdoCuenta').load('Concluidos', {Cliente: Cliente, FechaInicioEdo: FechaInicioEdo, FechaTerminoEdo: FechaTerminoEdo});
            });
        },
        Estancia: function () {
            $(document).on('change', '#Estanciaid', function (e) {
                var Estancia = $('#Estanciaid').get(0).value;
                $('#EstanciaElegida').load('EstanciaID', {Estancia: Estancia});
            });
        },
        InformacionSegSoc: function () {
            $(document).on('change', '#ID_cliente', function (e) {
                var idcliente = $('#ID_cliente').get(0).value;
                $('#Informacion').load('InformacionSS', {idcliente: idcliente});
            });
        },
        InformacionSS_2: function () {
            $(document).on('change', '#ID_cliente', function (e) {
                var idcliente = $('#ID_cliente').get(0).value;
                $('#Informacion').load('InformacionSS_2', {idcliente: idcliente});
            });
        },
        InformacionSS_3: function () {
            $(document).on('change', '#ID_cliente', function (e) {
                var idcliente = $('#ID_cliente').get(0).value;
                $('#Informacion').load('InformacionSS_3', {idcliente: idcliente});
            });
        },
        InformacionSS_4: function () {
            $(document).on('change', '#ID_cliente', function (e) {
                var idcliente = $('#ID_cliente').get(0).value;
                $('#Informacion').load('InformacionSS_4', {idcliente: idcliente});
            });
        },
        InformacionSS_5: function () {
            $(document).on('change', '#ID_cliente', function (e) {
                var idcliente = $('#ID_cliente').get(0).value;
                $('#Informacion').load('InformacionSS_5', {idcliente: idcliente});
            });
        },
        InformacionSS_6: function () {
            $(document).on('change', '#ID_cliente', function (e) {
                var idcliente = $('#ID_cliente').get(0).value;
                $('#Informacion').load('InformacionSS_6', {idcliente: idcliente});
            });
        },
        InformacionSS_7: function () {
            $(document).on('change', '#ID_cliente', function (e) {
                var idcliente = $('#ID_cliente').get(0).value;
                $('#Informacion').load('InformacionSS_7', {idcliente: idcliente});
            });
        },
        InformacionSS_8: function () {
            $(document).on('change', '#ID_cliente', function (e) {
                var idcliente = $('#ID_cliente').get(0).value;
                $('#Informacion').load('InformacionSS_8', {idcliente: idcliente});
            });
        },
        InformacionSS_9: function () {
            $(document).on('change', '#ID_cliente', function (e) {
                var idcliente = $('#ID_cliente').get(0).value;
                $('#Informacion').load('InformacionSS_9', {idcliente: idcliente});
            });
        },
        InformacionSS_10: function () {
            $(document).on('change', '#ID_cliente', function (e) {
                var idcliente = $('#ID_cliente').get(0).value;
                $('#Informacion').load('InformacionSS_10', {idcliente: idcliente});
            });
        },
        InformacionSS_11: function () {
            $(document).on('change', '#ID_cliente', function (e) {
                var idcliente = $('#ID_cliente').get(0).value;
                $('#Informacion').load('InformacionSS_11', {idcliente: idcliente});
            });
        },
        InformacionSS_12: function () {
            $(document).on('change', '#ID_cliente', function (e) {
                var idcliente = $('#ID_cliente').get(0).value;
                $('#Informacion').load('InformacionSS_12', {idcliente: idcliente});
            });
        },
        InformacionSS_13: function () {
            $(document).on('change', '#ID_cliente', function (e) {
                var idcliente = $('#ID_cliente').get(0).value;
                $('#Informacion').load('InformacionSS_13', {idcliente: idcliente});
            });
        },
        InformacionSS_14: function () {
            $(document).on('change', '#ID_cliente', function (e) {
                var idcliente = $('#ID_cliente').get(0).value;
                $('#Informacion').load('InformacionSS_14', {idcliente: idcliente});
            });
        },
        InformacionSS_15: function () {
            $(document).on('change', '#ID_cliente', function (e) {
                var idcliente = $('#ID_cliente').get(0).value;
                $('#Informacion').load('InformacionSS_15', {idcliente: idcliente});
            });
        },
        InformacionSS_18: function () {
            $(document).on('change', '#ID_cliente', function (e) {
                var idcliente = $('#ID_cliente').get(0).value;
                $('#Informacion').load('InformacionSS_18', {idcliente: idcliente});
            });
        },
        InformacionSS_19: function () {
            $(document).on('change', '#ID_cliente', function (e) {
                var idcliente = $('#ID_cliente').get(0).value;
                $('#Informacion').load('InformacionSS_19', {idcliente: idcliente});
            });
        },
        InformacionSS_20: function () {
            $(document).on('change', '#ID_cliente', function (e) {
                var idcliente = $('#ID_cliente').get(0).value;
                $('#Informacion').load('InformacionSS_20', {idcliente: idcliente});
            });
        },
        ReporteProceso: function () {
            $(document).on('click', '#consultar', function (e) {
                var FechaInicio = $('#datepicker').get(0).value;
                var FechaTermino = $('#datepicker2').get(0).value;
                $('#ResultadoProceso').load('ReporteProceso', {FechaInicio: FechaInicio, FechaTermino: FechaTermino});
            });
        },
        ReporteConcluidos: function () {
            $(document).on('click', '#consultar', function (e) {
                var FechaInicio = $('#datepicker').get(0).value;
                var FechaTermino = $('#datepicker2').get(0).value;
                $('#ResultadoProceso').load('ReporteConcluidos', {FechaInicio: FechaInicio, FechaTermino: FechaTermino});
            });
        },
        InmuebleFolio: function () {
            $(document).on('change', '#Folio', function (e) {
                var ID = $('#Folio').get(0).value;
                $('#Consulta').load('ResultadoInmueble', {ID: ID});
            });
        },
        InmuebleNombre: function () {
            $(document).on('change', '#Nombre', function (e) {
                var ID = $('#Nombre').get(0).value;
                $('#Consulta').load('ResultadoInmueble', {ID: ID});
            });
        },
        MuebleFolio: function () {
            $(document).on('change', '#Folio', function (e) {
                var ID = $('#Folio').get(0).value;
                $('#Consulta').load('ResultadoMueble', {ID: ID});
            });
        },
        MuebleNombre: function () {
            $(document).on('change', '#Nombre', function (e) {
                var ID = $('#Nombre').get(0).value;
                $('#Consulta').load('ResultadoMueble', {ID: ID});
            });
        },
        MuebleArea: function () {
            $(document).on('change', '#Area', function (e) {
                var Area = $('#Area').get(0).value;
                $('#Consulta').load('ResultadoMuebleA', {Area: Area});
            });
        },
        MuebleResponsable: function () {
            $(document).on('change', '#Responsable', function (e) {
                var Responsable = $('#Responsable').get(0).value;
                $('#Consulta').load('ResultadoMuebleR', {Responsable: Responsable});
            });
        },
        InformacionBalance: function () {
            $(document).on('change', '#Cliente', function (e) {
                var idcliente = $('#Cliente').get(0).value;
                $('#Informacion').load('InformacionB', {idcliente: idcliente});
            });
        },
        InformacionEstado: function () {
            $(document).on('change', '#Cliente', function (e) {
                var idcliente = $('#Cliente').get(0).value;
                $('#Informacion').load('InformacionE', {idcliente: idcliente});
            });
        },
        InformacionBalanceCP: function () {
            $(document).on('change', '#Cliente', function (e) {
                var idcliente = $('#Cliente').get(0).value;
                $('#Informacion').load('InformacionBCP', {idcliente: idcliente});
            });
        },
        InformacionCAnual: function () {
            $(document).on('change', '#Cliente', function (e) {
                var idcliente = $('#Cliente').get(0).value;
                $('#Informacion').load('InformacionCAnual', {idcliente: idcliente});
            });
        },
        InformacionCDIOT: function () {
            $(document).on('change', '#Cliente', function (e) {
                var idcliente = $('#Cliente').get(0).value;
                $('#Informacion').load('InformacionCDIOT', {idcliente: idcliente});
            });
        },
        ReporteCProceso: function () {
            $(document).on('click', '#consultar', function (e) {
                var Mes = $('#Mes').get(0).value;
                $('#ResultadoProceso').load('ReporteCProceso', {Mes: Mes});
            });
        },
        ReporteCConcluidos: function () {
            $(document).on('click', '#consultar', function (e) {
                var Mes = $('#Mes').get(0).value;
                $('#ResultadoConcluidos').load('ReporteCConcluidos', {Mes: Mes});
            });
        },
        ReporteCEstatus: function () {
            $(document).on('click', '#consultar', function (e) {
                var Folio = $('#ID_cliente').get(0).value;
                var Mes = $('#Mes').get(0).value;
                $('#ResultadoConcluidos').load('ReporteCEstado', {Folio: Folio, Mes: Mes});
            });
        },
        Proveedor: function () {
            $(document).on('change', '#Proveedor', function (e) {
                var Proveedor = $('#Proveedor').get(0).value;
                //alert(Proveedor);           
                $('#Consulta').load('ReporteProveedores', {Proveedor: Proveedor});
            });
        },
        ProveedorTipo: function () {
            $(document).on('change', '#Tipo', function (e) {
                var Tipo = $('#Tipo').get(0).value;
                //alert(Proveedor);           
                $('#Consulta').load('ReporteProveedoresT', {Tipo: Tipo});
            });
        },
        ProveedorRama: function () {
            $(document).on('change', '#Rama', function (e) {
                var Rama = $('#Rama').get(0).value;
                //alert(Proveedor);           
                $('#Consulta').load('ReporteProveedoresR', {Rama: Rama});
            });
        },
        ProveedorActividad: function () {
            $(document).on('change', '#Actividad', function (e) {
                var Actividad = $('#Actividad').get(0).value;
                //alert(Proveedor);           
                $('#Consulta').load('ReporteProveedoresA', {Actividad: Actividad});
            });
        },
        ReporteMovimientos: function () {
            $(document).on('click', '#consultar', function (e) {
                var Proveedor = $('#Proveedor').get(0).value;
                var FechaInicio = $('#FechaInicio').get(0).value;
                var FechaTermino = $('#FechaTermino').get(0).value;
                //alert(Proveedor);       
                $('#ResultadoMovimientos').load('ReporteMovimientos', {Proveedor: Proveedor, FechaInicio: FechaInicio, FechaTermino: FechaTermino});
            });
        },
        ReporteCuentas: function () {
            $(document).on('click', '#consultar', function (e) {
                var FechaInicio = $('#datepicker').get(0).value;
                var FechaTermino = $('#datepicker2').get(0).value;
                //alert(FechaTermino);       
                $('#ResultadoCuentas').load('ReporteCuentas', {FechaInicio: FechaInicio, FechaTermino: FechaTermino});
            });
        },
        Materiales: function () {
            $(document).on('change', '#Material', function (e) {
                var MaterialID = $('#Material').get(0).value;
                //alert(Proveedor);           
                $('#InfoMaterial').load('InfoMaterialAll', {MaterialID: MaterialID});
            });
        },
        ReporteSalidaM: function () {
            $(document).on('click', '#consultar', function (e) {
                var FechaInicio = $('#datepicker').get(0).value;
                var FechaTermino = $('#datepicker2').get(0).value;
                //alert(Proveedor);       
                $('#ResultadoSalidas').load('RSM', {FechaInicio: FechaInicio, FechaTermino: FechaTermino});
            });
        },
        ReporteMaterial: function () {
            $(document).on('click', '#consultar', function (e) {
                var Material = $('#Material').get(0).value;
                //alert(Material);       
                $('#ResultadoSalidas').load('RM', {Material: Material});
            });
        },
        ResultadoSolicitudes: function () {
            $(document).on('change', '#IDAprobacion', function (e) {
                var IDAprobacion = $('#IDAprobacion').get(0).value;
                $('#Resultado').load('InfoSolicitudes', {IDAprobacion: IDAprobacion});
            });
        },
        EstadoSolicitudTrans: function () {
            $(document).on('click', '#consultar', function (e) {
                var Estado = $('#Estado').get(0).value;
                var User = $('#User').get(0).value;
                var FechaInicio = $('#datepicker').get(0).value;
                var FechaTermino = $('#datepicker2').get(0).value;
                //alert(Estado);       
                $('#ResultadoSolicitudTrans').load('EdoSolicitudTransp', {Estado: Estado, User: User, FechaInicio: FechaInicio, FechaTermino: FechaTermino});
            });
        },
        InforTrans: function () {
            $(document).on('click', '#consultar', function (e) {
                var Unidad = $('#Unidad').get(0).value;
                //alert(Material);       
                $('#InfoResulTrans').load('InforResulTransp', {Unidad: Unidad});
            });
        },
        InfoEmple: function () {
            $(document).on('change', '#Empleado', function (e) {
                var Empleado = $('#Empleado').get(0).value;
                $('#InfoEmpleado').load('InfoE', {Empleado: Empleado});
            });
        },
        Since: function () {
            $(document).on('change', '#Empleado', function (e) {
                var Empleado = $('#Empleado').get(0).value;
                $('#Since').load('SinceInfo', {Empleado: Empleado});
                $('#InSueldo').load('SueldoInfo', {Empleado: Empleado});
            });
        },
        Percepciones: function () {
            $(document).on('click', '#Cper', function (e) {
                var V1 = $('#Sueldo').get(0).value;
                var V2 = $('#Vacacional').get(0).value;
                var V3 = $('#Antiguedad').get(0).value;
                var V4 = $('#IMSS').get(0).value;
                var V5 = $('#INFONAVIT').get(0).value;
                var V6 = $('#Aguinaldo').get(0).value;
                var V7 = $('#Bono').get(0).value;
                var V8 = $('#Despensa').get(0).value;
                var V9 = $('#Horas').get(0).value;
                //alert(V1);       
                $('#SPer').load('FunPer', {V1: V1, V2: V2, V3: V3, V4: V4, V5: V5, V6: V6, V7: V7, V8: V8, V9: V9});
            });
        },
        Deducciones: function () {
            $(document).on('click', '#Cded', function (e) {
                var D1 = $('#ISPT').get(0).value;
                var D2 = $('#Prestamo').get(0).value;
                var D3 = $('#Ahorro').get(0).value;
                var D4 = $('#IMSS2').get(0).value;
                var D5 = $('#Falta').get(0).value;
                //alert(Material);       
                $('#Sdedu').load('FunDedu', {D1: D1, D2: D2, D3: D3, D4: D4, D5: D5});
            });
        },
        Total: function () {
            $(document).on('click', '#Total', function (e) {
                var V1 = $('#Sueldo').get(0).value;
                var V2 = $('#Vacacional').get(0).value;
                var V3 = $('#Antiguedad').get(0).value;
                var V4 = $('#IMSS').get(0).value;
                var V5 = $('#INFONAVIT').get(0).value;
                var V6 = $('#Aguinaldo').get(0).value;
                var V7 = $('#Bono').get(0).value;
                var V8 = $('#Despensa').get(0).value;
                var V9 = $('#Horas').get(0).value;
                var D1 = $('#ISPT').get(0).value;
                var D2 = $('#Prestamo').get(0).value;
                var D3 = $('#Ahorro').get(0).value;
                var D4 = $('#IMSS2').get(0).value;
                var D5 = $('#Falta').get(0).value;
                //alert(Material);       
                $('#Total').load('FunTotal', {V1: V1, V2: V2, V3: V3, V4: V4, V5: V5, V6: V6, V7: V7, V8: V8, V9: V9, D1: D1, D2: D2, D3: D3, D4: D4, D5: D5});
            });
        },
                INCResS: function () {
                    $(document).on('change', '#IDAprobacion', function (e) {
                        var IDAprobacion = $('#IDAprobacion').get(0).value;
                        $('#Resultado').load('INCInfo', {IDAprobacion: IDAprobacion});
                    });
                },
        IncEdoSol: function () {
            $(document).on('click', '#consultar', function (e) {
                var Estado = $('#Estado').get(0).value;
                var User = $('#User').get(0).value;
                var FechaInicio = $('#datepicker').get(0).value;
                var FechaTermino = $('#datepicker2').get(0).value;
                //alert(Estado);       
                $('#ResultadoSolicitudINC').load('IncEdoSoltd', {Estado: Estado, User: User, FechaInicio: FechaInicio, FechaTermino: FechaTermino});
            });
        },
        ExpedienteN: function () {
            $(document).on('change', '#Empleado', function (e) {
                var ID = $('#Empleado').get(0).value;
                $('#Consulta').load('ResultadoExp', {ID: ID});
            });
        },
        Estancias: function () {
            $(document).on('click', '#consultar', function (e) {
                var Estanciaid = $('#Estanciaid').get(0).value;
                //alert(Estanciaid);       
                $('#LabelEstancia').load('InfEstancia', {Estanciaid: Estanciaid});
            });
        },
        HojaVida: function () {
            $(document).on('click', '#consultar', function (e) {
                var IDHojaCV = $('#IDHojaCV').get(0).value;
                //alert(Material);       
                $('#InfoHojaCV').load('InfHojaCV', {IDHojaCV: IDHojaCV});
            });
        },
        Donativos: function () {
            $(document).on('click', '#consultar', function (e) {
                var IDDonativo = $('#IDDonativo').get(0).value;
                //alert(Material);       
                $('#InfoDonativo').load('InfDonativo', {IDDonativo: IDDonativo});
            });
        },
        InfoProveedor: function () {
            $(document).on('change', '#Proveedor', function (e) {
                var IDProveedor = $('#Proveedor').get(0).value;
                //alert(IDProveedor);	                 
                $('#InfProveedor').load('InforProveedor', {IDProveedor: IDProveedor});
            });
        },
        CV: function () {
            $(document).on('click', '#consultar', function (e) {
                var IDHojaCV = $('#IDHojaCV').get(0).value;
                //alert(Material);       
                $('#InfoHojaCV').load('InfEmpleadoCV', {IDHojaCV: IDHojaCV});
            });
        },
        ReporteSSTramitesE: function () {
            $(document).on('click', '#consultar', function (e) {
                var Cliente = $('#Cliente').get(0).value;
                //alert(Cliente);        
                $('#Resultado').load('SSTramitesE', {Cliente: Cliente});
            });
        },
        InfoPagosP: function () {
            $(document).on('change', '#PagosP', function (e) {
                var PagosP = $('#PagosP').get(0).value;
                //alert(IDProveedor);	                 
                $('#IPagosP').load('IPagosP', {PagosP: PagosP});
            });
        },
        ParaBorrar: function () {
            $(document).on('click', '#consultar', function (e) {
                var FechaInicio = $('#datepicker').get(0).value;
                var FechaTermino = $('#datepicker2').get(0).value;
                //alert(FechaTermino);       
                $('#ResultadoCuentas').load('ReporteBCaja', {FechaInicio: FechaInicio, FechaTermino: FechaTermino});
            });
        },
        ListadoPagosx1: function () {
            $(document).on('change', '#Folio', function (e) {
                var Folio = $('#Folio').get(0).value;
                //alert(Folio);	                 
                $('#L_Pagos').load('ListadoPagos', {Folio: Folio});
            });
        },
        ReporteBInmueble_5: function () {
            $(document).on('click', '#consultar', function (e) {
                var Inmueble = $('#Inmueble').get(0).value;
                //alert(Inmueble);       
                $('#Resultado').load('ReporteInmuebleExp', {Inmueble: Inmueble});
            });
        },
        AgregaMaterial: function () {
            $(document).on('click', '#Agregar', function (e) {
                var Proveedor = $('#Proveedores').val();
                var Producto = $('#Producto').get(0).value;
                var Etiqueta = $('#Etiqueta').get(0).value;
                var Cantidad = $('#Cantidad').get(0).value;
                var Proyectos = $('#Proyectos').get(0).value;
                var Anotaciones = $('#Anotaciones').get(0).value;
                var Numero = $('#Numero').get(0).value;
                var Fecha = $('#datepicker').get(0).value;
                //alert(Proveedor);	
                if (Proveedor !== undefined && Proveedor !== null && Proveedor !== "" && Etiqueta !== "" && Etiqueta !== undefined && Etiqueta !== null && Producto !== "" && Producto !== undefined && Producto !== null && Anotaciones !== "" && Anotaciones !== undefined && Anotaciones !== null) {
//                    $('#Cotizacion').load('CotizacionM', {Etiqueta: Etiqueta, Proveedor: Proveedor, Producto: Producto, Cantidad: Cantidad, Proyectos: Proyectos, Anotaciones: Anotaciones, Numero: Numero, Fecha: Fecha});
                    $.notify({
                        title: '<span class="fa fa-exclamation fa-lg"></span>',
                        message: 'COTIZACION GUARDADA'
                    }, {
                        type: 'success'
                    }, {
                        animate: {
                            enter: 'animated bounceIn',
                            exit: 'animated bounceOut'
                        }
                    });

                } else {
                    $.notify({
                        title: '<span class="fa fa-exclamation fa-lg"></span>',
                        message: 'FALTAN DATOS POR SELECCIONAR O CAPTURAR'
                    }, {
                        type: 'danger'
                    }, {
                        animate: {
                            enter: 'animated bounceIn',
                            exit: 'animated bounceOut'
                        }
                    });
                }
            });
        },
        AgregaMaterial45: function () {
            $(document).on('click', '#Agregar', function (e) {
                var Proveedor = $('#Proveedores').val();
                var Producto = $('#Producto').get(0).value;
                var Etiqueta = $('#Etiqueta').get(0).value;
                var Cantidad = $('#Cantidad').get(0).value;

                var Proyectos = $('#Proyectos').get(0).value;
                var Anotaciones = $('#Anotaciones').get(0).value;
                var Numero = $('#Numero').get(0).value;
                var Fecha = $('#datepicker').get(0).value;
                //alert(Proveedor);			                 
                $('#Cotizacion').load('CotizacionM', {Etiqueta: Etiqueta, Proveedor: Proveedor, Producto: Producto, Cantidad: Cantidad, Proyectos: Proyectos, Anotaciones: Anotaciones, Numero: Numero, Fecha: Fecha});
            });
        },
        ChangeProducto: function () {
            $(document).on('change', '#Etiqueta', function (e) {
                var Etiqueta = $('#Etiqueta').get(0).value;
                $('#ID_Producto').load('cambiarproductos', {Etiqueta: Etiqueta});
            });
        },
        Aprobar: function () {
            $(document).on('click', '#Aprobar', function (e) {
                var Aprobar = $('#Aprobar1').get(0).value;
                var ID = $('#ID').get(0).value;
                alert(ID);
                $('#CotPendientes').load('Aprobar', {Aprobar: Aprobar, ID: ID});
            });
        },
        ReporteVivienda: function () {
            $(document).on('click', '#consultar', function (e) {
                var Vivienda = $('#Vivienda').get(0).value;
                //alert(Inmueble);       
                $('#Resultado').load('ReporteViviendaExp', {Vivienda: Vivienda});
            });
        },
        Aprobaciones: function () {
            $(document).on('change', '#Cotizacion', function (e) {
                var Cotizacion = $('#Cotizacion').get(0).value;
                //alert(Cotizacion);       
                $('#Resultado').load('AprobacionesCOT', {Cotizacion: Cotizacion});
            });
        },
        RCliente: function () {
            $(document).on('change', '#Cliente', function (e) {
                var Cliente = $('#Cliente').get(0).value;
                //alert(Cliente);       
                $('#RCliente').load('ResultCliente', {Cliente: Cliente});
            });
        },
        ResultClienteHist: function () {
            $(document).on('change', '#Cliente', function (e) {
                var Cliente = $('#Cliente').get(0).value;
                var Anio = $('#AnioHist').get(0).value;
                //alert(Cliente);       
                $('#RCliente').load('ResultCliente', {Cliente: Cliente});
                $('#ResultadoHistorico').load('HistoricoM', {Anio: Anio, Cliente: Cliente});
            });
        },
        Mensualidades: function () {
            $(document).on('change', '#AnioHist', function (e) {
                var Anio = $('#AnioHist').get(0).value;
                var Cliente = $('#Cliente').get(0).value;
                //alert(Anio);       
                $('#ResultadoHistorico').load('HistoricoM', {Anio: Anio, Cliente: Cliente});
            });
        },
        Convertir: function () {
            $(document).on('click', '#boton1', function (e) {
                var cantidad = $('#cantidad').get(0).value;
                alert(cantidad);
                $('#Cantidad').load('convertir', {cantidad: cantidad});
            });
        },
        Proyecto: function () {
            $(document).on('change', '#Ndesarrollo', function (e) {
                var Proyecto = $('#Ndesarrollo').get(0).value;
                //alert(idcliente);
                //var palabra = $('#palabra').get(0).value;                  
                $('#Tipo_vivienda').load('cambiartipovivienda', {Proyecto: Proyecto});
            });
        },
        AsigVivienda: function () {
            $(document).on('change', '#Ndesarrollo', function (e) {
                var Proyecto = $('#Ndesarrollo').get(0).value;
                //alert(idcliente);
                //var palabra = $('#palabra').get(0).value;                  
                $('#Viviendas').load('ViviendasxProyecto', {Proyecto: Proyecto});
            });
        },
        InfoVivienda: function () {
            $(document).on('change', '#Vivienda', function (e) {
                var Vivienda = $('#Vivienda').get(0).value;
                //alert(idcliente);                
                $('#InfoViviendas1').load('Viviendasinfo1', {Vivienda: Vivienda});
                $('#InfoViviendas2').load('Viviendasinfo2', {Vivienda: Vivienda});
            });
        },
        CambioTramite: function () {
            $(document).on('change', '#Proyectos', function (e) {
                var Proyectos = $('#Proyectos').get(0).value;
                //alert(idcliente);
                //var palabra = $('#palabra').get(0).value;                  
                $('#ResultDesarrollo').load('ResultDesarrollo', {Proyectos: Proyectos});
            });
        },
        InfoTramite: function () {
            $(document).on('change', '#Tramite', function (e) {
                var Tramite = $('#Tramite').get(0).value;
                //alert(Cliente);       
                $('#ResultTramite').load('ResultTramite', {Tramite: Tramite});
            });
        },
        ExpedienteCliente: function () {
            $(document).on('click', '#consultar', function (e) {
                var Cliente = $('#Cliente').get(0).value;
                //alert(Cliente);       
                $('#Resultado').load('ReporteExpCliente', {Cliente: Cliente});
            });
        },
        ExpedienteClienteALL: function () {
            $(document).on('click', '#consultar', function (e) {
                var Cliente = $('#Cliente').get(0).value;
                //alert(Cliente);       A
                $('#Resultado').load('ReporteExpClienteALL', {Cliente: Cliente});
            });
        },
        Aprobaciones2: function () {
            $(document).on('change', '#Cotizacion', function (e) {
                var Cotizacion = $('#Cotizacion').get(0).value;
                //alert(Cotizacion);       
                $('#Resultado').load('AprobacionesCOT2', {Cotizacion: Cotizacion});
            });
        },
        OrdenCompraPDF: function () {
            $(document).on('click', '#OrdenCompraPDF', function (e) {
                var ID = $('#Cotizacion').get(0).value;
                //alert(ID);        
                $('#Resultado').load('OrdenCompraPDFID', {ID: ID});
            });
        },
        Concepto: function () {
            $(document).on('change', '#Ndesarrollo', function (e) {
                var Ndesarrollo = $('#Ndesarrollo').get(0).value;
                //alert(Ndesarrollo);      
                $("#ResultadoDesarrollo").html('<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>');
                $('#ResultadoDesarrollo').load('ContratistasDes', {Ndesarrollo: Ndesarrollo});
            });
        },
        Contratista: function () {
            $(document).on('change', '#ConceptoP', function (e) {
                var Ndesarrollo = $('#Ndesarrollo').get(0).value;
                var ConceptoP = $('#ConceptoP').get(0).value;
                //alert(ConceptoP);       
                $('#ResultadoConcepto').load('ContratistasConcepto', {Ndesarrollo: Ndesarrollo, ConceptoP: ConceptoP});
            });
        },
        Pagos: function () {
            $(document).on('change', '#Contratistas', function (e) {
                var Ndesarrollo = $('#Ndesarrollo').get(0).value;
                var ConceptoP = $('#ConceptoP').get(0).value;
                var Contratistas = $('#Contratistas').get(0).value;
                //alert(Contratistas);       
                $('#ResultadoInfo').load('InformacionContratista', {Ndesarrollo: Ndesarrollo, ConceptoP: ConceptoP, Contratistas: Contratistas});
            });
        },
        TrabajosNvos: function () {
            $(document).on('change', '#TrabajosaPagar', function (e) {
                var TrabajosaPagar = $('#TrabajosaPagar').get(0).value;
                var PrecioPagar = $('#PrecioPagar').get(0).value;
                //alert(TrabajosaPagar);       
                $('#ResultadoTrabajosNvos').load('MontoPagoNvo', {TrabajosaPagar: TrabajosaPagar, PrecioPagar: PrecioPagar});
            });
        },
        TrabajosNvos2: function () {
            $(document).on('change', '#PrecioPagar', function (e) {
                var TrabajosaPagar = $('#TrabajosaPagar').get(0).value;
                var PrecioPagar = $('#PrecioPagar').get(0).value;
                //alert(TrabajosaPagar);       
                $('#ResultadoTrabajosNvos').load('MontoPagoNvo', {TrabajosaPagar: TrabajosaPagar, PrecioPagar: PrecioPagar});
            });
        },
        Precio: function () {
            $(document).on('change', '#Precio', function (e) {
                var Precio = $('#Precio').get(0).value;
                var TotalTrabajos = $('#TotalTrabajos').get(0).value;
                //alert(Contratistas);       
                $('#ResultadoMonto').load('CalculoMonto', {Precio: Precio, TotalTrabajos: TotalTrabajos});
            });
        },
        TotalTrabajos: function () {
            $(document).on('change', '#TotalTrabajos', function (e) {
                var Precio = $('#Precio').get(0).value;
                var TotalTrabajos = $('#TotalTrabajos').get(0).value;
                //alert(Contratistas);       
                $('#ResultadoMonto').load('CalculoMonto', {Precio: Precio, TotalTrabajos: TotalTrabajos});
            });
        },
        Lotes: function () {
            $(document).on('change', '#Ndesarrollo', function (e) {
                var Ndesarrollo = $('#Ndesarrollo').get(0).value;
                //alert(Contratistas);       
                $('#ResultadoLotes').load('RLotes', {Ndesarrollo: Ndesarrollo});
            });
        },
        Lotes2: function () {
            $(document).on('change', '#ConceptoP', function (e) {
                var Ndesarrollo = $('#Ndesarrollo').get(0).value;
                var ConceptoP = $('#ConceptoP').get(0).value;
                //alert(Contratistas);       
                $('#ResultadoLotes').load('RLotes2', {Ndesarrollo: Ndesarrollo, ConceptoP: ConceptoP});
            });
        },
        ReporteDestajo: function () {
            $(document).on('click', '#consultar', function (e) {
                var Ndesarrollo = $('#Ndesarrollo').get(0).value;
                var ConceptoP = $('#ConceptoP').get(0).value;
                //alert(ConceptoP);        
                $('#Resultado').load('RDestajo', {Ndesarrollo: Ndesarrollo, ConceptoP: ConceptoP});
            });
        },
        RepXConcepto: function () {
            $(document).on('click', '#consultar', function (e) {
                var ConceptoP = $('#ConceptoP').get(0).value;
                var FechaInicioEdo = $('#datepicker').get(0).value;
                var FechaTerminoEdo = $('#datepicker2').get(0).value;
                $('#ResultadoEdoCuenta').load('RepxConceptos', {ConceptoP: ConceptoP, FechaInicioEdo: FechaInicioEdo, FechaTerminoEdo: FechaTerminoEdo});
            });
        },
        GrafxConcepto: function () {
            $(document).on('change', '#ConceptoP', function (e) {
                var ConceptoP = $('#ConceptoP').get(0).value;
                var Ndesarrollo = $('#Ndesarrollo').get(0).value;
                //alert(ConceptoP);       
                $('#GrafxTrabajo').load('GrafxConcepto', {ConceptoP: ConceptoP, Ndesarrollo: Ndesarrollo});
            });
        },
        GrafxConcepto2: function () {
            $(document).on('change', '#Ndesarrollo', function (e) {
                var ConceptoP = $('#ConceptoP').get(0).value;
                var Ndesarrollo = $('#Ndesarrollo').get(0).value;
                //alert(ConceptoP);       
                $('#GrafxTrabajo').load('GrafxConcepto', {ConceptoP: ConceptoP, Ndesarrollo: Ndesarrollo});
            });
        },
        GrafxMonto: function () {
            $(document).on('change', '#ConceptoP2', function (e) {
                var ConceptoP = $('#ConceptoP2').get(0).value;
                var Ndesarrollo = $('#Ndesarrollo2').get(0).value;
                //alert(ConceptoP);       
                $('#GrafxMonto2').load('GrafxMonto', {ConceptoP: ConceptoP, Ndesarrollo: Ndesarrollo});
            });
        },
        GrafxMonto2: function () {
            $(document).on('change', '#Ndesarrollo2', function (e) {
                var ConceptoP = $('#ConceptoP2').get(0).value;
                var Ndesarrollo = $('#Ndesarrollo2').get(0).value;
                //alert(ConceptoP);       
                $('#GrafxMonto2').load('GrafxMonto', {ConceptoP: ConceptoP, Ndesarrollo: Ndesarrollo});
            });
        },
        GrafxComportamiento: function () {
            $(document).on('change', '#Ndesarrollo1', function (e) {
                var ConceptoP = $('#ConceptoP1').get(0).value;
                var Ndesarrollo = $('#Ndesarrollo1').get(0).value;
                var FechaInicioEdo = $('#datepicker').get(0).value;
                var FechaTerminoEdo = $('#datepicker2').get(0).value;
                //alert(ConceptoP);       
                $('#GrafxComportamiento').load('GrafxComportamiento', {ConceptoP: ConceptoP, Ndesarrollo: Ndesarrollo, FechaInicioEdo: FechaInicioEdo, FechaTerminoEdo: FechaTerminoEdo});
            });
        },
        GrafxComportamiento1: function () {
            $(document).on('change', '#ConceptoP1', function (e) {
                var ConceptoP = $('#ConceptoP1').get(0).value;
                var Ndesarrollo = $('#Ndesarrollo1').get(0).value;
                var FechaInicioEdo = $('#datepicker').get(0).value;
                var FechaTerminoEdo = $('#datepicker2').get(0).value;
                //alert(ConceptoP);       
                $('#GrafxComportamiento').load('GrafxComportamiento', {ConceptoP: ConceptoP, Ndesarrollo: Ndesarrollo, FechaInicioEdo: FechaInicioEdo, FechaTerminoEdo: FechaTerminoEdo});
            });
        },
        GrafxComportamiento2: function () {
            $(document).on('change', '#datepicker', function (e) {
                var ConceptoP = $('#ConceptoP1').get(0).value;
                var Ndesarrollo = $('#Ndesarrollo1').get(0).value;
                var FechaInicioEdo = $('#datepicker').get(0).value;
                var FechaTerminoEdo = $('#datepicker2').get(0).value;
                //alert(ConceptoP);       
                $('#GrafxComportamiento').load('GrafxComportamiento', {ConceptoP: ConceptoP, Ndesarrollo: Ndesarrollo, FechaInicioEdo: FechaInicioEdo, FechaTerminoEdo: FechaTerminoEdo});
            });
        },
        GrafxComportamiento3: function () {
            $(document).on('change', '#datepicker2', function (e) {
                var ConceptoP = $('#ConceptoP1').get(0).value;
                var Ndesarrollo = $('#Ndesarrollo1').get(0).value;
                var FechaInicioEdo = $('#datepicker').get(0).value;
                var FechaTerminoEdo = $('#datepicker2').get(0).value;
                //alert(ConceptoP);       
                $('#GrafxComportamiento').load('GrafxComportamiento', {ConceptoP: ConceptoP, Ndesarrollo: Ndesarrollo, FechaInicioEdo: FechaInicioEdo, FechaTerminoEdo: FechaTerminoEdo});
            });
        },
        InfoComercializador: function () {
            $(document).on('change', '#Comercializador', function (e) {
                var Comercializador = $('#Comercializador').get(0).value;
                //alert(Comercializador);       
                $('#Directorio').load('InfoComercializador', {Comercializador: Comercializador});
            });
        },
        DirectorioCemento: function () {
            $(document).on('click', '#consultar', function (e) {
                var Comercializador = $('#Comercializador').get(0).value;
                //alert(Inmueble);       
                $('#Resultado').load('ReporteComercializador', {Comercializador: Comercializador});
            });
        },
        RepPrecios: function () {
            $(document).on('click', '#consultar', function (e) {
                var Comercializador = $('#Comercializador').get(0).value;
                var FechaInicioEdo = $('#datepicker').get(0).value;
                var FechaTerminoEdo = $('#datepicker2').get(0).value;
                $('#ResultadoPrecios').load('RepPrecioss', {Comercializador: Comercializador, FechaInicioEdo: FechaInicioEdo, FechaTerminoEdo: FechaTerminoEdo});
            });
        },
        RepTrans: function () {
            $(document).on('click', '#consultar', function (e) {
                var Ndesarrollo = $('#Ndesarrollo').get(0).value;
                var FechaInicioEdo = $('#datepicker').get(0).value;
                var FechaTerminoEdo = $('#datepicker2').get(0).value;
                //alert(Ndesarrollo);              
                $('#Resultado').load('ReporteTrans', {Ndesarrollo: Ndesarrollo, FechaInicioEdo: FechaInicioEdo, FechaTerminoEdo: FechaTerminoEdo});
            });
        },
        RepDisp: function () {

            $(document).on('change', '#Ndesarrollo', function (e) {
                var NDesarrollo = $('#Ndesarrollo').get(0).value;
                if (NDesarrollo !== undefined || NDesarrollo !== null) {
                    $("#consultar").removeClass("hide");
                    $("div.col-xs-12.col-sm-12.hide:hr").removeClass("hide");
                    $("div.col-xs-12.col-sm-12.hide").removeClass("hide");
                    $("#sReporteDispersion").removeClass("hide");
                    $("#hrReporteDispersion").removeClass("hide");
                }
            });
            $(document).on('click', '#consultar', function (e) {
                var Ndesarrollo = $('#Ndesarrollo').get(0).value;
                var FechaInicioEdo = $('#datepicker').get(0).value;
                var FechaTerminoEdo = $('#datepicker2').get(0).value;
                //alert(Ndesarrollo);     



//                $('#Resultado').load('ReporteDispersion', {Ndesarrollo: Ndesarrollo, FechaInicioEdo: FechaInicioEdo, FechaTerminoEdo: FechaTerminoEdo});
                $('#Resultado').load(base_url + 'index.php/ctrlDispersion/ReporteDispersion', {Ndesarrollo: Ndesarrollo, FechaInicioEdo: FechaInicioEdo, FechaTerminoEdo: FechaTerminoEdo});
            });
        },
        RepCompraV: function () {
            $(document).on('click', '#consultar', function (e) {
                var Ndesarrollo = $('#Ndesarrollo').get(0).value;
                var FechaInicioEdo = $('#datepicker').get(0).value;
                var FechaTerminoEdo = $('#datepicker2').get(0).value;
                //alert(Ndesarrollo);              
                $('#Resultado').load('ReporteCompraV', {Ndesarrollo: Ndesarrollo, FechaInicioEdo: FechaInicioEdo, FechaTerminoEdo: FechaTerminoEdo});
            });
        },
        GrafxPrecioDia: function () {
            $(document).on('change', '#Comercializador', function (e) {
                var Comercializador = $('#Comercializador').get(0).value;
                var Cemento = $('#Cemento').get(0).value;
                var FechaInicioEdo = $('#datepicker').get(0).value;
                var FechaTerminoEdo = $('#datepicker2').get(0).value;
                //alert(ConceptoP);       
                $('#GrafxPrecioDialabel').load('GrafxPrecioDia', {Comercializador: Comercializador, Cemento: Cemento, FechaInicioEdo: FechaInicioEdo, FechaTerminoEdo: FechaTerminoEdo});
            });
        },
        //METODO PARA OBTENER LAS GRÁFICAS EN TRANSMISION VS DISPERSION CON SU BARRA ADICIONAL DE TRANSMISIONES NO DISPERSADAS
        TransVSDispTranNoDisp: function () {
            $(document).on('change', '#cmbFideicomiso', function (e) {
                var Fideicomiso = $('#cmbFideicomiso').get(0).value;
                var FechaInicioEdo = $('#datepicker').get(0).value;
                var FechaTerminoEdo = $('#datepicker2').get(0).value;
                console.log($('#datepicker').get(0).value);
                console.log($('#datepicker2').get(0).value);

                if ($("#gTransVsDispTransNoDisp").hasClass("hide")) {
                    $("#gTransVsDispTransNoDisp").removeClass("hide");
                    $("#sTituloTransVSDisp").removeClass("hide");
                }
                var callbacks = $.Callbacks();
                callbacks.add($('#gTransVsDispTransNoDisp').load(base_url
                        + 'index.php/ctrlDispersion/getGraficoDeTransmisionVSDispersion/' + Fideicomiso + "/" + FechaInicioEdo + "/" + FechaTerminoEdo));
                callbacks.fire();

            });
        },
        GrafxPrecioDia1: function () {
            $(document).on('change', '#Cemento', function (e) {
                var Comercializador = $('#Comercializador').get(0).value;
                var Cemento = $('#Cemento').get(0).value;
                var FechaInicioEdo = $('#datepicker').get(0).value;
                var FechaTerminoEdo = $('#datepicker2').get(0).value;
                //alert(ConceptoP);       
                $('#GrafxPrecioDialabel').load('GrafxPrecioDia', {Comercializador: Comercializador, Cemento: Cemento, FechaInicioEdo: FechaInicioEdo, FechaTerminoEdo: FechaTerminoEdo});
            });
        },
        GrafxPrecioDia2: function () {
            $(document).on('change', '#datepicker', function (e) {
                var Comercializador = $('#Comercializador').get(0).value;
                var Cemento = $('#Cemento').get(0).value;
                var FechaInicioEdo = $('#datepicker').get(0).value;
                var FechaTerminoEdo = $('#datepicker2').get(0).value;
                //alert(ConceptoP);       
                $('#GrafxPrecioDialabel').load('GrafxPrecioDia', {Comercializador: Comercializador, Cemento: Cemento, FechaInicioEdo: FechaInicioEdo, FechaTerminoEdo: FechaTerminoEdo});
            });
        },
        GrafxPrecioDia3: function () {
            $(document).on('change', '#datepicker2', function (e) {
                var Comercializador = $('#Comercializador').get(0).value;
                var Cemento = $('#Cemento').get(0).value;
                var FechaInicioEdo = $('#datepicker').get(0).value;
                var FechaTerminoEdo = $('#datepicker2').get(0).value;
                //alert(ConceptoP);       
                $('#GrafxPrecioDialabel').load('GrafxPrecioDia', {Comercializador: Comercializador, Cemento: Cemento, FechaInicioEdo: FechaInicioEdo, FechaTerminoEdo: FechaTerminoEdo});
            });
        },
        ReporteTramite: function () {
            $(document).on('click', '#consultar', function (e) {
                var Proyecto = $('#Proyectos').get(0).value;
                var Tramite = $('#Tramite').get(0).value;
                //alert(Inmueble);       
                $('#Resultado').load('ReporteTramitesRAB', {Proyecto: Proyecto, Tramite: Tramite});
            });
        },
        ActMaterial: function () {
            $(document).on('change', '#ID', function (e) {
                var ID = $('#ID').get(0).value;
                //alert(ID);       
                $('#ActMaterial').load('ActMaterial', {ID: ID});
            });
        },
        Cambiarviviendas: function () {
            $(document).on('change', '#Desarrollo', function (e) {
                var Proyecto = $('#Desarrollo').get(0).value;
                //alert(Proyecto);             
                $('#ResultadoVivienda').load('ViviendasxProyecto2', {Proyecto: Proyecto});
            });
        },
        Seccion: function () {
            $(document).on('change', '#Desarrollo', function (e) {
                var Proyecto = $('#Desarrollo').get(0).value;
                //alert(Proyecto);             
                $('#Resultado').load('SeccionxProyecto', {Proyecto: Proyecto});
            });
        },
        ManzanaC: function () {
            $(document).on('change', '#Seccion', function (e) {
                var Seccion = $('#Seccion').get(0).value;
                //alert(Proyecto);             
                $('#Resultado2').load('ManzanaxSeccion', {Seccion: Seccion});
            });
        },
        SumaSuperficies: function () {
            $(document).on('change', '#SuperficieH', function (e) {
                var SuperficieH = $('#SuperficieH').get(0).value;
                var SuperficieC = $('#SuperficieC').get(0).value;
                var SuperficieD = $('#SuperficieD').get(0).value;
                //alert(SuperficieH);             
                $('#ResultadoSuma').load('SumaSuperficies', {SuperficieH: SuperficieH, SuperficieC: SuperficieC, SuperficieD: SuperficieD});
                $('#Resultado2').load('SumaVendible', {SuperficieH: SuperficieH, SuperficieC: SuperficieC});
            });
        },
        SumaSuperficies2: function () {
            $(document).on('change', '#SuperficieC', function (e) {
                var SuperficieH = $('#SuperficieH').get(0).value;
                var SuperficieC = $('#SuperficieC').get(0).value;
                var SuperficieD = $('#SuperficieD').get(0).value;
                //alert(SuperficieH);             
                $('#ResultadoSuma').load('SumaSuperficies', {SuperficieH: SuperficieH, SuperficieC: SuperficieC, SuperficieD: SuperficieD});
                $('#Resultado2').load('SumaVendible', {SuperficieH: SuperficieH, SuperficieC: SuperficieC});
            });
        },
        SumaSuperficies3: function () {
            $(document).on('change', '#SuperficieD', function (e) {
                var SuperficieH = $('#SuperficieH').get(0).value;
                var SuperficieC = $('#SuperficieC').get(0).value;
                var SuperficieD = $('#SuperficieD').get(0).value;
                //alert(SuperficieH);             
                $('#ResultadoSuma').load('SumaSuperficies', {SuperficieH: SuperficieH, SuperficieC: SuperficieC, SuperficieD: SuperficieD});
            });
        },
        Manzana: function () {
            $(document).on('change', '#Desarrollo', function (e) {
                var Proyecto = $('#Desarrollo').get(0).value;
                //alert(Proyecto);             
                $('#Resultado').load('ManzanaxProyecto', {Proyecto: Proyecto});
            });
        },
        Lotes1: function () {
            $(document).on('change', '#LotesHr', function (e) {
                var NLotes = $('#NLotes').get(0).value;
                var LotesHr = $('#LotesHr').get(0).value;
                var LotesHi = $('#LotesHi').get(0).value;
                //alert(Proyecto);             
                $('#ResultadoLotes').load('SumaManzanas', {NLotes: NLotes, LotesHr: LotesHr, LotesHi: LotesHi});
            });
        },
        Lotes2: function () {
            $(document).on('change', '#LotesHi', function (e) {
                var NLotes = $('#NLotes').get(0).value;
                var LotesHr = $('#LotesHr').get(0).value;
                var LotesHi = $('#LotesHi').get(0).value;
                //alert(Proyecto);             
                $('#ResultadoLotes').load('SumaManzanas', {NLotes: NLotes, LotesHr: LotesHr, LotesHi: LotesHi});
            });
        },
                Lotes: function () {
                    $(document).on('change', '#Desarrollo', function (e) {
                        var Proyecto = $('#Desarrollo').get(0).value;
                        //alert(Proyecto);             
                        $('#Resultado').load('ManzanaxProyecto2', {Proyecto: Proyecto});
                    });
                },
                ManzanaLotes: function () {
                    $(document).on('change', '#Manzana', function (e) {
                        var Proyecto = $('#Desarrollo').get(0).value;
                        var Manzana = $('#Manzana').get(0).value;
                        //alert(Proyecto);             
                        $('#ResultadoLotes').load('LotesxProyecto', {Proyecto: Proyecto, Manzana: Manzana});
                    });
                },
        LotesxTipo: function () {
            $(document).on('change', '#TLotes', function (e) {
                var Proyecto = $('#Desarrollo').get(0).value;
                var Manzana = $('#Manzana').get(0).value;
                var TLotes = $('#TLotes').get(0).value;
                //alert(Proyecto);             
                $('#Lotes').load('LotesxTipo', {Proyecto: Proyecto, Manzana: Manzana, TLotes: TLotes});
            });
        },
        LotesxTipo2: function () {
            $(document).on('change', '#Manzana', function (e) {
                var Proyecto = $('#Desarrollo').get(0).value;
                var Manzana = $('#Manzana').get(0).value;					//alert(Proyecto);             
                $('#Lotes').load('LotesxTipo', {Proyecto: Proyecto, Manzana: Manzana});
            });
        },
        CDesarrolloM: function () {
            $(document).on('click', '#consultar', function (e) {
                var Desarrollo = $('#Desarrollo').get(0).value;
                var Seccion = $('#Seccion').get(0).value;
                var Manzana = $('#Manzana').get(0).value;
                var TLotes = $('#TLotes').get(0).value;
                //alert(Desarrollo);       
                $('#Resultado1').load('ReporteManzanas1', {Desarrollo: Desarrollo, Seccion: Seccion, Manzana: Manzana, TLotes: TLotes});
            });
        },
        CDesarrolloL: function () {
            $(document).on('click', '#consultar', function (e) {
                var Desarrollo = $('#Desarrollo').get(0).value;
                var Seccion = $('#Seccion').get(0).value;
                var Manzana = $('#Manzana').get(0).value;
                //alert(Desarrollo);       
                $('#Resultado1').load('ReporteManzanas2', {Desarrollo: Desarrollo, Seccion: Seccion, Manzana: Manzana});
            });
        },
        CManzanaV: function () {
            $(document).on('click', '#consultar', function (e) {
                var Desarrollo = $('#Desarrollo').get(0).value;
                var Seccion = $('#Seccion').get(0).value;
                var Manzana = $('#Manzana').get(0).value;
                //alert(Desarrollo);       
                $('#Resultado1').load('ReporteManzanas3', {Desarrollo: Desarrollo, Seccion: Seccion, Manzana: Manzana});
            });
        },
        ProyectoInform: function () {
            $(document).on('click', '#consultar', function (e) {
                var Desarrollo = $('#Desarrollo').get(0).value;
                //alert(Desarrollo);       
                $('#Resultado').load('ProyectoInformacion', {Desarrollo: Desarrollo});
            });
        },
        ManzanaF: function () {
            $(document).on('change', '#Ndesarrollo', function (e) {
                var Ndesarrollo = $('#Ndesarrollo').get(0).value;
                //alert(Contratistas);       
                $('#ResultadoManzana').load('ManzanaFideicomiso', {Ndesarrollo: Ndesarrollo});
            });
        },
        NumNotificacion: function () {
            $(document).on('change', '#Ndesarrollo', function (e) {
                var Ndesarrollo = $('#Ndesarrollo').get(0).value;
                //alert(Contratistas);       
                $('#ResultadoNnotificacion').load('NotificacionNumber', {Ndesarrollo: Ndesarrollo});
            });
        },
        LotesF: function () {
            $(document).on('change', '#Ndesarrollo', function (e) {
                var Ndesarrollo = $('#Ndesarrollo').get(0).value;
                //alert(Contratistas);       
                $('#ResultadoLotes').load('LotesFideicomiso', {Ndesarrollo: Ndesarrollo});
            });
        },
        LotesFM: function () {
            $(document).on('change', '#Manzana', function (e) {
                var Ndesarrollo = $('#Ndesarrollo').get(0).value;
                var Manzana = $('#Manzana').get(0).value;
                //alert(Manzana);       
                $('#ResultadoLotes').load('LotesFideicomisoM', {Ndesarrollo: Ndesarrollo, Manzana: Manzana});
            });
        },
        ViviendasF: function () {
            $(document).on('change', '#Lotes', function (e) {
                var Ndesarrollo = $('#Ndesarrollo').get(0).value;
                var Lotes = $('#Lotes').get(0).value;
                var Manzana = $('#Manzana').get(0).value;
                //alert(Contratistas);       
                $('#ResultadoViviendas').load('ViviendasFideicomiso', {Ndesarrollo: Ndesarrollo, Lotes: Lotes, Manzana: Manzana});
            });
        },
        ViviendasInFo: function () {
            $(document).on('change', '#Viviendas', function (e) {
                var Ndesarrollo = $('#Ndesarrollo').get(0).value;
                var Lotes = $('#Lotes').get(0).value;
                var Manzana = $('#Manzana').get(0).value;
                //alert(Contratistas);       
                $('#ResultadoViviendasInfo').load('ViviendasInfo', {Ndesarrollo: Ndesarrollo, Lotes: Lotes, Manzana: Manzana});
            });
        },
        ActViviendasInFo: function () {
            $(document).on('change', '#Viviendas', function (e) {
                var Ndesarrollo = $('#Ndesarrollo').get(0).value;
                var Lotes = $('#Lotes').get(0).value;
                var Manzana = $('#Manzana').get(0).value;
                var Viviendas = $('#Viviendas').get(0).value;
                //alert(Contratistas);       
                $('#Cambio').load('ActViviendasInfo', {Ndesarrollo: Ndesarrollo, Lotes: Lotes, Manzana: Manzana, Viviendas: Viviendas});
            });
        },
        FormulaA0: function () {
            $(document).on('change', '#PrecioBase', function (e) {
                var PrecioBase = $('#PrecioBase').get(0).value;
                var MontoDescuento = $('#MontoDescuento').get(0).value;
                var CostoAdic = $('#CostoAdic').get(0).value;
                //alert(Contratistas);       
                $('#ResultadoFA1').load('SumaFormulaA1', {PrecioBase: PrecioBase, MontoDescuento: MontoDescuento, CostoAdic: CostoAdic});
            });
        },
        FormulaA1: function () {
            $(document).on('change', '#MontoDescuento', function (e) {
                var PrecioBase = $('#PrecioBase').get(0).value;
                var MontoDescuento = $('#MontoDescuento').get(0).value;
                var CostoAdic = $('#CostoAdic').get(0).value;
                //alert(Contratistas);       
                $('#ResultadoFA1').load('SumaFormulaA1', {PrecioBase: PrecioBase, MontoDescuento: MontoDescuento, CostoAdic: CostoAdic});
            });
        },
        FormulaA2: function () {
            $(document).on('change', '#CostoAdic', function (e) {
                var PrecioBase = $('#PrecioBase').get(0).value;
                var MontoDescuento = $('#MontoDescuento').get(0).value;
                var CostoAdic = $('#CostoAdic').get(0).value;
                //alert(Contratistas);       
                $('#ResultadoFA1').load('SumaFormulaA1', {PrecioBase: PrecioBase, MontoDescuento: MontoDescuento, CostoAdic: CostoAdic});
            });
        },
        FormulaB1: function () {
            $(document).on('change', '#PagoTerreno', function (e) {
                var PagoTerreno = $('#PagoTerreno').get(0).value;
                var PagoRendimientos = $('#PagoRendimientos').get(0).value;
                //alert(Contratistas);       
                $('#ResultadoFB1').load('SumaFormulaB1', {PagoTerreno: PagoTerreno, PagoRendimientos: PagoRendimientos});
            });
        },
        FormulaB2: function () {
            $(document).on('change', '#PagoRendimientos', function (e) {
                var PagoTerreno = $('#PagoTerreno').get(0).value;
                var PagoRendimientos = $('#PagoRendimientos').get(0).value;
                //alert(Contratistas);       
                $('#ResultadoFB1').load('SumaFormulaB1', {PagoTerreno: PagoTerreno, PagoRendimientos: PagoRendimientos});
            });
        },
        SumaDesc_1: function () {
            $(document).on('change', '#M1', function (e) {
                var M1 = $('#M1').get(0).value;
                var M2 = $('#M2').get(0).value;
                var M3 = $('#M3').get(0).value;
                var M4 = $('#M4').get(0).value;
                var M5 = $('#M5').get(0).value;
                var M6 = $('#M6').get(0).value;
                var M7 = $('#M7').get(0).value;
                var M8 = $('#M8').get(0).value;
                var M9 = $('#M9').get(0).value;
                var M10 = $('#M10').get(0).value;
                //alert(Contratistas);       
                $('#SumaDesc').load('SumaDescS', {M1: M1, M2: M2, M3: M3, M4: M4, M5: M5, M6: M6, M7: M7, M8: M8, M9: M9, M10: M10});
            });
        },
        SumaDesc_2: function () {
            $(document).on('change', '#M2', function (e) {
                var M1 = $('#M1').get(0).value;
                var M2 = $('#M2').get(0).value;
                var M3 = $('#M3').get(0).value;
                var M4 = $('#M4').get(0).value;
                var M5 = $('#M5').get(0).value;
                var M6 = $('#M6').get(0).value;
                var M7 = $('#M7').get(0).value;
                var M8 = $('#M8').get(0).value;
                var M9 = $('#M9').get(0).value;
                var M10 = $('#M10').get(0).value;
                //alert(Contratistas);       
                $('#SumaDesc').load('SumaDescS', {M1: M1, M2: M2, M3: M3, M4: M4, M5: M5, M6: M6, M7: M7, M8: M8, M9: M9, M10: M10});
            });
        },
        SumaDesc_3: function () {
            $(document).on('change', '#M3', function (e) {
                var M1 = $('#M1').get(0).value;
                var M2 = $('#M2').get(0).value;
                var M3 = $('#M3').get(0).value;
                var M4 = $('#M4').get(0).value;
                var M5 = $('#M5').get(0).value;
                var M6 = $('#M6').get(0).value;
                var M7 = $('#M7').get(0).value;
                var M8 = $('#M8').get(0).value;
                var M9 = $('#M9').get(0).value;
                var M10 = $('#M10').get(0).value;
                //alert(Contratistas);       
                $('#SumaDesc').load('SumaDescS', {M1: M1, M2: M2, M3: M3, M4: M4, M5: M5, M6: M6, M7: M7, M8: M8, M9: M9, M10: M10});
            });
        },
        SumaDesc_4: function () {
            $(document).on('change', '#M4', function (e) {
                var M1 = $('#M1').get(0).value;
                var M2 = $('#M2').get(0).value;
                var M3 = $('#M3').get(0).value;
                var M4 = $('#M4').get(0).value;
                var M5 = $('#M5').get(0).value;
                var M6 = $('#M6').get(0).value;
                var M7 = $('#M7').get(0).value;
                var M8 = $('#M8').get(0).value;
                var M9 = $('#M9').get(0).value;
                var M10 = $('#M10').get(0).value;
                //alert(Contratistas);       
                $('#SumaDesc').load('SumaDescS', {M1: M1, M2: M2, M3: M3, M4: M4, M5: M5, M6: M6, M7: M7, M8: M8, M9: M9, M10: M10});
            });
        },
        SumaDesc_5: function () {
            $(document).on('change', '#M5', function (e) {
                var M1 = $('#M1').get(0).value;
                var M2 = $('#M2').get(0).value;
                var M3 = $('#M3').get(0).value;
                var M4 = $('#M4').get(0).value;
                var M5 = $('#M5').get(0).value;
                var M6 = $('#M6').get(0).value;
                var M7 = $('#M7').get(0).value;
                var M8 = $('#M8').get(0).value;
                var M9 = $('#M9').get(0).value;
                var M10 = $('#M10').get(0).value;
                //alert(Contratistas);       
                $('#SumaDesc').load('SumaDescS', {M1: M1, M2: M2, M3: M3, M4: M4, M5: M5, M6: M6, M7: M7, M8: M8, M9: M9, M10: M10});
            });
        },
        SumaDesc_6: function () {
            $(document).on('change', '#M6', function (e) {
                var M1 = $('#M1').get(0).value;
                var M2 = $('#M2').get(0).value;
                var M3 = $('#M3').get(0).value;
                var M4 = $('#M4').get(0).value;
                var M5 = $('#M5').get(0).value;
                var M6 = $('#M6').get(0).value;
                var M7 = $('#M7').get(0).value;
                var M8 = $('#M8').get(0).value;
                var M9 = $('#M9').get(0).value;
                var M10 = $('#M10').get(0).value;
                //alert(Contratistas);       
                $('#SumaDesc').load('SumaDescS', {M1: M1, M2: M2, M3: M3, M4: M4, M5: M5, M6: M6, M7: M7, M8: M8, M9: M9, M10: M10});
            });
        },
        SumaDesc_7: function () {
            $(document).on('change', '#M7', function (e) {
                var M1 = $('#M1').get(0).value;
                var M2 = $('#M2').get(0).value;
                var M3 = $('#M3').get(0).value;
                var M4 = $('#M4').get(0).value;
                var M5 = $('#M5').get(0).value;
                var M6 = $('#M6').get(0).value;
                var M7 = $('#M7').get(0).value;
                var M8 = $('#M8').get(0).value;
                var M9 = $('#M9').get(0).value;
                var M10 = $('#M10').get(0).value;
                //alert(Contratistas);       
                $('#SumaDesc').load('SumaDescS', {M1: M1, M2: M2, M3: M3, M4: M4, M5: M5, M6: M6, M7: M7, M8: M8, M9: M9, M10: M10});
            });
        },
        SumaDesc_8: function () {
            $(document).on('change', '#M8', function (e) {
                var M1 = $('#M1').get(0).value;
                var M2 = $('#M2').get(0).value;
                var M3 = $('#M3').get(0).value;
                var M4 = $('#M4').get(0).value;
                var M5 = $('#M5').get(0).value;
                var M6 = $('#M6').get(0).value;
                var M7 = $('#M7').get(0).value;
                var M8 = $('#M8').get(0).value;
                var M9 = $('#M9').get(0).value;
                var M10 = $('#M10').get(0).value;
                //alert(Contratistas);       
                $('#SumaDesc').load('SumaDescS', {M1: M1, M2: M2, M3: M3, M4: M4, M5: M5, M6: M6, M7: M7, M8: M8, M9: M9, M10: M10});
            });
        },
        SumaDesc_9: function () {
            $(document).on('change', '#M9', function (e) {
                var M1 = $('#M1').get(0).value;
                var M2 = $('#M2').get(0).value;
                var M3 = $('#M3').get(0).value;
                var M4 = $('#M4').get(0).value;
                var M5 = $('#M5').get(0).value;
                var M6 = $('#M6').get(0).value;
                var M7 = $('#M7').get(0).value;
                var M8 = $('#M8').get(0).value;
                var M9 = $('#M9').get(0).value;
                var M10 = $('#M10').get(0).value;
                //alert(Contratistas);       
                $('#SumaDesc').load('SumaDescS', {M1: M1, M2: M2, M3: M3, M4: M4, M5: M5, M6: M6, M7: M7, M8: M8, M9: M9, M10: M10});
            });
        },
        SumaDesc_10: function () {
            $(document).on('change', '#M10', function (e) {
                var M1 = $('#M1').get(0).value;
                var M2 = $('#M2').get(0).value;
                var M3 = $('#M3').get(0).value;
                var M4 = $('#M4').get(0).value;
                var M5 = $('#M5').get(0).value;
                var M6 = $('#M6').get(0).value;
                var M7 = $('#M7').get(0).value;
                var M8 = $('#M8').get(0).value;
                var M9 = $('#M9').get(0).value;
                var M10 = $('#M10').get(0).value;
                //alert(Contratistas);       
                $('#SumaDesc').load('SumaDescS', {M1: M1, M2: M2, M3: M3, M4: M4, M5: M5, M6: M6, M7: M7, M8: M8, M9: M9, M10: M10});
            });
        },
        AgregaVivDispersion: function () {
            $(document).on('click', '#Agregar', function (e) {
                var Ndesarrollo = $('#Ndesarrollo').val();
                var Manzana = $('#Manzana').val();
                var Lotes = $('#Lotes').get(0).value;
                var Viviendas = $('#Viviendas').get(0).value;
                var Ndisp = $('#NumNotificacion').get(0).value;
                //alert(Ndesarrollo);                  
                var i = $('#i').get(0).value;
                var a = 0;
                var IDes = '';
                var IDes4 = '';
                for (a = 1; a <= i; a++) {
                    var x = $('#ID'.concat(a)).get(0).value;
                    var IDes = IDes.concat(x, ',');

                    var x4 = $('#Disp_TotalIng'.concat(a)).get(0).value;
                    var IDes4 = IDes4.concat(x4, ',');
                }
                if (i === 0) {
                    var IDes = 0;
                    var IDes4 = 0;
                }
                $('#AgregaDispersion').load('AgregaDispersion', {IDes: IDes, IDes4: IDes4, Ndesarrollo: Ndesarrollo, Manzana: Manzana, Lotes: Lotes, Viviendas: Viviendas, Ndisp: Ndisp});

            });
        },
        GuardaVivDispersion: function () {
            $(document).on('click', '#user', function (e) {
                var Ndisp = $('#NumNotificacion').get(0).value;
                var indiceuser = $('#user').get(0).value;
                var i = $('#i').get(0).value;
                var a = 0;
                var IDes = '';
                var IDes1 = '';
                var IDes2 = '';
                var IDes3 = '';
                var IDes4 = '';
                for (a = 1; a <= i; a++) {
                    var x = $('#ID'.concat(a)).get(0).value;
                    var IDes = IDes.concat(x, ',');

                    var x1 = $('#Disp_PrecioVentaE'.concat(a)).get(0).value;
                    var IDes1 = IDes1.concat(x1, ',');

                    var x2 = $('#Disp_PagoTerreno'.concat(a)).get(0).value;
                    var IDes2 = IDes2.concat(x2, ',');

                    var x3 = $('#Disp_PagoRendimientos'.concat(a)).get(0).value;
                    var IDes3 = IDes3.concat(x3, ',');

                    var x4 = $('#Disp_TotalIng'.concat(a)).get(0).value;
                    var IDes4 = IDes4.concat(x4, ',');
                }
                var FechaNotDis = $('#datepicker').get(0).value;
                var FechaNotRabina = $('#datepicker2').get(0).value;
                var NombreNotif = $('#NombreNotif').get(0).value;
                var NombreNotifRabina = $('#NombreNotifRabina').get(0).value;
                var MontoFideicomiso = $('#MontoFideicomiso').get(0).value;
                var Montofideicomitente = $('#Montofideicomitente').get(0).value;
                var MontofideicomitenteRabina = $('#MontofideicomitenteRabina').get(0).value;
                var FechaDispersion = $('#datepicker3').get(0).value;
                var CantidadDispersada = $('#CantidadDispersada').get(0).value;
                var CuentaDispersion = $('#CuentaDispersion').get(0).value;
                var ReferenciaTran = $('#ReferenciaTran').get(0).value;

                //alert(IDes);       
                $('#AgregaDispersion2').load('Comerc_7_disp', {Ndisp: Ndisp, indiceuser: indiceuser, IDes: IDes, IDes1: IDes1, IDes2: IDes2, IDes3: IDes3, IDes4: IDes4, i: i, FechaNotDis: FechaNotDis, FechaNotRabina: FechaNotRabina, NombreNotif: NombreNotif, NombreNotifRabina: NombreNotifRabina, MontoFideicomiso: MontoFideicomiso, Montofideicomitente: Montofideicomitente, MontofideicomitenteRabina: MontofideicomitenteRabina, FechaDispersion: FechaDispersion, CantidadDispersada: CantidadDispersada, CuentaDispersion: CuentaDispersion, ReferenciaTran: ReferenciaTran});

            });
        },
        GraficoCCDI: function () {
        }
    };
})();

function onChangeEdoCuenta() {
    var Cliente = $('#Cliente').get(0).value;
    var FechaInicioEdo = $('#FechaInicioEdo').get(0).value;
    var FechaTerminoEdo = $('#FechaTerminoEdo').get(0).value;

//    $('#ResultadoEdoCuenta').load(base_url + 'index.php/ctrlCobranza/EdoCuenta', {Cliente: Cliente, FechaInicioEdo: FechaInicioEdo, FechaTerminoEdo: FechaTerminoEdo});
    $.ajax({
        url: base_url + 'index.php/ctrlCobranza/EdoCuenta',
        type: "POST",
        data: {
            Cliente: Cliente,
            FechaInicioEdo: FechaInicioEdo,
            FechaTerminoEdo: FechaTerminoEdo
        }
    }).done(function (data) {
        $('#ResultadoEdoCuenta').html(data);
    });
}

function getNumberWithFormat(v)
{
    var fn = 0;
    $.ajax({
        url: base_url + 'index.php/ctrlDispersion/getNumberWithFormat',
        type: "POST",
        async: false,
        data: {
            numero: v,
            ndecimales: 2
        }
    }).done(function (data) {
        fn = data;
    });
    return fn;
}

$(document).ready(function (e) {

    

});