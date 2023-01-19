
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Produits</title>
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <link rel="stylesheet" href="style.css">
        <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <style>
    * {
        color: rgb(38, 253, 38);
        background-color: black;
        text-shadow: 0.5px 0.5px 1px rgb(38, 253, 38), 0 0 0.5em rgb(38, 253, 38), 0 0 0.1em rgb(38, 253, 38);
        padding: 10px;
        border-radius: 5px;
    }
    </style>
    <div id="app">

        <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
            <div class="container flex flex-wrap items-center justify-between mx-auto">
                <a href="/" class="flex items-center">
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">VueJS</span>
                </a>

                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="/" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Liste</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <button @click="fetchData()">Recharger</button>
        <!-- La liste des posts -->
        <div class="flex flex-wrap justify-center">
            <a v-for="item in items" href="#" class="m-6 block max-w-md p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white" :key="item.id">{{item.title}}</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">{{item.body}}</p>
            </a>
        </div>
    </div>

    <body>

        <script>
            const { createApp } = Vue

            createApp({
                mounted() {
                    console.log('Application montée')
                    this.fetchData()
                },
                data() {
                    return {items: []}
                },
                methods: {
                    fetchData() {
                        fetch('/api/produits')
                            .then(response => response.json())
                            .then(data => this.items = data)
                    }
                }
            }).mount('#app')
        </script>
    </body>
</html>
