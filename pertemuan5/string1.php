<?php
$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque aliquam iusto consequatur officia quod iure, autem fugit veritatis corporis, repudiandae nihil facere odit molestias aspernatur. Corporis sapiente perspiciatis beatae aliquam.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
echo "Panjang karakter: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";
?>