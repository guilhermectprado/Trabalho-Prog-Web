
<div class="recomendados">
    <h3>Recomendados</h3>

<?php for ($i = 1; $i < 4; $i++) { ?>
    <div class="card">
    <form action ="<?= BASEPATH ?>description" method = 'GET' class = "form_desc">
            <input type= "hidden" name = 'prod' value = "<?= $data[$i]->nome ?>" >   
            <button type = "submit" >
            <img id="cartas" src="<?= $data[$i]->img ?>" />
    </button>
    </form>
      <div class="card-content">
        <h4><?= $data[$i]->nome ?></h4>
      </div>
      <div class="card-price">
        <p class="price"><?= $data[$i]->preco ?></p>
      </div>
    </div>
    <?php } ?>
     


  </div>