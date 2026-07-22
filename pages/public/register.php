<?php

$errors = $_SESSION['errors'] ?? [];
unset($_SESSION['errors']);

$old = $_SESSION['old'] ?? [];
unset($_SESSION['old']);

?>
<!-- HEAD -->
<?php include_once __DIR__ . '/../../includes/head.php'; ?>

<body class="bg-background text-text">
    <div class="container mx-auto w-full h-screen flex flex-col items-center border-x border-border">
        <!-- Cabecera -->
        <?php include_once __DIR__ . '/../../includes/public_header.php'; ?>
        <main class="flex-1 flex items-start justify-center px-6 mt-8">

            <section class="w-full max-w-md bg-surface border border-border rounded-xl p-8 mt-5">

                <h1 class="text-3xl font-bold font-title text-center mb-2">
                    Crear cuenta
                </h1>

                <p class="text-text-muted text-center mb-4">
                    Regístrate para comenzar a utilizar MACM HUB.
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

                <form action="php/auth/register.php" method="POST" class="flex flex-col gap-5">

                    <div>
                        <label for="name" class="block mb-2 font-medium">
                            Nombre
                        </label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            required
                            maxlength="50"
                            placeholder="Tu nombre"
                            value="<?= htmlspecialchars($old['name'] ?? '') ?>"
                            class="w-full rounded-md border border-border bg-background-secondary px-4 py-3 focus:outline-none focus:ring-2 focus:ring-brand">
                    </div>

                    <div>
                        <label for="email" class="block mb-2 font-medium">
                            Correo electrónico
                        </label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            required
                            maxlength="100"
                            placeholder="correo@ejemplo.com"
                            value="<?= htmlspecialchars($old['email'] ?? '') ?>"
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
                            required
                            minlength="8"
                            placeholder="********"
                            class="w-full rounded-md border border-border bg-background-secondary px-4 py-3 focus:outline-none focus:ring-2 focus:ring-brand">
                    </div>

                    <div>
                        <label for="confirm_password" class="block mb-2 font-medium">
                            Repetir contraseña
                        </label>
                        <input
                            type="password"
                            id="confirm_password"
                            name="confirm_password"
                            required
                            minlength="8"
                            placeholder="********"
                            class="w-full rounded-md border border-border bg-background-secondary px-4 py-3 focus:outline-none focus:ring-2 focus:ring-brand">
                    </div>

                    <button
                        type="submit"
                        class="cursor-pointer rounded-md bg-brand py-3 font-semibold text-text-secondary hover:bg-brand-hover transition-colors">
                        Registrarse
                    </button>

                </form>
                <div class="mt-6 text-center">
                    <p class="text-text-muted">
                        ¿Ya tienes una cuenta?
                        <a href="?page=login" class="text-brand hover:text-brand-hover">
                            Inicia sesión
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