@component('layouts/layout-raw', ['customCss' => 'login'])
<div class="login">
    <div class="card p-4">
        <div class="card-content">
            <div class="content">
                <img src="images/UERJ-Bank-logo.png" class="logo" />
                <h1 class="title is-4 has-text-centered">Acesse sua conta!</h1>
                <form action="entrar" method="post">
                    <div class="columns">
                        <div class="column">
                            <div class="control">
                                <input class="input" type="text" name="email" placeholder="E-mail">
                            </div>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <div class="control">
                                <input class="input" type="password" name="password" placeholder="Senha">
                            </div>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <div class="control">
                                <button class="button is-link is-fullwidth" type="submit">Entrar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endcomponent