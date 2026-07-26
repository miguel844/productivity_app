<!-- Middleware -->
<?php require_once __DIR__ . '/../../php/middleware/auth.php'; ?>

<!-- HEAD -->
<?php include_once __DIR__ . '/../../includes/head.php'; ?>
<?php include_once __DIR__ . '/../../includes/private_head.php'; ?>

<!-- Funcionalidad del dashboard -->
<?php include_once __DIR__ . '/../../php/models/dashboard.php'; ?>

<body class="bg-background text-text mx-5">
    <div class="container mx-auto w-full flex flex-col min-h-screen overflow-x-hidden">
        <header class="w-full flex mt-5">
            <!-- Logo -->
            <div class="flex items-center gap-4 p-5 rounded-tl-2xl md:rounded-bl-2xl bg-background-secondary">
                <img id="logo" alt="Logo MACM HUB" class="h-15">
                <h2 class="font-title text-3xl font-semibold">MACM <span class="text-brand">HUB</span></h2>
            </div>
            <!-- Cabecera -->
            <div class="flex flex-col flex-1 bg-background-secondary">
                <p id="goodDay" class="md:flex hidden text-xl p-4 font-bold"><?= $greet ?></p>
                <p id="currentDate" class="md:flex hidden text-xs px-4 text-text-muted"><?= "Estamos a " . $formattedDate ?></p>
            </div>
            <!-- Usuario -->
            <div class="hidden bg-background-secondary md:flex gap-4 p-5 items-center md:rounded-tr-2xl">
                <a href="php/auth/logout.php">
                    <div class="flex justify-end mr-2 mt-2 transition-colors duration-200 cursor-pointer gap-1 hover:text-brand">
                        <i data-lucide="User"></i>
                        <!-- <i data-lucide="UserX"></i> -->
                        <p>Cerrar sesion</p>
                    </div>
                </a>
                <!-- Darkmode -->
                <div id="btnDarkMode" class="flex items-center transition-colors duration-200 cursor-pointer">
                    <i data-lucide="moon"></i>
                </div>
            </div>
            <!-- BOTÓN HAMBURGUESA -->
            <div id="headerHamburger" class="md:hidden relative bg-background-secondary flex gap-4 p-5 items-center rounded-tr-2xl">

                <button id="menu-btn" class="flex flex-col gap-2 mt-1.5">
                    <span class="bar w-10 h-1 bg-text rounded transition-all duration-300"></span>
                    <span class="bar w-10 h-1 bg-text rounded transition-all duration-300"></span>
                    <span class="bar w-10 h-1 bg-text rounded transition-all duration-300"></span>
                </button>

                <!-- MENÚ -->
                <div
                    id="mobileMenu" class="absolute top-full right-0 w-60 translate-x-full transition-all duration-200">

                    <ul class="p-4 bg-background rounded-l-2xl">

                        <li class="mb-1">
                            <a href="?page=dashboard" class="menu-item flex px-2 py-4 rounded-md hover:bg-surface-hover hover:text-brand-hover">
                                <div class="pr-5">
                                    <i data-lucide="House" class="menu-icon"></i>
                                </div>

                                <span class="menu-text">Resumen</span>
                            </a>
                        </li>
                        <li class="mb-1">
                            <a href="?page=task" class="menu-item flex px-2 py-4 rounded-md hover:bg-surface-hover hover:text-brand-hover">
                                <div class="pr-5">
                                    <i data-lucide="CalendarDays" class="menu-icon"></i>
                                </div>

                                <span class="menu-text">Tareas</span>
                            </a>
                        </li>
                    </ul>
                    <div class="p-0 w-full h-5 bg-background">
                        <div class="p-0 w-full h-5 bg-background-secondary rounded-tr-2xl "> </div>
                    </div>
                </div>











            </div>
        </header>


        <div class="flex flex-1">
            <!-- Menu lateral -->
            <aside id="sidebar" class="hidden md:w-66.75 md:flex md:flex-col bg-background-secondary">
                <div class=" bg-background h-full w-full p-4 pb-2 rounded-tr-2xl">

                    <div id="iconPanel" class="w-full flex justify-end py-4">
                        <i data-lucide="PanelRightOpen" id="iconOpen" class="hover:text-brand cursor-pointer mr-2"></i>
                        <i data-lucide="PanelLeftOpen" id="iconClose" class="hidden hover:text-brand cursor-pointer mr-2"></i>
                    </div>

                    <ul>
                        <li class="mb-1">
                            <a href="?page=dashboard" class="menu-item flex px-2 py-4 rounded-md hover:bg-surface-hover hover:text-brand-hover">
                                <div class="pr-5">
                                    <i data-lucide="House" class="menu-icon"></i>
                                </div>

                                <span class="menu-text">Resumen</span>
                            </a>
                        </li>
                        <li class="mb-1">
                            <a href="?page=task" class="menu-item flex px-2 py-4 rounded-md hover:bg-surface-hover hover:text-brand-hover">
                                <div class="pr-5">
                                    <i data-lucide="CalendarDays" class="menu-icon"></i>
                                </div>

                                <span class="menu-text">Tareas</span>
                            </a>
                        </li>

                        <!-- Active button
                        <li>
                            <a href="#" class="flex px-2 py-4 rounded-md bg-surface-hover text-brand-hover">
                                <idata-lucide="CalendarDays" class="mr-5"></i>
                                Agenda
                            </a>
                        </li>
                        -->

                    </ul>

                </div>
            </aside>

            <main class="flex-1 p-5 bg-background-secondary rounded-b-2xl">
                <h1>Esto es el main</h1>
                <h1>Esto es el main</h1>
                <h1>Esto es el main</h1>
                <h1>Esto es el main</h1>
                <h1>Esto es el main</h1>
                <h1>Esto es el main</h1>
                <h1>Esto es el main</h1>
                <h1>Esto es el main</h1>
                <h1>Esto es el main</h1>
                <h1>Esto es el main</h1>
                <h1>Esto es el main</h1>
                <h1>Esto es el main</h1>
                <h1>Esto es el main</h1>
                <h1>Esto es el main</h1>
                <h1>Esto es el main</h1>
                <h1>Esto es el main</h1>
                <h1>Esto es el main</h1>
                <h1>Esto es el main</h1>
                <h1>Esto es el main</h1>
                <h1>Esto es el main</h1>
                <h1>Esto es el main</h1>
                <h1>Esto es el main</h1>
                <h1>Esto es el main</h1>
                <h1>Esto es el main</h1>
                <h1>Esto es el main</h1>
                <h1>Esto es el main</h1>
                <h1>Esto es el main</h1>
                <h1>Esto es el main</h1>
                <h1>Esto es el main</h1>
                <h1>Esto es el main</h1>
                <h1>Esto es el main</h1>
                <h1>Esto es el main</h1>
                <h1>Esto es el main</h1>
                <h1>Esto es el main</h1>
                <h1>Esto es el main</h1>
                <h1>Esto es el main</h1>
                <h1>Esto es el main</h1>
                <h1>Esto es el main</h1>
                <div class="bg-surface">asdasdasd</div>








            </main>

        </div>
        <!-- Footer -->
        <?php include_once __DIR__ . '/../../includes/footer.php'; ?>
    </div>

</body>

</html>