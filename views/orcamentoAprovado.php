<!-- Modal -->
<div class="modal fade" id="modalInfo" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="modalTitle">Dados do Orçamento</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- ... -->
        <form class="cadastro">
          <div class="row">
            <div class="col-md-12">
              <label for="email">Nome</label>
              <div class="form-group">
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Cliente" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="email">E-mail</label>
              <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail Cliente">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="">Deslocamento?</label>
              <div class="form-group">
                <label class="custom-toggle">
                  <input type="checkbox" id="check_deslocamento">
                  <span class="custom-toggle-slider rounded-circle"></span>
                </label>
              </div>
            </div>
            <div id="qtd_deslocamento" class="col-md-6 hidden">
              <label for="deslocamento">Distância</label>
              <div class="form-group">
                <input type="number" class="form-control" id="deslocamento" name="deslocamento" placeholder="KM">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8">
              <label for="email">Tipo de Área</label>
              <div class="form-group">
                <select name="tipo_area" class="form-control" id="tipo_area" required>
                  <option value="">Selecione um opção</option>
                  <option value="1">Abaixo de 50ha</option>
                  <option value="2">Acima de 50ha</option>
                  <option value="3">Abaixo de 50ha com fio</option>
                  <option value="4">Acima de 50ha sem fio</option>
                  <option value="5">Abaixo de 50ha com obstáculos</option>
                  <option value="6">Acima de 50ha com obstáculos</option>
                  <option value="7">Abaixo de 50ha com declive</option>
                  <option value="8">Acima de 50ha com declive</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <label for="email">Hectares</label>
              <div class="form-group">
                <input type="number" class="form-control" id="hectares" name="tamanho_area" placeholder="Hectares"
                  required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="">Hospedagem?</label>
              <div class="form-group">
                <label class="custom-toggle">
                  <input type="checkbox" id="check_hospedagem">
                  <span class="custom-toggle-slider rounded-circle"></span>
                </label>
              </div>
            </div>
            <div id="qtd_hospedagem" class="col-md-6 hidden">
              <label for="">Quantidade</label>
              <div class="form-group">
                <input type="number" class="form-control" id="hospedagem" name="hospedagem" placeholder="Dias">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="">Alimentação?</label>
              <div class="form-group">
                <label class="custom-toggle">
                  <input type="checkbox" id="check_alimentacao">
                  <span class="custom-toggle-slider rounded-circle"></span>
                </label>
              </div>
            </div>
            <div id="qtd_alimentacao" class="col-md-6 hidden">
              <label for="">Quantidade</label>
              <div class="form-group">
                <input type="number" class="form-control" id="alimentacao" name="alimentacao" placeholder="Dias">
              </div>
            </div>
          </div>
          <div class="row modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          </div>
        </form>
        <!-- ... -->
      </div>

    </div>
  </div>
