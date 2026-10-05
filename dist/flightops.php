<!-- FLIGHT OPERATIONS -->
        <section id="flightops">
          <h1 class="h3 fw-bold mb-1">Flight Operations</h1>
          <p class="text-secondary mb-4">Create a flight, or pick one from the route network.</p>

          <div class="card border-0 shadow-sm bg-white mb-3">
            <div class="card-body">
              <h2 class="h6 fw-semibold mb-3">Create a flight</h2>
              <form class="row g-3">
                <div class="col-md-6 col-xl-3"><label class="form-label small text-secondary"
                    for="ac">Aircraft</label><select id="ac" class="form-select">
                    <option selected>Select aircraft</option>
                    <option>A320 · Fenix</option>
                    <option>A20N · FBW</option>
                    <option>A339 · Headwind</option>
                    <option>A359 · iniBuilds</option>
                    <option>A388 · FBW</option>
                  </select></div>
                <div class="col-md-6 col-xl-3"><label class="form-label small text-secondary" for="fn">Flight
                    number</label><input id="fn" class="form-control font-monospace" placeholder="SGM0000"></div>
                <div class="col-md-4 col-xl-2"><label class="form-label small text-secondary"
                    for="dep">Departure</label><input id="dep" class="form-control font-monospace" placeholder="ICAO">
                </div>
                <div class="col-md-4 col-xl-2"><label class="form-label small text-secondary"
                    for="arr">Destination</label><input id="arr" class="form-control font-monospace" placeholder="ICAO">
                </div>
                <div class="col-md-4 col-xl-2"><label class="form-label small text-secondary"
                    for="alt">Alternate</label><input id="alt" class="form-control font-monospace"
                    placeholder="Optional"></div>
                <div class="col-md-4"><label class="form-label small text-secondary" for="fl">Cruise altitude</label>
                  <div class="input-group"><span class="input-group-text">FL</span><input id="fl" type="number"
                      class="form-control font-monospace" placeholder="350"></div>
                </div>
                <div class="col-md-4"><label class="form-label small text-secondary" for="et">Estimated time</label>
                  <div class="input-group"><input id="et" class="form-control font-monospace" placeholder="h:mm"><span
                      class="input-group-text"><i class="bi bi-clock"></i></span></div>
                </div>
                <div class="col-md-4"><label class="form-label small text-secondary" for="pl">Passenger
                    load</label><input id="pl" type="range" class="form-range mt-2" min="0" max="100" value="80"></div>
                <div class="col-12"><label class="form-label small text-secondary" for="rt">Route</label><textarea
                    id="rt" rows="2" class="form-control font-monospace" placeholder="Route string"></textarea></div>
                <div class="col-md-6">
                  <div class="form-label small text-secondary">Network</div>
                  <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="net"
                      id="n1" checked><label class="form-check-label" for="n1">Offline</label></div>
                  <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="net"
                      id="n2"><label class="form-check-label" for="n2">VATSIM</label></div>
                  <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="net"
                      id="n3"><label class="form-check-label" for="n3">IVAO</label></div>
                </div>
                <div class="col-md-6">
                  <div class="form-check form-switch"><input class="form-check-input" type="checkbox" role="switch"
                      id="pub" checked><label class="form-check-label" for="pub">Add to route network</label></div>
                  <div class="form-check mt-2"><input class="form-check-input" type="checkbox" id="bid"><label
                      class="form-check-label" for="bid">Place a bid after creating</label></div>
                </div>
                <div class="col-12 d-flex gap-2"><button type="button" class="btn btn-warning">Create
                    flight</button><button type="reset" class="btn btn-outline-secondary">Reset</button></div>
              </form>
            </div>
          </div>

          <div class="card border-0 shadow-sm bg-white">
            <div class="card-body">
              <h2 class="h6 fw-semibold mb-3">Route network</h2>
              <form class="row g-2 mb-3">
                <div class="col-md-4">
                  <div class="input-group"><span class="input-group-text"><i class="bi bi-search"></i></span><input
                      type="search" class="form-control" placeholder="Flight number or airport"
                      aria-label="Search routes"></div>
                </div>
                <div class="col-6 col-md-3"><select class="form-select" aria-label="Aircraft">
                    <option selected>All aircraft</option>
                    <option>A320</option>
                    <option>A20N</option>
                    <option>A339</option>
                    <option>A359</option>
                    <option>A388</option>
                  </select></div>
                <div class="col-6 col-md-3"><select class="form-select" aria-label="Sort">
                    <option selected>Newest first</option>
                    <option>Distance</option>
                    <option>Flight time</option>
                  </select></div>
                <div class="col-md-2"><button type="button" class="btn btn-warning w-100">Filter</button></div>
              </form>
              <div class="table-responsive">
                <table class="table align-middle mb-0">
                  <thead>
                    <tr class="small text-secondary">
                      <th class="fw-medium">Flight</th>
                      <th class="fw-medium">Route</th>
                      <th class="fw-medium d-none d-md-table-cell">Distance</th>
                      <th class="fw-medium d-none d-sm-table-cell">Created by</th>
                      <th class="text-end fw-medium">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td colspan="5" class="text-center text-secondary py-4">No routes found</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <nav class="mt-3" aria-label="Route pages">
                <ul class="pagination pagination-sm justify-content-end mb-0">
                  <li class="page-item disabled"><a class="page-link" href="#flightops">Previous</a></li>
                  <li class="page-item active"><a class="page-link" href="#flightops">1</a></li>
                  <li class="page-item"><a class="page-link" href="#flightops">2</a></li>
                  <li class="page-item"><a class="page-link" href="#flightops">Next</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </section>