<?php 

        include("db.php");

?>

<?php 

            if(isset($_POST['envoyez']))//verifie si le formullaire contient les donné
            {
                

                $nom = htmlspecialchars($_POST['nom']);// affection de valeur recupere au variable
                $prenom = htmlspecialchars($_POST['prenom']);
                $email = htmlspecialchars($_POST['email']);
                $naissance = htmlspecialchars($_POST['naissance']);
                $message = htmlspecialchars($_POST['message']);
                $genre = htmlspecialchars($_POST['genre']);
                $date_envoi_message=date("Y-m-d h:i:s"); //recupère la date actuel

                //verifie les valeurs des champs remplie
                if(!empty($nom) && !empty($prenom) && !empty($email) && !empty($naissance) && !empty($message) && !empty($genre)){

                    try {
                        $sql = "INSERT INTO inscription (nom, prenom, email, naissance, message, genre, date_envoi_message) VALUES (:nom,:prenom,:email,:naissance,:message,:genre,:date_envoi_message)";// requete d'insertion
                        $query = $conn->prepare($sql); // prepare la requette
                        $query->bindParam(":nom",$nom,PDO::PARAM_STR);//definie les paremettre de la requette
                        $query->bindParam(":prenom",$prenom,PDO::PARAM_STR);
                        $query->bindParam(":email",$email,PDO::PARAM_STR);
                        $query->bindParam(":naissance",$naissance,PDO::PARAM_STR);
                        $query->bindParam(":message",$message,PDO::PARAM_STR);
                        $query->bindParam(":genre",$genre,PDO::PARAM_STR);
                        $query->bindParam(":date_envoi_message",$date_envoi_message,PDO::PARAM_STR);
                        $query->execute();
                        echo "<script> alert('Votre inscription a été prise en compte');</script>";//laert de message script
                        echo "<script> window.location.href='inscription.php#form';</script>";// redirige vers la page inscription
                    } catch (\ PDOexception $th) {//affichage d'erreur
                        echo $th->getMessage();
                    }
                        $conn=null; // stop la connexion
                }else{
                    echo "<script> alert('Tout les champs sont pas remplie');</script>";
                }
                
            }

              
//#form me permet de rester sur le formulaire
?>