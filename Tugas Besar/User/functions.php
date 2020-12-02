<?php

//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "web");

function registrasi($data)
{
    global $conn;

    $nama = strtolower(stripslashes($data["nama"]));
    $username = strtolower(stripslashes($data["username"]));
    $tgl = strtolower(stripslashes($data["tgl"]));
    $kelamin = strtolower(stripslashes($data["kelamin"]));
    $email = strtolower(stripslashes($data["email"]));
    $nomor = strtolower(stripslashes($data["nomor"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //cek usename sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username '");
    if (mysqli_fetch_assoc($result)) {

        echo "<script>
        alert('username sudah terdaftar!')
        </script>";
        return false;
    }

    //cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
        alert('konfirmasi password tidak sesuai');
        </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$nama', '$username', '$tgl', '$kelamin', '$email', '$nomor', '$password')");

    return mysqli_affected_rows($conn);
}
