<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Pe eS Maju Mundur</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url('/image/imgbg.jpg');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="container mx-auto mt-5 p-5 bg-white rounded-1g shadow-md">
        <h1 class="text-2x1 font-bold mb-5">Daftar Rental</h1>
        <form action="/pages/searchResults" method="get" class="flex items-center mb-3">
            <input type="text" name="search" class="form-input border border-gray-300 rounded p-2 mr-2 flex-grow" placeholder="Search rental">
            <button type="submit" class="btn bg-blue-900 text-white px-4 py-2 rounded hover:bg-blue-400">Search</button>
        </form>
        <a href="/pages/create" class="btn bg-green-500 text-white px-4 py-2 rounded mb-3 hover:bg-green-700">Add Rental</a>
        <table class="table-auto w-full border-collapse broder border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-300 px-4 py-2">Name</th>
                    <th class="border border-gray-300 px-4 py-2">Address</th>
                    <th class="border border-gray-300 px-4 py-2">Bundle</th>
                    <th class="border border-gray-300 px-4 py-2">Price</th>
                    <th class="border border-gray-300 px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rental as $rental): ?>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2"><?= esc($rental['name']) ?></td>
                        <td class="border border-gray-300 px-4 py-2"><?= esc($rental['address']) ?></td>
                        <td class="border border-gray-300 px-4 py-2"><?= esc($rental['bundle']) ?></td>
                        <td class="border border-gray-300 px-4 py-2"><?= esc($rental['price']) ?></td>
                        <td class="border border-gray-300 px-4 py-2">
                            <a href="/pages/edit/<?= $rental['id'] ?>" class="btn bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-700">Edit</a>
                            <a href="/pages/delete/<?= $rental['id'] ?>" class="btn bg-yellow-500 text-white px-4 py-2 rounded hover:bg-red-700">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>