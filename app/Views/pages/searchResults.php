<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Result</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url('/image/imgbg.jpg');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body class="min-h-screen flex flex-col items-center justify-center bg-opacity-80 bg-grey-900 text-white">
    <div class="container mx-auto p-5 bg-white bg-opacity-90 rounded-1g shadow-md text-black">
        <h1 class="text-3x1 font-bold mb-5">Search Results</h1>
        <?php if(!empty($rental) && is_array($rental)) : ?>
            <ul class="list-disc p1-5">
                <?php foreach ($rental as $rental) : ?>
                    <li class="mb-4">
                        <h2 class="text-2x1 font-semibold"><?= esc($rental['name'])?></h2>
                        <p>Name: <?= isset($rental['name']) ? esc($rental['name']) : 'Ga ada namanya bos'?></p>
                        <p>Price: <?= esc($rental['price'])?></p>
                    </li>
                <?php endforeach; ?>
                <?php dd($rental);?>
            </ul>
        <?php else : ?>
            <p>Ga nemu data e bos</p>
        <?php endif; ?>
    </div>
</body>
</html>
