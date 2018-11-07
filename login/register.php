<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../layout.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        body {

            font-family: Arial, Helvetica, sans-serif;
            background-color: black;

        }

        * {
            box-sizing: border-box;
        }

        /* Add padding to containers */
        .container1 {
            padding: 16px;
            background-color: white;
        }

        /* Full-width input fields */
        input[type=text][name],input[type=password],input[type=email],input[type=number]{
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

         input[type=text][name]:focus,input[type=password]:focus ,input[type=email]:focus,input[type=number]:focus{
            background-color: #ddd;
            outline: none;
        }


        /* Overwrite default styles of hr */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for the submit button */
        .registerbtn {
            background-color: #ff9933;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .registerbtn:hover {
            opacity: 1;
        }

        /* Add a blue text color to links */
        a {
            color: dodgerblue;
        }

        /* Set a grey background color and center the text of the "sign in" section */
        .signin {
            background-color: #f1f1f1;
            text-align: center;
        }

        .resetbtn {
            background-color: #3e8e41;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .resetbtn:hover {
            opacity: 1;
        }

        /* Add a blue text color to links */
        a {
            color: dodgerblue;
        }

        /* Set a grey background color and center the text of the "sign in" section */
        .signin {
            background-color: #f1f1f1;
            text-align: center;
        }
    </style>
    <?php
    session_start();
    if(isset($_SESSION['Check_Email'])){
        unset($_SESSION['Check_Email']);
        echo " <script type='text/javascript'> alert('This Email Already Exists!'); </script>";

    }?>
</head>
<body >
<nav class="navbar navbar-default"  style="width: 80%;margin-left: 10%;" >
    <div class="container-fluid" >
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img src="../img/logo.png" style="float: left ;padding-top: 3px"  height="50px" width="60px"><a class="navbar-brand" href="../index.php" style="padding-top: 17px">McDonas</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


            <ul class="nav navbar-nav navbar-right">
                <li><a href="../bask.php"><img src="../img/basket.png" style="width: 30px;height: 30px" > basket</a></li>
                <li class="active"><a href="../login.php"><img src="../img/login.png" style="width: 30px;height: 30px" > login<span class="sr-only">(current)</span></a></li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="parallax9" >
    <form method="post"  id="f" action="../inscription_client/Inscription.php" style="width: 50%;margin-left: 25%" >
        <div class="container1" style="opacity: 0.9;padding-top: -19px">
            <h1 align="center">Register</h1>

            <hr>

            <label><b>First Name</b></label>
            <input type="text" name="F_Name" size="20" required="required" pattern="^[A-Za-z]{5,40}$" title="Please Insert a valid Fisrt Name between 5 and 40 alphabetical letters "> <br>

            <label><b>Last Name</b></label>
            <input type="text" name="L_Name" size="20" required="required"  pattern="[A-Za-z]{1,40}" title="Please Insert a valid Last Name between 5 and 40 alphabetical letters " ><br>

            <label><b>E-mail</b></label>
            <input type="email" name="Email" size="20" required><br>

            <label><b>Birthday</b></label>
            <select  required name="JJ">
                <option value="">JJ</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>
            <select  name="MM"><option>MM</option>
                <option value="01">1</option>
                <option value="02">2</option>
                <option value="03">3</option>
                <option value="04">4</option>
                <option value="05">5</option>
                <option value="06">6</option>
                <option value="07">7</option>
                <option value="08">8</option>
                <option value="09">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>
            <select  name="YYYY"><option>YYYY</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
                <option value="1984">1984</option>
                <option value="1983">1983</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1980">1980</option>
                <option value="1979">1979</option>
                <option value="1978">1978</option>
                <option value="1977">1977</option>
                <option value="1976">1976</option>
                <option value="1975">1975</option>
                <option value="1974">1974</option>
                <option value="1973">1973</option>
                <option value="1972">1972</option>
                <option value="1971">1971</option>
                <option value="1970">1970</option>
            </select><br><br>
            <label><b>Password </b></label>
            <input type="password" name="Password" id="Pass" required pattern="^[0-9A-Za-z]{8,20}$" title="Please Insert a valid Password between 8 and 20 letters "><br>
            <label><b>Repeat Password </b></label>
            <input type="password" id="Rep_Pass"  required> <input class="alert alert-danger" readonly type="hidden" value="Please Verify Your Password"  id="msg"><br>
            <label><b>Contact Number</b></label>
            <input type="number" name="C_Number" size="20" pattern=".{8,11}"><br>
            <label><b>Adresse </b></label>
            <input type="text" name="Adresse" size="20" pattern="[0-9A-Za-z]{1,100}" title="The Adresse must not contain special characters " required><br>
            <hr>


            <input type="submit" class="registerbtn" value="Register" id="S_B">
            <input type="reset" value="Reset" class="resetbtn">
        </div>


    </form>
</div>
<script src="../inscription_client/Test_Password.js"></script>
</body>
</html>