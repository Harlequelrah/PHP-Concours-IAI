<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../infopage/infopage.css">
    <link rel="stylesheet" href="../infopage/info_tableau.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../navbars-offcanvas/navbars-offcanvas.css"> -->
    <link rel="stylesheet" href="<?php echo '../theme/couleur' . $_GET['couleur'] . '.css'; ?>">
</head>

<body>
    <table>
        <tr>
            <td>
                <div class="space">
                    <a class="lien" href="javascript:void(0);" onclick="parent.updateInfopage('<?php echo '../infopage/info1.php?couleur=' . $_GET['couleur'];?>')" target="infopage">INFORMATION GENERALE</a>
                </div>
            </td>
            <td>
                <div class="space">
                    <a class="lien" href="javascript:void(0);" onclick="parent.updateInfopage('<?php echo '../infopage/info3.php?couleur=' . $_GET['couleur']; ?>')" target="infopage">LE TEST D'ADMISSION</a>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="space">
                    <a class="lien" href="javascript:void(0);" onclick="parent.updateInfopage('<?php echo '../infopage/info2.php?couleur=' . $_GET['couleur'];?>')" target="infopage">DOSSIER</a>
                </div>
            </td>
            <td>
                <div class="space">
                    <a class="lien" href="javascript:void(0);" onclick="parent.updateInfopage('<?php echo '../infopage/info4.php?couleur=' . $_GET['couleur'];?>')" target="infopage">LES FORMATIONS ET CERTIFICATIONS</a>
                </div>
            </td>
        </tr>
</table>
    <!-- <nav>
        <nav id="ok" class="navbar navbar-dark bg-dark" aria-label="Dark offcanvas navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">IAI-TOGO Institut Africain D'Informatique</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarDark" aria-controls="offcanvasNavbarDark" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbarDark" aria-labelledby="offcanvasNavbarDarkLabel">
                    <div class="offcanvas-header">
                        <a class="nav-item" aria-current="page" href="javascript:void(0);" onclick="updateaffichage('infopage.html')" target="affichage">
                            <h5 class="offcanvas-title" id="offcanvasNavbarDarkLabel">INFORMATIONS RELATIVES AU CONCOURS</h5>
                        </a>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);" onclick="parent.updateaffichage('<?php //echo '../infopage/info1.php?couleur=' . $_GET['couleur'];
                                                                                                                ?>')" target="infopage">INFORMATION GENERALE</a>
                    </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" onclick="parent.updateaffichage('<?php //echo '../infopage/info3.php?couleur=' . $_GET['couleur'];
                                                                                                        ?>')" target="infopage">LE TEST D'ADMISSION</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" onclick="parent.updateaffichage('<?php //echo '../infopage/info2.php?couleur='.$_GET['couleur'];
                                                                                                        ?>')" target="infopage">DOSSIER</a>
                    </li>
                    <li class="nav-item">
                    <a class="lien" href="javascript:void(0);" onclick="parent.updateInfopage('<?php //echo '../infopage/info4.php?couleur='.$_GET['couleur'];
                                                                                                ?>')" target="infopage">LES FORMATIONS ET CERTIFICATIONS</a>
                    </li>
                    </ul>
                </div>
            </div>
            </div>
        </nav>
        <nav class="navbar"> -->


</body>

</html>

