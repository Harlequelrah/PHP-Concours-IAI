<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="InscriptionConcours.css">
    <title>Formulaire d'inscription</title>
    <style>
          body {
            margin: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #23242a;
        }

        .box {
            position: relative;
            width: 1000px;
            background: #1c1c1c;
            border-radius: 8px;
            overflow: hidden;
            margin-top: 20px;
        }

        .box::before,
        .box::after,
        .borderLine::before,
        .borderLine::after {
            /* Styles inchangés */
        }

        form {
            padding: 20px;
        }

        table {
            width: 100%;
        }

        table tr {
            margin-bottom: 10px;
        }

        table td {
            padding: 10px;
        }

        table .inputBox {
            position: relative;
        }

        table .inputBox input,
        table .inputBox select {
            width: 100%;
            padding: 10px;
            background: transparent;
            outline: none;
            border: none;
            box-shadow: none;
            color: #23242a;
            font-size: 1em;
            letter-spacing: 0.05em;
            transition: 0.5s;
        }

        table .inputBox span {
            position: absolute;
            left: 0;
            padding: 15px 0px 5px;
            pointer-events: none;
            color: #8f8f8f;
            font-size: 1em;
            letter-spacing: 0.05em;
            transition: 0.5s;
        }

        table .inputBox i {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 2px;
            background: #ffb42a;
            border-radius: 4px;
            overflow: hidden;
            transition: 0.5s;
            pointer-events: none;
        }

        table .inputBox input:valid~i,
        table .inputBox input:focus~i,
        table .inputBox select:valid~i,
        table .inputBox select:focus~i {
            height: 24px;
        }

        table .inputBox input:valid~span,
        table .inputBox input:focus~span,
        table .inputBox select:valid~span,
        table .inputBox select:focus~span {
            color: #ffb42a;
            font-size: 0.75em;
            transform: translateY(-30px);
        }

        /* Autres styles... */
    </style>
</head>

<body>
    <div class="box">
        <span class="borderLine"></span>
        <form method="POST" action="submitInscriptionConcours.php" enctype="multipart/form-data">
            <p align="center">Utilisateur:<a href="../supplement/logout.php"><?php echo $_SESSION['LOGGED_USER']; ?></a></p>
            <h2>Formulaire d'Inscription</h2>
            <table>
                <tr>
                    <td>
                        <div class="inputBox">
                            <label>
                                <span>Nom</span>
                                <input type="text" name="nom" required>
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="inputBox">
                            <label>
                                <span>Prénoms</span>
                                <input type="text" name="prenom" required>
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="inputBox">
                            <label>
                                <span>Insérer photo</span>
                                <input type="file" id="pdfile1" name="file1" accept="image/*">
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="inputBox">
                            <label>
                                <span>Date de naissance</span>
                                <input type="date" required name="date_naissance">
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="inputBox">
                            <label>
                                <span>Nationalité</span>
                                <select name="nat">
                                    <option value="algerienne">Algérienne</option>
                                    <option value="angolaise">Angolaise</option>
                                    <!-- Ajoutez d'autres options pour la nationalité ici -->
                                </select>
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="inputBox" style="display:flex;">
                            <label style="margin-right:100px">
                                <span>Serie</span>
                                <select name="serie" required>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                    <option value="F1">F1</option>
                                    <option value="F2">F2</option>
                                </select>
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="inputBox">
                            <label>
                                <span>Année Obtention Bac II</span>
                                <input type="number" min="2021" max="2023" name="bacII" required>
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="HumanSex">
                            <span class="sexe">
                                <span>SEXE</span>
                            </span>
                            <span class="mascu">
                                <label>
                                    <span>M</span>
                                    <input type="radio" name="sexe" value="M" required>
                                </label>
                            </span>
                            <span class="femi">
                                <label>
                                    <span>F</span>
                                    <input type="radio" name="sexe" value="F">
                                </label>
                            </span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="inputBox">
                            <label>
                                <span>Acte de naissance</span>
                                <input type="file" id="pdfile2" name="document_naissance" accept=".pdf">
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="inputBox">
                            <label>
                                <span>Copie de la Nationnalité</span>
                                <input type="file" id="pdfile3" name="document_nationalite" accept=".pdf">
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="inputBox">
                            <label>
                                <span>Attestation du BAC II</span>
                                <input type="file" id="pdfile4" name="document_attestation_bac" accept=".pdf">
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div style="display:flex">
                            <input type="submit" value="Soumettre" onclick="acceptation()">
                        </div>
                    </td>
                </tr>
            </table>
        </form>
        <script language="javascript" src="InscriptionConcours.js"></script>
    </div>
</body>

</html>
