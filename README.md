# Tugas_WKPL
Tugas WKPL Acara Ke 16 Minggu Ke-9 berkaitan dengan Unit Testing

Berikut adalah penjelasan dari baris kode:
A. Pada File WordCount.php
Pada file ini terdapat sebuah class bernama WordCount, kemudian terdapat function atau fungsi bernama countWords dengan parameter $sentences
Setelah itu terdapat return untuk mengembalikan nilai dengan sebuah sintax php count() untuk menghitung dan explode() untuk memisahkan string dalam sebuah array berdasarkan spasi (" ")
Kemudian setelah dihitung akan masuk ke dalam variabel $sentences

B. Pada File SimpleTest.php
Pada file ini terdapat sebuah import sintax php yakni TestCase kemudian juga melakukan pemanggilan file WordCount.php
Kemudian terdapat sebuah class bernama SimpleTest dengan extends (pewarisan) TestCase yang telah di import sebelumnya dengan sintax "use PHPUnit\Framework\TestCase;"
Setelah itu terdapat sebuah function atau fungsi bernama testCountWords 
Lanjut dengan penginisialisasian variabel $Wc dengan class bernama WordCount, kemudian variabel $TestSentence berisi dengan String "My Name Is Joko"
Pada variabel $WordCount berisi variabel $Wc dan memanggil fungsi dalam classnya yakni countWords($TestSentence) pada fungsi ini bermaksud bahwa countWords ini adalah fungsi untuk menghitung
string yang mana string tersebut adalah  $TestSentence berisi dengan String "My Name Is Joko"
Kemudian pada baris kode terakhir terdapat kode "$this->assertEquals(4, $WordCount);" yang berarti bahwa memanggil sintax php yakni assertEquals 
assertEquals adalah sebuah cara untuk membandingkan 2 buah string apakah sama atau tidak, kemudian nantinya akan keluar pesan error atau tidak
