<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Panduan Investasi</title>
  <link rel="stylesheet" href="/css/normalize.min.css">
  <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<div id="root">
  <header class="site-header">
    <div class="wrap lg:flex">
      <div class="navbar-header">
        <div class="nav flex left lg:hidden">
          <button type="button" class="c-btn toggle">
            <svg width="24" height="24">
              <path d="M5 6h14M5 12h14M5 18h14" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
            </svg>
          </button>
        </div>
        <div class="navbar-brand">
          <h1 class="site-title">
            <a href="#">PanduanInvestasi.com</a>
          </h1>
        </div>
        <div class="search-bar hidden ml-8 lg:block">
          <div class="c-frm-w-icon">
            <span class="c-frm-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#777" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
              </svg>
            </span>
            <input class="c-frm responsive w-full" type="text" name="default-outline" placeholder="Search.." />
            <span class="c-frm-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#bdbdbd" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="15" y1="9" x2="9" y2="15" stroke="#fff"></line>
                <line x1="9" y1="9" x2="15" y2="15" stroke="#fff"></line>
              </svg>
            </span>
          </div>
        </div>
        <div class="nav flex right lg:hidden">
          <a href="/navbar-search.html">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="11" cy="11" r="8"></circle>
              <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>
          </a>
        </div>
      </div>
      <nav class="nav-menu">
        <ul class="menu">
          <li class="menu-item">
            <a href="#">Trending</a>
          </li>
          <li class="menu-item">
            <a href="#">News</a>
          </li>
          <li class="menu-item">
            <a href="#">Blog</a>
          </li>
          <li class="menu-item">
            <a href="#">Lainnya</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  <div class="drawer fixed-left collapse">
    <div class="side-nav">
      <div class="header">
        <div class="title">Menu</div>
        <div class="toggle">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
          </svg>
        </div>
      </div>
      <div class="body">
        <div class="list">
          <div class="list-body">
            <a href="#" class="list-item">
              <div class="list-item-content">
                <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                  </svg>
                </div>
                <div class="title">Beranda</div>
              </div>
            </a>
          </div>
        </div>
        <div class="list">
          <div class="list-header">Semua Kategori</div>
          <div class="list-body">
            <a href="#" class="list-item">
              <div class="list-item-content">
                <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up">
                    <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                    <polyline points="17 6 23 6 23 12"></polyline>
                  </svg>
                </div>
                <div class="title">Trending</div>
              </div>
            </a>
            <a href="#" class="list-item">
              <div class="list-item-content">
                <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="2" y1="12" x2="22" y2="12"></line>
                    <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                  </svg>
                </div>
                <div class="title">News</div>
              </div>
            </a>
            <a href="#" class="list-item">
              <div class="list-item-content">
                <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                    <path d="M12 20h9"></path>
                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                  </svg>
                </div>
                <div class="title">Blog</div>
              </div>
            </a>
            <a href="#" class="list-item">
              <div class="list-item-content">
                <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hash">
                    <line x1="4" y1="9" x2="20" y2="9"></line>
                    <line x1="4" y1="15" x2="20" y2="15"></line>
                    <line x1="10" y1="3" x2="8" y2="21"></line>
                    <line x1="16" y1="3" x2="14" y2="21"></line>
                  </svg>
                </div>
                <div class="title">Lainnya</div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="flex flex-col justify-center items-center h-5/6">
    <div class="image-container">
      <svg viewBox="0 0 64 41" style="width: 128px;">
        <g transform="translate(0 1)" fill="none" fill-rule="evenodd">
          <ellipse fill="#f5f5f5" cx="32" cy="33" rx="32" ry="7"></ellipse>
          <g stroke="#d9d9d9">
            <path d="M55 12.76L44.854 1.258C44.367.474 43.656 0 42.907 0H21.093c-.749 0-1.46.474-1.947 1.257L9 12.761V22h46v-9.24z"></path>
            <path d="M41.613 15.931c0-1.605.994-2.93 2.227-2.931H55v18.137C55 33.26 53.68 35 52.05 35h-40.1C10.32 35 9 33.259 9 31.137V13h11.16c1.233 0 2.227 1.323 2.227 2.928v.022c0 1.605 1.005 2.901 2.237 2.901h14.752c1.232 0 2.237-1.308 2.237-2.913v-.007z" fill="#fafafa"></path>
          </g>
        </g>
      </svg>
    </div>
    <div class="empty-description">No data</div>
  </div>
  <div class="site-footer hidden lg:block">
    <div class="links section">
      <a href="#">Privacy Policy</a>
      <span class="sep"></span>
      <a href="#">Disclaimer</a>
      <span class="sep"></span>
      <a href="#">Terms of Service</a>
      <span class="sep"></span>
      <a href="#">Sitemap</a>
    </div>
    <div class="copyright section">
      <a href="#">&#169; 2022 - PanduanInvestasi.com</a>
    </div>
  </div>
</div>
</body>
</html>
