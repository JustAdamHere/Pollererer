<?php require_once("./includes/kernel.php"); ?>

<!doctype html>

<html lang="en">
  <head>
    <?php include("./includes/head.php"); ?>
    <title>Notifications</title>
  </head>
  <body>
    <div class="wrapper">
      <?php include("./includes/header.php"); ?>
      <?php include("./includes/navigation.php"); ?>
      <div class="page-wrapper">
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">              
              <div class="col-12">
                <?php output_notifications(Inf); ?>
              </div>
            </div>
          </div>
        </div>
        <?php include("./includes/footer.php"); ?>
      </div>
    </div>

    <script src="./dist/js/tabler.min.js"></script>
    <script src="./dist/js/demo.min.js"></script>
  </body>
</html>

<?php include("./includes/db_disconnect.php"); ?>