<?php
echo "<pre>"; // Supaya format tulisan rapi di browser

// Class Book
class Book {
    public $title;
    public $author;
    public $isAvailable = true;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }

    public function info() {
        $status = $this->isAvailable ? "Tersedia" : "Dipinjam";
        echo "Buku: $this->title ($this->author) - Status: $status\n";
    }
}

// Class Member
class Member {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function pinjam($book) {
        if ($book->isAvailable) {
            $book->isAvailable = false;
            echo "-> $this->name BERHASIL meminjam: $book->title\n";
        } else {
            echo "-> $this->name GAGAL meminjam: $book->title (Sedang dipinjam)\n";
        }
    }

    public function info() {
        echo "Member: $this->name\n";
    }
}


$buku1 = new Book("Pelangi", "Joko");
$buku2 = new Book("Dilan 1993", "Iqbal.R");

$member1 = new Member("Rama Wahyu");
$member2 = new Member("Budi");

echo "=== INFORMASI BUKU ===\n";
$buku1->info();
$buku2->info();

echo "\n=== NAMA PEMINJAM ===\n";
$member1->info();
$member2->info();

echo "\n=== Alur PEMINJAMAN ===\n";
$member1->pinjam($buku1); // Rama meminjam buku 1 (Berhasil)
$member2->pinjam($buku1); // Budi coba pinjam buku 1 (Gagal karena sudah dipinjam)
$member2->pinjam($buku2); // Budi pinjam buku 2 (Berhasil)

echo "\n=== STATUS AKHIR BUKU ===\n";
$buku1->info();
$buku2->info();