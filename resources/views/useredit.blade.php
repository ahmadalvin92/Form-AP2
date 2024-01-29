<!DOCTYPE html>
<head>
    @vite('resources/css/app.css')
</head>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SM-AP2</title>
<body style="background: url('{{ asset('image/form-background.jpg') }}') no-repeat center center fixed; background-size: cover;">

<div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
    <main class="w-full flex-grow p-6">
        <h1 class="w-full text-3xl text-white pb-6">Users</h1>

        <div class="w-full mt-12">
            <p class="text-xl pb-3 flex items-center text-white">
                <i class="fas fa-list mr-3"></i> Users Records
            </p>
            <div class="bg-white overflow-auto">
                <table class="text-left w-full border-collapse">
                    <thead>
                        <tr>
                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">ID</th>
                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Name</th>
                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Role Name</th>
                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Manage</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Dummy Data -->
                        <tr>
                            <td class="py-4 px-6 border-b border-grey-light">1</td>
                            <td class="py-4 px-6 border-b border-grey-light">Alvin</td>
                            <td class="py-4 px-6 border-b border-grey-light">Super Admin</td>
                            <td class="py-4 px-6 border-b border-grey-light">Balap Liar</td>
                        </tr>
                        <tr>
                            <td class="py-4 px-6 border-b border-grey-light">2</td>
                            <td class="py-4 px-6 border-b border-grey-light">Devin</td>
                            <td class="py-4 px-6 border-b border-grey-light">Admin</td>
                            <td class="py-4 px-6 border-b border-grey-light">Tukang Sepatu</td>
                        </tr>
                        <tr>
                            <td class="py-4 px-6 border-b border-grey-light">3</td>
                            <td class="py-4 px-6 border-b border-grey-light">Fikri</td>
                            <td class="py-4 px-6 border-b border-grey-light">User</td>
                            <td class="py-4 px-6 border-b border-grey-light">Computer Face</td>
                        </tr>
                        <!-- End Dummy Data -->
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>

</body>
</html>