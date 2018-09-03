<template>
    <div class="container">
        <section class="section">
            <div class="box has-background-light">
                <h2 class="title is-2 has-text-centered">Planejador CP (UFMA)</h2>
                <nav class="level">
                    <div class="level-item">
                        <div>
                            <p class="title">Bem vindo!</p>
                            <p class="heading">Essa aplicação foi desenvolvida para auxiliar estudantes<br> de Ciência da Computação da Universidade Federal do Maranhão, de forma a <br> planejar as disciplinas a serem cursadas e completar a carga horária do curso.
                            </p>
                            <p class="heading">Para começar, preencha seu nome e matrícula nos campos ao lado.
                            </p>
                        </div>
                    </div>
                    <div class="level-item">
                        <form method="POST" action="/login">
                        <input type="hidden" name="_token" :value="csrf">
                            <div class="field">
                                <label class="label">Nome</label>
                                <div class="control">
                                    <input class="input" type="text" id="nome" name="nome" required>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Matrícula</label>
                                <div class="control">
                                    <input class="input" type="text" id="matricula" name="matricula" required>
                                </div>
                            </div>
                            <div class="field is-pulled-right">
                                <div class="control">
                                    <button type="submit" class="button is-link">
                                        Entrar
                                    </button>
                                </div>
                            </div>
                        </form>                        
                    </div>
                </nav>
            </div>
        </section>
        <footer class="footer">
            <div class="content has-text-centered">
                <p class="has-text-link">
                    Planejador CP foi feito por Jorge Ribeiro.
                </p>
                <p>
                    <a target="_blank" href="https://www.linkedin.com/in/joorgeribeeiro/">
                        <i class="fab fa-linkedin-in fa-2x"></i>
                    </a>
                    &nbsp;
                    <a target="_blank" href="https://github.com/jorgimello">
                        <i class="fab fa-github fa-2x"></i>
                    </a>
                    &nbsp;
                    <a target="_blank" href="https://www.facebook.com/joorgeribeeiro">
                        <i class="fab fa-facebook fa-2x"></i>
                    </a>
                </p>
            </div>
        </footer>
    </div>
</template>

<script>
export default {
    data() {
        return {
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    }
};
</script>

<style>
</style>