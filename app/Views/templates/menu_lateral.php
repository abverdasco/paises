<body>
    <div class="row">
        <div class="col-2 d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="height: 90vh; margin: 0;">
            <a href="<?php echo base_url() ?>Paises/index" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4">PAÍSES</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
            <?php
                $claseIni = '';
                $claseEsp = '';
                $claseIng = '';
                $claseIta = '';
                $claseSui = '';

                if($seleccionado == 'inicio') {
                    $claseIni = 'active';
                }
                elseif($seleccionado == 'españa') {
                    $claseEsp = 'active';
                }
                elseif($seleccionado == 'inglaterra') {
                    $claseIng = 'active';
                }
                elseif($seleccionado == 'italia') {
                    $claseIta = 'active';
                }
                elseif($seleccionado == 'suiza') {
                    $claseSui = 'active';
                }
            ?>
            <li class="nav-item">
                <a href="<?php echo base_url() ?>Paises/index" class="nav-link <?php echo $claseIni ?> text-white" aria-current="page">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                Inicio
                </a>
            </li>
            <li>
                <a href="<?php echo base_url() ?>Paises/españa" class="nav-link <?php echo $claseEsp ?> text-white">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                España
                </a>
            </li>
            <li>
                <a href="<?php echo base_url() ?>Paises/inglaterra" class="nav-link <?php echo $claseIng ?> text-white">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                Inglaterra
                </a>
            </li>
            <li>
                <a href="<?php echo base_url() ?>Paises/italia" class="nav-link <?php echo $claseIta ?> text-white">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                Italia
                </a>
            </li>
            <li>
                <a href="<?php echo base_url() ?>Paises/suiza" class="nav-link <?php echo $claseSui ?> text-white">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                Suiza
                </a>
            </li>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>mdo</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>