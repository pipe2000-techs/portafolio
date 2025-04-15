

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Perfil</h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8">


		  	    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Actualizar Perfil</h3>
              </div>
              <form enctype="multipart/form-data" action="" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label >Descripcion</label>
                    <textarea class="form-control" name="DesProfile" rows="4" placeholder="Descripcion" required><?php echo $CalProfile;?></textarea>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
				          <button type="submit" name="edit" value="edit" class="btn btn-success">Actualizar</button>
                </div>

              </form>

            </div>

          </div>

          <div class="col-lg-4">


		  	    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Actualizar Hoja de Vida</h3>
              </div>
              <form enctype="multipart/form-data" action="" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label >Cargar Nueva Hoja(.pdf)</label>
                    <input type="file" class="form-control" accept="application/pdf" name="curriculum" required>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
				          <button type="submit" name="newCurriculum" value="newCurriculum" class="btn btn-success">Cargar Nueva Hoja</button>
                </div>

              </form>

            </div>

          </div>
          <!-- /.col-md-6 -->
         
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>



    <!-- /.content -->
  </div>
  