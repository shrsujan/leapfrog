      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <h1>Leapfrog Academy</h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          
              <?php
                if(isset($view_page)){
                 $this->load->view($view_page);
                }
              ?>
    
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
