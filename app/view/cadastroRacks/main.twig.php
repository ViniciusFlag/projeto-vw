{%extends 'partials/body.twig.php'%}

{%block title%}Cadastro de Racks - Vw100{%endblock%}

{%block body%}
<div class="row max-width center-screen bg-white padding">
  <div class="col-12">
    <div class="row">
      <div class="col-11">
        <h3>Pesquisar Racks</h3>
      </div>
      <div class="col-1">
        <button class="btn btn-primary" onclick="incluir();">Incluir</button>
      </div>
    </div>

    <div class="row">
      <div class="col-3">
          <label for="" class="form-label mt-4">Código Identificador:</label>
          <input type="text" name="" id="" class="form-control">
      </div>
      <div class="col-3">
          <label for="" class="form-label mt-4">Modelo da peça:</label>
          <input type="text" name="" id="" class="form-control">
      </div>
      <div class="col-1">
        <button class="btn btn-primary btn-pesquisar">Pesquisar</button>
      </div>
    </div>
  </div>
</div>
<script>
  function incluir() {
    window.location = "http://localhost/vw-projeto/editarRacks/"
  }
</script>
{%endblock%}
