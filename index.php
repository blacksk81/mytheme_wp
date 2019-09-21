<?php get_header('page') //template name: Inicio?>


<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1>Tema de Inicio basico de wordpress con framework Bootstrap v3.3.7</h1>
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-12">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
          Launch demo modal
        </button>
      
      <?php echo get_template_directory_uri(); ?>
      <!-- tura de archivod l themate..-->

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>    

    </div>
  </div>
</div>









<?php get_footer(); ?>

