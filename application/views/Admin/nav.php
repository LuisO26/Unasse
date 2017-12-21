<body>
    <div id="page">
        <div id="pageloader">
            <div class="loader-item fa fa-spin text-color"></div>
        </div>
        <header id="sticker" class="sticky-navigation">
            <div class="sticky-menu relative">
                <div class="navbar navbar-default navbar-bg-light" role="navigation">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span> 
                                <span class="icon-bar"></span> 
                                <span class="icon-bar"></span> 
                                <span class="icon-bar"></span></button> 
                                 
                                <a class="navbar-brand" href="<?=base_url()?>">
                                    <img style="height: 80px; width: auto; " class="site_logo" alt="Site Logo" src="<?= base_url()?>assets/img/logo.png" />
                                </a></div>
                                <div class="navbar-collapse collapse" style="padding-top: 10px">
                                    <ul class="nav navbar-nav">
                                        <li class="">
                                            <a href="<?=base_url()?>Admin">Dashboard</a>
                                            
                                        </li>
                                        <li>
                                        <a href="#">Secciones</a> 
                                        <ul class="dropdown-menu">
                                                <li>
                                                <a href="<?=base_url()?>DescargasAdmin">Descargas</a>
                                                </li>
                                                <li>
                                                <a href="<?=base_url()?>HomeAdmin">Configurar Inicio</a>
                                                </li>
                                                <li>
                                                <a href="<?=base_url()?>GaleriaAdmin">Galería</a>
                                                </li>
                                                <li>
                                                <a href="<?=base_url()?>PruebasAdmin">Pruebas</a>
                                                </li>
                                            </ul>
                                        <li>
                                        <!--<li>
                                        <a href="<?=base_url()?>/Micrositios">Micro Sitios</a> 
                                        <li>-->
                                    </ul>
                                        
                                    </ul>
                                </div>
                                <!-- /.navbar-collapse -->
                            </div>
                            <!-- /.col-md-12 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
                </div>
                <!-- navbar -->
            </div>
            <!-- Sticky Menu -->
        </header>
        <!-- Sticky Navbar -->