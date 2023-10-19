<?php
    // Melakukan import / pemanggilan file dan sintax yang di perlukan
    use PHPUnit\Framework\TestCase;
    require_once "WordCount.php";

    // Merupakan sebuah class dengan extends / pengimplementasian TestCase
    class SimpleTest extends TestCase {

        // Adalah sebuah fungsi 
        public function testCountWords() {
            // Penginisialisasian dengan nama class WordCount()
            $Wc = new WordCount();

            // Pendeklarasian string ke dalam variabel $TestSentences
            $TestSentence = "My Name Is Joko";

            // Pendeklarasian sebuah varibel dengan memanggil fungsi countWord untuk menghitung kata
            $WordCount = $Wc->countWords($TestSentence);

            // Membandingkan 2 buah variabel apakah sama atau tidak
            $this->assertEquals(4, $WordCount);
        }
    }
?>