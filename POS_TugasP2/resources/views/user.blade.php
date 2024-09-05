<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
</head>
<body>
    <h1>Profil Pengguna</h1>
    <ul>
        <li><strong>ID:</strong> {{ $user['id'] }}</li>
        <li><strong>Nama:</strong> {{ $user['name'] }}</li>
        <li><strong>Email:</strong> {{ $user['email'] }}</li>
        <li><strong>Umur:</strong> {{ $user['age'] }} tahun</li>
    </ul>
</body>
</html>