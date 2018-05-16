				<h2>Commentaires:</h2>


				<?php session_start(); 



				if (isset($_SESSION['id']) AND isset($_SESSION['pseudo'])){
					
					echo '<form class="com" method="POST" action="BD/commentaire-ajout.php">
						<textarea name="commentaire" placeholder="Votre commentaire..."></textarea><br />
						<input type="hidden" name="page" value='.$page.' />
						<input type="submit" value="Poster mon commentaire" name="submit_commentaire" />
						</form>';
						
				}else
				{
					echo 'Vous devez vous inscrire pour écrire un message';
				}
			?>	


    
			<?php
				error_reporting(E_ALL);

				try
				{
					/* creation de la BD */
					$db = new PDO("sqlite:./BD/commentaires.sqlite");
					/* errors -> exceptions */
					$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					/* requete de selection */
					
					
					$requete = $db->prepare("SELECT * FROM commentaire WHERE page=:page ORDER BY id DESC");
					
					$requete->execute(array("page"=>$page,));
					unset($db);
					while($row = $requete->fetch())
					{
						echo '<div class="pseudo"> <p>'.$row['pseudo']. '</div> <div class="commentaire">' .$row['texte']. '</p> </div>';

        					session_start(); 

						if ($_SESSION['admin']=="oui"){
						echo '<form class="com" method="POST" action="BD/supprimer-commentaire.php">
							<input type="hidden" name="choixid" value='.$row['id'].' />
							<input type="submit" value="supprimer" name="supprimer" />
							</form>';
						}
					}
				}
				catch(Exception $e)
				{
					echo $e->getMessage();
				}
			?>
