<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme/vendor/datatables/datatables.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/jquery/jquery-ui.css">
<style>
  .card-img-top {
    width: 100%;
    height: 15vw;
    object-fit: contain;
  }
</style>
<div class="container-fluid">

  <div class="row">

    <div class="col-12">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800">Detalii robot: <b><?= $robot->nume; ?> </b></h1>
      </div>
    </div>
  </div>
  <br>
  <div class="row">
    <br>
    <div class="col-lg-6 col-md-12">
      <div class="card">
        <div class="card-header text-white bg-primary">
          Descriere lunga
        </div>
        <div class="card-body">
          <?php echo nl2br($robot->lunga_descriere); ?>
          <br>
          <br>
          <a href="<?= $robot->link_brosura ?>"><button class='btn btn-success' type='button'>
              <span class='fas fa-eye'></span> Vezi brosura
            </button></a>

          <a href="<?= $robot->link_date_tehnice ?>"><button class='btn btn-success' type='button'>
              <span class='fas fa-eye'></span> Vezi date tehnice
            </button></a>

          <a href="<?= $robot->link_cad ?>"><button class='btn btn-danger' type='button'>
              <span class='fas fa-eye'></span> Descarca CAD
            </button></a>
        </div>
      </div>
    </div>
    <br>
    <div class="col-lg-3 col-md-12">
      <div class="card">
        <div class="card-header  text-white bg-primary">
         Specificatii
        </div>
        <div class="card-body">
          <?php echo nl2br($robot->scurta_descriere); ?>

        </div>
      </div>
    </div>

    <br>
    <div class="col-lg-3 col-md-12">
      <div class="card text-center">
        <div class="card-header  text-white bg-primary">
          <b> <?= $robot->nume; ?></b>
        </div>

        <img class="card-img-top" src="<?= $robot->poza; ?>">
        Producator: <?= $robot->nume_producator; ?>
        <br>
        <br>
      </div>
    </div>
  </div>
  <br>

  <div class="row">
    <div class="col-lg-6 col-md-12">
      <div class="card text-center">
        <div class="card-header  text-white bg-primary">
          <b>Specificatii</b>
        </div>
        <div class="card-body">

          <div class="row m-3 p-3 border">
            <div class="col-lg-6 col-md-6 text-right">
              <b>Axe</b>:
            </div>
            <div class="col-lg-6 col-md-6 text-left">
              <?= $robot->axe; ?>
            </div>
          </div>

          <div class="row m-3 p-3 border">
            <div class="col-lg-6 col-md-6  text-right">
              <b>Sarcina maxima</b>:
            </div>
            <div class="col-lg-6 col-md-6  text-left">
              <?= $robot->sarcina_maxima; ?>
            </div>
          </div>

          <div class="row m-3 p-3 border">
            <div class="col-lg-6 col-md-6  text-right">
              <b>Repetabilitate</b>:
            </div>
            <div class="col-lg-6 col-md-6  text-left">
              <?= $robot->nr_cicluri; ?>
            </div>
          </div>

          <div class="row m-3 p-3 border">
            <div class="col-lg-6 col-md-6  text-right">
              <b>Raza actiune orizontala</b>:
            </div>
            <div class="col-lg-6 col-md-6  text-left">
              <?= $robot->orizontal; ?>
            </div>
          </div>

          <div class="row m-3 p-3 border">
            <div class="col-lg-6 col-md-6  text-right">
              <b>Raza actiune verticala</b>:
            </div>
            <div class="col-lg-6 col-md-6  text-left">
              <?= $robot->vertical; ?>
            </div>
          </div>

        </div>

        <br>
        <br>
      </div>
    </div>


    <div class="col-lg-6 col-md-12">
      <div class="card text-center">
        <div class="card-header  text-white bg-primary">
          <b>3D</b>
        </div>
        <div class="card-body">
        <img class="card-img-top" src="<?= $robot->preview_cad; ?>">
        <br>
        <br>
        <a href="<?= $robot->link_cad ?>"><button class='btn btn-danger' type='button'>
              <span class='fas fa-eye'></span> Descarca CAD
            </button></a>
        </div>
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