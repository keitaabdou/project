<?php

include("includes/header.php");
include("db.php");
?>

<?php include("includes/carousel.php"); ?>



<div class="login-form">
            <form action="inscription_traitement.php" method="POST" id="form">
                            <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control" name="nom" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            </div>
                            <div class="form-group">
                                <label for="prenom">Pérenom</label>
                                <input type="text" class="form-control" name="prenom" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            </div>
                            <div class="form-group">
                                <label for="email">email</label>
                                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" required>
                            </div>
                            <div class="form-group">
                                <label for="date">Date de naissance</label>
                                <input type="date" class="form-control" name="naissance" id="date" aria-describedby="emailHelp" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea2">Message </label>
                                <textarea class="form-control rounded-0" name="message" id="exampleFormControlTextarea2" rows="3"></textarea>
                            </div>                
                            <div class="champ">
                                <input type="radio" id="h"  value="homme" name="genre">
                                <label for="h">Homme</label>
                                <input type="radio" id="f"  value="femme" name="genre">
                                <label for="f">Femme</label>
                            </div>
                            <button type="submit" name="envoyez" class="btn btn-outline-primary btn-block">Envoyez</button>
                        </form>
        </div>
        <style>
            .login-form {
                width: 400px;
                margin: 40px auto;
                border: 1px solid #0062cc;


            }
            .login-form form {
                margin-bottom: 1px;
                background: #f7f7f7;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                padding: 20px;
            }
            .login-form h2 {
                margin: 0 0 15px;
                text-transform: uppercase;
            }
            .form-control, .btn {
                min-height: 38px;
                border-radius: 2px;
            }
            .btn {        
                font-size: 15px;
                font-weight: bold;
            }
        </style>

 

  <div class="new">
        <div class="container">
          <div class="col">
          </div>
        </div>
</div>


<?php 
    
    include("includes/footer.php");
    
?>