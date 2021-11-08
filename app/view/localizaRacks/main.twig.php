{%extends 'partials/body.twig.php'%}

{%block title%}Localiza Racks - VW 100{%endblock%}

{%block body%}
<div class="map-container bg-white padding">
  <div class="side">
    <h3>Localização</h3>

    <form class="form">
      <div class="row">
        <div class="col-12">
          <label for="" class="form-label mt-4">Codigo Idendificador</label>
          <input type="text" name="" id="" class="form-control">
        </div>
      </div>
      <div class="row">
        <div class="col-12">
            <label for="" class="form-label mt-4">Modelede peça</label>
            <input type="text" name="" id="" class="form-control">
        </div>
      </div>
    </form>
  </div>
  <div class="map">
    {%include 'map/main.twig.php'%}
  </div>
</div>
{%endblock%}