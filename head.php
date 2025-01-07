<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google-site-verification" content="1xsG3jwxALfLukgMmEtq0CITmIf-Ce3lbgR2Qm4fMdM" />
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Raleway&display=swap" rel="stylesheet">
  <?php global $headTitle; ?>
  <?php global $metaDescription; ?>
  <meta name='description' content="<?= $metaDescription; ?>" />
  <?php global $metaName; ?>
  <meta name='name' content="<?= $metaName; ?>" />
  <title> <?= $headTitle; ?></title>
</head>

<body>
  <header id="top">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">

        <a class="navbar-brand" href="index.php"><img src="assets/images/brain.png" alt="Logo" width="40"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                EVALUATIONS NEUROPSYCHOLOGIQUES
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="neuropsy.php">Définition</a>
                <a class="dropdown-item" href="neuropsy.php#pour-qui">Pour qui ?</a>
                <a class="dropdown-item" href="neuropsy.php#bilans"> Les Bilans</a>
                <a class="dropdown-item" href="neuropsy.php#déroulement">Le Déroulement</a>
                <a class="dropdown-item" href="neuropsy.php#durée">La durée</a>
                <a class="dropdown-item" href="neuropsy.php#remédiation-cognitive">La remédiation cognitive</a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                LES TCC
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="tcc.php#definition">Définition des T.C.C</a>
                <a class="dropdown-item" href="tcc.php#les-techniques">Les Techniques</a>
                <a class="dropdown-item" href="tcc.php#pour-qui">Pour qui ?</a>
                <a class="dropdown-item" href="tcc.php#déroulement">Le Déroulement</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="honoraires.php">
                HONORAIRES ET REMBOURSEMENT
              </a>
            </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      SE FORMER
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="organisme_de_formation.php#organisme-de-formation">Organisme de formation</a>
                      <a class="dropdown-item" href="organisme_de_formation.php#formations">Les formations</a>
                      <a class="dropdown-item" href="organisme_de_formation.php#inscriptions">inscriptions</a>
                      <a class="dropdown-item" href="organisme_de_formation.php#conditions-generales">Informations pratiques</a>
                  </div>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="references.php">REFERENCES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cabinet.php">LE CABINET</a>
            </li>

          </ul>

        </div>
      </div>

    </nav>

  </header>