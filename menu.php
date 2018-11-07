<?php

ini_set('mysql.connect_timeout', 300);
ini_set('default_socket_timeout', 300);
include "basket/addProduit.php";

//-------------Lorsqu'on appuie sur "submit" , on envoie nos données ( image + prix ) dans une nouvelle case dans la base de données--------------


//-------------Fonction pour afficher les champs de notre tableau dans la base de données-------------

function displayArticle($filter)
{

    $con = mysqli_connect("localhost", "root", '', "mcd");

    $qry = "SELECT * FROM article WHERE type='$filter'";
    $result = mysqli_query($con, $qry);
    ?>

    <table  align="left" style="margin-left:10%">
        <?php

        $tab = array("", "", "","");   //--------initialisation d'un tableau vide au début de chaque ligne----------



        //---------fonction pour organiser les prix au dessous des images ; le but c'est d'éviter de mettre les cases des prix si on n'a pas d'image--------------


        function organise($prix,$id,$nom,$image)
        {
            if ($prix!="") { ?>
                <td >
                    <form  name="produit" method="post"  action="<?=$_SERVER['PHP_SELF']?>" >
                        <p align="center" ><b><?php echo preg_replace("/.jpg|.png|.jpeg/","",$nom); ?></b></p>
                        <input hidden name="idarticle" value="<?php  echo $id ?>" >
                        <input hidden name="prix" value="<?php  echo $prix ?>" >
                        <input hidden name="nom" value="<?php  echo $nom ?>" >
                        <input hidden name="image" value="<?php  echo $image ?>" >
                        <p align="center">Price: <?php echo $prix; ?></p>
                        <center>  <input type="number" name="quantite" value="1" size="1" />

                            <input name="submit" type="submit" value="+"  style="background-color:#ff9933" class="btnAddAction" /></center>
                        <br>
                    </form>




                </td>
            <?php }

        }



        //--------Vider le tableau $tab--------
        $tab[0] =array("id"=>"","prix"=>"","nom"=>"","image"=>"");
        $tab[1] =array("id"=>"","prix"=>"","nom"=>"","image"=>"");
        $tab[2] =array("id"=>"","prix"=>"","nom"=>"","image"=>"");

        $row = mysqli_fetch_array($result);
        while ($row!=null){
            ?>
            <tr>

                <?php  //------------On va mettre chaque ligne du tableau de notre base dans une case de notre nouveau tableau $tab-------------
                for ($i = 0; $i < 3 && $row; $i++) {
                    $tab[$i]=array("id"=>$row[0],"nom"=>$row[1],"prix"=>$row[3],"image"=>$row[2]);

                    ?>
                    <td align="center">
                        <img  height="200px" width="250px" src="<?php echo 'data:image;base64,'.$row[2] .''; ?>"
                    </td>
                    <?php
                    $row = mysqli_fetch_array($result);
                }
                ?>
            </tr>
            <tr>


                <?php for($j=0;$j<3;$j++)
                    organise($tab[$j]["prix"],$tab[$j]["id"],$tab[$j]["nom"],$tab[$j]["image"]);
                ?>
            </tr>

            <?php

            //--------Vider le tableau $tab--------

            $tab[0] =array("id"=>"","prix"=>"","nom"=>"","image"=>"");
            $tab[1] =array("id"=>"","prix"=>"","nom"=>"","image"=>"");
            $tab[2] =array("id"=>"","prix"=>"","nom"=>"","image"=>"");
        }
        ?>

    </table>


    <?php
}

?>


<?php
function displaySearch($filter)
{

    $con = mysqli_connect("localhost", "root", '', "mcd");

    $qry = "SELECT * FROM article WHERE nom REGEXP '.*$filter.*' or type ='$filter'";
    $result = mysqli_query($con, $qry);
    ?>

    <table  align="left" style="margin-left:10%">
        <?php

        $tab = array("", "", "","");   //--------initialisation d'un tableau vide au début de chaque ligne----------



        //---------fonction pour organiser les prix au dessous des images ; le but c'est d'éviter de mettre les cases des prix si on n'a pas d'image--------------


        function organise($prix,$id,$nom,$image)
        {
            if ($prix!="") { ?>
                <td >
                    <form  name="produit" method="post"  action="<?=$_SERVER['PHP_SELF']?>" >
                        <p align="center" ><b><?php echo preg_replace("/.jpg|.png|.jpeg/","",$nom); ?></b></p>
                        <input hidden name="idarticle" value="<?php  echo $id ?>" >
                        <input hidden name="prix" value="<?php  echo $prix ?>" >
                        <input hidden name="nom" value="<?php  echo $nom ?>" >
                        <input hidden name="image" value="<?php  echo $image ?>" >
                        <p align="center">Price: <?php echo $prix; ?></p>
                        <center>  <input type="number" name="quantite" value="1" size="1" />

                            <input name="submit" type="submit" value="+"  style="background-color: #ff9933" class="btnAddAction" /></center>
                        <br>
                    </form>




                </td>
            <?php }

        }



        //--------Vider le tableau $tab--------
        $tab[0] =array("id"=>"","prix"=>"","nom"=>"","image"=>"");
        $tab[1] =array("id"=>"","prix"=>"","nom"=>"","image"=>"");
        $tab[2] =array("id"=>"","prix"=>"","nom"=>"","image"=>"");
        $row = mysqli_fetch_array($result);
        while ($row) {  //---------Tant que la ligne n'est pas vide ------------
            ?>
            <tr>

                <?php  //------------On va mettre chaque ligne du tableau de notre base dans une case de notre nouveau tableau $tab-------------
                for ($i = 0; $i < 3 && $row; $i++) {
                    $tab[$i]=array("id"=>$row[0],"nom"=>$row[1],"prix"=>$row[3],"image"=>$row[2]);

                    ?>
                    <td align="center">
                        <img  height="200px" width="250px" src="<?php echo 'data:image;base64,'.$row[2] .''; ?>"
                    </td>
                    <?php

                    $row = mysqli_fetch_array($result);
                }
                ?>
            </tr>
            <tr>


                <?php for($i=0;$i<3;$i++)
                    organise($tab[$i]["prix"],$tab[$i]["id"],$tab[$i]["nom"],$tab[$i]["image"]);
                ?>
            </tr>

            <?php

            //--------Vider le tableau $tab--------

            $tab[0] =array("id"=>"","prix"=>"","nom"=>"","image"=>"");
            $tab[1] =array("id"=>"","prix"=>"","nom"=>"","image"=>"");
            $tab[2] =array("id"=>"","prix"=>"","nom"=>"","image"=>"");
        }
        ?>

    </table>


    <?php
}

?>
















