{%extends 'partials/body.twig.php'%}

{%block title%}Pagina não encontrada - Mini Framework{%endblock%}

{%block body%}
<div class="alert alert-dismissible alert-danger">
  <div class="card-header"><h3 class="card-title">{{title}}</h3></div>
  <div class="card-body">
    <p class="card-text">{{message}}</p>
  </div>
</div>
{%endblock%}

