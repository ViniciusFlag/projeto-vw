{%extends 'partials/body.twig.php'%}

{%block title%}Cadastro de Racks - Vw100{%endblock%}

{%block body%}
<div class="max-width center-screen bg-white padding">
  <div class="card border-primary mb-3" >
  <h3 class="card-header">Cadastro de Racks</h3>
  <div class="card-body">
    <form class="form-group">
      <div class="row">
        <div class="col-6">
          <label for="" class="form-label mt-4">Código Identificador:</label>
          <input type="text" name="" id="" class="form-control">
        </div>
        <div class="col-6">
          <label for="" class="form-label mt-4">Modelo da peça:</label>
          <input type="text" name="" id="" class="form-control">
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <label for="" class="form-label mt-4">Quantidade de peça suportadas:</label>
          <input type="text" name="" id="" class="form-control">
        </div>
        <div class="col-6">
          <label for="" class="form-label mt-4">Quantidade de peso suportadas:</label>
          <input type="text" name="" id="" class="form-control">
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
</div>
{%endblock%}