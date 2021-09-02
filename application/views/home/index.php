<div class="container-fluid">

  <div class="row">

    <div class="col-9">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800"><b>Bine ai venit</b></h1>
      </div>
    </div>
    <div class="col-3 justify-content-end">

    </div>
  </div>




  <div class="row">

    <?php foreach ($categorii as $categorie) : ?>

      <div class="col-lg-3 col-md-12">
        <a href="/roboti/lista_roboti/?categorie=<?= $categorie->categorie; ?>">
          <div class="card text-center">
            <div class="card-header  text-white bg-success">
              <b> <?= $categorie->categorie; ?></b>
            </div>
          </div>
        </a>
      </div>

    <?php endforeach; ?>

  </div>
  <br>
  <br>
  <br>
  <div class="row">

    <?php foreach ($producatori as $producator) : ?>
      <div class="col-lg-3 col-md-12">
        <a href="/roboti/lista_roboti/?producator=<?= $producator->nume_producator; ?>">
          <div class="card text-center">
            <div class="card-header  text-white bg-primary">
              <b> <?= $producator->nume_producator; ?></b>
            </div>

            <img class="card-img-top" src="<?= $producator->link_logo; ?>">
            <br>
            <br>
          </div>
        </a>
      </div>
    <?php endforeach; ?>

  </div>

  <br>
  <br>
  <br>
  <br>
</div>



<!-- <script src="<?php echo base_url(); ?>assets/jquery/jquery-ui.js"></script> -->