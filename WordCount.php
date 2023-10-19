<?php
    // Sebuah Class bernama WordCount
    class WordCount {

        // Sebuah fungsi bernama countWords dengan parameter $sentence
        public function countWords($sentence) {
            // Mengembalikan nilai dengan menggunakan sintax php count untuk menghitung
            // Dan sintax php explode untuk memisahkan String dengan parameter pemisahnya dalam hal ini adalah spasi (" ")
            // Kemudian memasukan ke dalam variabel $sentence
            return count(explode(" ", $sentence));
        }
    }
?>