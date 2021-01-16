<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="styles/accueil.css">
    <title>Listes des apprenant Simplon</title>
</head>
<body>
    <?php
    require_once "affichage.php"
    ?>
    <header>
        <div id="logo">
            <a href="#">
                <img src="fonts/logo.png" alt="LogoSimplon">
            </a>
        </div>
        <div id="searchbar">
            <form action="#" method="POST">
                <input type="text" name="input" id="input" placeholder="Rechercher...">
                <button type="submit">
                    <img src="fonts/search_Icon.png" alt="Rechercher">
                </button>
            </form>
        </div>
    </header>
    <main>
        <div id="addBtn">
            <a href="formulaire.html">Ajouter l'apprenant</a>
        </div>
        <div id="list">
            <h1>Listes des apprenants</h1>
            <div id="table">
                <table>
                    <thead>
                        <tr>
                            <th>
                                <h3>Nom</h3>
                            </th>
                            <th>
                                <h3>Prénom</h3>
                            </th>
                            <th>
                                <h3>Email</h3>
                            </th>
                            <th>
                                <h3>Date de naissance</h3>
                            </th>
                            <th>
                                <h3>Ville d'origine</h3>
                            </th>
                            <th>
                                <h3>Sexe</h3>
                            </th>
                            <th>
                                <h3>Formation</h3>
                            </th>
                        </tr>
                    </thead>  
                    <tbody>

                        
                        <?php
                        while($data = $recuperation -> fetch()) {
                            echo "<tr>";
                            echo "<td>".$data["Nom"]."</td>";
                            echo "<td>".$data["Prenom"]."</td>";
                            echo "<td>".$data["Email"]."</td>";
                            echo "<td>".$data["Dates_de_naissance"]."</td>";
                            echo "<td>Ouaga</td>";
                            echo "<td>".$data["Sexe"]."</td>";
                            echo "<td>Dev_web</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                  </table>
            </div>
        </div>
    </main>
</body>
</html>