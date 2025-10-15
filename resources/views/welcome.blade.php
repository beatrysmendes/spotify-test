<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="
    https://cdn.jsdelivr.net/npm/reset-css@5.0.2/reset.min.css
    " rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/styles.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>SpoKnight</title>
</head>
<body>  
    <header>
    
        <div class="logo">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" fill="white">
      <path d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm100.7 364.9c-4.2 6.7-13.2 8.7-19.8 4.5-54.4-33.5-122.9-41-203.8-22.3-7.8 1.8-15.6-3.2-17.4-11s3.2-15.6 11-17.4c87.3-20.2 162.2-11.6 223.4 25.7 6.7 4.2 8.7 13.2 4.6 19.9zm26.3-58.4c-5.3 8.3-16.6 10.9-24.9 5.6-62.1-38.2-156.9-49.3-230.4-26.8-9.3 2.8-19.2-2.3-22-11.6s2.3-19.2 11.6-22c82.9-25.6 186.5-13.4 256.4 29.8 8.2 5.2 10.8 16.4 5.5 24.7zm2.9-65.7c-73.6-44-195.4-48.2-265.9-26.3-10.8 3.4-22.4-2.6-25.8-13.4s2.6-22.4 13.4-25.8c78.1-24.3 210.4-19.6 292.7 29.9 9.7 5.8 12.8 18.3 7 28-5.8 9.7-18.3 12.8-28 7z"/>
    </svg>
  </div>

  <div class="search-group">
    <button class="home-btn">
      <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M3 9.5L12 3l9 6.5V21a1 1 0 0 1-1 1h-5v-7H9v7H4a1 1 0 0 1-1-1V9.5z" />
      </svg>
    </button>

    <div class="search">
      <span class="search-icon material-symbols-outlined">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-search"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
    </span>
      <input class="search-input" type="search" placeholder="O que você quer ouvir?" />
      <div class="divider"></div>
      <button class="nav-btn" title="Navegar">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path d="M3.17822 3.56201V20.8489" stroke="#b3b3b3" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M8.94055 3.56201V20.8489" stroke="#b3b3b3" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M14.7028 20.8489V3.56201L20.465 7.55128V20.8489H14.7028Z" fill="#b3b3b3" stroke="#b3b3b3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </button>
    </div>
  </div>

  <nav class="main-nav">
    <div class="nav__buttons">
      <button class="premium-btn">Explorar Premium</button>
      <button class="install-btn">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
          stroke-linejoin="round">
          <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
          <polyline points="7 10 12 15 17 10"></polyline>
          <line x1="12" y1="15" x2="12" y2="3"></line>
        </svg>
        Instalar app
      </button>
    </div>
    <div class="nav__icons">
      <div class="profile-circle"></div>
    </div>
  </nav>


    </header>

    <div class="layout">
        <aside class="sidebar">
            <div class="libray-icon">
                <div class="libray-title">
            <button class="sidebar-btn"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-books"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z" /><path d="M9 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z" /><path d="M5 8h4" /><path d="M9 16h4" /><path d="M13.803 4.56l2.184 -.53c.562 -.135 1.133 .19 1.282 .732l3.695 13.418a1.02 1.02 0 0 1 -.634 1.219l-.133 .041l-2.184 .53c-.562 .135 -1.133 -.19 -1.282 -.732l-3.695 -13.418a1.02 1.02 0 0 1 .634 -1.219l.133 -.041z" /><path d="M14 9l4 -1" /><path d="M16 16l3.923 -.98" /></svg></button>

           <h2>Sua biblioteca</h2>
           </div>

           <button class="sidebar-btn"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-playlist-add"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19 8h-14" /><path d="M5 12h9" /><path d="M11 16h-6" /><path d="M15 16h6" /><path d="M18 13v6" /></svg>
            </button>
           </div>
           <div class="sidebar-btn">
            <span class="player-btn">
                <h5>playlist name</h5>
            </span>
           </div>
           <div class="sidebar-btn">
            <span class="player-btn">
                <h5>playlist name</h5>
            </span>
           </div>
           <div class="sidebar-btn">
            <span class="player-btn">
                <h5>playlist name</h5>
            </span>
           </div>
           <div class="sidebar-btn">
            <span class="player-btn">
                <h5>playlist name</h5>
            </span>
           </div>
           <div class="sidebar-btn">
            <span class="player-btn">
                <h5>playlist name</h5>
            </span>
           </div>
           <div class="sidebar-btn">
            <span class="player-btn">
                <h5>playlist name</h5>
            </span>
           </div>
            

        </aside>
        <main class="main-content">
            <h1>Feito para você</h1>
            <div class="album-grid">
                <div class="album-card">
                    <img src="{{ asset('images/hollow-knight.jpg') }}" alt="Hollow Knight">
                    <h3>Hollow Knight: Silksong (Original Soundtrack)</h3>
                    <p> by Christopher Larkin</p>
                </div>
                <div class="album-card">
                    <img src="{{ asset('images/hollow-knight.jpg') }}" alt="Hollow Knight">
                    <h3>album name</h3>
                    <p>album name</p>
                </div>
                <div class="album-card">
                    <img src="{{ asset('images/hollow-knight.jpg') }}" alt="Hollow Knight">
                    <h3>album name</h3>
                    <p>album name</p>
                </div>
                <div class="album-card">
                    <img src="{{ asset('images/hollow-knight.jpg') }}" alt="Hollow Knight">
                    <h3>album name</h3>
                    <p>album name</p>
                </div>
                <div class="album-card">
                    <img src="{{ asset('images/hollow-knight.jpg') }}" alt="Hollow Knight">
                    <h3>album name</h3>
                    <p>album name</p>
                </div>
                <div class="album-card">
                    <img src="{{ asset('images/hollow-knight.jpg') }}" alt="Hollow Knight">
                    <h3>album name</h3>
                    <p>album name</p>
                </div>
                <div class="album-card">
                    <img src="{{ asset('images/hollow-knight.jpg') }}" alt="Hollow Knight">
                    <h3>album name</h3>
                    <p>album name</p>
                </div>
                <div class="album-card">
                    <img src="{{ asset('images/hollow-knight.jpg') }}" alt="Hollow Knight">
                    <h3>album name</h3>
                    <p>album name</p>
                </div>
                <div class="album-card">
                    <img src="{{ asset('images/hollow-knight.jpg') }}" alt="Hollow Knight">
                    <h3>album name</h3>
                    <p>album name</p>
                </div>
                <div class="album-card">
                    <img src="{{ asset('images/hollow-knight.jpg') }}" alt="Hollow Knight">
                    <h3>album name</h3>
                    <p>album name</p>
                </div>
                </div> 
                <h1>Tocadas Recentemente</h1>
                <div class="recent-grid">
                <div class="album-recent">
                    <img src="{{ asset('images/hollow-knight.jpg') }}" alt="Hollow Knight">
                    <h3>aaaa</h3>
                    <p>aaaa</p>
                </div>
                <div class="album-recent">
                    <img src="{{ asset('images/hollow-knight.jpg') }}" alt="Hollow Knight">
                    <h3>aaaa</h3>
                    <p>aaaa</p>
                </div></div>
        </main>

        <aside class="playing-now">
            <h3>Tocando agora</h3>
            <div class="now-playing">
                <img src="{{ asset('images/hollow-knight.jpg') }}" alt="Hollow Knight">
                <div class="name-album">
                    <h4>Enter Pharloom</h4>
                    <p>Hollow Knight: Silksong (Original Soundtrack)</p>
                </div>
            </div>
        </aside>
    </div>

    <footer class="player">
        <div class="player-left">
            <img src="{{ asset('images/hollow-knight.jpg') }}" alt="Hollow Knight">
            <div class="name-album">
                <h4>Enter Pharloom</h4>
                <p>Hollow Knight: Silksong (Original Soundtrack)</p>
            </div>
            <button class="icon-btn2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><title>Circle-plus SVG Icon</title><g fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" d="M12 8v4m0 0v4m0-4h4m-4 0H8"/><circle cx="12" cy="12" r="10"/></g>
                </svg>
            </button>
        </div>

        <div class="player-control">
            <button> <!--svg favorito-->
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-heart"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
            </button>
            <button> <!--svg random-->
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-arrows-shuffle"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 4l3 3l-3 3" /><path d="M18 20l3 -3l-3 -3" /><path d="M3 7h3a5 5 0 0 1 5 5a5 5 0 0 0 5 5h5" /><path d="M21 7h-5a4.978 4.978 0 0 0 -3 1m-4 8a4.984 4.984 0 0 1 -3 1h-3" /></svg>
            </button>
            <button> <!--svg voltar-->
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-player-skip-back"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.496 4.136l-12 7a1 1 0 0 0 0 1.728l12 7a1 1 0 0 0 1.504 -.864v-14a1 1 0 0 0 -1.504 -.864z" /><path d="M4 4a1 1 0 0 1 .993 .883l.007 .117v14a1 1 0 0 1 -1.993 .117l-.007 -.117v-14a1 1 0 0 1 1 -1z" /></svg>
            </button>
            <button> <!--svg play-->
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-player-play"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 4v16a1 1 0 0 0 1.524 .852l13 -8a1 1 0 0 0 0 -1.704l-13 -8a1 1 0 0 0 -1.524 .852z" />
                </svg>
            </button>
            <button> <!--svg passar-->
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-player-skip-forward"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 5v14a1 1 0 0 0 1.504 .864l12 -7a1 1 0 0 0 0 -1.728l-12 -7a1 1 0 0 0 -1.504 .864z" /><path d="M20 4a1 1 0 0 1 .993 .883l.007 .117v14a1 1 0 0 1 -1.993 .117l-.007 -.117v-14a1 1 0 0 1 1 -1z" />
            </svg>
            </button>
                <button> <!--svg repetir-->
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-repeat"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 12v-3a3 3 0 0 1 3 -3h13m-3 -3l3 3l-3 3" /><path d="M20 12v3a3 3 0 0 1 -3 3h-13m3 3l-3 -3l3 -3" />
                    </svg>
                </button>
                <button> <!--svg compartilhar-->
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-share"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M8.7 10.7l6.6 -3.4" /><path d="M8.7 13.3l6.6 3.4" />
                    </svg>
                </button>
            <div class="progress">
                <span>00:00</span>
                <input type="range" min="0" max="100" />
                <span>02:47</span>
            </div>
        </div>

        <div class="player-right">
    <button class="icon-btn">
        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-volume"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 8a5 5 0 0 1 0 8" /><path d="M17.7 5a9 9 0 0 1 0 14" /><path d="M6 15h-2a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h2l3.5 -4.5a.8 .8 0 0 1 1.5 .5v14a.8 .8 0 0 1 -1.5 .5l-3.5 -4.5" /></svg>
    </button>

    <input type="range" min="0" max="100" value="50" class="volume-slider" />

     <button class="icon-btn"> 
        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-maximize"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 8v-2a2 2 0 0 1 2 -2h2" /><path d="M4 16v2a2 2 0 0 0 2 2h2" /><path d="M16 4h2a2 2 0 0 1 2 2v2" /><path d="M16 20h2a2 2 0 0 0 2 -2v-2" /></svg>
    </button>
    </div>

    </footer>
</body>
</html>