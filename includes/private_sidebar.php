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