<?php
$podcasts = require 'provider.php';

if (
    empty($_GET['id']) ||
    ! ($podcast = current(
        array_filter(
            $podcasts,
            fn (array $podcast) => $podcast['id'] === (int) $_GET['id']
        )
    ))
) {
    header('Location: 404.php');
    die;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podcasts</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://rsms.me/">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>
<body class="antialiased">
    <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
        <header class="py-10">
            <h1 class="text-2xl font-semibold text-slate-950">
                <a href="/">
                    Podcasts
                </a>
            </h1>
        </header>
        <div class="divide-y divide-slate-100">
            <article class="flex flex-col space-y-10 py-10 sm:py-12">
                <div class="self-start p-2 bg-slate-800 rounded-md text-sm font-semibold text-slate-50 leading-none">Catégorie</div>
                <div class="sm:flex sm:justify-between sm:items-center">
                    <h2 class="text-2xl font-semibold text-slate-950"><?= $podcast['name'] ?></h2>
                    <time class="block mt-2 sm:mt-0 sm:ml-10 text-slate-500" datetime="<?= $podcast['created_at'] ?>"><?= $podcast['created_at'] ?></time>
                </div>
                <audio class="max-w-sm" src="podcast-1.mp3" controls></audio>
                <p class="leading-loose text-slate-600"><?= $podcast['body'] ?></p>
            </article>
            <div class="py-10 space-y-12">
                <div class="flex items-center gap-x-6">
                    <img class="h-14 w-14 rounded-full" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="John Doe">
                    <div>
                        <div class="font-semibold text-slate-900">John Doe</div>
                        <div class="mt-1 text-slate-500">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero nulla molestiae doloribus delectus, sunt aut earum optio explicabo consequatur aperiam cum magni porro distinctio eum amet vitae.</div>
                    </div>
                </div>
                <div class="flex items-center gap-x-6">
                    <img class="h-14 w-14 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    <div class="text-base">
                        <div class="font-semibold text-gray-900">John Doe</div>
                        <div class="mt-1 text-gray-500">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero nulla molestiae doloribus delectus, sunt aut earum optio explicabo consequatur aperiam cum magni porro distinctio eum amet vitae.</div>
                    </div>
                </div>
                <div class="flex items-center gap-x-6">
                    <img class="h-14 w-14 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    <div class="text-base">
                        <div class="font-semibold text-gray-900">John Doe</div>
                        <div class="mt-1 text-gray-500">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero nulla molestiae doloribus delectus, sunt aut earum optio explicabo consequatur aperiam cum magni porro distinctio eum amet vitae.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>