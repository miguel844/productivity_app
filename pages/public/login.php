<?php
$email = $_SESSION['loginEmail'] ?? '';
unset($_SESSION['loginEmail']);

$errors = $_SESSION['errors'] ?? [];
unset($_SESSION['errors']);
?>

<!-- HEAD -->
<?php include_once __DIR__ . '/../../includes/head.php'; ?>

<body class="text-text bg-background-tertiary overflow-y-scroll mx-5">
    <div class="container mx-auto w-full min-h-screen flex flex-col items-center pt-1">
        <!-- Cabecera -->
        <?php include_once __DIR__ . '/../../includes/public_header.php'; ?>
        <main class="bg-background w-full flex-1 flex items-start justify-center rounded-b-2xl p-5">

            <section class="max-w-md bg-background-secondary border border-border rounded-xl p-8">
                <h1 class="text-3xl font-bold font-title text-center mb-2">
                    Iniciar sesión
                </h1>

                <p class="text-text-muted text-center mb-4">
                    Accede a tu cuenta de MACM HUB.
                </p>

                <?php if (!empty($errors)): ?>
                    <div class="mb-4 rounded-md border border-danger bg-danger/10 p-4">
                        <ul class="text-sm text-danger">
                            <?php foreach ($errors as $error): ?>
                                <li><?= htmlspecialchars($error) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <form action="php/auth/login.php" method="post" class=" flex flex-col gap-5">

                    <div>
                        <label for="email" class="block mb-2 font-medium">
                            Correo electrónico
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="ejemplo@ejemplo.com"
                            value="<?= /*htmlspecialchars($email) */"ejemplo@ejemplo.com" ?>"
                            class="w-full rounded-md border border-border bg-surface-hover px-4 py-3 focus:outline-none focus:ring-2 focus:ring-brand">
                    </div>

                    <div>
                        <label for="password" class="block mb-2 font-medium">
                            Contraseña
                        </label>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Ab123456789"
                            value="Ab123456789"
                            class="w-full rounded-md border border-border  bg-surface-hover px-4 py-3 focus:outline-none focus:ring-2 focus:ring-brand">
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
                        <a href="?page=register" class="text-brand hover:text-brand-hover font-bold">
                            Regístrate
                        </a>
                    </p>
                </div>

            </section>

        </main>
        <!-- Footer -->
        <?php include_once __DIR__ . '/../../includes/footer.php'; ?>

    </div>
</body>

</html>