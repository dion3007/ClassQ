<!doctype html>
<html>
    <head>
        <title>Class Q</title>
        <link rel="stylesheet" href="./css/style.css" />
    </head>
    <body background="./img/background1.jpg">
        <img class="logo" src="./img/logo.png"/>
        <br/>
        <br/>
        <header>
            <h3> Isi yang bener </h3>
        </header>
        <div class="container">
            <form action="system/register.php" method="post">
                <div class="inputan">
                    <img id="logonama1" height="40px" src="./img/firstname.png"/>
                    <input id="name1" type="text" name="fname" placeholder="Nama awal lu siapa?" required/>
                </div>
                <br/>
                <br/>
                <div class="inputan">
                    <img id="logonama2" height="40px" src="./img/lastname.png"/>
                    <input id="name2"type="text" name="lname" placeholder="  Nama akhir lu?" required/>
                </div>
                <br/>
                <br/>
                <div class="inputan">
                    <img id="logoemail" height="40px" src="./img/email.png"/>
                    <input id="email" type="email" name="email" placeholder="  email lu apaan?" required/>
                </div>
                <br/>
                <br/>
                <div class="inputan">
                    <img id="logopass1" height="40px" src="./img/PASS.png"/>
                    <input id="pass1" type="password" name="password" placeholder="  masukin password nih" required/>
                </div>
                <br/>
                <br/>
                <div class="inputan">
                    <img id="logopass2" height="40px" src="./img/PASS.png"/>
                    <input id="pass2" type="password" name="repassword" placeholder="  ketik passwordnya lagi" required/>
                </div>
                <br/>
                <br/>
                <div class="inputan">
                    <img id="logohp" height="40px" src="./img/phone.png"/>
                    <input id="phone" type="tel" name="phone" placeholder="  boleh minta no. hp?"/>
                </div>
                <br/>
                <br/>
                <div class="inputan">
                    <img id="logobirthday" height="40px" src="./img/birthday.png"/>
                    <input id="date" type="date" name="date" placeholder="  tanggal lahir nya?" required/>
                </div>
                <br/>
                <div class="Caption">
                    <h1> SEX ? </h1>
                </div>
                <br/>
                <div class="pilihan">
                    <input type="radio" name="gender" value=1/>
                    <img id="boy" height="40px" src="./img/boy.png"/>
                    <img id="girl" height="40px" src="./img/girl.png"/>
                    <input type="radio" name="gender" value=2/>
                </div>
                <br/>
                <br/>
                <br/>
                <div class="button">
                    <button id="submit" type="submit" name="submit">SUBMIT</button>
                </div>
            </form>
        </div>
    </body>
</html>
