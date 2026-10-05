        <!-- PIREPS -->
        <section id="pireps">
          <div class="d-flex align-items-center mb-3">
            <h1 class="h3 fw-bold mb-0">My PIREPs</h1>
            <button class="btn btn-warning ms-auto" data-bs-toggle="modal" data-bs-target="#pirepModal"><i
                class="bi bi-plus-lg me-2"></i>File a PIREP</button>
          </div>
          <div class="card border-0 shadow-sm bg-white">
            <div class="card-body">
              <form class="row g-2 mb-3">
                <div class="col-md-4">
                  <div class="input-group"><span class="input-group-text"><i class="bi bi-search"></i></span><input
                      type="search" class="form-control" placeholder="Flight number or airport"
                      aria-label="Search PIREPs"></div>
                </div>
                <div class="col-6 col-md-3"><select class="form-select" aria-label="Status">
                    <option selected>All statuses</option>
                    <option>Accepted</option>
                    <option>Pending</option>
                    <option>Rejected</option>
                  </select></div>
                <div class="col-6 col-md-3"><input type="date" class="form-control" aria-label="From date"></div>
                <div class="col-md-2"><button type="button" class="btn btn-warning w-100">Filter</button></div>
              </form>
              <div class="table-responsive">
                <table class="table align-middle mb-0">
                  <thead>
                    <tr class="small text-secondary">
                      <th class="fw-medium">Date</th>
                      <th class="fw-medium">Flight</th>
                      <th class="fw-medium">Route</th>
                      <th class="fw-medium d-none d-md-table-cell">Block time</th>
                      <th class="fw-medium d-none d-md-table-cell">Landing rate</th>
                      <th class="fw-medium">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td colspan="6" class="text-center text-secondary py-4">No PIREPs yet</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <nav class="mt-3" aria-label="PIREP pages">
                <ul class="pagination pagination-sm justify-content-end mb-0">
                  <li class="page-item disabled"><a class="page-link" href="#pireps">Previous</a></li>
                  <li class="page-item active"><a class="page-link" href="#pireps">1</a></li>
                  <li class="page-item"><a class="page-link" href="#pireps">Next</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </section>