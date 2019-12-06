<?php
    require_once "libraries/qr/phpqrcode/qrlib.php";
    $tempDir = "./assets/images/qr/";
    $showDir = "assets/images/qr/";
    $subject = "My QR";
    $filename = "myqrimage";
    $body = "Hello World";
    $codeContents = "This is QR Content";
    QRcode::png($codeContents, $tempDir.''.$filename.'.png', QR_ECLEVEL_L, 2.9);
  ?>
  
   <div>
        <img src="<?php echo 'assets/img/qr/myqrimage.png'; ?>" alt="QR Image" class="img-responsive">
    </div>
