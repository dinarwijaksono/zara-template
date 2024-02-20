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

<body class="hind-regular">

    <nav class="bg-green-500">
        <h3 class="text-white"><b>Zara</b> template</h3>
    </nav>

    <section class="container flex">
        <div class="basis-2/12">
            <x-aside />
        </div>

        <main class="basis-10/12 p-2">

            <h1>Heading</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia distinctio at, blanditiis quae corrupti
                ex, ipsa temporibus, tempore culpa ea consequuntur veritatis ipsum incidunt vitae nobis assumenda
                dignissimos illo fuga dolores. Voluptatem sequi ullam ipsum!</p>

            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem ipsam magnam veniam illum ipsa delectus
                doloribus quia consequuntur officia dignissimos, incidunt voluptas cum excepturi voluptatem vitae sunt
                aliquid eius fugiat voluptates? Ad cumque est amet?</p>

            <section class="border border-slate-700 p-4 rounded-md bg-slate-50 mb-2">
                <h1>Ini adalah header h1</h1>
                <hr class="border border-t-0 mb-2 border-slate-600" />

                <h2>Ini adalah header h2</h2>
                <hr class="border border-t-0 mb-2 border-slate-600" />

                <h3>Ini adalah header h3</h3>
                <hr class="border border-t-0 mb-2 border-slate-600" />

                <h4>Ini adalah header h4</h4>
                <hr class="border border-t-0 mb-2 border-slate-600" />
            </section>

            <section class="border border-slate-700 p-4 rounded-md bg-slate-700 mb-2 text-slate-50">
                &lt;h1&gt;Ini adalah header h1 &lt;/h1&gt;

                <br>

                &lt;h2&gt;Ini adalah header h2&lt;/h2&gt;

                <br>

                &lt;h3&gt;Ini adalah header h3&lt;/h3&gt;

                <br>

                &lt;h4&gt;Ini adalah header h4&lt;/h4&gt;

            </section>

        </main>

    </section>

</body>

</html>
