<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta
            name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
        />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />

        @vite("resources/css/app.css")

        <script
            src="https://kit.fontawesome.com/89851fc4a2.js"
            crossorigin="anonymous"
        ></script>
        <script
            defer
            src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
        ></script>
        <script src="https://unpkg.com/embla-carousel/embla-carousel.umd.js"></script>
        <script src="https://unpkg.com/embla-carousel-autoplay/embla-carousel-autoplay.umd.js"></script>

        <title>Website Desa Tegal Manggung</title>
    </head>

    <body>
        <x-common.navbar />

        <main class="min-h-screen pb-32">
            <section
                class="min-[512px] container relative h-screen max-h-[680px] pt-16 md:pt-32"
            >
                <div
                    class="relative z-10 mt-4 flex max-w-screen-lg flex-col gap-y-2 text-zinc-50 lg:container xl:pl-48"
                >
                    <div>
                        <h2
                            class="scroll-m-20 text-pretty pb-2 text-3xl font-semibold tracking-tight first:mt-0"
                        >
                            SELAMAT DATANG DI DESA TEGAL MANGGUNG
                        </h2>
                        <p class="text-pretty text-xl text-muted">
                            Kawasan Desa Alpukat
                        </p>
                    </div>

                    <div class="flex gap-x-2">
                        <x-ui.button size="icon" variant="ghost" href="#">
                            <i
                                class="fa-brands fa-square-instagram h-8 w-8"
                            ></i>
                        </x-ui.button>
                        <x-ui.button size="icon" variant="ghost" href="#">
                            <i class="fa-brands fa-square-whatsapp h-8 w-8"></i>
                        </x-ui.button>
                    </div>
                </div>

                <div
                    class="container absolute left-0 right-0 top-80 z-10 max-w-screen-lg lg:top-[512px]"
                >
                    <div
                        class="grid grid-cols-2 justify-items-center gap-2 rounded-md bg-background sm:grid-cols-4"
                    >
                        <a
                            href="#"
                            class="flex h-full w-full cursor-pointer flex-col items-center justify-start gap-y-2 rounded-md px-2 py-4 text-center transition hover:bg-accent"
                        >
                            <div
                                class="flex aspect-square items-center justify-center rounded-full bg-blue-500 p-4"
                            >
                                <i
                                    class="fa-solid fa-book-open h-12 w-12 text-zinc-50"
                                ></i>
                            </div>
                            <span class="text-lg font-semibold">
                                Profil Desa
                            </span>
                        </a>
                        <a
                            href="#"
                            class="flex h-full w-full cursor-pointer flex-col items-center justify-start gap-y-2 rounded-md px-2 py-4 text-center transition hover:bg-accent"
                        >
                            <div
                                class="flex aspect-square items-center justify-center rounded-full bg-red-500 p-4"
                            >
                                <i
                                    class="fa-regular fa-file-lines h-12 w-12 text-zinc-50"
                                ></i>
                            </div>
                            <span class="text-lg font-semibold">
                                Pengajuan Surat
                            </span>
                        </a>

                        <a
                            href="#"
                            class="flex h-full w-full cursor-pointer flex-col items-center justify-start gap-y-2 rounded-md px-2 py-4 text-center transition hover:bg-accent"
                        >
                            <div
                                class="flex aspect-square items-center justify-center rounded-full bg-yellow-500 p-4"
                            >
                                <i
                                    class="fa-solid fa-chart-pie h-12 w-12 text-zinc-50"
                                ></i>
                            </div>
                            <span class="text-lg font-semibold">
                                Infografis Data
                            </span>
                        </a>

                        <a
                            href="#"
                            class="flex h-full w-full cursor-pointer flex-col items-center justify-start gap-y-2 rounded-md px-2 py-4 text-center transition hover:bg-accent"
                        >
                            <div
                                class="flex aspect-square items-center justify-center rounded-full bg-orange-500 p-4"
                            >
                                <i
                                    class="fa-solid fa-palette h-12 w-12 text-zinc-50"
                                ></i>
                            </div>
                            <span class="text-lg font-semibold">
                                Potensi Desa
                            </span>
                        </a>

                        <a
                            href="#"
                            class="flex h-full w-full cursor-pointer flex-col items-center justify-start gap-y-2 rounded-md px-2 py-4 text-center transition hover:bg-accent"
                        >
                            <div
                                class="flex aspect-square items-center justify-center rounded-full bg-green-500 p-4"
                            >
                                <i
                                    class="fa-solid fa-box-archive h-12 w-12 text-zinc-50"
                                ></i>
                            </div>
                            <span class="text-lg font-semibold">
                                Keuangan Desa
                            </span>
                        </a>

                        <a
                            href="#"
                            class="flex h-full w-full cursor-pointer flex-col items-center justify-start gap-y-2 rounded-md px-2 py-4 text-center transition hover:bg-accent"
                        >
                            <div
                                class="flex aspect-square items-center justify-center rounded-full bg-indigo-500 p-4"
                            >
                                <i
                                    class="fa-solid fa-bullhorn h-12 w-12 text-zinc-50"
                                ></i>
                            </div>
                            <span class="text-lg font-semibold">Pengaduan</span>
                        </a>

                        <a
                            href="#"
                            class="flex h-full w-full cursor-pointer flex-col items-center justify-start gap-y-2 rounded-md px-2 py-4 text-center transition hover:bg-accent"
                        >
                            <div
                                class="flex aspect-square items-center justify-center rounded-full bg-red-500 p-4"
                            >
                                <i
                                    class="fa-solid fa-scale-balanced h-12 w-12 text-zinc-50"
                                ></i>
                            </div>
                            <span class="text-lg font-semibold">
                                Produk Hukum Desa
                            </span>
                        </a>

                        <a
                            href="#"
                            class="flex h-full w-full cursor-pointer flex-col items-center justify-start gap-y-2 rounded-md px-2 py-4 text-center transition hover:bg-accent"
                        >
                            <div
                                class="flex aspect-square items-center justify-center rounded-full bg-zinc-500 p-4"
                            >
                                <i
                                    class="fa-solid fa-phone h-12 w-12 text-zinc-50"
                                ></i>
                            </div>
                            <span class="text-lg font-semibold">Kontak</span>
                        </a>
                    </div>
                </div>

                <div class="absolute left-0 top-0 h-full w-full">
                    <x-ui.carousel.root
                        id="hero-carousel"
                        class="before:bg-dark-transparent-dark-gradient h-full before:absolute before:bottom-0 before:left-0 before:right-0 before:top-0 before:z-[1] before:bg-opacity-50"
                    >
                        <x-ui.carousel.content
                            id="hero-carousel-content"
                            class="h-full"
                        >
                            @foreach ($heroImages as $heroImage)
                                <x-ui.carousel.item>
                                    <img
                                        id="{{ $heroImage["id"] }}"
                                        src="{{ $heroImage["url"] }}"
                                        alt="{{ $heroImage["title"] }}"
                                        class="h-full w-full object-cover"
                                    />
                                </x-ui.carousel.item>
                            @endforeach
                        </x-ui.carousel.content>
                    </x-ui.carousel.root>
                </div>
            </section>
        </main>

        <x-ui.carousel.script id="hero-carousel"></x-ui.carousel.script>
    </body>
</html>
