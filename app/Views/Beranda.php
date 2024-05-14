<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FilmSinopsis.com</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Selamat Datang di FilmSinopsis.com</h1>
    </header>

    <section class="film-terbaru">
        <h2>Film Terbaru</h2>
        <div class="film">
            <img src="gambar-film-1.jpg" alt="Judul Film 1">
            <h3>Judul Film 1</h3>
            <p>Sinopsis: Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            <p>Rating: 4.5/5</p>
            <a href="#">Lihat Selengkapnya</a>
        </div>
        <!-- Tambahkan film lainnya di sini -->
    </section>

    <section class="kategori-populer">
        <h2>Kategori Populer</h2>
        <ul>
            <li>Drama</li>
            <li>Komedi</li>
            <li>Aksi</li>
            <li>Horor</li>
            <li>Animasi</li>
        </ul>
    </section>

    <footer>
        <p>Tentang Kami: FilmSinopsis.com adalah platform untuk membaca sinopsis film terbaru dan terpopuler.</p>
    </footer>
</body>

<style>body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
}

.film-terbaru {
    padding: 20px;
}

.film {
    border: 1px solid #ddd;
    padding: 10px;
    margin-bottom: 20px;
    text-align: center;
}

img {
    max-width: 100%;
    height: auto;
    margin-bottom: 10px;
}

a {
    color: #007bff;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

.kategori-populer {
    background-color: #f4f4f4;
    padding: 20px;
}

footer {
    background-color: #333;
    color: #fff;
    padding: 10px;
    text-align: center;
}
</style>
</html>
