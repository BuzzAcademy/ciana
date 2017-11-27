<header class="main-header">

  <a href="/" class="logo">
    <span class="logo-mini"><b>CI</b></span>
    <span class="logo-lg"><b>CI</b>AnA</span>
  </a>

  <nav class="navbar navbar-static-top" role="navigation">
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img stype="border-radius:50%" src="<?php echo $this->session->userdata['picture']; ?>" class="user-image" alt="User Image">
            <span class="hidden-xs">
            <?php
               if (isset($this->session->userdata['nick_name'])) {
                   echo $this->session->userdata['nick_name'];
               } else {
                   echo 'Anonymous User';
               }
            ?>
            </span>
          </a>
          <ul class="dropdown-menu">
            <li class="user-header">
              <img stype="border-radius:50%" src="<?php echo $this->session->userdata['picture'];?>" class="img-circle" alt="User Image">
              <p>
               <?php
                if (isset($this->session->userdata['nick_name'])) {
                    echo $this->session->userdata['nick_name'];
                } else {
                    echo 'Anonymous User';
                }
               ?>
                <small>Member since Sep. 2015</small>
              </p>
            </li>

            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <?php if (isset($this->session->userdata['nick_name'])): ?>
                <a href="/admin/logout" class="btn btn-default btn-flat">Sign out</a>
                <?php else:?>
                <a href="/admin/login" class="btn btn-default btn-flat">Sign in</a>
                <?php endif;?>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>

  </nav>
</header>
