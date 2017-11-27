<?php
$func = $this->uri->uri_string;
if ($func === '/admin') {
    $func = '/admin/dashboard';
}
function menu_status($compare, $func, $val = 'active', $exactly_match = false)
{
    if (!$exactly_match && strpos($func, '/') !== false) {
        // main/sub/argv
        echo (strpos($func, strtolower($compare)) === 0) ? $val : '';
    } else {
        // main
        echo ($func === strtolower($compare)) ? $val : '';
    }
}
?>
<aside class="main-sidebar">
  <section class="sidebar">

    <div class="user-panel">
      <div class="pull-left image">
        <img style="border-radius:50%" src="<?php echo $this->session->userdata['picture']; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php
        if (isset($this->session->userdata['nick_name'])) {
            echo $this->session->userdata['nick_name'];
        } else {
            echo 'Anonymous User';
        }
            ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>

      <li class="<?= menu_status('admin/dashboard', $func) ?>">
        <a href="/admin">
          <i class="fa fa-dashboard"></i>
          <span>Dashboard</span>
        </a>
      </li>

<?php
if ($this->admin_auth->is_authorized('example')) :
?>

			<li class="treeview <?= menu_status('admin/example', $func) ?>">
				<a href="#">
					<i class="fa fa-gears"></i>
					<span>Example</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li class="<?= menu_status('admin/example/example1', $func) ?>"><a href="/admin/example/example1"><i class="fa fa-circle-o"></i>Example 1</a></li>
					<li class="<?= menu_status('admin/example/example2', $func) ?>"><a href="/admin/example/example2"><i class="fa fa-circle-o"></i>Example 2</a></li>
				</ul>
			</li>

<?php
endif;
if ($this->admin_auth->is_authorized('group2')) :
?>

			<li class="treeview <?= menu_status('admin/func1', $func) ?>">
				<a href="#">
					<i class="fa fa-files-o"></i>
					<span>Func 1</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li class="<?= menu_status('admin/func1/page1', $func) ?>"><a href="/admin/func1/page1"><i class="fa fa-circle-o"></i>Page 1</a></li>
					<li class="<?= menu_status('admin/func1/page2', $func) ?>"><a href="/admin/func1/page2"><i class="fa fa-circle-o"></i>Page 2</a></li>
				</ul>
			</li>

<?php
endif;
?>

<?php
if ($this->session->userdata['is_admin'] && $this->session->userdata['is_admin'] === true) :
?>
			<li class="treeview <?= menu_status('admin/settings', $func) ?>">
				<a href="#">
					<i class="fa fa-th"></i>
					<span>Settings</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li class="<?= menu_status('admin/settings/users', $func) ?>"><a href="/admin/settings/users"><i class="fa fa-users"></i> Users</a></li>
				</ul>
			</li>
<?php
endif;
?>

    </ul>
  </section>
</aside>
