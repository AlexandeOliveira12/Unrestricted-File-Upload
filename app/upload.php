<?php
$target = "uploads/" . basename($_FILES["file"]["name"]);

if (move_uploaded_file($_FILES["file"]["tmp_name"], $target)) {
    echo "Upload realizado com sucesso!<br>";
    echo "<a href='$target'>Visualizar arquivo</a>";
} else {
    echo "Erro no upload.";
}
