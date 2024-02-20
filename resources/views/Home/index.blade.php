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

    <nav class="bg-green-500">
        <h3 class="text-white"><b>Zara</b> template</h3>
    </nav>

    <section class="container flex">

        <div class="basis-2/12">
            <x-aside />
        </div>

        <main class="basis-10/12 p-2">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia perferendis, magnam consequuntur placeat,
            ad autem laborum nihil totam molestias distinctio labore omnis possimus odio eos sunt? Nemo officia nihil
            nostrum, reprehenderit distinctio enim, iste id nam aliquid qui aliquam voluptas ipsum ullam eligendi vero
            consectetur illo quibusdam maiores aspernatur? Impedit commodi eaque enim amet at nemo iste architecto qui
            repudiandae nesciunt quibusdam maiores consectetur pariatur harum in nulla tempore labore eligendi similique
            voluptatem deleniti, iure quidem dolore natus? Veritatis praesentium in delectus. Dignissimos et maiores
            quia! Assumenda perferendis officia doloribus rerum facere, voluptas itaque debitis dolore vitae, atque
            minus modi.
        </main>

    </section>

</body>

</html>
