@include('template.header')
@include('template.nav')
<main class="container text-center text-black mt-5">
    <!-- Avisos em Geral -->
    <div class="toast-container position-fixed bottom-0 right-0 p-3">
    </div>
    <br>
    <h2 class="mt-4 text-black" style="font-family: Nunito;" tabindex="0">Projetos Em Execução</h2>
    <p>Abaixo estão listados nossos projetos em fase de desenvolvimento</p>
    <div class="row my-4 g-2" id="projetos" params='disabled_at;status:=:1'>
    </div>
    <nav aria-label="Page navigation">
        <ul class="pagination" id="pagination">
        </ul>
    </nav>
</main>
@include('template.footer')
