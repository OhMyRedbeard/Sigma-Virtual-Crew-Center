<!DOCTYPE html>
<html lang="en">
<!-- TEST-->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crew Center | Sigma Virtual Airlines</title>
  <link rel="stylesheet" href="./css/sigma.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@500;600&display=swap"
    rel="stylesheet">
</head>

<body class="vh-100 overflow-hidden">
  <div class="d-flex h-100">

    <!-- SIDEBAR: static at lg+, off-canvas from the left below -->
    <aside id="sidebar" class="offcanvas-lg offcanvas-start flex-shrink-0 border-0" tabindex="-1"
      aria-labelledby="sidebarLabel" style="--bs-offcanvas-width:16rem">
      <div class="bg-dark d-flex flex-column w-100 h-100" data-bs-theme="dark">
        <div class="d-flex align-items-center gap-2 px-3 py-3 border-bottom border-secondary-subtle">
          <img src="./img/sigma-logo.png" alt="" style="max-height:36px">
          <div class="lh-sm" id="sidebarLabel">
            <div class="sidebar-title fw-bold font-monospace">SIGMA</div>
            <div class="small text-secondary">Crew Center</div>
          </div>
          <button type="button" class="btn-close ms-auto d-lg-none" data-bs-dismiss="offcanvas"
            data-bs-target="#sidebar" aria-label="Close menu"></button>
        </div>
        <nav class="flex-grow-1 overflow-auto px-2 py-3" aria-label="Main">
          <ul class="nav flex-column gap-1" id="mainNav">
            <li><a class="nav-link rounded-2 d-flex align-items-center gap-3" href="?page=dashboard"><i
                  class="bi bi-grid-1x2"></i>Dashboard</a></li>
            <li><a class="nav-link rounded-2 d-flex align-items-center gap-3" href="?page=flightops"><i
                  class="bi bi-signpost-split"></i>Flight Operations</a></li>
            <li><a class="nav-link rounded-2 d-flex align-items-center gap-3" href="?page=pireps"><i
                  class="bi bi-journal-check"></i>My PIREPs</a></li>
            <li><a class="nav-link rounded-2 d-flex align-items-center gap-3" href="?page=fleet"><i
                  class="bi bi-airplane-engines"></i>Fleet</a></li>
            <li><a class="nav-link rounded-2 d-flex align-items-center gap-3" href="?page=profile"><i
                  class="bi bi-person-gear"></i>Profile &amp; settings</a></li>
          </ul>
        </nav>
        <div class="p-3 border-top border-secondary-subtle">
          <div class="d-flex align-items-center gap-3 mb-2"><i class="bi bi-broadcast text-warning fs-5"></i>
            <div class="lh-sm">
              <div class="small fw-semibold">vmsACARS</div>
              <div class="small text-secondary">Status</div>
            </div>
          </div>
          <a href="https://flysigmava.us" class="btn btn-outline-secondary btn-sm w-100"><i
              class="bi bi-box-arrow-up-right me-2"></i>Sigma website</a>
        </div>
      </div>
    </aside>

    <!-- MAIN -->
    <div class="flex-grow-1 d-flex flex-column h-100 overflow-hidden">

      <header class="bg-dark d-flex align-items-center gap-3 px-3 py-2 flex-shrink-0" data-bs-theme="dark">
        <button class="btn btn-outline-secondary border-0 d-lg-none" type="button" data-bs-toggle="offcanvas"
          data-bs-target="#sidebar" aria-controls="sidebar" aria-label="Open menu"><i
            class="bi bi-list fs-4"></i></button>
        <form class="d-none d-sm-block flex-grow-1" style="max-width:26rem" role="search">
          <div class="input-group input-group-sm">
            <span class="input-group-text bg-white bg-opacity-10 border-0 text-secondary"><i
                class="bi bi-search"></i></span>
            <input type="search" class="form-control bg-white bg-opacity-10 border-0 text-white"
              placeholder="Search airports, routes, pilots" aria-label="Search">
          </div>
        </form>
        <div class="ms-auto d-flex align-items-center gap-2">
          <span class="d-none d-md-inline font-monospace small text-secondary me-2" id="zulu">--:--Z</span>
          <div class="dropdown">
            <button class="btn btn-outline-secondary border-0" type="button" data-bs-toggle="dropdown"
              aria-expanded="false" aria-label="Notifications"><i class="bi bi-bell"></i></button>
            <ul class="dropdown-menu dropdown-menu-end shadow border-0" style="min-width:16rem">
              <li class="dropdown-item-text small text-secondary">Notifications</li>
            </ul>
          </div>
          <div class="dropdown">
            <button class="btn btn-outline-secondary border-0 d-flex align-items-center gap-2" type="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              <span
                class="rounded-circle bg-warning text-white d-inline-flex align-items-center justify-content-center small"
                style="width:2rem;height:2rem"><i class="bi bi-person-fill"></i></span>
              <span class="d-none d-md-inline small text-start lh-sm">Pilot name<br><span
                  class="font-monospace text-secondary">Pilot ID</span></span>
            </button>
            <ul class="dropdown-menu dropdown-menu-end shadow border-0">
              <li><a class="dropdown-item" href="#profile"><i class="bi bi-person me-2"></i>Profile</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item text-danger" href="/logout"><i class="bi bi-box-arrow-right me-2"></i>Sign
                  out</a></li>
            </ul>
          </div>
        </div>
      </header>

      <main class="flex-grow-1 overflow-auto p-3 p-lg-4">

