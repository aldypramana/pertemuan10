<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="latihan01" method="POST" onsubmit="return checkfrom(this)">
    NIM<br>
    <input type="text" name="txNIM"><br>

    <br>Jenis Kelamin <br>
    <input type="radio" name="txJK" value="L">Laki-Laki
    <input type="radio" name="txJK" value="P">Perempuan

    <br>Jurusan<br>
    <select name="txJurusan">
        <option value="MTI"> MTI </option>
        <option value="KAB"> KAB </option>
</select>

<br>Hoby<br>
<input type="checkbox" name="txhobibola" value="1">Sepak Bola
<input type="checkbox" name="txhobibulutangkis" value="1">Bulu Tangkis
<input type="checkbox" name="txhobivoly" value="1">Bola Voly

<br></br>
<button type="submit"> Kirim </button>

</form>

<script type="text/javascript">
    function checkfrom(frm){
        let form= frm.elements 
        let NIM = form.namedItem("txNIM").value
        let jnskel= form.namedItem("txJK").value
        let jur = form.namedItem("txJurusan").value
        let hob =[
            form.namedItem("txhobibola").checked,
            form.namedItem("txhobibulutangkis").checked,
            form.namedItem ("txhobivoly").checked
        ]

        console.log("NIM:"+NIM)
        console.log("JenisKelamin:"+jnskel)
        console.log("JenisKelamin:"+jur)
        console.log("hobi:"+hob)
     return false;
    }
</script>

</body>
</html>