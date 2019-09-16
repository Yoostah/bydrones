<!-- Modal -->
<div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="modalTitle">Preencha dos dados do Orçamento</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- ... -->
        <form class="cadastro" method="POST" action="<?php echo BASE_URL; ?>orcamento/store">
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
                  <option value="14">Pulverização (DIÁRIA)</option>
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
  $('#email').val('');
  $('#tipo_area').val('');
  $('#hectares').val('');
  $('#hospedagem').prop("required", false);
  $('#hospedagem').val('');
  $('#qtd_hospedagem').hide();
  $('#check_hospedagem').prop('checked', false);

  $('#alimentacao').prop("required", false);
  $('#alimentacao').val('');
  $('#qtd_alimentacao').hide();
  $('#check_alimentacao').prop('checked', false);

  $('#deslocamento').prop("required", false);
  $('#deslocamento').val('');
  $('#qtd_deslocamento').hide();
  $('#check_deslocamento').prop('checked', false);

}

function editInfo(id) {
  //alert(id);
  var base_url = `http://localhost:8080/bydrones/`;
  $.ajax({
    type: "POST",
    url: base_url + "orcamento/info/" + id,
    dataType: "json",
    success: function(budget) {
      resetModal();
      $('#update').val(budget.budget_id);
      $('#nome').val(budget.customer);
      $('#email').val(budget.email);
      $('#tipo_area').val(budget.area_id);
      $('#hectares').val(budget.Area);
      if (budget.Deslocamento != null) {
        $('#check_deslocamento').prop('checked', true);
        $('#qtd_deslocamento').show();
        $('#deslocamento').prop("required", true);
        $('#deslocamento').val(budget.Deslocamento);
      }
      if (budget.Alimentação != null) {
        $('#check_alimentacao').prop('checked', true);
        $('#qtd_alimentacao').show();
        $('#alimentacao').prop("required", true);
        $('#alimentacao').val(budget.Alimentação);
      }
      if (budget.Hospedagem != null) {
        $('#check_hospedagem').prop('checked', true);
        $('#qtd_hospedagem').show();
        $('#hospedagem').prop("required", true);
        $('#hospedagem').val(budget.Hospedagem);
      }
    }
  });

}
$(document).ready(function() {
  $('#check_hospedagem').click(function() {
    var check = document.getElementById("check_hospedagem");
    if (check.checked) {
      $('#qtd_hospedagem').show();
      $('#hospedagem').prop("required", true);
    } else {
      $('#qtd_hospedagem').hide();
      $('#hospedagem').prop("required", false);
    }

  });

  $('#check_alimentacao').click(function() {
    var check = document.getElementById("check_alimentacao");
    if (check.checked) {
      $('#qtd_alimentacao').show();
      $('#alimentacao').prop("required", true);
    } else {
      $('#qtd_alimentacao').hide();
      $('#alimentacao').prop("required", false);
    }

  });

  $('#check_deslocamento').click(function() {
    var check = document.getElementById("check_deslocamento");
    if (check.checked) {
      $('#qtd_deslocamento').show();
      $('#deslocamento').prop("required", true);
    } else {
      $('#qtd_deslocamento').hide();
      $('#deslocamento').prop("required", false);
    }

  });
});
</script>
<div class="container-fluid">
  <div class="col">
    <div class="card shadow">
      <div class="card-header border-0 label_page">
        <h3 class="mb-0">Orçamentos</h3>
        <!-- Botão para acionar modal -->
        <button type="button" class="btn btn-sm btn-primary" onclick="resetModal()" data-toggle="modal"
          data-target="#modalCadastro">
          Novo Orçamento
        </button>
      </div>
      <div class="table-responsive">
        <table class="table align-items-center">
          <thead class="thead-light">
            <tr>
              <th scope="col">Cliente</th>
              <th scope="col">Valor</th>
              <th scope="col">Data</th>
              <th scope="col">Status</th>
              <th scope="col">Responsável</th>
              <th scope="col">Progresso</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <?php
            if (count($orcamentos) == 0) {
              echo '<tr><td class="no_result" colspan="100">Nenhum Orçamento cadastrado.</td></tr>';
            } else {
              foreach ($orcamentos as $orcamento) {
                //print_r($orcamentos);
                $status = $this->checkProgress($orcamento['status_id']);
                ?>
            <tr class="">
              <th scope="row">
                <div class="media align-items-center">
                  <a href="#" class="avatar rounded-circle mr-3">
                    <img alt="Image placeholder" src="<?php echo BASE_URL; ?>assets/img/brand/drone.svg">
                  </a>
                  <div class="media-body">
                    <span class="mb-0 text-sm"><?php echo $orcamento['customer'] ?></span>
                  </div>
                </div>
              </th>
              <td class="cursor" data-toggle="collapse" data-target="#items_<?php echo $orcamento['id'] ?>">
                <strong>R$ <?php echo number_format($orcamento['valor_total'], 2, ',', '.') ?></strong>
              </td>
              <td>
                <strong><?php echo $orcamento['createdAt'] ?></strong>
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
                    <a class="dropdown-item <?php echo (empty($orcamento['email']))?'isDisabled':''; ?>"
                      onclick="return <?php echo (empty($orcamento['email']))?'false':'true'; ?>"
                      href="<?php echo (empty($orcamento['email']))? '':BASE_URL . 'email/orcamento/' . $orcamento['id'] ?>"><i
                        class="fa fa-envelope"></i>Enviar por E-mail</a>
                    <a class="dropdown-item" href="<?php echo BASE_URL . 'orcamento/geraPDF/' . $orcamento['id'] ?>"><i
                        class="far fa-file-pdf"></i>Gerar PDF</a>
                    <hr class="my-3">
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalCadastro"
                      onclick="editInfo(<?php echo $orcamento['id']; ?>)">Editar</a>
                    <hr class="my-3">
                    <a class="dropdown-item text-green"
                      href="<?php echo BASE_URL . 'orcamento/aprovarOrcamento/' . $orcamento['id'] ?>"><i
                        class="ni ni-check-bold"></i>Aprovar</a>
                    <a class="dropdown-item text-red"
                      href="<?php echo BASE_URL . 'orcamento/reprovarOrcamento/' . $orcamento['id'] ?>"><i
                        class="fa fa-ban"></i>Reprovar</a>
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
                } ?>
          </tbody>
          <?php
        }
        ?>
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
              <a class="page-link" href="'. BASE_URL.'orcamento?page='.($pagina_atual - 1).'" tabindex="-1">
                <i class="fas fa-angle-left"></i>
              </a>
            </li>':'';
            if($total_paginas > 1){
              for ($page = 1; $page <= $total_paginas; $page++){?>
            <li class="page-item 
                  <?php echo ( (!isset($_GET['page']) && $page == 1) || (isset($_GET['page']) && !empty($_GET['page'] && $_GET['page'] == $page)))?
                  'active':'' ?>">
              <a class="page-link" href="<?php echo BASE_URL.'orcamento?page='.$page; ?>"><?php echo $page;?></a>
            </li>
            <?php
              }
            };           
            
            echo ($pagina_atual < $total_paginas) ?
            '<li class="page-item">
              <a class="page-link" href="'.BASE_URL.'orcamento?page='.($pagina_atual + 1).'">
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