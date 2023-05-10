<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4</title>
</head>
<body>
<form>

<div> menghitung luas segitiga</div>

    
    <div> nilai alas
        <input type ="number" id ="txALAS">
    </div>
    <div> nilai tinggi 
        <input type ="number" id="txTINGGI">
    </div>
    <div> nilai luas 
        <input type="number" id="txLUAS" disabled>
    </div>

    


    
<button type="button" onclick="hitung()"> hitung </button>
    </div>

</form>

<script>
   function hitung(){
    let alas = document.getElemntById("txALAS").value;
    let tinggi  = document.getElementById("txTINGGI").value;
    let luas = a*t/2;
    
    document.getElementById("txLUAS").value = luas;
   }
</script>
</body>
</html>