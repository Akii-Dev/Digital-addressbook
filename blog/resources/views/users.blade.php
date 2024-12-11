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
    <div class="flex justify-center items-center h-screen">
        <div class="mx-auto flex-row ">
            <h1 class="text-3xl">Users</h1>
            <div class="mx-auto flex-row p-2">
                <div class="flex">
                    <div class="w-1/3">
                        <p class="">lorem20</p>
                    </div>
                    <div class="w-1/3">
                        <p class="mx-auto">phone</p>
                    </div>
                    <div class="w-1/3">
                        <p class="mx-auto">address</p>
                    </div>
                </div>
                @foreach ($users as $user)
                    <div class="flex">
                        <p class="1/3">
                            {{ $user->name }}
                        </p>
                        <p class="1/3">
                            {{ $user->profile->phone }}
                        </p>
                        <p class="1/3">
                            {{ $user->profile->address }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>
