

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Proyectos</h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-<?php echo $_POST['editt'] ? '8' : '12';?>">


		  	    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Insertar o Actualizar un Proyecto</h3>
              </div>
              <form enctype="multipart/form-data" action="" method="POST">
                <div class="card-body">
                  <input type="hidden" name="id" value="<?php echo $_POST['id'];?>">   
                  <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="form-control" name="name" value="<?php echo  $_POST['name'];?>" placeholder="Nombre" required> 
                  </div>
                  <div class="form-group">
                    <label >Descripcion</label>

                    <textarea class="form-control" name="description" rows="4" placeholder="Descripcion" required><?php echo $_POST['description'];?></textarea>
                  </div>
				          <div class="form-group">
                    <label >GitHub</label>
                    <input type="text" class="form-control" name="github" value="<?php echo $_POST['github'];?>" placeholder="GitHub" required>
                  </div>
				          <div class="form-group">
                    <label >Link</label>
                    <input type="text" class="form-control" name="link" value="<?php echo $_POST['link'];?>" placeholder="Link" required> 
                  </div>
				          <div class="form-group">
                    <label>imagen(portada)</label>
                    <input type="hidden" name="imageold" value="<?php echo $_POST['image'];?>">
                    <input type="file" class="form-control" name="image" accept="image/*" placeholder="imagen" <?php echo $_POST['editt'] ? '' : 'required';?> >
                  </div>
                  <div class="form-group">
                    <label>Imágenes Del Proyecto</label>
                    <input type="file" class="form-control " name="imageProject[]" accept="image/*" placeholder="imagen" <?php echo $_POST['editt'] ? '' : 'required';?> multiple>
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

          <?php if($_POST['editt']) {?>

            <div class="col-lg-4">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Fotos del Proyecto</h3>
                </div>
                <div class="card-body table-responsive p-0" style="height: 360px;">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th style="width: 10px">#</th>
                            <th>Foto</th>
                            <th>Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach($callGallerysPro as $callGalleryPro){?>
                            <tr>
                              <td><?php echo $callGalleryPro['idimg']; ?></td>
                              <td><img src="../images/gallery/<?php echo $callGalleryPro['img']; ?>" width="700" class="img-thumbnail"></td>
                              <form action="" method="POST">
                                <input type="hidden" name="idImg" value="<?php echo $callGalleryPro['idimg']; ?>">
                                <input type="hidden" name="img" value="<?php echo $callGalleryPro['img']; ?>">
                                <td><button type="submit" name="deleteImg" value="deleteImg" class="btn btn-danger">Eliminar</button></td>
                              </form>
                            </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
              </div>
            </div>

          <?php } ?>

          <!-- /.col-md-6 -->
          <div class="col-lg-12">
          <div class="card card-primary">
            <div class="card-header">
                  <h3 class="card-title">Proyectos</h3>
                </div>

                <div class="card-body table-responsive p-0" style="height: 530px;">
                  <table class="table table-striped">
                      <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Nombre</th>
                          <th>Descipcion</th>
                          <th>GitHuh</th>
                          <th>Enlace</th>
                          <th>Imagen</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($dataTechnology as $technology){?>
                          <form action="" method="POST">
                            <tr>

                              <input type="hidden" name="id" value="<?php echo $technology['id']; ?>">
                              <input type="hidden" name="name" value="<?php echo $technology['name']; ?>">   
                              <input type="hidden" name="description" value="<?php echo $technology['description']; ?>">      
                              <input type="hidden" name="github" value="<?php echo $technology['github']; ?>">   
                              <input type="hidden" name="link" value="<?php echo $technology['link']; ?>">  
                              <input type="hidden" name="image" value="<?php echo $technology['image']; ?>">    
  
                              <td><?php echo $technology['id']; ?></td>
                              <td><?php echo $technology['name']; ?></td>
                              <td><?php echo $technology['description']; ?></td>
                              <td><a href="<?php echo $technology['github']; ?>" target="_blank"><?php echo $technology['github']; ?></td>
                              <td><a href="<?php echo $technology['link']; ?>" target="_blank"><?php echo $technology['link']; ?></a></td>
                              <td><img src="../images/<?php echo $technology['image']; ?>" width="700" class="img-thumbnail"></td>
                              <td>
                                <button type="submit" name= "editt" value="editt" class="btn btn-info">Editar</button>
                                <button type="submit" class="btn btn-danger" disabled>Eliminar</button>
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
  