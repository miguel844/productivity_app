<!-- Middleware -->
<?php require_once __DIR__ . '/../../php/middleware/auth.php'; ?>

<!-- HEAD -->
<?php include_once __DIR__ . '/../../includes/private_head.php'; ?>

<!-- Funcionalidad del dashboard -->
<?php include_once __DIR__ . '/../../php/models/dashboard.php'; ?>

<body class="bg-surface text-text">
    <div class="container mx-auto w-full flex flex-col h-screen">
        <header class="w-full flex mt-5">
            <!-- Logo -->
            <div class="flex items-center gap-4 p-5 rounded-tl-xl md:rounded-bl-xl bg-background">
                <img id="logoMenu" src="/assets/icons/logo_M_hex_light.svg" alt="Logo MACM HUB" class="h-15">
                <h2 class="font-title text-3xl font-semibold">MACM <span class="text-brand">HUB</span></h2>
            </div>
            <!-- Cabecera -->
            <div class="flex-1 bg-background">
                <p id="goodDay" class="text-4xl p-4 font-bold"><?= $greet ?></p>
                <p id="currentDate" class="px-4 text-text-muted"><?= "Estamos a ". $formattedDate ?></p>
            </div>
            <!-- Usuario -->
            <div class="bg-background flex rounded-tr-xl gap-4 p-5 items-center">
                <div id="icoUsuario" class="flex justify-end mr-2 mt-2 transition-colors duration-200 cursor-pointer">
                    <i data-lucide="User"></i>
                    <p><?= $name ?></p>
                </div>
                <div id="icoDarkMode" class="flex justify-end mr-2 mt-2 transition-colors duration-200 cursor-pointer">
                    <i data-lucide="moon"></i>
                </div>
            </div>
        </header>
        <!-- Menu lateral -->
        <div class="flex flex-1">

            <aside class="hidden md:w-66.75 md:flex md:flex-col bg-background">
                <div class="bg-surface h-full w-full  p-4 pb-2 rounded-r-xl">
                    <div class="w-full text-center">
                        <i data-lucide="PanelRightOpen"></i>
                    </div>
                    <ul>
                        <li class="mb-0.75"><a href="#"
                                class="flex px-2 py-4 rounded-md hover:bg-surface-hover hover:text-brand-hover"><i
                                    data-lucide="House" class="mr-5"></i>Resumen</a></li>
                        <li><a href="#" class="flex px-2 py-4 rounded-md bg-surface-hover text-brand-hover"><i
                                    data-lucide="CalendarDays" class="mr-5"></i>Agenda</a></li>

                    </ul>

                </div>
            </aside>

            <main class="flex-1 p-5 bg-background">
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
            </main>

        </div>
        <!-- Footer -->
        <?php include_once __DIR__ . '/../../includes/footer.php'; ?>
    </div>

</body>

</html>