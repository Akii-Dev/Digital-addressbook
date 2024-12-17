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
        <div class="mx-auto flex-row w-1/2 p-2 bg-white shadow-xl rounded font-medium">
            <h1 class="text-xl font-semibold p-4 ">User information</h1>
            <div class="p-4 m-3  outline outline-1 rounded outline-slate-300 text-sm shadow-md">


                <div class="flex bg-gray-100 p-4">
                    <p class="w-56 text-gray-500 font-semibold">Name</p>
                    <p>{{ $user->name }}</p>
                </div>
                <div class="flex  p-4">
                    <p class="w-56 text-gray-500 font-semibold">Email</p>
                    <p>{{ $user->email }}</p>
                </div>
                <div class="flex p-4">
                    <p class="w-56 text-gray-500 font-semibold">Phone</p>
                    <p>{{ $user->profile->phone }}</p>
                </div>
                <div class="flex bg-gray-100 p-4">
                    <p class="w-56 text-gray-500 font-semibold">Address</p>
                    <p>{{ $user->profile->address }}</p>
                </div>
                <div class="flex p-4">
                    <p class="w-56 text-gray-500">Posts</p>
                    <div class="rounded">
                        @foreach ($user->posts as $post)
                            <div class="flex p-1">
                                <img class="h-full w-6 p-auto mr-2" src="/images/file.svg" alt="">
                                <div class="flex justify-between items-center w-full">
                                    <p class="flex-1">{{ $post->title }}</p>
                                    <a class="text-blue-600" href='/posts/{{ $post->id }}'>View</a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <h2 class="text-xl font-semibold p-4 ">Comments</h1>
                @foreach ($user->comments as $comment)
                    <div class="p-4 m-3  outline outline-1 rounded outline-slate-200 text-sm">
                        {{ $comment->body }}
                    </div>
                @endforeach

        </div>
    </div>
</body>

</html>
