@extends('layouts.entete')
<main id="main" class="main">
    <section class="section dashboard">
        <div class="row">

          <div class="col-lg-8">
            <div class="row">
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title">ITURI <span>| Bunia</span></h5>
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-box"></i>
                      </div>
                      <div class="ps-3">
                        <h6 class="small pt-1 fw-bold">145
                        </h6><span class="text-muted small pt-2 ps-1">Stock</span>
                      </div>
                      <div class="ps-3">
                        <h6 class="small pt-1 fw-bold">145
                        </h6><span class="text-muted small pt-2 ps-1">Inventorié</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title">KATANGA <span>| Kolwezi</span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-box"></i>
                      </div>
                      <div class="ps-3">
                        <h6>230</h6>
                        <span class="text-muted small pt-1">Stock</span>
                      </div>
                      <div class="ps-3">
                        <h6>230</h6>
                        <span class="text-muted small pt-1">Inventorié</span>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="col-xxl-4 col-xl-12">

                <div class="card info-card sales-card">

                  <div class="card-body">
                    <h5 class="card-title">KINSHASA <span>| Ngaliema</span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-box"></i>
                      </div>
                      <div class="ps-3">
                        <h6>1244</h6>
                        <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                      </div>
                    </div>

                  </div>
                </div>

              </div>
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title">NORD-KIVU <span>| Goma</span></h5>
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-box"></i>
                      </div>
                      <div class="ps-3">
                        <h6 class="small pt-1 fw-bold">145
                        </h6><span class="text-muted small pt-2 ps-1">Stock</span>
                      </div>
                      <div class="ps-3">
                        <h6 class="small pt-1 fw-bold">145
                        </h6><span class="text-muted small pt-2 ps-1">Inventorié</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title">SUD-KIVU <span>| Bukavu</span></h5>
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-box"></i>
                      </div>
                      <div class="ps-3">
                        <h6 class="small pt-1 fw-bold">145
                        </h6><span class="text-muted small pt-2 ps-1">Stock</span>
                      </div>
                      <div class="ps-3">
                        <h6 class="small pt-1 fw-bold">145
                        </h6><span class="text-muted small pt-2 ps-1">Inventorié</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title">TSHOPO <span>| Kisangani</span></h5>
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-box"></i>
                      </div>
                      <div class="ps-3">
                        <h6 class="small pt-1 fw-bold">145
                        </h6><span class="text-muted small pt-2 ps-1">Stock</span>
                      </div>
                      <div class="ps-3">
                        <h6 class="small pt-1 fw-bold">145
                        </h6><span class="text-muted small pt-2 ps-1">Inventorié</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="col-lg-4">
            <div class="card">
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Recent Activity <span>| Today</span></h5>

                <div class="activity">

                  <div class="activity-item d-flex">
                    <div class="activite-label">32 min</div>
                    <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                    <div class="activity-content">
                      Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
                    </div>
                  </div><!-- End activity item-->

                  <div class="activity-item d-flex">
                    <div class="activite-label">56 min</div>
                    <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                    <div class="activity-content">
                      Voluptatem blanditiis blanditiis eveniet
                    </div>
                  </div><!-- End activity item-->

                  <div class="activity-item d-flex">
                    <div class="activite-label">2 hrs</div>
                    <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                    <div class="activity-content">
                      Voluptates corrupti molestias voluptatem
                    </div>
                  </div><!-- End activity item-->

                  <div class="activity-item d-flex">
                    <div class="activite-label">1 day</div>
                    <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                    <div class="activity-content">
                      Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a> tempore
                    </div>
                  </div><!-- End activity item-->

                  <div class="activity-item d-flex">
                    <div class="activite-label">2 days</div>
                    <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                    <div class="activity-content">
                      Est sit eum reiciendis exercitationem
                    </div>
                  </div><!-- End activity item-->

                  <div class="activity-item d-flex">
                    <div class="activite-label">4 weeks</div>
                    <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                    <div class="activity-content">
                      Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                    </div>
                  </div><!-- End activity item-->

                </div>

              </div>
            </div>
          </div>
        </div>
      </section>
</main>
