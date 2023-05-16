<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="latihan02" id="latihan02" method="POST" onsubmit="return checkfrom(this)">
    NIM<br>
    <input type="text" name="txNIM" id="txNIM"><br>

    <br>Jenis Kelamin <br>
    <input type="radio" name="txJK" id="txJK" value="L">Laki-Laki
    <input type="radio" name="txJK" id="txJK" value="P">Perempuan

    <br>Jurusan<br>
    <select name="txJurusan" id="txJurusan">
        <option value="MTI"> MTI </option>
        <option value="KAB"> KAB </option>
</select>

<br>Hoby<br>
<input type="checkbox" name="txhobi" id="txhobi" value="1">Sepak Bola
<input type="checkbox" name="txhobi" id="txhobi" value="2">Bulu Tangkis
<input type="checkbox" name="txhobi" id="txhobi" value="3">Bola Voly

<br></br>
<button type="submit"> Kirim </button>

</form>

<script type="text/javascript">
    function checkfrom(){
      let frm = document.getElementById("latihan02").elements

      let NIM = frm.txNIM.value
      let jnskel =frm.txJK.value
      let hoby1 = frm.txhobi[0].checked
      let hoby2 = frm.txhobi[1].checked
      let hoby3 = frm.txhobi[2].checked

      console.log("NIM:"+NIM)
        console.log("JenisKelamin:"+jnskel)
        console.log("hobi:"+hoby1)
        console.log("hobi:"+hoby2)
        console.log("hobi:"+hoby3)

      return false;
    }
</script>

</body>
</html>