<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZPWEB-2008580</title>
</head>
<body>

<style>
*,html,body {
    margin: 0;
    padding: 0;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
.container{
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
.wrapper{
    width: 500px;
    height: 300px;
    background-color: #eaeaea;
    color: black;
    display: flex;
    justify-content: center;
    align-items: center;
}
a{
    text-decoration: none;
}
h2{
    color: violet;
    font-weight: bold;
    font-size: 40px;
    -webkit-text-stroke: 1px black;
    padding: 5px;
    animation:blinkingText 1.2s infinite;
}
.choose{
    /* display: block; */
    position: absolute;
    margin-top:-200px;
}
.choose h2{
    color: magenta;
}
h2:hover{
    color: #eaeaea;
}
@keyframes blinkingText{
    0%{     color: violet;    }
    49%{    color: magenta }
    60%{    color: aquamarine; }
    99%{    color:darksalmon;  }
    100%{   color: green;    }
}
</style>
    <div class="container">
        <div class="wrapper">
            <div class="choose">
                <h2>---------- Pilih Menu ----------</h2>
            </div>
            <a href="barang/tampil-barang.php"><h2>Barang | </h2></a>
            <a href="kategori/list-kategori.php"><h2>Kategori |</h2></a>
            <a href="order/tampil-order.php"><h2>Order</h2></a>
        </div>
    </div>
</body>
</html>