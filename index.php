<?php get_header();?>

<div class="container">
  <div class="row">
    <div class="col-md-12">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
          Launch demo modal
        </button>

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



<div class="coontainer-fluid">
  <div class="container">
    <div class="row" align="center">
      <h2 class="title_text">Tituo de los texto</h2>
    </div>
    <div class="row">
      <div class="col-md-6 col-sm-12">
      <p class="text1"><?php the_field( 'text1' ); ?></p>  
      </div>
      <div class="col-md-6 col-sm-12">
      <p class="text2"><?php the_field( 'text2' ); ?></p> 
      </div>
    </div>
  </div>
</div>







<?php get_footer(); ?>

