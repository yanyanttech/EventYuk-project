<?php
// koneksi db

$conn = mysqli_connect("localhost","root","","projectevent");
if($conn === false){ 
    die("ERROR: Could not connect.".mysqli_connect_error());
}

// sign up
function signup($data){
    global $conn;
    
    $name = ($data["Name"]);
    $username = ($data["Username"]);
    $email = ($data["Email"]);
    $password = ($data["Password"]);

    // cek name ada atau belum
    $result = mysqli_query($conn, "SELECT Name FROM user WHERE Name = '$name' ");
    if(mysqli_fetch_assoc($result)){
        echo "<script>
                alert('name sudah dipakai')
              </script>";
        return false;
    }

    // cek username ada atau belum
    $result = mysqli_query($conn, "SELECT Username FROM user WHERE Username = '$username' ");
    if(mysqli_fetch_assoc($result)){
        echo "<script>
                alert('username sudah dipakai')
              </script>";
        return false;
    }

    // masukan data signup ke database
    mysqli_query($conn, "INSERT INTO user VALUE('', '$name','$username','$email','$password')");

    return mysqli_affected_rows($conn);

}

// upload event
function upevent($data){
    global $conn;
    $Penyelenggara = htmlspecialchars($data["penyelenggara"]);
    $Nama_Event = htmlspecialchars($data["event"]);
    $Tanggal_Event = $data["tanggal"];
    $Tempat = htmlspecialchars($data["tempat"]);
    $Kontak = htmlspecialchars($data["kontak"]);

    // upload gambar
    $Gambar = upload();
    if(!$Gambar){
        return false;
    }

// masukin data ke database
    mysqli_query($conn, "INSERT INTO events VALUE('','$Penyelenggara','$Nama_Event','$Tanggal_Event','$Tempat','$Gambar','$Kontak')");

    return mysqli_affected_rows($conn);
}
// upload gambar
function upload(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if ($error === 4){
        echo "<script>
                alert('pilih gambar');
            </script>";
        return false;
    }

    //cek gambar atau bukan
    $validasiGambar = ['jpg','jpeg','png'];
    $validasiGambar2 = explode('.', $namaFile);
    $validasiGambar2 = strtolower(end($validasiGambar2));
    if(!in_array($validasiGambar2, $validasiGambar)){
        echo "<script>
                alert('yang anda upload bukan gambar');
            </script>";
    }

    //cek ukuran
    if($ukuranFile > 9000000){
        echo "<script>
                alert('ukuran gambar terlalu besar');
            </script>";
    }
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $validasiGambar2;

    move_uploaded_file($tmpName,'gambar/'. $namaFileBaru);

    return $namaFileBaru;

}
// lihat event
function lihat($event){
    global $conn;
    $result = mysqli_query($conn, $event);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row; 
    }
    return $rows;
}

//search
function cari($keyword){
    $query = "SELECT * FROM events WHERE
    Nama_Event LIKE '%$keyword%' OR
    Penyelenggara LIKE '%$keyword%' OR
    Tempat LIKE '%$keyword%' OR
    Tanggal_Event LIKE '%$keyword%'
    "; 
    return lihat($query);
}

// hapus event
function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM events WHERE ID_Event = $id");
    return mysqli_affected_rows($conn);
}


// update data
function ubah($data){
    global $conn;
    $id = $data["id"];
    $Penyelenggara = htmlspecialchars($data["penyelenggara"]);
    $Nama_Event = htmlspecialchars($data["event"]);
    $Tanggal_Event = $data["tanggal"];
    $Tempat = htmlspecialchars($data["tempat"]);
    $Kontak = htmlspecialchars($data["kontak"]);

    // upload gambar
    $Gambar = upload();
    if(!$Gambar){
        return false;
    }

// masukin data ke database
    mysqli_query($conn, "UPDATE events SET
    Penyelenggara = '$Penyelenggara',
    Nama_Event = '$Nama_Event',
    Tanggal_Event = '$Tanggal_Event',
    Tempat = '$Tempat',
    Kontak = '$Kontak',
    Gambar = '$Gambar'
    WHERE ID_Event = $id
    ");
    return mysqli_affected_rows($conn);
}
// pesan tiket
function tiket($event){
    global $conn;
    $result = mysqli_query($conn, $event);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row; 
    }
    return $rows;
}
function pesan($data){
    global $conn;
    $Nama = $data["nama"];
    $Email = $data["email"];
    $Telepon = $data["telepon"];
    $Pilih_event= $data["pilih_event"];
    $Jumlah =$data["jumlah"];
    $Harga =$data["Harga"];
    mysqli_query($conn, "INSERT INTO tiket VALUE('','$Nama','$Email','$Telepon','$Pilih_event','$Jumlah','$Harga')");
    return mysqli_affected_rows($conn);
}
?>

