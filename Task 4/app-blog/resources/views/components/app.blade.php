<html>
    <head>
        @vite('resources/css/app.css')
        <title> {{$title?? 'Blog System'}}</title>
    </head>
        <body>
            <header class="bg-white">
                <div class="mx-auto flex h-16 max-w-screen-xl items-center gap-8 px-4 sm:px-6 lg:px-8">
                    <a class="block text-teal-600" href="#">
                    <span class="sr-only">Home</span>

                    </a>

                    <div class="flex flex-1 items-center justify-end md:justify-between">
                    <nav aria-label="Global" class="hidden md:block">
                        <ul class="flex items-center gap-6 text-sm">
                        <li>
                            <a class="text-gray-500 transition hover:text-gray-500/75" href="/posts"> List All Posts </a>
                        </li>

                        <li>
                            <a class="text-gray-500 transition hover:text-gray-500/75" href="/posts/create"> Add New Post </a>
                        </li>



                        </ul>
                    </nav>

                    <div class="flex items-center gap-4">
                        <div class="sm:flex sm:gap-4">
                        <a
                            class="block rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-teal-700"
                            href="#"
                        >
                            Login
                        </a>

                        <a
                            class="hidden rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-teal-600 transition hover:text-teal-600/75 sm:block"
                            href="#"
                        >
                            Register
                        </a>
                        </div>
                    </div>
                    </div>
                </div>
            </header>
            <div>
                {{$slot}}
            </div>
        </body>

</html>
