<!doctype html>
<html lang="es">
<head>
  <title> José Luis Chanito Toledo| Contacto </title>
  <meta name="keywords" content="Contacto Chanito Toledo, Contacto José Luis Toledo, Contacto Chanito, Contacto Chanito Quintana Roo, Email Chanito, Contacto Diputado Chanito, Mensaje Chanito, Mensaje José Luis Toledo Medina, Contactar Chanito, Contactar José Luis Toledo, Agendar cita chanito, agendar cita José Luis Toledo Medina, Propuesta Chanito, LXIII Legislatura de la cámara de diputados, Propuesta de Ley Chanito, Propuesta de Ley Jose Luis Toledo Medina"/>    
  <?php include('parches/head.php');?>
</script>
</head>
<body>
    <div id="menuT">
        <div class="TrianguloFondo">   </div>
            <div class="VerMenuIco"></div>
            <nav id="contenedorMenu">
                <ul id="MenuPrincipal">
                    <li><a id="aColor"href="index.php">Inicio</a></li>
                    <li><a id="aColor"href="http://blog.chanitoledo.com">Blog</a></li>
                    <!--<li><a id="aColor"href="#">Multimedia</a></li>-->
                    <li><a id="aColor"href="biografia-joseluistoledo-chanito.php">C.V.</a></li>
                    <li><a id="aColor"href="contacto_chanito.php">Contacto</a></li>
                </ul>
            </nav>

        <section class="container"  >
            <div class="form_container">
                <div class="row">
                    
                        <form method="post" action="mail.php" class="form-horizontal" id="formulario">
                            <div class="form-group">
                                <h1 class="h1">Contacto</h1>
                                <div class="col-xs-12">
                                    <select class="form-control" name="asunto" id="asunto" >
                                        <option value="" disable selected>Selecciona un Asunto</option>
                                        <option>Agendar una Cita</option>
                                        <option>Propuesta de Ley</option>
                                        <option>Otros</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <input type="text" name="paterno" id="paterno" placeholder="Paterno" class="form-control" />
                                </div>         
                                <div class="col-xs-6">
                                    <input type="text" name="materno" id="materno" placeholder="Materno" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">                  
                                <div class="col-xs-6">
                                    <input type="text" name="numtelefono" id="numtelefono" placeholder="Numero de Telefono" class="form-control"  />
                                </div>         
                                <div class="col-xs-6">
                                    <input type="email" name="correo" id="correo" placeholder="Tucorreo@ejemplo" class="form-control"  />         
                                </div>
                            </div>
                            <div class="form-group">                                 
                                <div class="col-xs-6">          
                                    <select class="form-control" name="provinciaList" id="provinciaList" onChange="return   provinciaListOnChange()" >
                                    <option value="" disable selected>Municipio</option>
                                        <?php
                                            $xml = simplexml_load_file('provincias_ajax/provinciasypoblaciones.xml');
                                            $result = $xml->xpath("/lista/provincia/nombre | /lista/provincia/@id");
                                                for ($i=0;$i<count($result);$i+=2){
                                                $e=$i+1;
                                                $provincia=UTF8_DECODE($result[$e]);
                                                echo("<option value='$result[$i]'>$provincia</option>");
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-xs-6">
                                    <select class="form-control" name="localidadList" id="localidadList"  >
                                        <option value="" disable selected>Cuidad o Población</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">                 
                                <div class="col-xs-12">
                                    <textarea name="direccion" id="direccion" rows="3" class="form-control" placeholder="Dirección"></textarea>
                                </div>
                            </div>
                            <div class="form-group">                  
                                <div class="col-xs-12">
                                    <textarea name="mensaje" id="mensaje" rows="3" class="form-control" placeholder="Escribe tu mensaje aqui"></textarea>         
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="col-xs-12">
                                    <input id="btn_envia" name="envia" type="submit" class="btn btn-primary" value="Enviar">
                                    <input id="btn_cancela" type="reset"  class="btn btn-default" value="Cancelar">
                                </div>
                            </div>
                        </form>
                    
                    
                        <div id="imgChanito">
                            <img src="img/chanitoledoContacto.png" class="img-responsive" title="Chanito Toledo" alt="Chanito Toledo">
                        </div>
                   

                </div>
            </div> 
        </section>
        <?php include('footer.php');?>
      </div>       
    </div>  
  </div>

  
</body>

</html>
<?php include('parches/parches_scripts.php');?>
<script type="text/javascript">
        $(document).ready(function() {
            $('#formulario').bootstrapValidator({
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    asunto: {
                        validators: {
                            notEmpty: {
                                message: 'Selecciona un asunto'
                            }
                        }
                    },
                    nombre:{
                        validators:{
                            notEmpty:{
                                message:'Campo obligatorio Ingresa tu nombre(s)'
                            }
                        }
                    },
                    paterno:{
                        validators:{
                            notEmpty:{
                                message:'Campo obligatorio Ingresa tu Apellido Paterno'
                            }
                        }
                    },
                    materno:{
                        validators:{
                            notEmpty:{
                                message:'Campo Obligatorio Ingresa tu Apellido Paterno'
                            }
                        }
                    },
                    numtelefono:{
                        validators:{
                            notEmpty:{
                                message:'Campo Obligatorio Ingresa un numero telefonico valido'
                            },
                            regexp: {
                                regexp: /^[0-9]+$/,
                                message: 'Solo se admiten numeros para el campo telefono'
                            }
                        }
                    },
                    correo:{
                        validators:{
                                notEmpty:{
                                message:'Ingresa un correo valido',
                            },
                            emailAddress: {
                                message:'Correo electronico no es valido'
                            }
                        }
                    },
                    provinciaList:{
                        validators:{
                            notEmpty:{
                                message:'Selecciona un municipio'
                            }
                        }
                    },
                    localidadList:{
                        validators:{
                            notEmpty:{
                                message:'Selecciona una cuidad o población'
                            }
                        }
                    },
                    direccion:{
                        validators:{
                            notEmpty:{
                                message:'Ingresa un domicilio valido'
                            }
                        }
                    },
                    mensaje:{
                        validators:{
                            notEmpty:{
                                message:'Ingresa un mensaje'
                            }
                        }
                    },
                    terms:{
                        validators:{
                            notEmpty:{
                                message:'Aún no selecciona la casillas de los terminos'
                            }
                        }
                    }
                }
            });
        });
</script> <!-- SCRIPTS-->