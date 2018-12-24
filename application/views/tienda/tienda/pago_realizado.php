<?php header( "Refresh:5; url=http://www.example.com/page2.php", true, 303);
 ?>

<?php  $paymentId = $_GET['paymentId']; ?>
<?php if ($estado_pago == true): ?>
  <center> <h4>SU PAGO HA SIDO REALIZADO el ID es <?php echo $paymentId ?> </h4>  </center>
    <?php else: ?>
      <center> <h4>SU PAGO NO HA SIDO REALIZADO </h4>  </center>

<?php endif; ?>
