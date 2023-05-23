<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?= $this->include('template-client/head'); ?>
  <!-- Conteúdo da página -->

  <?= $this->include('template-client/css-plugins'); ?>
  <?= $this->include('template-client/scripts'); ?>


</head>

<body>
  <!-- View Navbar -->
  <header class="pt-2">
    <?= $this->include('template-client/navbar'); ?>
  </header>

  <main>
    
    <?= $this->include('template-client/sidebar'); ?>
    


    <?php echo $this->renderSection('content'); ?>


  </main>

  <footer id="footer">
    <?= $this->include('template-client/footer'); ?>

  </footer>

</body>

</html>