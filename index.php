<?php ?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simulador High Point</title>

    <!-- Custom fonts for this template-->
    <!--<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">-->
    <!--<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">-->

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        @font-face {
            font-family: "Avenir-toy";
            font-style: normal;
            font-weight: normal;
            src: local("?"), url("ASSETS/fuentes/AvenirLTStd-Light.woff") format("woff"),
            url("ASSETS/fuentes/AvenirLTStd-Light.woff") format("truetype");
        }

        @font-face {
            font-family: "Droid-toy";
            font-style: normal;
            font-weight: normal;
            src: local("?"), url("ASSETS/fuentes/DroidSerif-Regular.woff") format("woff"),
            url("ASSETS/fuentes/DroidSerif-Regular.woff") format("truetype");
        }

        h4,h1{
            font-family: Droid-toy;
            color: #000000;
        }

        input, h5, p, button, li{
            font-family: Avenir-toy;
            color: #000000;
        }
    </style>

</head>

<body id="page-top">
<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Begin Page Content -->
            <div class="container">
                <br><br>
                <!--<div class="row">
                    <div class="col-md-12">
                        <center><img src="assets/logo.png" height="150"></center>
                    </div>
                </div>
                <br><br>-->
                <div class="row">
                    <div class="col-md-2">
                        <img src="ASSETS/logo.png" width="220">
                    </div>
                    <div class="col-md-10">
                        <center>
                            <br><br>
                            <h1>Simulador High Point</h1>
                        </center>
                    </div>
                </div>

                <br><br>
                <center>
                    <div class="row">
                        <h4>Paso 1. ¿Cuántos activos bajo administración tienes (valor de tu cartera)? </h4>
                        <div class="col-md-3">
                            <input id="aums" type="number" min="0" class="form-control mb-0" placeholder="MXN" >
                        </div>
                    </div>

                    <br><br>

                    <div class="row">
                        <h4>Paso 2. ¿Qué comisión de asesoría promedio le cobras a tus clientes?</h4>
                        <div class="col-md-3">
                            <input id="asesoria" type="number" min="0" class="form-control mb-0" placeholder="% (Porcentaje)"  >
                        </div>
                    </div>


                    <br><br>

                    <div class="row">
                        <h4>Paso 3. ¿Qué es importante para ti?</h4>
                        <br>
                        <div class="col-md-12">
                            <table border="0" cellpadding="5" width="100%">
                                <tr>
                                    <td align="center">
                                        <input type="checkbox" id="t1" name="t1" value="Tener una oficina" >
                                        <label for="t1">Tener una oficina</label>
                                    </td>
                                    <td align="center">
                                        <input type="checkbox" id="t2" name="t2" value="Trabajar desde casa">
                                        <label for="t2">Trabajar desde casa</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <input type="checkbox" id="t3" name="t3" value="Acceso a información consolidada de clientes">
                                        <label for="t3">Acceso a información consolidada de clientes</label>
                                    </td>
                                    <td align="center">
                                        <input type="checkbox" id="t4" name="t4" value="Personal de apoyo">
                                        <label for="t4">Personal de apoyo</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <input type="checkbox" id="t5" name="t5" value="Capacitación">
                                        <label for="t5">Capacitación</label>
                                    </td>
                                </tr>

                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <h4>Paso 4. ¿Qué buscan tus clientes?</h4>
                        <br>
                        <div class="col-md-12">
                            <table border="0" cellpadding="5" width="100%">
                                <tr>
                                    <td align="center">
                                        <input type="checkbox" id="c1" name="c1" value="Portafolios predeterminados" >
                                        <label for="c1">Portafolios predeterminados</label>
                                    </td>
                                    <td align="center">
                                        <input type="checkbox" id="c2" name="c2" value="Portafolios personalizados">
                                        <label for="c2">Portafolios personalizados</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <input type="checkbox" id="c3" name="c3" value="Reportes de resultados simples">
                                        <label for="c3">Reportes de resultados simples</label>
                                    </td>
                                    <td align="center">
                                        <input type="checkbox" id="c4" name="c4" value="Servicio">
                                        <label for="c4">Servicio</label>
                                    </td>
                                </tr>

                            </table>
                        </div>
                    </div>

                </center>
            </div>



            <br>
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <center>
                            <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal">
                                CALCULAR
                            </button>-->
                            <button type="button" id="btn_calcular" class="btn btn-primary">
                                CALCULAR
                            </button>
                        </center>
                    </div>
                </div>

            </div>


            <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Estamos calculando tu proyección...</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Para finalizar, compártenos tu correo electrónico:</p>
                            <input id="correo" type="email" min="0" class="form-control mb-0" value="">
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="btn_enviar" class="btn btn-success">Ver mi proyección</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modalMAL" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalMALTitulo">¡UPSSS!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Es necesario introducir AUM's</p>
                            <p>Es necesario introducir Fee</p>
                            <p>Seleccionar por lo menos una opción de importancia para ti</p>
                            <p>Seleccionar por lo menos una opción de importancia para tus clientes</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>


            <br>
        </div>
        <!-- End of Main Content -->

        <!-- Main Content -->
        <div id="content2" style="display: none;">

            <!-- Begin Page Content -->
            <div class="container">
                <br><br>
                <!--<div class="row">
                    <div class="col-md-12">
                        <center><img src="assets/logo.png" height="150"></center>
                    </div>
                </div>
                <br><br>-->
                <div class="row">
                    <div class="col-md-12">
                        <center>
                            <h1>Tu proyección con Hight Point</h1>
                            <br>
                            <h4>Para poder cubrir tus necesidades y las de tus clientes te ofrecemos la Membresía <span id="mem"></span> que incluye:</h4>
                        </center>
                            <ul id="lista">

                            </ul>

                    </div>
                </div>

                <center>
                    <br><br>
                    <div class="row">
                        <div class="col-md-12">
                            <p><b>Costo:</b> <span id="renta_mensual"></span></p>
                            <p><b>Con tu cartera de clientes actual de:</b> <span id="aumsRes"></span></p>
                            <p><b>Te da un cobro anual total de:</b> <span id="cobro_anual"></span></p>
                            <p><b>Cobro mensual de:</b> <span id="cobro_mensual"></span></p>
                            <p><b>Descontando el costo de la Membresía, tu ingreso mensual es de:</b> <span id="revenue_asesor_mensual"></span></p>
                            <p><b>% que cobra High Point sobre tu ingreso:</b> <span id="revenue_share"></span></p>
                        </div>


                    </div>
                </center>
            </div>
        </div>
        <!-- End of Main Content -->




        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span style="font-family: Avenir-toy;">Copyright &copy; Wakkamole 2020</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>
