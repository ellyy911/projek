<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="website icon" type="jpeg" href="Depok.png">
    <title>PUSAT DATA INFORMASI DINAS TENAGA KERJA</title>
    <style>
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "arial";
    
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: white;
        background-color:rgb(107, 146, 209);
    }

    .container {
        width: 100%;
        display: flex;
        padding: 100px;
        max-width: 1100px;
        background: #fff;
        border-radius: 20px;
        box-shadow: 0 10px 15px rgba(0, 0, 0, 0.5);
    }

    .login {
        width: 400px;
    }

    form {
        width: 250px;
        margin: 60px auto;
    }

    h1 {
        margin: 20px;
        text-align: center;
        font-weight: bolder;
        text-transform: uppercase;
    }

    hr {
        border-top: 2px solid #05409e;
    }

    p {
        text-align: center;
        margin: 10px;
    }

    .right img {
        width: 450px;
        height: 100%;
        border-top-right-radius: 15px;
        border-bottom-right-radius: 15px;
    }

    form label {
        display: block;
        font-size: 16px;
        font-weight: 600;
        padding: 5px;
    }

    input {
        width: 100%;
        margin: 2px;
        border: none;
        outline: none;
        padding: 8px;
        border-radius: 5px;
        border: 1px solid gray;
    }

    button {
        border: none;
        outline: none;
        padding: 8px;
        width: 252px;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
        margin-top: 20px;
        border-radius: 5px;
        background: #05409e;
    }

    button:hover {
        background: rgba(14, 78, 99);
    }

    .name, .word {
        position: relative;
    }

    .user, .pass {
        padding: 0.6rem 1.2rem;
        color: #444;
        font-size: 18px;
    }

    .satu, .dua {
        position: absolute;
        top: 0.6rem;
        left: 1.2rem;
        color: rgba(0, 0, 0, 0.5);
        font-size: 1.0rem;
        transition: 0.4s all;
        padding-inline: 0.25rem
    }

    .user:focus~.satu,
    .user:valid~.satu {
        top: -0.8rem;
        left: 0.5rem;
        background-color: #fff;
        font-size: 1rem;
    }

    .pass:focus~.dua,
    .pass:valid~.dua {
        top: -0.8rem;
        left: 0.5rem;
        background-color: #fff;
        font-size: 1rem;
    }

</style>
</head>
<body>
    <div class="container">
        <div class="login">
            <form action="proses.php?aksi=loginn" method="POST" enctype="multipart/form-data">
                <h1>LOGIN</h1>
                <hr>
                <p>Login to your account</p>
                <div class="name">
                    <!-- <label class="satu">Username</label> -->
                    <input type="text" id="user" class="user" name="user" required="required" placeholder="Username">
                </div>
                <br>
                <div class="word">
                    <!-- <label class="dua">Password</label> -->
                    <input type="password" id="pass" class="pass" name="pass" required="required" placeholder="Password">
                </div>
                    <button>LOGIN</button>
                    <div class="footer">
                <p>belum punya akun? <a href="daftar.php">Daftar</a></p>
            </div>
            </form>
        </div>
        <div class="right">
            <img src="Depok.png" alt="">
        </div>
    </div>
</body>
</html>