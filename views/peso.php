<div class="container-fluid">
  <div class="col">
    <div class="card shadow">
      <div class="card-header border-0">
        <h3 class="mb-0">Pesos</h3>
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

              <!-- <td class="text-right">
                <div class="dropdown">
                  <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a class="dropdown-item" href="#">Editar</a>
                  </div>
                </div>
              </td> -->
            </tr>
            <?php
            }
          }
          ?>

          </tbody>
        </table>
      </div>
      <!-- <div class="card-footer py-4">
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
      </div> -->
    </div>
  </div>
</div>