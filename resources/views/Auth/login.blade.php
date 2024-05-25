<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>

    {{-- google font hind --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Guntur:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    {{-- css tailwind --}}
    <link rel="stylesheet" href="/asset/tailwind/style.css">
</head>

<body>

    <div class="flex justify-center">
        <section class="basis-4/12 mt-24">
            <h1 class="text-center"><b>Zara</b> template</h1>

            <section class="bg-white p-4 shadow-md shadow-slate-300 mb-4">

                <div class="border border-red-500 p-2 mb-2 bg-red-100 text-danger">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, nostrum.</p>
                </div>

                <div class="mb-4">
                    <label for="username">Username</label>
                    <input type="text" id="username"
                        class="block border border-slate-300 w-full px-2 py-1 outline-none focus:border-blue-500"
                        placeholder="username">
                    <p class="text-red-500 italic">Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
                </div>

                <div class="mb-4">
                    <label for="password">Password</label>
                    <input type="password" id="password"
                        class="block border border-slate-300 w-full px-2 py-1 outline-none focus:border-blue-500"
                        placeholder="Password">
                </div>

                <div class="flex justify-end">
                    <div class="basis-4/12">
                        <button type="button"
                            class="px-2 py-1 bg-blue-500 hover:bg-blue-400 active:bg-blue-300 text-white w-full">Buat
                            akun</button>
                    </div>
                </div>

            </section>

            <a href="/Auth/register" class="block text-center hover:underline hover:text-blue-400">Belum punya akun.</a>

        </section>
    </div>

</body>

</html>
