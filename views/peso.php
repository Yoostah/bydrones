<!-- Modal -->
<div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="modalTitle">Preencha as Informações do Peso</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- ... -->
        <form class="cadastro" method="POST" action="<?php echo BASE_URL; ?>peso/store">
          <div class="row">
            <div class="col-md-12">
              <label for="nome">Nome</label>
              <div class="form-group">
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="tipo_peso">Tipo de Peso</label>
              <div class="form-group">
                <select name="tipo_peso" class="form-control" id="tipo_peso" required>
                  <option value="">Selecione um opção</option>
                  <option value="4">Alimentação</option>
                  <option value="1">Área</option>
                  <option value="2">Deslocamento</option>
                  <option value="3">Hospedagem</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="valor">Valor</label>
              <div class="form-group">
                <input type="number" class="form-control" id="valor" name="valor" placeholder="R$" required>
              </div>
            </div>
          </div>
          <div class="row modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-primary">Salvar</button>
          </div>
          <input id="update" type="hidden" value="" name="update">
        </form>
        <!-- ... -->
      </div>
    </div>
  </div>
</div>
<script>
function resetModal() {
  $('#update').val('');
  $('#nome').val('');
  $('#valor').val('');
  $('#tipo_peso').val('');
}

function editInfo(id) {
  //alert(id);
  var base_url = `<?php echo BASE_URL ?>`;
  $.ajax({
    type: "POST",
    url: base_url + "peso/info/" + id,
    dataType: "json",
    success: function(peso) {
      console.log(peso);
      resetModal();
      $('#update').val(peso.id);
      $('#nome').val(peso.name);
      $('#valor').val(peso.value);
      $('#tipo_peso').val(peso.type);
    }
  });
}

$(document).ready(function() {

});
</script>
<div class="container-fluid">
  <div class="col">
    <div class="card shadow">
      <div class="card-header border-0 label_page">
        <h3 class="mb-0">Pesos</h3>
        <!-- Botão para acionar modal -->
        <button type="button" class="btn btn-sm btn-primary" onclick="resetModal()" data-toggle="modal"
          data-target="#modalCadastro">
          Novo Peso
        </button>
      </div>
      <div class="table-responsive">
        <table class="table align-items-center table-flush">
          <thead class="thead-light">
            <tr>
              <th scope="col">Nome</th>
              <th scope="col">Tipo</th>
              <th scope="col">Valor</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <?php 
          if(count($pesos) == 0){
            echo '<tr><td class="no_result" colspan="100">Nenhum Peso cadastrado.</td></tr>';
          }else{
            foreach ($pesos as $peso) {
            ?>
            <tr>
              <td><?php echo $peso['name']; ?></td>
              <td>
                <span class="badge badge-dot mr-4 badge-flex">
                  <?php if($peso['type_id'] == 1) $icone = 'ni ni-square-pin text-red';
                        elseif ($peso['type_id'] == 2) $icone = 'ni ni-delivery-fast text-success';
                        else $icone = 'ni ni-building text-primary';
                  ?>
                  <i class="<?php echo $icone ?>"></i><span class="bf-text"><?php echo $peso['type']; ?></span>
                </span>
              </td>
              <td><strong>R$ </strong><?php echo $peso['value']; ?></td>

              <td class="text-right">
                <div class="dropdown">
                  <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalCadastro"
                      onclick="editInfo(<?php echo $peso['id']; ?>)">Editar</a>
                  </div>
                </div>
              </td>
            </tr>
            <?php
            }
          }
          ?>

          </tbody>
        </table>
      </div>
      <div class="card-footer py-4">
        <nav>
          <?php 
            //Checar página atual
            $pagina_atual = min($total_paginas, filter_input(INPUT_GET, 'page', FILTER_VALIDATE_INT, array(
              'options' => array(
                  'default'   => 1,
                  'min_range' => 1,
              ),
            )));

            ?>
          <ul class="pagination justify-content-end mb-0">
            <?php 
            echo ($pagina_atual > 1) ?
            '<li class="page-item">
              <a class="page-link" href="'. BASE_URL.'peso?page='.($pagina_atual - 1).'" tabindex="-1">
                <i class="fas fa-angle-left"></i>
              </a>
            </li>':'';
            if($total_paginas > 1){
              for ($page = 1; $page <= $total_paginas; $page++){?>
            <li class="page-item 
                  <?php echo ( (!isset($_GET['page']) && $page == 1) || (isset($_GET['page']) && !empty($_GET['page'] && $_GET['page'] == $page)))?
                  'active':'' ?>">
              <a class="page-link" href="<?php echo BASE_URL.'peso?page='.$page; ?>"><?php echo $page;?></a>
            </li>
            <?php
              }
            };           
            
            echo ($pagina_atual < $total_paginas) ?
            '<li class="page-item">
              <a class="page-link" href="'.BASE_URL.'peso?page='.($pagina_atual + 1).'">
                <i class="fas fa-angle-right"></i>
              </a>
            </li>':'';
            ?>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>