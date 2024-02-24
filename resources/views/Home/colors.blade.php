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

            <h1>Backgroud color</h1>

            <section class="border border-slate-700 p-4 rounded-md bg-white mb-2">

                <div class="m-2 p-2 bg-primary text-white">
                    .bg-primary
                </div>

                <div class="m-2 p-2 bg-secondary text-white">
                    .bg-secondary
                </div>

                <div class="m-2 p-2 bg-success text-white">
                    .bg-success
                </div>

                <div class="m-2 p-2 bg-danger text-white">
                    .bg-danger
                </div>

                <div class="m-2 p-2 bg-warning text-white">
                    .bg-warning
                </div>

            </section>

            <section class="border border-slate-700 p-4 rounded-md bg-secondary mb-2 text-slate-50">

                &lt;div class="m-2 p-2 bg-primary text-white" &gt; .bg-primary &lt;/div&gt;
                <br class="mb-3">

                &lt;div class="m-2 p-2 bg-secondary text-white" &gt; .bg-secondary &lt;/div&gt;
                <br class="mb-3">

                &lt;div class="m-2 p-2 bg-success text-white" &gt; .bg-success &lt;/div&gt;
                <br class="mb-3">

                &lt;div class="m-2 p-2 bg-danger text-white" &gt; .bg-danger &lt;/div&gt;
                <br class="mb-3">

                &lt;div class="m-2 p-2 bg-warning text-white" &gt; .bg-warning &lt;/div&gt;
                <br class="mb-3">

            </section>


            <h1 class="mt-20">Backgroud color dark & light</h1>

            <section class="border border-slate-700 p-4 rounded-md bg-white mb-2">

                <div class="m-2 p-2 bg-primary-dark text-white">
                    .bg-primary-dark
                </div>

                <div class="m-2 p-2 bg-primary text-white">
                    .bg-primary
                </div>

                <div class="m-2 p-2 bg-primary-light text-white">
                    .bg-primary-light
                </div>

            </section>

            <section class="border border-slate-700 p-4 rounded-md bg-secondary mb-2 text-slate-50">
                &lt;div class="m-2 p-2 bg-primary-dark text-white" &gt; .bg-primary-dark &lt;/div&gt;
                <br class="mb-3">

                &lt;div class="m-2 p-2 bg-primary text-white" &gt; .bg-primary &lt;/div&gt;
                <br class="mb-3">

                &lt;div class="m-2 p-2 bg-primary-light text-white" &gt; .bg-primary-light &lt;/div&gt;
                <br class="mb-3">
            </section>


            <h1 class="mt-20">Text color</h1>

            <section class="border border-slate-700 p-4 rounded-md bg-white mb-2">

                <p class="text-black">Lorem ipsum dolor sit amet consectetur adipisicing.</p>

                <p class="text-white bg-black">Lorem ipsum dolor sit amet consectetur adipisicing.</p>

                <p class="text-primary">Lorem ipsum dolor sit amet consectetur adipisicing.</p>

                <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing.</p>

                <p class="text-success">Lorem ipsum dolor sit amet consectetur adipisicing.</p>

                <p class="text-danger">Lorem ipsum dolor sit amet consectetur adipisicing.</p>

                <p class="text-warning">Lorem ipsum dolor sit amet consectetur adipisicing.</p>

            </section>

            <section class="border border-slate-700 p-4 rounded-md bg-secondary mb-2 text-slate-50">

                &lt;p class="text-black" &gt; Lorem ipsum dolor sit amet, consectetur adipisicing. &lt;/p&gt;
                <br class="mb-3">

                &lt;p class="text-white bg-black" &gt; Lorem ipsum dolor sit amet, consectetur adipisicing. &lt;/p&gt;
                <br class="mb-3">

                &lt;p class="text-primary" &gt; Lorem ipsum dolor sit amet, consectetur adipisicing. &lt;/p&gt;
                <br class="mb-3">

                &lt;p class="text-secondary" &gt; Lorem ipsum dolor sit amet, consectetur adipisicing. &lt;/p&gt;
                <br class="mb-3">

                &lt;p class="text-success" &gt; Lorem ipsum dolor sit amet, consectetur adipisicing. &lt;/p&gt;
                <br class="mb-3">

                &lt;p class="text-danger" &gt; Lorem ipsum dolor sit amet, consectetur adipisicing. &lt;/p&gt;
                <br class="mb-3">

                &lt;p class="text-warning" &gt; Lorem ipsum dolor sit amet, consectetur adipisicing. &lt;/p&gt;
                <br class="mb-3">

            </section>


            <h1 class="mt-20">Border color</h1>

            <section class="border  border-slate-700 p-4 rounded-md bg-white mb-2">

                <div class="m-2 p-2 bg-white border border-primary-dark">
                    border border-primary-dark
                </div>

                <div class="m-2 p-2 bg-white border border-primary bg-secondary">
                    border border-primary
                </div>

                <div class="m-2 p-2 bg-white border border-primary-light">
                    border border-primary-light
                </div>

            </section>

        </main>

    </section>

</body>

</html>
