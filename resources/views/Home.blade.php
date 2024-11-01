<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OnlineShopAmir</title>
    <link rel="stylesheet" href={{ asset('css/vertical-layout-light/style.css') }}>
</head>

<body>
    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
        @if (Route::has('login'))
            <nav class="-mx-3 flex flex-1 justify-end">
                @auth
                    <a
                        href="{{ route('admin') }}"
                        style="font-family: IranSans !important;"
                        class="button-admin rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">پنل مدیریت
                    </a>
                @else
                    <a
                        href="{{ route('login') }}"
                        style="font-family: IranSans !important;"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                        ورود
                    </a>

                    @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            style="font-family: IranSans !important;"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            ثبت نام
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>
</body>

</html>
