<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?= $this->include('template/head'); ?>
  <!-- Conteúdo da página -->

  <?= $this->include('template/scripts'); ?>

  <style>
    #footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      text-align: center;
    }
  </style>
</head>

<body>
  <!-- View Navbar -->
  <header class="pt-2">
    <?= $this->include('template/navbar'); ?>

  </header>

  <main>
    <div class="page-content">
      <!-- Main content -->
      <div class="content-wrapper">
        <!-- Inner content -->
        <div class="content-inner">
          <?php echo $this->renderSection('content'); ?>
        </div>
        <!-- /inner content -->
      </div>
      <!-- /main content -->
    </div>

  </main>

  <footer id="footer">
    <?= $this->include('template/footer'); ?>

  </footer>

</body>

</html>