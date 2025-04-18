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
        padding: 90px;
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
        width: 550px;
        height: 100%;
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
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

    .name, .jb, .userr, .word, .level {
        position: relative;
    }

    .nama, .jabatan, .user, .pass, .level{
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
    .jk {
        margin-top: 15px;
        display: flex;
        align-items: center;
        gap: 20px;
        font-size: 16px;
        font-weight: 500;
        color: #333;
    }
    .jk label {
        display: flex;
        align-items: center;
        cursor: pointer;
        gap: 1px;
    }
    .jk input[type="radio"] {
        accent-color: #05409e;
        width: 18px;
        height: 18px;
        cursor: pointer;
    }
    .sebagai {
        margin-top: 15px;
        width: 100%;
    }
    .sebagai select {
      width: 100%;
      padding: 10px 12px;
      border: 1px solid gray;
      border-radius: 5px;
      background-color: #f8f8f8;
      font-size: 16px;
      color: #333;
      outline: none;
      transition: border 0.3s;
    }
    .sebagai select:focus {
      border: 1px solid #05409e;
      background-color: #fff;
    }
</style>
</head>
<body>
    <div class="container">
        <div class="login">
            <form action="proses.php?aksi=daftarr" method="POST" enctype="multipart/form-data">
                <h1>daftar</h1>
                <hr>
                <p>daftar to your account</p>
                <div class="name">
                    <input type="text" id="nama" class="nama" name="nama" required placeholder="Nama">
                </div>
                <div class="jb">
                    <input type="text" id="jabatan" class="jabatan" name="jabatan" required placeholder="Jabatan">
                </div>
                <div class="userr">
                    <!-- <label class="satu">Username</label> -->
                    <input type="text" id="user" class="user" name="user" required placeholder="Username">
                </div>
                <div class="word">
                    <!-- <label class="dua">Password</label> -->
                    <input type="password" id="pass" class="pass" name="pass" required placeholder="Password">
                </div>
                <div class="jk">
                    <label for="Laki-Laki">
                        <input type="radio" id="laki-laki" name="jk" value="Laki-Laki">Laki-Laki
                    </label>
                    <label for="Perempuan">
                        <input type="radio" id="perempuan" name="jk" value="Perempuan">Perempuan
                    </label>
                </div>
                <div class="sebagai">
                    <select name="Level" >
                        <option value="Admin">Admin</option>
                        <option value="Owner">Owner</option>
                    </select>
                </div>
                    <button>DAFTAR</button>
                    <div class="footer">
                <p>Sudah Punya Akun? <a href="login.php">Login</a></p>
            </div>
            </form>
        </div>
        <div class="right">
            <img src="Depok.png" alt="">
        </div>
    </div>
</body>
</html>