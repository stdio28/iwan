<?php


if (isset($_POST['TV']))

    {
    echo "".$_POST['TV']."<br>";
    echo "Harga        : Rp " .$harga[0]=300000;
    echo "<br><p>";
}

if (isset($_POST['Meja_Belajar']))
 {  
    echo "".$_POST['Meja_Belajar']."<br>";
    echo "Harga        : Rp " .$harga[1]=50000;
    echo "<br><p>";
}
if (isset($_POST['Kursi']))
 {  
    echo "".$_POST['Kursi']."<br>";
    echo "Harga        : Rp " .$harga[2]=115000;
    echo "<br><p>";;
}
if (isset($_POST['Lemari']))
 {  
    echo "".$_POST['Lemari']."<br>";
    echo "Harga        : Rp " .$harga[3]=450000;
    echo "<br><p>";
}


if (isset($_POST['Buku']))

    {
    echo "".$_POST['Buku']."<br>";
    echo "Harga        : Rp " .$harga[0]=125000;
    echo "<br><p>";
}

if (isset($_POST['Pensil']))
 {  
    echo "".$_POST['Pensil']."<br>";
    echo "Harga        : Rp " .$harga[1]=5000;
    echo "<br><p>";
}
if (isset($_POST['Ember']))
 {  
    echo "".$_POST['Ember']."<br>";
    echo "Harga        : Rp " .$harga[2]=10000;
    echo "<br><p>";
}
if (isset($_POST['Sapu']))
 {  
    echo "".$_POST['Sapu']."<br>";
    echo "Harga        : Rp " .$harga[3]=70000;
     echo "<br><p>";
}

$jum_bayar=array_sum($harga); 
echo "Total Bayar Anda Sebesar = Rp $jum_bayar <br>";
print"<br>ini editan aku coy";
?>

<p>
<form id="form1" name="form1" method="" action="index.php">
  <label>
  <input type="submit" name="Back" id="Back" value="Kembali" />
  </label>
</form>
<p>

</body>
</html>
