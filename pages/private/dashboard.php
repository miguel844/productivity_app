<!-- Middleware -->
<?php require_once __DIR__ . '/../../php/middleware/auth.php'; ?>

<!-- HEAD -->
<?php include_once __DIR__ . '/../../includes/head.php'; ?>

<!-- Funcionalidad del dashboard -->
<?php include_once __DIR__ . '/../../php/models/dashboard.php'; ?>

<body class="bg-background text-text mx-5">
    <div class="container mx-auto w-full flex flex-col min-h-screen ">
        <header class="w-full flex mt-5">
            <!-- Logo -->
            <div class="flex items-center gap-4 p-5 rounded-tl-xl md:rounded-bl-xl bg-background-secondary">
                <img id="logo" alt="Logo MACM HUB" class="h-15">
                <h2 class="font-title text-3xl font-semibold">MACM <span class="text-brand">HUB</span></h2>
            </div>
            <!-- Cabecera -->
            <div class="flex flex-col flex-1 bg-background-secondary">
                <p id="goodDay" class="md:flex hidden text-xl p-4 font-bold"><?= $greet ?></p>
                <p id="currentDate" class="md:flex hidden text-xs px-4 text-text-muted"><?= "Estamos a " . $formattedDate ?></p>
            </div>
            <!-- Usuario -->
            <div class=" bg-background-secondary flex rounded-tr-xl gap-4 p-5 items-center">
                <a href="php/auth/logout.php">
                    <div class="flex justify-end mr-2 mt-2 transition-colors duration-200 cursor-pointer gap-1 hover:text-brand">
                        <!-- <i data-lucide="User"></i> -->
                        <i data-lucide="UserX"></i>
                        <p>Cerrar sesion</p>
                    </div>
                </a>
                <div id="btnDarkMode" class="hidden md:flex justify-end mr-2 mt-2 transition-colors duration-200 cursor-pointer">
                    <i data-lucide="moon"></i>
                </div>
            </div>
        </header>

        <div class="flex flex-1">
            <!-- Menu lateral -->
            <aside id="sidebar" class="hidden md:w-66.75 md:flex md:flex-col bg-background-secondary">
                <div class=" bg-background h-full w-full p-4 pb-2 rounded-tr-xl">

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

                                <span class="menu-text">Agenda</span>
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
                <div class="bg-surface">asdasdasd</div>


            </main>

        </div>
        <!-- Footer -->
        <?php include_once __DIR__ . '/../../includes/footer.php'; ?>
    </div>

</body>

</html>