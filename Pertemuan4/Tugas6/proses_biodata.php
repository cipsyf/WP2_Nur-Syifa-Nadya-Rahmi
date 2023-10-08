<?php
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $pendapat = $_POST['text'];
    $dir_upload = "files";
    $uploadfile = $dir_upload . $_FILES['file']['name'];

    echo "NIM: <b>$nim</b> <br>";
    echo "Nama: <b>$nama</b> <br>";
    echo "Anda sekarang: ";
    if(isset($_POST['s1'])){
        echo "+ <b>" . $_POST['s1'] . "</b><br>";
    }
    if(isset($_POST['s3'])){
        echo "+ <b>" . $_POST['s3'] . "</b><br>";
    }
    if(isset($_POST['s5'])){
        echo "+ <b>" . $_POST['s5'] . "</b><br>";
    }
    echo "Anda sekarang di prodi <b>$prodi</b> <br>";
    echo "Komentar atau Pendapat anda: <b>$pendapat</b><br><br>"; 

    if (is_uploaded_file($_FILES['file']['tmp_name'])) {
        $kirim = move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
    if ($kirim) {
        echo "File berhasil diupload ke server pada folder <b>$uploadfile</b>";
        } else {
            echo "File gagal diupload";
            echo "error : ", $_FILES['file']['error'];
        }
    }
?>