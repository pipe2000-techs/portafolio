

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tecnologías</h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">


		  	<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Insertar o Actualizar un Tecnología</h3>
              </div>
              <form enctype="multipart/form-data" action="" method="POST">
                <div class="card-body">
                  <input type="hidden" name="id" value="<?php echo $_POST['id'];?>">   
                  <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $_POST['name'];?>" placeholder="Nombre" required> 
                  </div>
                  <div class="form-group">
                    <label >Tamaño Del Icono</label>
                    <input type="number" class="form-control" name="percent" value="<?php echo $_POST['percent'];?>" placeholder="Tamaño De Imagen" required> 
                  </div>
				          <div class="form-group">
                    <label>Imagen</label>
                    <input type="hidden" name="iconold" value="<?php echo $_POST['icon'];?>">
                    <input type="file" class="form-control" name="icon" accept="image/*" placeholder="imagen" <?php $_POST['editt'] ? 'required' : ''; ?>>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">

                  <?php if($_POST['editt']){ ?>
				            <button type="submit" name="edit" value="edit" class="btn btn-info">Editar</button>
                    <a class="btn btn-danger" href="" role="button">Cancelar</a>
                  <?php }else{ ?>
                    <button type="submit" name="insert" value="insert" class="btn btn-success">Insertar</button>
                  <?php } ?>

                </div>

              </form>

            </div>

          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
          <div class="card card-primary">
            <div class="card-header">
                  <h3 class="card-title">Tecnologías</h3>
                </div>

                <div class="card-body table-responsive p-0" style="height: 360px;">
                  <table class="table table-striped">
                      <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Nombre</th>
                          <th>Tamaño</th>
                          <th>Icono</th>
                          <th style="width: 20px">Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($dataTechnology as $technology){?>
                          <form action="" method="POST">
                            <tr>

                              <input type="hidden" name="id" value="<?php echo $technology['id']; ?>">
                              <input type="hidden" name="name" value="<?php echo $technology['name']; ?>">   
                              <input type="hidden" name="percent" value="<?php echo $technology['percent']; ?>">      
                              <input type="hidden" name="icon" value="<?php echo $technology['icon']; ?>">     
  
                              <td><?php echo $technology['id']; ?></td>
                              <td><?php echo $technology['name']; ?></td>
                              <td><span class="badge bg-success"><?php echo $technology['percent']; ?>px</span></td>
                              <td><img src="../images/<?php echo $technology['icon']; ?>" width="150" class="img-thumbnail"></td>
                              <td>
                                <button type="submit" name= "editt" value="editt" class="btn btn-info">Editar</button>
                              </td>
                            </tr>
                          </form>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
          </div>

          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>



    <!-- /.content -->
  </div>
  