<!-- Modal -->
<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Preencha dos dados do Orçamento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- ... -->
        <form>
          <div class="row">
            <div class="col-md-12">
              <label for="email">Nome</label>
              <div class="form-group">
                <input type="email" class="form-control" id="nome" placeholder="Nome Cliente">
              </div>
            </div>  
          </div>          
          <div class="row">
            <div class="col-md-12">
              <label for="email">E-mail</label>
              <div class="form-group">
                <input type="email" class="form-control" id="email" placeholder="E-mail Cliente">
              </div>
            </div>  
          </div>
          <div class="row">
            <div class="col-md-8">
              <label for="email">Tipo de Área</label>
              <div class="form-group">
                <select name="tipo_area" class="form-control" id="tipo_area">
                  <option value="-1">Selecione um opção</option>
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
                <input type="number" class="form-control" id="hectares" placeholder="Hectares">
              </div>
            </div>  
          </div> 
          <div class="row">
            <div class="col-md-6">
              <label for="">Hospedagem?</label>
              <div class="form-group">
                <label class="custom-toggle">
                  <input type="checkbox">
                  <span class="custom-toggle-slider rounded-circle"></span>
                </label>
              </div>  
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="number" class="form-control" id="metragem" placeholder="Quantidade">
              </div>
            </div>          
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="">Alimentação?</label>
              <div class="form-group">
                <label class="custom-toggle">
                  <input type="checkbox">
                  <span class="custom-toggle-slider rounded-circle"></span>
                </label>
              </div>  
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="number" class="form-control" id="metragem" placeholder="Quantidade">
              </div>
            </div>          
          </div>
        </form>
        <!-- ... -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Salvar mudanças</button>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="col">
    <div class="card shadow">
      <div class="card-header border-0 label_page">
        <h3 class="mb-0">Orçamentos</h3>
        <!-- Botão para acionar modal -->
        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalExemplo">
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
                //print_r($orcamento);
                $status = $this->checkProgress($orcamento['status_id']);
                ?>
            <tr class="accordion-toggle" data-toggle="collapse" data-target="#collapseOne">
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
              <td>
                <strong>R$ <?php echo $orcamento['valor_total'] ?></strong>
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
                    <a class="dropdown-item" href="#">Enviar por E-mail</a>
                    <hr class="my-3">
                    <a class="dropdown-item" href="#">Editar</a>
                    <a class="dropdown-item" href="#">Aprovar</a>
                    <a class="dropdown-item" href="#">Reprovar</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr id="collapseOne" class="collapse in">
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
                      <td><strong>R$ <?php echo $valor['unitario']; ?></strong></td>
                      <td><?php echo floatval($valor['weight_quantity']); ?></td>
                      <td><strong>R$ <?php echo $valor['weight_total_value']; ?></strong></td>
                    </tr>
                    <?php
                          }
                          ?>
                    <tr class="budget_total">
                      <td colspan="2"></td>
                      <td>Valor Total:</td>
                      <td><strong>R$ <?php echo $orcamento['valor_total']; ?></strong></td>
                    </tr>
                    <?php
                      } ?>
                  </tbody>
                </table>

              </td>
            </tr>
            <!-- <tr id="collapseOne" class="collapse in">
              
            </tr> -->
          </tbody>
          <?php
        }
        ?>
        </table>
      </div>
      <div class="card-footer py-4">
        <nav aria-label="...">
          <ul class="pagination justify-content-end mb-0">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1">
                <i class="fas fa-angle-left"></i>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item active">
              <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">
                <i class="fas fa-angle-right"></i>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>