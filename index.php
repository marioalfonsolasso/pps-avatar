<body>
    <h1>Projecte Welcome1</h1>
    <ul>
    <?php
        // Escanear el directorio de imágenes
        $imgs = scandir("./img", SCANDIR_SORT_ASCENDING);

        foreach ($imgs as $img) {
            // Filtrar los directorios "." y ".."
            if ($img == "." || $img == "..") continue;

            // Usar pathinfo() para obtener la extensión de la imagen
            $info = pathinfo($img);
            $extension = strtolower($info['extension']);

            // Verificar si la extensión es una imagen válida
            if (in_array($extension, ['jpg', 'jpeg', 'png'])) {
                // Sanitizar el nombre de la imagen
                $name = basename($img, "." . $extension);

                // Generar el enlace con la imagen
                echo "<li>";
                echo "<a href='profile/$name.html'>";
                echo "<img src='img/$img' width='130' alt='$name'>";
                echo "$name</a>";
                echo "</li>";
            }
        }
    ?>
    </ul>
</body>
