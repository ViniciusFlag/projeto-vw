{%extends 'partials/body.twig.php'%}

{%block title%}Exibir de Racks - Vw100{%endblock%}

{%block body%}

<script>
  function voltar() {
    window.location = "http://localhost/vw-projeto/cadastroRacks/";
  }
</script>

<div class="row row max-width center-screen bg-white padding">
  <div class="col-12">
    <div class="row">
      <div class="col-9">
        <h3>Exibir de Racks</h3>
      </div>
      <div class="col-3">
        <button class="btn btn-primary">
          <i class="fas fa-save"></i> Salvar
        </button>
        <button class="btn btn-primary" onclick="voltar()">
          <i class="fas fa-arrow-left"></i> Voltar
        </button>
      </div>
    </div>

    <form class="form-group">
        <div class="row">
          <div class="col-6">
            <label for="" class="form-label mt-4">Código Identificador:</label>
            <input type="text" name="" id="" class="form-control">
          </div>
          <div class="col-6">
            <label for="" class="form-label mt-4">Modelo da peça:</label>
            <input type="text" name="" id="" class="form-control" disabled>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <label for="" class="form-label mt-4">Quantidade de peça suportadas:</label>
            <input type="text" name="" id="" class="form-control" disabled>
          </div>
          <div class="col-6">
            <label for="" class="form-label mt-4">Quantidade de peso suportadas:</label>
            <input type="text" name="" id="" class="form-control" disabled>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <label for="" class="form-label mt-4">Identificador do GPS:</label>
            <input type="text" name="" id="" class="form-control">
          </div>
        </div>
    </form>
  </div>
</div>
{%endblock%}