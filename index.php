<?php
    $umur = 18;
    $status = "mahasiswa";
    $hasil = "";

    if($umur > 19 && $status == "mahasiswa") {
        $hasil = "berhak menerima mahasiswa";
    } else {
        $hasil = "tidak berhak menerima beasiswa";
    }
?>


<?php
  $brandName = "✨Jiha Beads✨";
  $tagline = "Chic, Solid, and Vibes";
  $catalogText = "Catalog";
  $orderText = "How to Order";
  $contactText = "Kontak";
  $imageSrc = "gelang1.jpg";
  $formTitle = "Your Email, please!";
  $formHelpText = "We'll never share your email with anyone else.";
  $passwordLabel = "Password";
  $checkboxText = "Check me out";
  $buttonText = "Send!";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap PHP Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand text-danger p-3" href="#"><?php echo $brandName; ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active text-danger p-3" href="#"><?php echo $catalogText; ?></a>
            <a class="nav-link text-danger p-3" href="#"><?php echo $orderText; ?></a>
            <a class="nav-link text-danger p-3" href="#"><?php echo $contactText; ?></a>
          </div>
        </div>
      </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <img src="<?php echo $imageSrc; ?>" class="img-fluid"/>
            </div>
            <div class="col-12 col-lg-6">
                <div class="bg-white text-danger p-4 text-align">
                    <h1 class="text-danger"><?php echo $brandName; ?></h1> 
                    <h4 class="text-danger"><?php echo $tagline; ?></h4>
                </div>
            </div>
        </div>
    
        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"><?php echo $formTitle; ?></label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"><?php echo $formHelpText; ?></div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"><?php echo $passwordLabel; ?></label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1"><?php echo $checkboxText; ?></label>
          </div>
          <button type="submit" class="btn btn-warning"><?php echo $buttonText; ?></button>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>