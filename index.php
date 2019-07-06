<html>
    <h1><?php echo "Hello ".($_ENV["NAME"]?$_ENV["NAME"]:"world")."!"; ?></h1>
    <?php if($_ENV["HOSTNAME"]) {?><h3>My hostname is <?php echo $_ENV["HOSTNAME"]; ?></h3><?php } ?>
    <?php if($_ENV["HOST_NAME"]) {?><h3>My hostname is <?php echo $_ENV["HOST_NAME"]; ?></h3><?php } ?>
 </html>
