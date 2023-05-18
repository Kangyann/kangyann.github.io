<?php
function generateRandomText($length)
{
    $randomText = '';
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

    $charactersLength = strlen($characters);
    for ($i = 0; $i < $length; $i++) {
        $randomText .= $characters[rand(0, $charactersLength - 1)];
    }

    return $randomText;
}

// Contoh penggunaan
$randomText = generateRandomText(10);
echo $randomText;
if (isset($_POST['image'])) {
    $base64Image = $_POST['image'];
    $imageData = base64_decode(str_replace('data:image/jpeg;base64,', '', $base64Image));
    // Menyimpan gambar dalam format JPEG
    $fileName = generateRandomText(5) . '.jpg';
    file_put_contents("image/$fileName", $imageData);

    echo "Gambar berhasil disimpan sebagai $fileName";
}
if (isset($_GET['res'])) {
    $params = $_GET['res'];
    $allow = $params + 1;

    echo "<span>OK</span>";
}
?>