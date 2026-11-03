<?php
require_once 'db.php';

$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $price = trim($_POST['price']);
    $description = trim($_POST['description']);

    if (!empty($name) && !empty($price)) {
        $stmt = $pdo->prepare("INSERT INTO products (name, price, description) VALUES (?, ?, ?)");
        if ($stmt->execute([$name, $price, $description])) {
            header("Location: index.php");
            exit;
        } else {
            $message = "خطا در ثبت محصول.";
        }
    } else {
        $message = "لطفاً فیلدهای ضروری را پر کنید.";
    }
}
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>افزودن محصول جدید</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>➕ افزودن محصول جدید</h1>
        
        <?php if (!empty($message)): ?>
            <p class="error"><?= $message ?></p>
        <?php endif; ?>

        <form action="add.php" method="POST">
            <div class="form-group">
                <label for="name">نام محصول:</label>
                <input type="text" id="name" name="name" required>
            </div>
            
            <div class="form-group">
                <label for="price">قیمت (تومان):</label>
                <input type="number" id="price" name="price" required>
            </div>
            
            <div class="form-group">
                <label for="description">توضیحات:</label>
                <textarea id="description" name="description" rows="4"></textarea>
            </div>
            
            <button type="submit" class="btn">ذخیره محصول</button>
            <a href="index.php" class="btn secondary">بازگشت</a>
        </form>
    </div>
</body>
</html>
