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
        <h1 class="h4 mb-0 text-gray-800">Adauga robot</b></h1>
      </div>
    </div>
  </div>
  <br>


  <div class="row">
    <div class="col-lg-6 col-md-12 ">
      <div class="card text-center">
        <div class="card-header  text-white bg-primary">
          <b>Adauga robot</b>
        </div>
        <div class="card-body">
          <div class="form-group col-12 ">


            <form class="form-group row" autocomplete="off" action="/roboti/adauga_robot_post" method="POST">
              <input type="text" class="form-control form-control col-6" name="nume" placeholder="Nume robot"><br><br>
              <input type="text" class="form-control form-control col-6" name="nume_producator" placeholder="Nume producator"><br><br>
              <input type="text" class="form-control form-control col-12" name="categorie" placeholder="Categorie"><br><br>
              <input type="text" class="form-control form-control col-12" name="poza" placeholder="Link poza"><br><br>
              Scurta descriere: <textarea class="form-control" name="scurta_descriere" rows="3"></textarea><br><br>
              Lunga descriere: <textarea class="form-control" name="lunga_descriere" rows="6"></textarea><br><br>
              <input type="text" class="form-control form-control col-12" name="link_brosura" placeholder="Link brosursa"><br><br>
              <input type="text" class="form-control form-control col-12" name="link_date_tehnice" placeholder="Link date tehnice"><br><br>
              <input type="text" class="form-control form-control col-12" name="link_cad" placeholder="Link CAD"><br><br>
              <input type="text" class="form-control form-control col-12" name="preview_cad" placeholder="Link preview CAD"><br><br>
              <input type="text" class="form-control form-control col-6" name="axe" placeholder="Numar axe"><br><br>
              <input type="text" class="form-control form-control col-6" name="sarcina_maxima" placeholder="Sarcina maxima"><br><br>
              <input type="text" class="form-control form-control col-6" name="nr_cicluri" placeholder="Nr cicluri"><br><br>
              <input type="text" class="form-control form-control col-6" name="orizontal" placeholder="Orizontal"><br><br>
              <input type="text" class="form-control form-control col-6" name="vertical" placeholder="Vertical"><br><br>
              <input type="text" class="form-control form-control col-6" name="greutate" placeholder="Greutate"><br><br>

              <button type="submit" class="btn btn-success">Adauga robot</button>
            </form>

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