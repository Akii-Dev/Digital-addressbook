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
        <div class="mx-auto flex-row w-96 p-2 bg-white shadow-xl rounded font-medium">
            <h1 class="text-3xl m-3">User information</h1>
            <div class="p-4 bg-red-500">
                <div class="flex">
                    <p>Name</p>
                    <p>{{ $user->name }}</p>
                </div>
                <div class="flex">
                    <p>Email</p>
                    <p>{{ $user->email }}</p>
                </div>
                <div class="flex">
                    <p>Phone</p>
                    <p>{{ $user->profile->phone }}</p>
                </div>
                <div class="flex">
                    <p>Address</p>
                    <p>{{ $user->profile->address }}</p>
                </div>
                <div class="flex">
                    <p>Posts</p>
                    
                </div>
            </div>
        </div>
    </div>
</body>

</html>
