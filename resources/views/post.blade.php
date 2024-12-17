<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
    <script src="../js/script.js" defer></script>
</head>

<body>
    <div class="flex justify-center  bg-white">
        <div class="mx-auto flex-row w-1/2 bg-white shadow-xl rounded font-medium p-8">
            <h1 class="text-2xl font-bold mb-8">{{ $post->title }}</h1>
            <div class="flex">
                @foreach ($post->tags as $tag)
                    <p class="m-1 text-white rounded-full px-2 pb-1" style="background-color: {{ $tag->color }}">
                        {{ $tag->name }}</p>
                @endforeach
            </div>
            <div class="flex">
                <div class="rounded-full w-10 h-10 bg-gray-200 mr-2 my-auto"></div>
                <div class="flex-col">
                    <p class="mb-4">{{ $post->user->name }}</p>
                    <p>{{ $post->user->email }}</p>
                </div>
            </div>
            <div class="mt-8">
                {!! nl2br(e($post->body)) !!}
            </div>
            <h2 class="text-xl font-semibold p-4 ">Comments</h1>
                @foreach ($post->comments as $comment)
                    <div class="p-4 m-3  outline outline-1 rounded outline-slate-200 text-sm">
                        {{ $comment->body }}
                    </div>
                @endforeach
        </div>

    </div>
</body>

</html>
