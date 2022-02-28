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
        <h1 class="text-center text-xl font-bold">Pencatatan Pegawai</h1>
        <div class="flex flex-col justify-center items-center mt-2 gap-2">
            <input type="text" class="w-1/2 h-[40px] shadow-md bg-slate-200 p-1 rounded-md" name="" id="" placeholder="Masukkan Nama Orang yang Dicari">
            <button class="w-2/5 bg-blue-200 rounded-md shadow-xl">Cari</button>
            <a href="/create" class="w-2/5 bg-red-200 rounded-md shadow-xl text-center">Buat Pegawai</a>
        </div>
        <br >
        <div class="mt-3">
            <h2 class="text-center">Pegawai yang Ada</h2>
            <table class="w-full table-auto border-collapse border border-slate-600">
                <tr>
                    <th class="border border-slate-600 bg-blue-200">Nama</th>
                    <th class="border border-slate-600 bg-blue-200" > Nomor Telepon</th>
                    <th class="border border-slate-600 bg-blue-200">Alamat</th>
                    <th class="border border-slate-600 bg-blue-200">Aksi</th>
                </tr>
                @foreach ($data as $employee)
                <tr>
                    <td class="border border-slate-600" >{{ $employee->name }}</td>
                    <td class="border border-slate-600">{{ $employee->phone }}</td>
                    <td class="border border-slate-600">{{ $employee->address }}</td>
                    <td class="border border-slate-600">
                        <a class="text-blue-500 underline" href={{ url('/'. $employee->id) }} >Ubah</a>
                        <a class="text-red-500 underline" href={{ url('/pegawai/'. $employee->id) }} >Hapus</a>
                    </td>

                </tr>
                @endforeach
            </table>

        </div>
    </div>
</body>

</html>