<script>

    $(document).ready(function () {



        $("#btn_calcular").click(function () {

            datos = {}
            datos['aums'] = $("#aums").val();
            datos['asesoria'] =$("#asesoria").val();
            datos['t1'] = "";
            datos['t2'] = "";
            datos['t3'] = "";
            datos['t4'] = "";
            datos['t5'] = "";
            datos['t6'] = "";
            datos['c1'] = "";
            datos['c2'] = "";
            datos['c3'] = "";
            datos['c4'] = "";

            if($('#t1:checked').is(":checked")){datos['t1'] = $('#t1').val();}
            if($('#t2:checked').is(":checked")){datos['t2'] = $('#t2').val();}
            if($('#t3:checked').is(":checked")){datos['t3'] = $('#t3').val();}
            if($('#t4:checked').is(":checked")){datos['t4'] = $('#t4').val();}
            if($('#t5:checked').is(":checked")){datos['t5'] = $('#t5').val();}
            if($('#t6:checked').is(":checked")){datos['t6'] = $('#t6').val();}

            if($('#c1:checked').is(":checked")){datos['c1'] = $('#c1').val();}
            if($('#c2:checked').is(":checked")){datos['c2'] = $('#c2').val();}
            if($('#c3:checked').is(":checked")){datos['c3'] = $('#c3').val();}
            if($('#c4:checked').is(":checked")){datos['c4'] = $('#c4').val();}

            //console.log(datos);
            //console.log(Object.keys(datos).length);

            /*for(const prop in datos){
                console.log(datos[prop]);
            }*/

            if(datos['aums'] == "" || datos['asesoria'] == ""){
                $("#modalMAL").modal('show');
            }else{
                //console.log(datos);
                let check = 0;
                let checkC = 0;
                if(datos['t1'] != ""){ check = 1; }
                if(datos['t2'] != ""){ check = 1; }
                if(datos['t3'] != ""){ check = 1; }
                if(datos['t4'] != ""){ check = 1; }
                if(datos['t5'] != ""){ check = 1; }
                if(datos['t6'] != ""){ check = 1; }
                if(datos['c1'] != ""){ checkC = 1; }
                if(datos['c2'] != ""){ checkC = 1; }
                if(datos['c3'] != ""){ checkC = 1; }
                if(datos['c4'] != ""){ checkC = 1; }
                if(check == 0 || checkC == 0){
                    $("#modalMAL").modal('show');
                }else{
                    $("#modal").modal('show');
                }
            }
            /*if(aums != ""){
                $("#modal").modal('show');
            }else{
                $("#modalMAL").modal('show');
            }*/
        });




        $("#btn_enviar").click(function () {

            datos = {}
            datos['correo'] = $("#correo").val();
            datos['aums'] = $("#aums").val();
            datos['asesoria'] =$("#asesoria").val();
            datos['t1'] = "";
            datos['t2'] = "";
            datos['t3'] = "";
            datos['t4'] = "";
            datos['t5'] = "";
            datos['t6'] = "";
            datos['c1'] = "";
            datos['c2'] = "";
            datos['c3'] = "";
            datos['c4'] = "";

            if($('#t1:checked').is(":checked")){datos['t1'] = $('#t1').val();}
            if($('#t2:checked').is(":checked")){datos['t2'] = $('#t2').val();}
            if($('#t3:checked').is(":checked")){datos['t3'] = $('#t3').val();}
            if($('#t4:checked').is(":checked")){datos['t4'] = $('#t4').val();}
            if($('#t5:checked').is(":checked")){datos['t5'] = $('#t5').val();}
            if($('#t6:checked').is(":checked")){datos['t6'] = $('#t6').val();}

            if($('#c1:checked').is(":checked")){datos['c1'] = $('#c1').val();}
            if($('#c2:checked').is(":checked")){datos['c2'] = $('#c2').val();}
            if($('#c3:checked').is(":checked")){datos['c3'] = $('#c3').val();}
            if($('#c4:checked').is(":checked")){datos['c4'] = $('#c4').val();}



            if(validar_email(datos['correo']) == false){
                alert("Favor de introducir un correo valido.");
            }else{
                //console.log("calcula antes de ajax");
                console.log(datos);


                $.ajax({
                    url: 'services/calculo.php',
                    type: 'post',
                    data: {
                        datos: JSON.stringify(datos)
                    }
                }).done(function( data ){

                    let calc = JSON.parse(data);
                    console.log(calc);

                    $("#renta_mensual").html( formatter.format(calc['renta_mensual']) );
                    $("#aumsRes").html( formatter.format(calc['aums']) );
                    $("#cobro_anual").html( formatter.format(calc['cobro_anual']) );
                    $("#cobro_mensual").html( formatter.format(calc['cobro_mensual']) );
                    $("#revenue_asesor_mensual").html( formatter.format(calc['revenue_asesor_mensual']) );
                    $("#revenue_share").html( calc['revenue_share']+"%" );
                    $("#mem").html( calc['mem'] );

                    if(calc['mem'] == "ALL IN"){
                        $("#lista").html('<li>Un espacio de oficina</li><li>Acceso a nuestra plataforma en donde puedes visualizar a todos tus clientes: posición, resultados y saldos</li><li>Portafolios asesorados por las mejores empresas a nivel mundial en el manejo de activos</li><li>Equipo de trabajo</li><li>Capacitaciones</li>');
                    }else{
                        $("#lista").html('<li>Acceso a nuestra plataforma en donde puedes visualizar a todos tus clientes: posición, resultados y saldos</li><li>Portafolios predeterminados</li><li>Equipo de trabajo</li><li>Capacitaciones</li>');
                    }

                    $("#modal").modal('hide');

                    $("#content2").css("display", "inline");
                    $("#content").css("display", "none");
                });




            }

        });
    });

    var formatter = new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'USD',
    });


    function validar_email(valor)  {
        var filter = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
        return filter.test(valor);
    }

    function validar_numero(valor)  {
        var filter = /^([0-9])*$/;
        return filter.test(valor);
    }
</script>
</body>

</html>
