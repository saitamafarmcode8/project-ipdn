<div class="sidebar-content">
	<div class="nav-container">
		<ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
		
		<li class="<?php if($this->uri->segment(1)=="news_dashboard_panel_system_xml"){ echo "nav-item active"; }else{ echo "nav-item"; } ?>"><a href="<?= site_url('news_dashboard_panel_system_xml'); ?>"><i class="ft-home"></i><span data-i18n="" class="menu-title">Dashboard</span></a>
		</li>

		<!-- news_halaman_berita_data_xml -->
		<li class="<?php if($this->uri->segment(1)=="news_halaman_berita_data_xml" || $this->uri->segment(1)=="news_halaman_berita_addnew_xml" || $this->uri->segment(1)=="news_halaman_berita_sebelumnya_xml"){ echo "has-sub nav-item open"; }else{ echo "has-sub nav-item"; } ?>"><a href="#"><i class="ft-book"></i><span data-i18n="" class="menu-title">Blogs</span></a>
			<ul class="menu-content">
				<li class="<?php if($this->uri->segment(1)=="news_halaman_berita_data_xml" || $this->uri->segment(2)=="detail"){ echo "nav-item active"; }else{ echo "nav-item"; } ?>"><a href="<?= site_url('news_halaman_berita_data_xml'); ?>" class="menu-item">Semua Berita</a>
				</li>
				<li class="<?php if($this->uri->segment(1)=="news_halaman_berita_addnew_xml"){ echo "nav-item active"; }else{ echo "nav-item"; } ?>"><a href="<?= site_url('news_halaman_berita_addnew_xml'); ?>" class="menu-item">Menulis</a>
				</li>
				<li class="<?php if($this->uri->segment(1)=="news_halaman_berita_sebelumnya_xml"){ echo "nav-item active"; }else{ echo "nav-item"; } ?>"><a href="<?= site_url('news_halaman_berita_sebelumnya_xml'); ?>" class="menu-item">Berita Sebelumnya</a>
				</li>
				<li class="<?php if($this->uri->segment(1)=="news_halaman_berita_draft_xml" || $this->uri->segment(2)=="beritadraftdetail"){ echo "nav-item active"; }else{ echo "nav-item"; } ?>">
					<a href="<?= site_url('news_halaman_berita_draft_xml'); ?>" class="menu-item">Draft</a>
				</li>
			</ul>
		</li>

		<li class="<?php if($this->uri->segment(1)=="news_halaman_journal_data_xml"){ echo "nav-item active"; }else{ echo "nav-item"; } ?>"><a href="<?= site_url('news_halaman_journal_data_xml'); ?>"><i class="fa fa-sharp fa-solid fa-server"></i><span data-i18n="" class="menu-title">Journal</span></a>
		</li>

		<li class="<?php if($this->uri->segment(1)=="ptsp_lintasit_kemenag_layanan_office"){ echo "nav-item active"; }else{ echo "nav-item"; } ?>"><a href="<?= site_url('ptsp_lintasit_kemenag_layanan_office'); ?>"><i class="fa-solid fa-camera-retro"></i><span data-i18n="" class="menu-title">Media</span></a>
		</li>

		<li class="<?php if($this->uri->segment(1)=="ptsp_lintasit_kemenag_layanan_office"){ echo "nav-item active"; }else{ echo "nav-item"; } ?>"><a href="<?= site_url('ptsp_lintasit_kemenag_layanan_office'); ?>"><i class="fa-solid fa-computer"></i><span data-i18n="" class="menu-title">Setting Website</span></a>
		</li>
		
		<li class="<?php if( $this->uri->segment(1)=="news_profile_data_xml" || $this->uri->segment(1)=="news_profile_perbarui_xml" || $this->uri->segment(1)=="news_kelolamenu_edit_data_xml" || $this->uri->segment(1)=="" || $this->uri->segment(1)==""){ echo 'has-sub nav-item open'; }else{ echo 'has-sub nav-item'; } ?>"><a href="#"><i class="fa-solid fa-arrow-down-up-lock"></i><span data-i18n="" class="menu-title">Main Panel</span></a>
			<ul class="menu-content">
				<li <?php if($this->uri->segment(1)=="news_profile_data_xml" || $this->uri->segment(1)=="news_profile_perbarui_xml" || $this->uri->segment(1)=="ptsp_lintasit_kemenag_profile_edit"){ echo  'class="nav-item active"'; }else{ echo ''; }?>><a href="<?= base_url("news_profile_data_xml"); ?>" class="menu-item"><i class="fa-solid fa-user-shield"></i> Profile</a></li>

				<li <?php if($this->uri->segment(1)=="news_profile_rules_system_data_xml" || $this->uri->segment(1)=="news_profile_rules_system_access_data_xml"){ echo 'class="nav-item active"'; }else{ echo ''; } ?>><a href="<?= base_url("news_profile_rules_system_data_xml"); ?>" class="menu-item"><i class="fa-solid fa-user-gear"></i> Rule System</a></li>

				<li <?php if($this->uri->segment(1)=="news_halaman_kelolamenu_data_xml" || $this->uri->segment(1)=="news_kelolamenu_edit_data_xml"){ echo 'class="nav-item active"'; }else{ echo ''; } ?>><a href="<?= base_url("news_halaman_kelolamenu_data_xml"); ?>" class="menu-item"><i class="fa-solid fa-folder-tree"></i>Menu</a></li>

				<li <?php if($this->uri->segment(1)=="news_kategori_berita_system_xml"){ echo  'class="nav-item active"'; }else{ echo ''; }?>><a href="<?= base_url('news_kategori_berita_system_xml'); ?>" class="menu-item"><i class="fa-solid fa-tags"></i>Kategori Berita</a></li>

				<li><a href="<?= base_url("ptsp_kemenag_managemen_access"); ?>" class="menu-item"><i class="fa-solid fa-gear"></i>Access System</a></li>
			</ul>
		</li>

		</ul>
	</div>
</div>
