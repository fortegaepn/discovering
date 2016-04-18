<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <script type="text/javascript" src="jquery/jquery-1.11.3.min.js"></script>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet"> -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <style type="text/css">
            body{
                background: #000;
                color:#fff;
                
            }
            .row li {
                width: 12.3%;
                float: left;
                border: 2px solid gray;
                list-style: none;
                margin: 2px;
                //padding-left: 2%;
                background: #fff;

            }
            
            .row li:hover{
                background: rgba(255,255,255,0.8);
            }
            
            h4{
                font-weight: bold;
                font-size: 18px;
            }

            img {
                border: 0 none;
                display: inline-block;
                height: auto;
                max-width: 100%;
                vertical-align: middle;
            }
            
            .logo{
                padding: 2%;
                border-bottom: 2px solid #fff;
				//position:absolute;
            }
            
            .contenido{
                margin:2%;
            }
            
            .pie{
                margin-top: 2%;
                border-top:2px solid #fff;
                text-align: center;
            }
            
            #collar{
                //left: 36%;
                position: absolute;
                //top: 38%;
                z-index: 2;
                //max-width: 29%;
            }
            #aretes{
                //left: 25%;
                position: absolute;
                //top: 22%;
                z-index: 2;
            }
            #brazaletes{
                //left: 45%;
                position: absolute;
                //top: 78%;
                z-index: 2;
            }

            /*h1{
                text-align: center;
            }
            .cuerpo{
                display: inline-flex;
            }
            .lista{
                position:relative;
                display:inline-flex;
                background: #fff;
            }
            .lista img{
                width:150px;
                height:150px;
            }

            .carrusel{
                height:350px;
                overflow:hidden;
                width:120px;
            }

            .bloque-imagenes{
                margin:0 0 0 12px;
                padding:0;
            }

            .bloque-imagenes li{
                list-style:none;
                margin:0;
                padding:0;
                margin-bottom:12px;
                border:2px solid #000;
            }

            .bloque-imagenes li img{
                height:73px;
                width:109px;
                border:0;
            }

            .bloque-imagenes a:hover img{
                border:1px #fff solid;
            }*/


        </style>
    </head>
    <body>

        <div class="container-fluid">
            <!--<h1 align="center">SEJMET JOYERIA</h1>-->
            <div class="row logo"><img src="images/logo-sejmet.png" class="center-block img-responsive"/></div>
            <div class="row contenido" style="position: relative;">

                <DIV id="fondo" class=" col-xs-12"> 
                    <IMG SRC="images/fondo.png" border=0 class="center-block img-responsive"> 
                </DIV> 

                <div id="collar" class="col-xs-12"></div>
                <div id="aretes" class="col-xs-12"></div>
                <div id="brazaletes" class="col-xs-12"></div>
                <!-- <DIV id="aretes" STYLE="position:absolute; top:295px; left:700px; width:200px; height:200px; visibility:visible z-index:2"> 

                 </DIV>
                 <DIV id="brazaletes" STYLE="position:absolute; top:800px; left:1090px; width:200px; height:200px; visibility:visible z-index:2"> 
                <!--<IMG SRC="images/brazaletes1.png" border=0> 
            </DIV>-->




                <!--<div class="carrusel">
                    <ul class="bloque-imagenes">
                        <li class="arete1"><img src="images/aretes1.png" alt=""/></a>
                        </li>
                        <li id="arete2"><img src="images/aretes2.png" alt=""/></a>
                        </li>
                        <li id="collar1"><img src="images/collar1.png" alt=""/></a>
                        </li>
                        <li id="collar2"><img src="images/collar2.png" alt=""/></a>
                        </li>
                        <li id="brazalete1"><img src="images/brazaletes1.png" alt=""/></a>
                        </li>
    
    
                    </ul>
                </div>-->
            </div>
            <DIV class="row"> 

            </DIV>

            <div class="row">
                <div id="small-img" class="col-xs-12 col-xs-offset-3">
                    <h4>Pendientes</h4>
                    <ul>
                        <li id="arete1">
                            <IMG SRC="images/thumbnails/aretes1.png" class="center-block img-responsive inline-block" />

                        </li>
                        <li id="arete2">
                            <IMG SRC="images/thumbnails/aretes2.png" class="center-block img-responsive inline-block" />
                        </li>
                        <li id="arete3">
                            <IMG SRC="images/thumbnails/aretes3.png" class="center-block img-responsive inline-block" />
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row" >
                <div id="small-img" class="col-xs-12 col-xs-offset-3">
                    <h4>Collares</h4>
                    <ul>    
                        <li id="collar1">
                            <IMG SRC="images/thumbnails/collar1.png" class="center-block img-responsive inline-block" />
                        </li>
                        <li id="collar2">
                            <IMG SRC="images/thumbnails/collar2.png" class="center-block img-responsive inline-block" />
                        </li>
                        <li id="collar3">
                            <IMG SRC="images/thumbnails/collar3.png" class="center-block img-responsive inline-block" />
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row" >
                <div id="small-img" class="col-xs-12 col-xs-offset-3">
                    <!--<h4>Brazaletes</h4>
                    <ul>    
                        <li id="brazalete1">
                            <IMG SRC="images/thumbnails/brazaletes1.png" class="img-responsive inline-block" />
                        </li>
                        <li id="brazalete2">
                            <IMG SRC="images/thumbnails/brazalete2.png" class="img-responsive inline-block" />
                        </li>
                        <li id="brazalete3">
                            <IMG SRC="images/thumbnails/brazalete3.png" class="img-responsive inline-block" />
                        </li>
                    </ul>-->
                </div>
            </div>
            <div class="row pie"><p>Sejmet-Joyería de vidrio. 2015 Derechos Reservados</p></div>
        </div>




        <?php
        // put your code here
        ?>
    </body>
    <script type="text/javascript">
        /* $(document).ready(
         function () {
         
         var numeroImagenes;
         
         var contenidoInicial = $('.bloque-imagenes').html();
         
         var margenTop;
         
         function carrusel() {
         
         margenTop = $('.bloque-imagenes').css('margin-top');
         
         
         margenTop = margenTop.split('p');
         margenTop[0] = margenTop[0] - 1;
         
         
         if ((($('.bloque-imagenes').children().size() - 4) * 73) <
         Math.abs(margenTop[0])) {
         //carrusel();
         $('.bloque-imagenes').append(contenidoInicial);
         
         }
         ;
         
         $('.bloque-imagenes').css('margin-top', margenTop[0] + 'px');
         
         }
         
         
         var parar = setInterval(function mover() {
         carrusel();
         }, 10);
         
         
         $('.bloque-imagenes').mouseover(function () {
         clearInterval(parar);
         
         });
         
         $('.bloque-imagenes').mouseout(function () {
         parar = setInterval(function mover() {
         carrusel();
         }, 10);
         });
         
         });*/
        $('#arete1').click(function () {
            //alert("arete1");
            $('#aretes').html('<IMG SRC="images/aretes1.png" class=" center-block img-responsive" /> ');
        });
        $('#arete2').click(function () {
            //alert("arete1");
            $('#aretes').html('<IMG SRC="images/aretes2.png" class="center-block img-responsive" /> ');
        });
        $('#arete3').click(function () {
            //alert("arete1");
            $('#aretes').html('<IMG SRC="images/aretes3.png" class="center-block img-responsive" /> ');
        });
        $('#collar1').click(function () {
            //alert("arete1");
            $('#collar').html('<IMG SRC="images/collar1.png" class="center-block img-responsive" /> ');
        });
        $('#collar2').click(function () {
            //alert("arete1");
            $('#collar').html('<IMG SRC="images/collar2.png" class="center-block img-responsive "/> ');
        });
        $('#collar3').click(function () {
            //alert("arete1");
            $('#collar').html('<IMG SRC="images/collar3.png" class="center-block img-responsive "/> ');
        });
        $('#brazalete1').click(function () {
            //alert("arete1");
            $('#brazaletes').html('<IMG SRC="images/brazaletes1.png" class="center-block img-responsive" /> ');
        });


    </script>
</html>


