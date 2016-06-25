<!DOCTYPE html>
<html lang="es">
<head>
    <title>José Luis Chanito Toledo | Para ti chanito </title>
    <meta name="keywords" content="Jose Luis Toledo Median,Recetas Quintana Roo,Chanito Toledo,Diputado PRI,pri solidaridad,diputados pri,diputado chanito"/> 
    <meta charset="utf-8">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="José Luis Chanito Toledo" />
    <meta property="og:description" content="Diputado Federal Quintana Roo" />
    <meta property="og:site_name" content="www.chanitoledo.com">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1" />
    <link rel="icon" href="../img/Favicon_chanito.png" type="image/x-icon">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../Encuesta_Fancy/fancybox/source/font-awesome.min.css">
    <link rel="stylesheet" href="../Encuesta_Fancy/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <link rel="stylesheet" href="../Encuesta_Fancy/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <link rel="stylesheet" href="../Encuesta_Fancy/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../RecetasQuintanaroo/css/querys.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="menuT" class="fondoNavidad">
        <section class="row">
            <div class="plecaNavidad">
                <img class="plecaResponsive" src="../../RecetasQuintanaroo/navidad.png">
                <img class="pleca" src="../../RecetasQuintanaroo/img/navidadLarge.png">
            </div>
        </section>
        <section class="container" id="margenForm">
            <div class="form_containerRecetas">
                <div class="row">
                        <form method="post" action="../RecetasQuintanaroo/mail.php" class="form-horizontal" id="formulario">
                            <div class="form-group">
                                <h1 id="h1Recetas">Receta Navideña</h1>
                                <div class="col-xs-12">
                                    <select class="form-control" name="asunto" id="asunto" required >
                                        <option value="Receta Navideña" selected>Receta Navideña</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <input type="text" name="paterno" id="paterno" placeholder="Paterno" class="form-control" required/>
                                </div>         
                                <div class="col-xs-6">
                                    <input type="text" name="materno" id="materno" placeholder="Materno" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group">                  
                                <div class="col-xs-6">
                                    <input type="tel" name="numtelefono" id="numtelefono" placeholder="Numero de Telefono" class="form-control" required />
                                </div>         
                                <div class="col-xs-6">
                                    <input type="email" name="correo" id="correo" placeholder="Tucorreo@ejemplo" class="form-control" required />         
                                </div>
                            </div>
                            <div class="form-group">                                 
                                <div class="col-xs-6">
                                    <select class="form-control" name="provinciaList" id="provinciaList" onChange="return provinciaListOnChange()">
                                        <option value="" disable selected>Municipio</option>
                                            <?php
                                                $xml = simplexml_load_file('provinciasypoblaciones.xml');
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
                                    <select class="form-control" name="localidadList" id="localidadList" >
                                         <option value="" disable selected>Cuidad o Población</option>
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="form-group">                 
                                <div class="col-xs-12">
                                    <textarea name="direccion" id="direccion" rows="3" class="form-control" placeholder="Dirección" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">                  
                                <div class="col-xs-12">
                                    <textarea name="ingredientes" id="ingredientes" rows="3" class="form-control" placeholder="Nombre del Platillo e Ingredientes" required></textarea>         
                                </div>
                            </div>
                            <div class="form-group">                  
                                <div class="col-xs-12">
                                    <textarea name="modoprep" id="modoprep" rows="3" class="form-control" placeholder="Modo de Preparación" required></textarea>         
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="col-xs-12">
                                    <input id="btn_envia" name="envia" type="submit" class="btn btn-primary" value="Enviar">
                                    <input id="btn_cancelaReceta" type="reset"  class="btn btn-default" value="Cancelar">
                                </div>
                            </div>
                        </form>
                </div>
            </div> 
        </section>
        <footer id="piePaginaRecetas" class="piePaginaIndex">
                <h1 class="titleFooterRecetas">José Luis Toledo Medina</h1>
                <h3 class="subTitleFooterRecetas">Diputado Federal Quintana Roo</h3>        

                <div class="row">
                    <div class="col-md-2" id="fondoIconosRecetas">
                        <a href="https://www.facebook.com/ChaniToledo" target="_blank">
                            <div id="icoSocialF"></div>
                        </a>
                    </div>
                    <div class="col-md-2" id="fondoIconosRecetas">
                        <a href="https://twitter.com/JLToledoM" target="_blank">
                            <div id="icoSocialT"></div>
                        </a>
                    </div>
                    <div class="col-md-2" id="fondoIconosRecetas">
                        <a href="https://instagram.com/chanitotoledo/" target="_blank">
                            <div id="icoSocialI"></div>
                        </a>
                    </div>
                    <div class="col-md-2" id="fondoIconosRecetas">
                        <a href="https://www.youtube.com/user/JLToledoM" target="_blank">
                            <div id="icoSocialY"></div>
                        </a>
                    </div>
                    <div class="col-md-2" id="fondoIconosRecetas">
                        <a href="https://plus.google.com/+JLToledoM/" target="_blank">
                            <div id="icoSocialG"></div>
                        </a>
                    </div>
                    
                </div>
        </footer>
      </div>       

  </div>
<!-- library fancy -->
    <script type="text/javascript" src="../Encuesta_Fancy/fancybox/source/helpers/jquery-latest.min.js"></script>
    <script type="text/javascript" src="../Encuesta_Fancy/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
    <script type="text/javascript" src="../Encuesta_Fancy/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
    <script type="text/javascript" src="../Encuesta_Fancy/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="../Encuesta_Fancy/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
    <script type="text/javascript" src="../Encuesta_Fancy/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
    <script src="../parches/menuR.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery.smint.js"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>
    <script src="../parches/scriptsAjax.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/AjaxCode.js"></script>
    <script type="text/javascript" src="../valida2/bootstrapValidator.min.js"> </script>
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
                        ingredientes:{
                            validators:{
                                notEmpty:{
                                    message:'Ingresa el nombre del platillo y los ingredientes'
                                }
                            }
                        },
                        modoprep:{
                            validators:{
                                notEmpty:{
                                    message:'Ingresa el modo de preparación'
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
  
</body>

</html>

