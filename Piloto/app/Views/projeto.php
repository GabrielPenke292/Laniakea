<?= $this->extend('template/layout'); ?>



<header>
    <?= $this->include('template/navbar'); ?>

</header>


<main class="mt-5">

    <div class="section-title">
        <h2>O Projeto</h2>
        <p>Entendendo Laniakea...</p>
    </div>


</main>
<!-- ======= F.A.Q Section ======= -->
<section id="faq" class="faq section-bg">
    <div class="container">


        <ul class="faq-list" data-aos-delay="100">
            <li>
                <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">O que é Laniakea? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                    <p>
                        Um país fictício. Existe apenas na cabeça desse humilde dev.
                    </p>
                </div>
            </li>

            <li>
                <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Por que foi criado? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                    <p>
                    A idéia é criar um ambiente onde diversos projetos possam ser desenvolvidos simulando um grau de complexidade mais próximo do real. Por exemplo: Em Laniakea existe um banco federal, e um sistema de cadastro de pessoas (Como se fosse o registro onde tira certidão de nascimento no Brasil). Uma pessoa pode ser registrada nesse sistema (chamado SLCP, sistema laniaker de cadastro de pessoas) e posteriormente criar uma conta bancária no banco federal. O sistema bancário jamais pode aceitar criar uma conta sem que o DI (Documento de identificação) exista no SLCP.
                    </p>
                    <p>
                    Outros sistemas criados também tem dependência entre sí, criando assim um organismo que gera a complexidade próxima a de um país de verdade.
                    </p>
                    <p>
                    Outro exemplo é o sistema educacional. Em Laniakea existem universidades públicas. Para realizar uma matrícula é necessário o HA (Histórico acadêmico) do ensino básico.
                    </p>
                    <p>
                    Outros sistemas vão sendo implantados com o tempo, e em alguns casos a idéia é burocratizar mesmo. Em um segundo momento surgem novos projetos com recursos similares, mas que visam competir no mesmo segmento, como por exemplo uma startup que cria um banco digital com um processo mais simples de criação de conta (mas sempre respeitando as regras do Banco Federal).
                    </p>
                </div>
            </li>

            <li>
                <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Quando surgiu o projeto? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                    <p>
                    A idealização do projeto surgiu no começo de 2022, mas o conceito era mais simples, sendo apenas um laboratório de desenvolvimento para meus estudos de programação. Com o tempo a complexidade foi aumentando, mas o projeto permaneceu em ambiente local. No final de 2022, resolvi subir o projeto para um servidor compartilhado para que outras pessoas possam acessar também.
Nem todos os sistemas do projeto já subiram, e novos sistemas estão sendo criados.
                    </p>
                </div>
            </li>

            

        </ul>

    </div>
</section><!-- End F.A.Q Section -->