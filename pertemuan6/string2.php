<?php
echo "Baris\nbaru "; //10.a 
echo 'Baris\nbaru '; //10.b 
echo "Baris\rDunia "; //10.c 
echo 'Baris\rDunia '; //10.d

echo "<pre>Halo\tDunia! <pre>"; //10.e 
echo '<pre>Halo\tDunia! <pre>'; //10.f
echo "Katakanlah \"Tidak pada narkoba!\" "; //10.g 
echo 'Katakanlah \'Tidak pada narkoba!\' '; //10.H

//Menggunakan tanda kutip ganda, \n diinterpretasikan sebagai karakter "new line" (baris baru). Ini berarti output akan memulai kata "baru" di baris baru.
//Menggunakan tanda kutip tunggal, \n tidak diinterpretasikan sebagai karakter khusus dan akan dicetak apa adanya. Jadi, outputnya akan mencetak "Baris\nbaru" dalam satu baris.
//Menggunakan tanda kutip ganda, \r diinterpretasikan sebagai karakter "carriage return". Di kebanyakan lingkungan modern, efek ini bisa jadi tidak terlihat atau hanya mengembalikan kursor ke awal baris, yang berpotensi menimpa teks yang ada sebelumnya dengan "Dunia ".
//Menggunakan tanda kutip tunggal, \r tidak diinterpretasikan sebagai karakter khusus dan akan dicetak apa adanya. Jadi, outputnya akan mencetak "Baris\rDunia" dalam satu baris
//pre> tag digunakan untuk menampilkan teks persis seperti apa adanya, termasuk spasi dan tab. Menggunakan tanda kutip ganda, \t akan diinterpretasikan sebagai karakter tabulasi horizontal, memberikan jarak/spasi ekstra antara "Halo" dan "Dunia!". Tag <pre> tidak ditutup dengan benar; seharusnya </pre> untuk menutupnya.
?>