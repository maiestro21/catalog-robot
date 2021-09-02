<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme/vendor/datatables/datatables.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/jquery/jquery-ui.css">
<div class="container-fluid">

  <div class="row">

    <div class="col-12">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800"><b>Lista roboti</b></h1>
      </div>
    </div>
  </div>



  <div class="row">
    <div class="col-12">
      <div class="card-body small">
        <div class="table-responsive">
          <table class="table table-bordered sorting" id="tabelRoboti" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>ID</th>
                <th>Producator</th>
                <th>Nume</th>
                <th>Categorie</th>
                <th>Descriere scurta</th>
                <th></th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>ID</th>
                <th>Producator</th>
                <th>Nume</th>
                <th>Categorie</th>
                <th>Descriere scurta</th>
                <th></th>
              </tr>
            </tfoot>
            <tbody>
              <?php foreach ($roboti as $robot) : ?>
                <tr>
                  <td><?= $robot->id_robot; ?></td>
                  <td><?= $robot->nume_producator; ?></td>
                  <td><?= $robot->nume; ?></td>
                  <td><?= $robot->categorie; ?></td>
                  <td><?php echo nl2br($robot->scurta_descriere); ?></td>
                  <td>
                    <a href="/roboti/vizualizare_robot/<?= $robot->id_robot ?>"><button class='btn btn-primary' type='button'>
                        <span class='fas fa-eye'></span>
                      </button></a>

                    <a href="/roboti/editeaza_robot/<?= $robot->id_robot ?>">
                      <button class='btn btn-dark' type='button'>
                        <span class='fas fa-pen'></span>
                      </button>
                    </a>


                    <a href="/roboti/sterge_robot/<?= $robot->id_robot ?>"><button class='btn btn-danger' type='button'>
                        <span class='fas fa-times'></span>
                      </button></a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>


</div>



<script src="<?php echo base_url(); ?>assets/theme/vendor/datatables/dataTables.min.js"></script>

<script>
  $(document).ready(function() {

    $('#tabelRoboti').DataTable({
      "order": [
        [0, "desc"]
      ],
      dom: "Blfrtip",
      buttons: [
        'csv', 'excel', 'pdf', 'print'
      ],
      "lengthChange": true,
      "language": {
        "lengthMenu": "Afiseaza _MENU_ randuri",
        "zeroRecords": "Nu s-au gasit rezultate",
        "info": "Se afiseaza pagina _PAGE_ din _PAGES_",
        "infoEmpty": "No records available",
        "infoFiltered": "(filtered from _MAX_ total records)",
        "search": "Cauta:",
        "paginate": {
          "first": "Primul",
          "last": "Ultimul",
          "next": "Urmatorul",
          "previous": "Precedentul"
        }
      }
    });

  });
</script>