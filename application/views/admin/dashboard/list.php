 <!-- Begin Page Content -->
 <div class="container-fluid">
     <?php
        if ($this->session->flashdata('sukses')) {
            echo '<div class="alert alert-success">';
            echo $this->session->flashdata('sukses');
            echo '</div>';
        }
        //error validasi
        echo validation_errors('<div class="alert alert-warning">', '</div>'); ?>

     <!-- Page Heading -->
     <h1 class="h3 mb-2 text-gray-800"><?php echo $title; ?></h1>

     <?php if ($this->session->userdata('akses_level') == 21) { ?>
         <div class="row">
             <!-- Earnings (Monthly) Card Example -->
             <div class="col-xl-3 col-md-6 mb-4">
                 <div class="card border-left-primary shadow h-100 py-2">
                     <div class="card-body">
                         <div class="row no-gutters align-items-center">
                             <div class="col mr-2">
                                 <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pelajar</div>
                                 <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $user_count; ?></div>
                             </div>
                             <div class="col-auto">
                                 <i class="fas fa-users fa-2x text-gray-300"></i>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <!-- Earnings (Monthly) Card Example -->
             <div class="col-xl-3 col-md-6 mb-4">
                 <div class="card border-left-success shadow h-100 py-2">
                     <div class="card-body">
                         <div class="row no-gutters align-items-center">
                             <div class="col mr-2">
                                 <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Kelas</div>
                                 <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $kelas_count; ?></div>
                             </div>
                             <div class="col-auto">
                                 <i class="fas fa-building fa-2x text-gray-300"></i>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <!-- Earnings (Monthly) Card Example -->
             <div class="col-xl-3 col-md-6 mb-4">
                 <div class="card border-left-info shadow h-100 py-2">
                     <div class="card-body">
                         <div class="row no-gutters align-items-center">
                             <div class="col mr-2">
                                 <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pelajaran</div>
                                 <div class="row no-gutters align-items-center">
                                     <div class="col-auto">
                                         <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $pelajaran_count; ?></div>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-auto">
                                 <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <!-- Pending Requests Card Example -->
             <div class="col-xl-3 col-md-6 mb-4">
                 <div class="card border-left-warning shadow h-100 py-2">
                     <div class="card-body">
                         <div class="row no-gutters align-items-center">
                             <div class="col mr-2">
                                 <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Materi</div>
                                 <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $materi_count; ?></div>
                             </div>
                             <div class="col-auto">
                                 <i class="fas fa-book fa-2x text-gray-300"></i>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     <?php } ?>
 </div>
 <!-- /.container-fluid -->