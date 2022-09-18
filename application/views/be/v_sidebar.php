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
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-file-medical text-info"></i>
             <p>
               Buat Surat
               <i class="fas fa-angle-left right"></i>
               <span class="badge badge-info right">12</span>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?php echo base_url('rekomkerja'); ?>" class="nav-link">
                 <i class="far fa-circle nav-icon text-secondary"></i>
                 <p>Rekom Kerja</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?php echo base_url('rekomproposal'); ?>" class="nav-link">
                 <i class="far fa-circle nav-icon text-secondary"></i>
                 <p>Rekom Proposal</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?php echo base_url('prekomkerja'); ?>" class="nav-link">
                 <i class="far fa-circle nav-icon text-secondary"></i>
                 <p>Pengantar Rekom</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="pages/layout/top-nav.html" class="nav-link">
                 <i class="far fa-circle nav-icon text-secondary"></i>
                 <p>Pengantar Nikah</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?php echo base_url('kehilangan'); ?>" class="nav-link">
                 <i class="far fa-circle nav-icon text-secondary"></i>
                 <p>Pengantar hilang</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?php echo base_url('skck'); ?>" class="nav-link">
                 <i class="far fa-circle nav-icon text-secondary"></i>
                 <p>Pengantar SKCK</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?php echo base_url('usaha'); ?>" class="nav-link">
                 <i class="far fa-circle nav-icon text-secondary"></i>
                 <p>Ket. Usaha</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?php echo base_url('domisili'); ?>" class="nav-link">
                 <i class="far fa-circle nav-icon text-secondary"></i>
                 <p>Ket. Domisili</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?php echo base_url('pindah'); ?>" class="nav-link">
                 <i class="far fa-circle nav-icon text-secondary"></i>
                 <p>Ket. Pindah</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?php echo base_url('kematian'); ?>" class="nav-link">
                 <i class="far fa-circle nav-icon text-secondary"></i>
                 <p>Ket. Kematian</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?php echo base_url('kelahiran'); ?>" class="nav-link">
                 <i class="far fa-circle nav-icon text-secondary"></i>
                 <p>Ket. Kelahiran</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?php echo base_url('tidak_mampu'); ?>" class="nav-link">
                 <i class="far fa-circle nav-icon text-secondary"></i>
                 <p>Ket. Tidak Mampu</p>
               </a>
             </li>
           </ul>
         </li>
         <li class="nav-item">
           <a href="<?php echo base_url('nomor'); ?>" class="nav-link">
             <i class="nav-icon fas fa-list-ol text-info"></i>
             <p>Pengaturan No. Surat</p>
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