<html>
    <h1>Hello world!<h1><br />
    <!-- <h1><?php echo "Hello ".($_ENV["NAME"]?$_ENV["NAME"]:"world")."!"; ?></h1> -->
    <?php if($_ENV["HOSTNAME"]) {?><h1>My hostname is <?php echo $_ENV["HOSTNAME"]; ?></h1><?php } ?>
    <?php if($_ENV["HOST_NAME"]) {?><h1>My hostname is <?php echo $_ENV["HOST_NAME"]; ?></h1><?php } ?>
 </html>
