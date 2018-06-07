<?php require('includes/header.php'); ?>

<div class="container-fluid" style="text-align: center;">
  <?php if(isset($allusers) && count($allusers)>=1) {?>
        <div class="col-lg-12">
            <h3>Profesor</h3>
            <hr/>
        </div>
         <section class="col-lg-7 producto" style="height:400px;overflow-y:scroll;">
            <?php foreach($allusers as $user) {?>
                <?php echo $user->id; ?> -
                <?php echo $user->nombre; ?> -
                <?php echo $user->email; ?>
                <hr/>
            <?php } ?>
        </section>
<?php } ?>

</div>

<?php require('includes/footer.php'); ?>
