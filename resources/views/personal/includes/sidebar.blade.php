      <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
          <!--begin::Sidebar Brand-->
          <div class="sidebar-brand">
              <!--begin::Brand Link-->
              <a href="#" class="brand-link">
                  <!--begin::Brand Image-->
                  <h1>Blog</h1>
              </a>
              <!--end::Brand Link-->
          </div>
          <div class="sidebar-wrapper">
              <nav class="mt-2">
                  <!--begin::Sidebar Menu-->
                  <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="navigation"
                      aria-label="Main navigation" data-accordion="false" id="navigation">
                      <li class="nav-item">
                          <a href="{{ route('personal.main.index') }}" class="nav-link">
                              <i class="nav-icon bi bi-house"></i>
                              <p>Главная</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('personal.liked.index') }}" class="nav-link">
                              <i class="nav-icon bi bi-heart-fill"></i>
                              <p>Понравившиеся посты</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('personal.comment.index') }}" class="nav-link">
                              <i class="nav-icon bi bi-chat"></i>
                              <p>Комментарии</p>
                          </a>
                      </li>
                  </ul>
                  <!--end::Sidebar Menu-->
              </nav>
          </div>
          <!--end::Sidebar Wrapper-->
      </aside>
