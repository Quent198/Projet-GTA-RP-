<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mot de passe oublié</title>
    <link rel="stylesheet" href="Mot de passe oublié.css">
</head>
<body>


    <figure id="Logoduserveur">
        <img src="Images/Logo serveur.png" alt="Logo du serveur">
    </figure>
    <section id="Formutilisateur">
    <figure id="Logonomutilisateur">
        <img src="Images/Utlisateurlogo.png" alt="Logo Nom d'utilisateur">
    </figure>

        <form action="" method="get">
            <label for="Utilisateur">
                <input type="text" id="Utilisateur"
                placeholder="Nom d'utilisateur">
            </label>
            </form>
            </section>

    <section>
    <figure id="Logomdp">
        <img src="Images/mdplogo.png" alt="Icone MDP">
    </figure>

   <form>
        <label for="MDP">
            <input type="text" id="MDP" placeholder="Nouveau Mot de Passe">
        </label>
    </form>
    </section>
    <section>
    <figure id="Logomdp">
        <img src="Images/mdplogo.png" alt="Icone MDP">
    </figure>

   <form>
        <label for="NewMDP">
            <input type="text" id="NewMDP" placeholder="Confirmer Mot de Passe">
        </label>
    </form>
    </section>
        <br>
        <button type="submit" id="Save">Sauvegarder</button> <br>


    <a id="LienDiscord" href="">Lien Discord</a>
    <br>
    <footer>
    <p id="Droits"> ©2023 tous droits réservés </p>
</footer>

<script>document.getElementById('Save').addEventListener("click", function(){
    window.location.href = "index.html"
}) </script>
</body>
</html>