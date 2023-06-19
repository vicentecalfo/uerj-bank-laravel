@component('layouts/layout-sidebar')
    @slot('activePath') {{ $activePath }} @endslot
    <div class="columns">
        <div class="column">
            <h2 class="title">Painel Inicial</h2>
        </div>
      </div>
      <div class="columns">
        <div class="column">
          <div class="card">
            <div class="card-content">
              <div class="extrato">
                <span>
                  <h3 class="title is-3">8000</h3>
                  <small>Seu limite atual é de 1000.</small>
                </span>
                <span>
                  <a href="extrato" class="button is-link">Ver extrato</a>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
@endcomponent