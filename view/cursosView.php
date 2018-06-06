<?php require('includes/header.php'); ?>

<div class="container-fluid">
	<p>Contenido</p>


  <?php if(isset($allcourses) && count($allcourses)>=1) {?>
        <div class="col-lg-7">
            <h3>Cursos</h3>
            <hr/>
        </div>
         <section class="col-lg-12">
            <?php foreach($allcourses as $curso) {?>
                <?php echo $curso->id; ?> -
                <?php echo $curso->nombre; ?>
                <hr/>
            <?php } ?>
        </section>
<?php } ?>

</div>

<?php require('includes/footer.php'); ?>
