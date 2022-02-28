<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Percobaan PHP CRUD</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-200 flex justify-center pt-5">
    <div class="bg-white w-1/2 p-3">
        <h1 class="text-center text-xl font-bold">Membuat Pegawai</h1>

        <form action="/pegawai" method="post" class="flex flex-col w-full gap-2">
            @csrf
            <label for="name">
                Nama:
                <input type="text" name="name" id="" class="w-full border p-1">
            </label>
            <label for="phone">
                Nomor Telepon:
                <input type="text" name="phone" id="" class="w-full border p-1">
            </label>
            <label for="address">
                Alamat:
            </label>
            <textarea value="" type="text" name="address" id="" class="w-full border"></textarea>
            <button type="submit" class="bg-blue-200 rounded-md p-2 shadow-md">Submit</button>
        </form>
    </div>
</body>

</html>
