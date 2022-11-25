
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Login</title>
    <style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;

}
header{
    background-color: lightgray;
    width: 100vw;
    height: 80px;
}
.container
{
    width: 100vw;
    height: calc(100vh - 80px - 40px);
    background-color: lightblue;
    display: flex;
    justify-content: center;
    align-items: center;
}
.container .form-area{
    position: relative;
    background-color: lightskyblue;
    width: 250px;
    height: calc(65vh - 80px - 40px);
    display: inline-flex;
    align-items: center;
}
.container .form-area .form h1 center{
position: absolute;
top: 60px;
left: 35px;
}
.container .form-area .form label{
    display: block;
    text-align: center;
}
.container .form-area .form input{
margin: 0 38.5px;
}
.container .form-area .form center input[type=submit]{
    border: none;
    width: 55px;
    height: 15px;
    border-radius: 6px;
}
.container .form-area .form center input[type=submit]:hover{
    cursor: pointer;
}
</style>
</head>


<body>
    <header></header>

    <main class="container">
        <div class="form-area">
            <form class="form" action="admin-loginn.php" method="post">
                <h1><center >Admin-login.</center></h1>
                <label for="username">username:</label>
                <input type="text" name="username" id="admin-uname">
                <label for="password">password:</label>
                <input type="password" name="password" id="admin-password">
                <center> <input type="submit" value="submit"></center>
            </form>
        </div>
    </main>

    <footer></footer>
</body>

</html>