<?php
if(isset($_GET["page"])){
  if($_GET["page"] == "dashboard"){
    include ("./dashboard.php");
  }
  elseif($_GET["page"] == "flightops"){
    include ("./flightops.php");
  }
  elseif($_GET["page"] == "pireps"){
    include("./pireps.php");
  }
  elseif($_GET["page"] == "fleet"){
    include ("./fleet.php");
  }
  elseif($_GET["page"] == "profile"){
    include("./profile.php");
  }
} else {
  include("./dashboard.php");
}
?>

        





        

        <footer class="small text-secondary pt-4">Sigma Virtual Airlines is a virtual airline operating for flight
          simulation purposes only and is not affiliated with any real-world airline, alliance, or aircraft
          manufacturer. No actual flights take place. &copy; <span id="yr"></span></footer>
      </main>
    </div>
  </div>

  <!-- PIREP MODAL -->
  <div class="modal fade" id="pirepModal" tabindex="-1" aria-labelledby="pirepTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
      <div class="modal-content border-0 shadow">
        <div class="modal-header">
          <h2 class="modal-title h5" id="pirepTitle">File a PIREP</h2><button type="button" class="btn-close"
            data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="row g-3">
            <div class="col-md-4"><label class="form-label small text-secondary" for="pf">Flight number</label><input
                id="pf" class="form-control font-monospace"></div>
            <div class="col-md-4"><label class="form-label small text-secondary" for="pd">Departure</label><input
                id="pd" class="form-control font-monospace" placeholder="ICAO"></div>
            <div class="col-md-4"><label class="form-label small text-secondary" for="pa">Destination</label><input
                id="pa" class="form-control font-monospace" placeholder="ICAO"></div>
            <div class="col-md-4"><label class="form-label small text-secondary" for="pac">Aircraft</label><select
                id="pac" class="form-select">
                <option selected>Select aircraft</option>
              </select></div>
            <div class="col-md-4"><label class="form-label small text-secondary" for="pt">Flight time</label><input
                id="pt" class="form-control font-monospace" placeholder="h:mm"></div>
            <div class="col-md-4"><label class="form-label small text-secondary" for="plr">Landing rate</label>
              <div class="input-group"><input id="plr" type="number" class="form-control font-monospace"><span
                  class="input-group-text">fpm</span></div>
            </div>
            <div class="col-md-6"><label class="form-label small text-secondary" for="ps">Screenshot</label><input
                id="ps" type="file" class="form-control" accept="image/*"></div>
            <div class="col-md-6">
              <div class="form-label small text-secondary">Network</div>
              <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="pnet" id="p1"
                  checked><label class="form-check-label" for="p1">Offline</label></div>
              <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="pnet"
                  id="p2"><label class="form-check-label" for="p2">Online</label></div>
            </div>
            <div class="col-12"><label class="form-label small text-secondary" for="pn">Notes</label><textarea id="pn"
                rows="3" class="form-control"></textarea></div>
          </form>
        </div>
        <div class="modal-footer"><button class="btn btn-outline-secondary"
            data-bs-dismiss="modal">Cancel</button><button class="btn btn-warning">Submit PIREP</button></div>
      </div>
    </div>
  </div>

  <script src="./js/bootstrap.bundle.min.js"></script>
  <script>
    // Hash router: show one section, highlight its nav link, close the mobile menu.
    const views = document.querySelectorAll('[data-view]');
    const links = document.querySelectorAll('#mainNav .nav-link');
    function route() {
      const id = (location.hash || '#dashboard').slice(1);
      views.forEach(v => v.classList.toggle('d-none', v.id !== id));
      links.forEach(a => {
        const on = a.getAttribute('href') === '#' + id;
        a.classList.toggle('bg-warning', on);
        a.classList.toggle('text-white', on);
        a.setAttribute('aria-current', on ? 'page' : 'false');
      });
      bootstrap.Offcanvas.getInstance('#sidebar')?.hide();
      document.querySelector('main').scrollTo({ top: 0 });
    }
    addEventListener('hashchange', route); route();
    const tick = () => document.getElementById('zulu').textContent = new Date().toISOString().slice(11, 16) + 'Z';
    tick(); setInterval(tick, 30000);
    document.getElementById('yr').textContent = new Date().getFullYear();
  </script>
</body>

</html>