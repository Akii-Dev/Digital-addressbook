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
            <div class="p-4 m-3  outline outline-1 rounded outline-slate-300 text-sm">
            <h1 class="text-xl font-semibold p-4">User information</h1>
            
                <div class="flex bg-gray-100 p-4">
                    <p class="w-48 text-gray-500 font-semibold">Name</p>
                    <p>{{ $user->name }}</p>
                </div>
                <div class="flex  p-4">
                    <p class="w-48 text-gray-500 font-semibold">Email</p>
                    <p>{{ $user->email }}</p>
                </div>
                <div class="flex p-4">
                    <p class="w-48 text-gray-500 font-semibold">Phone</p>
                    <p>{{ $user->profile->phone }}</p>
                </div>
                <div class="flex bg-gray-100 p-4">
                    <p class="w-48 text-gray-500 font-semibold">Address</p>
                    <p>{{ $user->profile->address }}</p>
                </div>
                <div class="flex p-4">
                    <p class="w-48 text-gray-500">Posts</p>
                    <div>
                        @foreach ($user->posts as $post)
                        <p>{{$post->title}}</p>
                    @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
