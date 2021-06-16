<!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><i class="fas fa-comments"></i> FAQ</h1>
    <p class="mb-4 mt-3">
      <a href="<?php echo base_url(); ?>index.php/Faq" class="btn btn-info"><i class="fas fa-angle-left"></i> Back</a>
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info">Add New FAQ</h6>
      </div>
      <div class="card-body">
        <form method="post" action="<?php echo base_url(); ?>index.php/Faq/store" >

          <div class="form-group row">
            <label for="question" class="col-sm-2 col-form-label">Question: </label>
            <div class="col-sm-10">
              <textarea id="question" name="question" class="form-control" rows="3" placeholder="Enter Question" required><?php echo set_value('question');?></textarea>
              <?php if(form_error('question')) echo form_error('question', '<div style="color: #dc3545; font-size: 80%; margin-top: 5px;">', '</div>'); ?>
            </div>
          </div>

          <div class="form-group row">
            <label for="answer" class="col-sm-2 col-form-label">Answer: </label>
            <div class="col-sm-10">
              <textarea id="answer" name="answer" class="form-control summernote" style="border: 1px solid #d1d3e2 !important;" required><?php echo set_value('answer');?></textarea>
            </div>
          </div>

           <div class="form-group row">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
              <input type="submit" name="btnsave" value="Save" class="btn btn-info">
            </div>
          </div>

        </form>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->