</div>
<script>
function getInfo(id) {
  //alert(id);
  var base_url = `http://localhost/bydrones/`;
  $.ajax({
    type: "POST",
    url: base_url + "orcamentoaprovado/info/" + id,
    dataType: "json",
    success: function(budget) {
      $('#nome').val(budget.customer).prop('disabled', true);
      $('#email').val(budget.email).prop('disabled', true);

    }
  });

}
$(document).ready(function() {

});
</script>
<div class="container-fluid">

  <div class="col">
    <div class="card shadow">
      <div class="card-header border-0">
        <h3 class="mb-0">Vôos Confirmados</h3>
      </div>
      <div class="table-responsive">
        <table class="table align-items-center table-flush">
          <thead class="thead-light">
            <tr>
              <th scope="col">Cliente</th>
              <th scope="col">Valor </th>
              <th scope="col">Status</th>
              <th scope="col">Responsável</th>
              <th scope="col">Data</th>
              <th scope="col">Progresso</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <?php
          if (count($orcamentos) == 0) {
            echo '<tr><td class="no_result" colspan="100">Nenhum Orçamento Aprovado.</td></tr>';
          } else {
            foreach ($orcamentos as $orcamento) {
              $status = $this->checkProgress($orcamento['status_id']); ?>
            <tr>
              <th scope="row">
                <div class="media align-items-center">
                  <a href="#" class="avatar rounded-circle mr-3">
                    <img alt="Image placeholder" src=" <?php echo BASE_URL; ?>assets/img/brand/drone.svg">
                  </a>
                  <div class="media-body">
                    <span class="mb-0 text-sm"><?php echo $orcamento['customer'] ?></span>
                  </div>
                </div>
              </th>
              <td>
                <strong class="cursor" data-toggle="collapse" data-target="#items_<?php echo $orcamento['id'] ?>">R$
                  <?php echo number_format($orcamento['valor_total'], 2, ',', '.'); ?></strong>
                <i class="fa fa-search-dollar text-red modalInfo" onclick="getInfo(<?php echo $orcamento['id']; ?>)"
                  data-toggle="modal" data-target="#modalInfo"></i>
              </td>
              <td>
                <span class="badge badge-dot mr-4">
                  <i class="<?php echo $status['classe'] ?>"></i><?php echo $orcamento['status'] ?>
                </span>
              </td>
              <td>
                <div class="avatar-group">
                  <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Jessica Doe">
                    <img alt="Image placeholder" src=" <?php echo BASE_URL; ?>assets/img/theme/team-4-800x800.jpg"
                      class="rounded-circle">
                  </a>
                </div>
              </td>
              <td>
                <span class="badge badge-dot mr-4">
                  <?php echo $orcamento['data_agendamento'] ?>
                </span>
              </td>
              <td>
                <div class="d-flex align-items-center">
                  <span class="mr-2"><?php echo $status['percent'] ?>%</span>
                  <div>
                    <div class="progress">
                      <div class="progress-bar <?php echo $status['classe'] ?>" role="progressbar"
                        aria-valuenow="<?php echo $status['percent'] ?>" aria-valuemin="0" aria-valuemax="100"
                        style="width: <?php echo $status['percent'] ?>%;"></div>
                    </div>
                  </div>
                </div>
              </td>
              <td class="text-right">
                <div class="dropdown">
                  <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a class="dropdown-item" href="#">Confirmar Vôo</a>
                    <a class="dropdown-item" href="#">Reagendar Vôo</a>
                    <hr class="my-3">
                    <a class="dropdown-item" href="#">Marcar como Concluído</a>
                    <a class="dropdown-item" href="#">Cancelar Vôo</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr id="items_<?php echo $orcamento['id'] ?>" class="collapse in">
              <td colspan="100">
                <table class="align-items-center table-flush budget_detail">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">Item</th>
                      <th scope="col">Valor Unitário</th>
                      <th scope="col">Quantidade</th>
                      <th scope="col">Total Serviço</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?php
                              foreach ($this->showItems($orcamento['id']) as $item => $valor) { ?>

                      <td><?php echo $valor['name']; ?></td>
                      <td><strong>R$ <?php echo number_format($valor['unitario'], 2, ',', '.'); ?></strong></td>
                      <td><?php echo floatval($valor['weight_quantity']); ?></td>
                      <td><strong>R$ <?php echo number_format($valor['weight_total_value'], 2, ',', '.'); ?></strong>
                      </td>
                    </tr>
                    <?php
                          }
                          ?>
                    <tr class="budget_total">
                      <td colspan="2"></td>
                      <td>Valor Total:</td>
                      <td><strong>R$ <?php echo $orcamento['valor_total']; ?></strong></td>
                    </tr>
                  </tbody>
                </table>
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
              <a class="page-link" href="'. BASE_URL.'orcamentoAprovado?page='.($pagina_atual - 1).'" tabindex="-1">
                <i class="fas fa-angle-left"></i>
              </a>
            </li>':'';
            if($total_paginas > 1){
              for ($page = 1; $page <= $total_paginas; $page++){?>
            <li class="page-item 
                  <?php echo ( (!isset($_GET['page']) && $page == 1) || (isset($_GET['page']) && !empty($_GET['page'] && $_GET['page'] == $page)))?
                  'active':'' ?>">
              <a class="page-link"
                href="<?php echo BASE_URL.'orcamentoAprovado?page='.$page; ?>"><?php echo $page;?></a>
            </li>
            <?php
              }
            };           
            
            echo ($pagina_atual < $total_paginas) ?
            '<li class="page-item">
              <a class="page-link" href="'.BASE_URL.'orcamentoAprovado?page='.($pagina_atual + 1).'">
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