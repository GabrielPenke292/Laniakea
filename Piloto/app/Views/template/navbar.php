<div class="container d-flex align-items-center justify-content-between">

    <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>Laniakea</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    </div>

    <nav id="navbar" class="navbar">
        <ul>
            <li><a class="nav-link scrollto <?= $page == 'home' ? 'active' : '' ?>" href="/">Home</a></li>
            <li><a class="nav-link scrollto <?= $page == 'dados' ? 'active' : '' ?>" href="dados">Dados</a></li>
            <li><a class="nav-link scrollto <?= $page == 'links' ? 'active' : '' ?>" href="links">Links</a></li>
            <li><a class="nav-link scrollto <?= $page == 'projeto' ? 'active' : '' ?>" href="projeto">O Projeto</a></li>
            
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

</div>