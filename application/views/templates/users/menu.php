<div class="sidebar-content">
	<div class="nav-container">
		<ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
		
		<li class="<?php if($this->uri->segment(1)=="news_home_panel_xml"){ echo "nav-item active"; }else{ echo "nav-item"; } ?>"><a href="<?= site_url('news_home_panel_xml'); ?>"><i class="ft-home"></i><span data-i18n="" class="menu-title">Dashboard</span></a>
		</li>

		<!-- home_tampilkan_berita_xml -->
		<li class="<?php if($this->uri->segment(1)=="home_tampilkan_berita_xml" || $this->uri->segment(1)=="home_berita_write_xml" || $this->uri->segment(1)=="news_halaman_berita_sebelumnya_xml"){ echo "has-sub nav-item open"; }else{ echo "has-sub nav-item"; } ?>"><a href="#"><i class="ft-book"></i><span data-i18n="" class="menu-title">Blogs</span></a>
			<ul class="menu-content">
				<li class="<?php if($this->uri->segment(1)=="home_tampilkan_berita_xml" || $this->uri->segment(2)=="detail"){ echo "nav-item active"; }else{ echo "nav-item"; } ?>"><a href="<?= site_url('home_tampilkan_berita_xml'); ?>" class="menu-item">Semua Berita</a>
				</li>
				<li class="<?php if($this->uri->segment(1)=="home_berita_write_xml"){ echo "nav-item active"; }else{ echo "nav-item"; } ?>"><a href="<?= site_url('home_berita_write_xml'); ?>" class="menu-item">Menulis</a>
				</li>
				<li class="<?php if($this->uri->segment(1)=="home_berita_write_draft_xml" || $this->uri->segment(2)=="beritadraftdetail"){ echo "nav-item active"; }else{ echo "nav-item"; } ?>">
					<a href="<?= site_url('home_berita_write_draft_xml'); ?>" class="menu-item">Draft</a>
				</li>
			</ul>
		</li>

		</ul>
	</div>
</div>
