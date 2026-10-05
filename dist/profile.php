<!-- PROFILE & SETTINGS -->
        <section id="profile">
          <h1 class="h3 fw-bold mb-4">Profile &amp; settings</h1>
          <div class="row g-3">
            <div class="col-xl-7">
              <div class="card border-0 shadow-sm bg-white mb-3">
                <div class="card-body">
                  <h2 class="h6 fw-semibold mb-3">Profile</h2>
                  <form class="row g-3">
                    <div class="col-md-6">
                      <div class="form-floating"><input id="nm" class="form-control" placeholder="Name"><label
                          for="nm">Name</label></div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating"><input id="em" type="email" class="form-control"
                          placeholder="Email"><label for="em">Email</label></div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating"><select id="sim" class="form-select">
                          <option>MSFS</option>
                          <option>X-Plane</option>
                          <option>P3D</option>
                        </select><label for="sim">Simulator</label></div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating"><select id="cty" class="form-select">
                          <option>Country</option>
                        </select><label for="cty">Country</label></div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating"><input id="vs" class="form-control font-monospace"
                          placeholder="VATSIM ID"><label for="vs">VATSIM ID (optional)</label></div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating"><input id="iv" class="form-control font-monospace"
                          placeholder="IVAO ID"><label for="iv">IVAO ID (optional)</label></div>
                    </div>
                    <div class="col-12"><label class="form-label small text-secondary" for="av">Avatar</label><input
                        id="av" type="file" class="form-control" accept="image/*"></div>
                    <div class="col-12"><button type="button" class="btn btn-warning">Save changes</button></div>
                  </form>
                </div>
              </div>
              <div class="card border-0 shadow-sm bg-white">
                <div class="card-body">
                  <h2 class="h6 fw-semibold mb-3">Change password</h2>
                  <form class="row g-3">
                    <div class="col-md-6"><label class="form-label small text-secondary" for="cp">Current
                        password</label><input id="cp" type="password" class="form-control"></div>
                    <div class="col-md-6"><label class="form-label small text-secondary" for="np">New password</label>
                      <div class="input-group"><input id="np" type="password" class="form-control"><button
                          class="btn btn-outline-secondary" type="button" aria-label="Show password"><i
                            class="bi bi-eye"></i></button></div>
                      <div class="form-text">Helper text goes here.</div>
                    </div>
                    <div class="col-12"><button type="button" class="btn btn-warning">Update password</button></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-xl-5">
              <div class="card border-0 shadow-sm bg-white">
                <div class="card-body">
                  <h2 class="h6 fw-semibold mb-3">Preferences</h2>
                  <form class="d-grid gap-3">
                    <div>
                      <div class="form-label small text-secondary">Units</div>
                      <div class="form-check"><input class="form-check-input" type="radio" name="units" id="u1"
                          checked><label class="form-check-label" for="u1">Pounds / nautical miles</label></div>
                      <div class="form-check"><input class="form-check-input" type="radio" name="units" id="u2"><label
                          class="form-check-label" for="u2">Kilograms / kilometers</label></div>
                    </div>
                    <div>
                      <div class="form-label small text-secondary">Email notifications</div>
                      <div class="form-check form-switch"><input class="form-check-input" type="checkbox" role="switch"
                          id="s1" checked><label class="form-check-label" for="s1">PIREP status updates</label></div>
                      <div class="form-check form-switch"><input class="form-check-input" type="checkbox" role="switch"
                          id="s2"><label class="form-check-label" for="s2">Announcements</label></div>
                    </div>
                    <div>
                      <div class="form-check"><input class="form-check-input" type="checkbox" id="pv" checked><label
                          class="form-check-label" for="pv">Show me on the public pilot list</label></div>
                    </div>
                    <div><button type="button" class="btn btn-warning">Save preferences</button></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>