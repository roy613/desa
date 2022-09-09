 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="<?php echo base_url('dashboard'); ?>" class="brand-link">
     <img src="<?php echo base_url(); ?>assets/img/logokutim.png" class="brand-image" style="width:25px">
     <span class="brand-text font-weight-light"> Desa Karangan Hilir</span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">

     <!-- Sidebar Menu -->
     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->        
         <li class="nav-item">
           <a href="<?php echo base_url('arsip'); ?>" class="nav-link">
           <i class="nav-icon fas fa-file-medical text-info"></i>             
             <p>Buat Surat</p>
           </a>
         </li>
        
         <li class="nav-item">
           <a href="<?php echo base_url('nomor'); ?>" class="nav-link">
             <i class="nav-icon fas fa-list-ol text-info"></i>       
             <p>Pengaturan Nomor Surat</p>
           </a>
         </li>
         <li class="nav-item">
           <a href="<?php echo base_url('ttd'); ?>" class="nav-link">
           <i class="nav-icon fas fa-signature text-info"></i>
             <p>Penandatangan</p>
           </a>
         </li>         
         <li class="nav-item">
           <a href="<?php echo base_url('pengguna'); ?>" class="nav-link">
             <i class="nav-icon fas fa-users text-info"></i>
             <p>Pengguna</p>
           </a>
         </li>

         <li class="nav-item">
           <a href="<?php echo base_url('logout'); ?>" class="nav-link">
             <i class="nav-icon fas fa-power-off text-info"></i>
             <p>Logout</p>
           </a>
         </li>
       </ul>
     </nav>
     <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
 </aside>