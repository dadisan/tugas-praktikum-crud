<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Rental</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
<div class="container mt-5">
    <h1>Edit Rental</h1>
    <form action="/pages/update/<?= $rental['id'] ?>" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="<?= esc($rental['name']) ?>" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" class="form-control" value="<?= esc($rental['address']) ?>" required>
        </div>
        <div class="form-group">
            <label for="bundle">Bundle</label>
            <input type="text" name="bundle" class="form-control" value="<?= esc($rental['bundle']) ?>" required>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="bundle" class="form-control" value="<?= esc($rental['price']) ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="/pages" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
