<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?= $this->include('template-client/head'); ?>
  <!-- Conteúdo da página -->

  <?= $this->include('template-client/scripts'); ?>


</head>

<body>
  <!-- View Navbar -->
  <header class="pt-2">
    <?= $this->include('template-client/navbar'); ?>





  </header>

  <main>
    <div class="page-content">
      <!-- Main content -->
      <div class="content-wrapper">
        <!-- Inner content -->
        <div class="content-inner">
          <div class="col-3">
            <?= $this->include('template-client/sidebar'); ?>

          </div>
          <div class="col-md-9">
            <?php echo $this->renderSection('content'); ?>

          </div>
        </div>
        <!-- /inner content -->
      </div>
      <!-- /main content -->
    </div>

  </main>

  <footer id="footer">
    <?= $this->include('template-client/footer'); ?>

  </footer>

</body>

</html>