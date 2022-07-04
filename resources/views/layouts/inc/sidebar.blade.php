<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <div class="logo"><a href="{{url('/')}}" class="simple-text logo-normal">
    We FASHION
      </a></div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item {{Request::is('dashboard') ? 'active' : ''}}  ">
          <a class="nav-link" href="#">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item {{Request::is('categories') ? 'active' : ''}}">
          <a class="nav-link" href="{{url('categories')}}">
            <i class="bi bi-bookmark-fill-icons"></i>
            <p>Categories</p>
          </a>
        </li>
        <li class="nav-item {{Request::is('add-category') ? 'active' : ''}}">
            <a class="nav-link" href="{{url('add-category')}}">
              <i class="bi bi-window-sidebar"></i>
              <p>Add Categories</p>
            </a>
        </li>
        <li class="nav-item {{Request::is('articles') ? 'active' : ''}}">
            <a class="nav-link" href="{{url('articles')}}">
              <i class="bi bi-bag"></i>
              <p>Articles</p>
            </a>
          </li>
          <li class="nav-item {{Request::is('add-articles') ? 'active' : ''}}">
              <a class="nav-link" href="{{url('add-articles')}}">
                <i class="bi bi-cloud-plus"></i>
                <p>Add Articles</p>
              </a>
          </li>
      </ul>
    </div>
  </div>
