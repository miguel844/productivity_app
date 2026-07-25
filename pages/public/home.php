<!-- HEAD -->
<?php include_once __DIR__ .'/../../includes/head.php';?>

<body class="text-text bg-background-tertiary overflow-y-scroll mx-5">
    <div class="container mx-auto w-full min-h-screen flex flex-col items-center pt-1">
        <!-- Cabecera -->
        <?php include_once __DIR__ . '/../../includes/public_header.php'; ?>
        <main class="bg-background w-full flex-1 flex flex-col items-start rounded-b-2xl p-5">
            
            
            <section class="md:px-30 px-10 max-w-7xl">
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, voluptate omnis, eaque reiciendis culpa assumenda architecto officia quae fugiat soluta corrupti beatae. Corporis, assumenda. Natus quis dolorum a sint perferendis?</p>
                <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis excepturi atque aliquid. Nobis aspernatur quibusdam illum, omnis facere sint assumenda? Delectus temporibus soluta ipsam natus. Veritatis natus dignissimos libero ducimus.</p>
            </section>
            
            
            <section class="md:w-full w-3xs flex flex-col items-center gap-5 md:flex-row md:justify-evenly md:gap-0 mt-5 mx-auto">
                <a href="?page=login">
                    <div class="cursor-pointer w-32.5 py-2 rounded-md text-text-secondary bg-brand hover:bg-brand-hover text-center">Iniciar sesion</div>
                </a>
                <a href="?page=register">
                    <div class="cursor-pointer w-32.5 py-2 rounded-md text-text-secondary bg-brand hover:bg-brand-hover text-center">Registrate</div>
                </a>
            </section>
            
            
        </main>
        <!-- Footer -->
        <?php include_once __DIR__ .'/../../includes/footer.php';?>

    </div>
</body>

</html>