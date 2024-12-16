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
    <div class="flex justify-center items-center h-screen bg-white">
        <div class="mx-auto flex-row  p-2 bg-white shadow-xl rounded font-medium">
            <h1 class="text-3xl m-3">Users</h1>
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left">
                    <thead class="text-xs text-gray-700 bg-gray-50 ">
                        <tr>
                            <th scope="col" class="px-6 py-3">NAME</th>
                            <th scope="col" class="px-6 py-3">PHONE</th>
                            <th scope="col" class="px-6 py-3">ADDRESS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr class="bg-white border-b ">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    <div>{{ $user->name }}</div>
                                    <div class="text-xs text-gray-500">{{ $user->email }}</div>
                                </th>
                                <td class="px-6 py-4">
                                    {{ $user->profile->phone }}
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex justify-between">
                                        {{ $user->profile->address }}
                                        <a href='/users/{{$user->id}}'>View</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
