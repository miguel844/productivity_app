<!-- HEAD -->
<?php include_once __DIR__ . '/../includes/head.php'; ?>

<body class="bg-background text-text">
    <div class="container mx-auto w-full h-screen flex flex-col items-center border-x border-border">
        <!-- Cabecera -->
        <?php include_once __DIR__ . '/../includes/public_header.php'; ?>
        <main class="flex-1 flex items-start justify-center px-6">

            <section class="w-full max-w-md bg-surface border border-border rounded-xl p-8 mt-5">

                <h1 class="text-3xl font-bold font-title text-center mb-2">
                    Iniciar sesión
                </h1>

                <p class="text-text-muted text-center mb-8">
                    Accede a tu cuenta de MACM HUB.
                </p>

                <form action="" method="post" class="flex flex-col gap-5">

                    <div>
                        <label for="email" class="block mb-2 font-medium">
                            Correo electrónico
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="correo@ejemplo.com"
                            class="w-full rounded-md border border-border bg-background-secondary px-4 py-3 focus:outline-none focus:ring-2 focus:ring-brand">
                    </div>

                    <div>
                        <label for="password" class="block mb-2 font-medium">
                            Contraseña
                        </label>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="********"
                            class="w-full rounded-md border border-border bg-background-secondary px-4 py-3 focus:outline-none focus:ring-2 focus:ring-brand">
                    </div>

                    <button
                        type="submit"
                        class="cursor-pointer py-2 rounded-md bg-brand text-text-secondary hover:bg-brand-hover transition-colors">
                        Iniciar sesión
                    </button>

                </form>

                <div class="mt-6 text-center">
                    <p class="text-text-muted">
                        ¿No tienes una cuenta?
                        <a href="?page=register" class="text-brand hover:text-brand-hover">
                            Regístrate
                        </a>
                    </p>
                </div>

            </section>

        </main>
        <!-- Footer -->
        <?php include_once __DIR__ . '/../includes/footer.php'; ?>

    </div>
</body>

</html>