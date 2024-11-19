<aside class="menu-sidebar d-none d-lg-block">
<div class="logo">
<a href="#">
PIOUS Seo Admin
</a>
</div>
<div class="menu-sidebar__content js-scrollbar1">
<nav class="navbar-sidebar">
<ul class="list-unstyled navbar__list">
<li class="has-sub">
<a  href="<?= base_url('seo-admin/dashboard');?>">
<i class="fas fa-tachometer-alt"></i>Dashboard</a>
</li>

<li class="has-sub">
<a class="js-arrow" href="#">
<i class="fas fa-copy"></i>SEO</a>
<ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
<li class="has-sub">
<a href="<?= base_url('seo-admin/add-pages');?>">Add Pages
</a>
</li>
<li class="has-sub">
<a href="<?= base_url('seo-admin/manage-pages');?>">Manage Pages
</a>
</li>
</ul>

<li class="has-sub">
<a href="<?= base_url('seo-admin/change-password');?>">
<i class="fas fa-key"></i>Change Password</a>
</li>
<li class="has-sub">
<a href="<?= base_url('Admin/seo_logout');?>">
<i class="fas fa-sign-out-alt"></i>Logout</a>
</li>
</ul>
</nav>
</div>
</aside>
<!-- END MENU SIDEBAR-->
<div class="page-container">
<!-- HEADER DESKTOP-->
<header class="header-desktop">
<div class="section__content section__content--p30">
<div class="container-fluid">
<div class="header-wrap">
<form class="form-header">
</form>
<div class="header-button">
<div class="noti-wrap">

<div class="account-wrap">
<div class="account-item clearfix js-item-menu">

<div class="content">
<?= $this->session->userdata('seo_session');?></a>
</div>

</div>
</div>
</div>
</div>
</div>
</header>