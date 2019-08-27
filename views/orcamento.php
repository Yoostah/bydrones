<div class="container-fluid">
  <div class="col">
    <div class="card shadow">
      <div class="card-header border-0">
        <h3 class="mb-0">Orçamentos</h3>
      </div>
      <div class="table-responsive">
        <table class="table align-items-center table-flush">
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
          if(count($orcamentos) == 0){
            echo '<tr><td class="no_result" colspan="100">Nenhum Orçamento cadastrado.</td></tr>';
          }else{
            foreach ($orcamentos as $orcamento) {
              $status = $this->checkProgress($orcamento['status_id']);
            ?>
            <tr>
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
                R$2,500
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
            <?php
            }
          }
          ?>

          </tbody>
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