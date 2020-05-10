@extends('layout')

@section('Header')
@parent
@section('title', 'Datos estadísticos')

@section('contenido')

<div class="breadcrumbs">
  <div class="breadcrumbs-inner">
    <div class="row m-0">
      <div class="col-sm-4">
        <div class="page-header float-left">
          <div class="page-title">
            <h1>Datos estadísticos</h1>
          </div>
        </div>
      </div>
      <div class="col-sm-8">
        <div class="page-header float-right">
          <div class="page-title">
            <ol class="breadcrumb text-right">
              <li><a href="#">Dashboard</a></li>
              <li><a href="#">Table</a></li>
              <li class="active">Basic table</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="content">
    <div class="animated fadeIn">

      <div class="row">
        <div class="col-sm-6 col-lg-3">
          <div class="card text-white bg-flat-color-1">
            <div class="card-body">
              <div class="card-left pt-1 float-left">
                <h3 class="mb-0 fw-r">
                  <span class="currency float-left mr-1">$</span>
                  <span class="count">23569</span>
                </h3>
                <p class="text-light mt-1 m-0">Revenue</p>
              </div>
              <div class="card-right float-right text-right">
                <i class="icon fade-5 icon-lg pe-7f-cart"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-3">
          <div class="card text-white bg-flat-color-6">
            <div class="card-body">
              <div class="card-left pt-1 float-left">
                <h3 class="mb-0 fw-r">
                  <span class="count float-left">85</span>
                  <span>%</span>
                </h3>
                <p class="text-light mt-1 m-0">Dummy text here</p>
              </div>
              <div class="card-right float-right text-right">
                <div id="flotBar1" class="flotBar1" style="padding: 0px; position: relative;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 109px; height: 75px;" width="87" height="60"></canvas><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 109px; height: 75px;" width="87" height="60"></canvas></div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-3">
          <div class="card text-white bg-flat-color-3">
            <div class="card-body">
              <div class="card-left pt-1 float-left">
                <h3 class="mb-0 fw-r">
                  <span class="count">6569</span>
                </h3>
                <p class="text-light mt-1 m-0">Total clients</p>
              </div>
              <div class="card-right float-right text-right">
                <i class="icon fade-5 icon-lg pe-7f-users"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-3">
          <div class="card text-white bg-flat-color-2">
            <div class="card-body">
              <div class="card-left pt-1 float-left">
                <h3 class="mb-0 fw-r">
                  <span class="count">1490</span>
                </h3>
                <p class="text-light mt-1 m-0">New users</p>
              </div>
              <div class="card-right float-right text-right">
                <div id="flotLine1" class="flotLine1" style="padding: 0px; position: relative;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 109px; height: 75px;" width="87" height="60"></canvas><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 109px; height: 75px;" width="87" height="60"></canvas></div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="card">
            <div class="card-body">
              <div class="stat-widget-four">
                <div class="stat-icon dib">
                  <i class="ti-server text-muted"></i>
                </div>
                <div class="stat-content">
                  <div class="text-left dib">
                    <div class="stat-heading">Database</div>
                    <div class="stat-text">Total: 765</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card">
            <div class="card-body">
              <div class="stat-widget-four">
                <div class="stat-icon dib">
                  <i class="ti-user text-muted"></i>
                </div>
                <div class="stat-content">
                  <div class="text-left dib">
                    <div class="stat-heading">Users</div>
                    <div class="stat-text">Total: 24720</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card">
            <div class="card-body">
              <div class="stat-widget-four">
                <div class="stat-icon dib">
                  <i class="ti-stats-up text-muted"></i>
                </div>
                <div class="stat-content">
                  <div class="text-left dib">
                    <div class="stat-heading">Daily Sales</div>
                    <div class="stat-text">Total: $76,58,714</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card">
            <div class="card-body">
              <div class="stat-widget-four">
                <div class="stat-icon dib">
                  <i class="ti-pulse text-muted"></i>
                </div>
                <div class="stat-content">
                  <div class="text-left dib">
                    <div class="stat-heading">Bandwidth</div>
                    <div class="stat-text">Total: 4TB</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card">
            <div class="card-body">
              <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                <div class="stat-content dib">
                  <div class="stat-text">Total Profit</div>
                  <div class="stat-digit">1,012</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card">
            <div class="card-body">
              <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                <div class="stat-content dib">
                  <div class="stat-text">New Customer</div>
                  <div class="stat-digit">961</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card">
            <div class="card-body">
              <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                <div class="stat-content dib">
                  <div class="stat-text">Active Projects</div>
                  <div class="stat-digit">770</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card">
            <div class="card-body">
              <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-link text-danger border-danger"></i></div>
                <div class="stat-content dib">
                  <div class="stat-text">Referrals</div>
                  <div class="stat-digit">2,781</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 mb-4">
          <div class="card-group">
            <div class="card col-md-6 no-padding ">
              <div class="card-body">
                <div class="h1 text-muted text-right mb-4">
                  <i class="fa fa-users"></i>
                </div>
                <div class="h4 mb-0">
                  <span class="count">87500</span>
                </div>
                <small class="text-muted text-uppercase font-weight-bold">Visitors</small>
                <div class="progress progress-xs mt-3 mb-0 bg-flat-color-1" style="width: 40%; height: 5px;"></div>
              </div>
            </div>
            <div class="card col-md-6 no-padding ">
              <div class="card-body">
                <div class="h1 text-muted text-right mb-4">
                  <i class="fa fa-user-plus"></i>
                </div>
                <div class="h4 mb-0">
                  <span class="count">385</span>
                </div>
                <small class="text-muted text-uppercase font-weight-bold">New Clients</small>
                <div class="progress progress-xs mt-3 mb-0 bg-flat-color-2" style="width: 40%; height: 5px;"></div>
              </div>
            </div>
            <div class="card col-md-6 no-padding ">
              <div class="card-body">
                <div class="h1 text-muted text-right mb-4">
                  <i class="fa fa-cart-plus"></i>
                </div>
                <div class="h4 mb-0">
                  <span class="count">1238</span>
                </div>
                <small class="text-muted text-uppercase font-weight-bold">Products sold</small>
                <div class="progress progress-xs mt-3 mb-0 bg-flat-color-3" style="width: 40%; height: 5px;"></div>
              </div>
            </div>
            <div class="card col-md-6 no-padding ">
              <div class="card-body">
                <div class="h1 text-muted text-right mb-4">
                  <i class="fa fa-pie-chart"></i>
                </div>
                <div class="h4 mb-0">
                  <span class="count">28</span>%
                </div>
                <small class="text-muted text-uppercase font-weight-bold">Returning Visitors</small>
                <div class="progress progress-xs mt-3 mb-0 bg-flat-color-4" style="width: 40%; height: 5px;"></div>
              </div>
            </div>
            <div class="card col-md-6 no-padding ">
              <div class="card-body">
                <div class="h1 text-muted text-right mb-4">
                  <i class="fa fa-clock-o"></i>
                </div>
                <div class="h4 mb-0">5:34:11</div>
                <small class="text-muted text-uppercase font-weight-bold">Avg. Time</small>
                <div class="progress progress-xs mt-3 mb-0 bg-flat-color-5" style="width: 40%; height: 5px;"></div>
              </div>
            </div>
            <div class="card col-md-6 no-padding ">
              <div class="card-body">
                <div class="h1 text-muted text-right mb-4">
                  <i class="fa fa-comments-o"></i>
                </div>
                <div class="h4 mb-0">
                  <span class="count">972</span>
                </div>
                <small class="text-muted text-uppercase font-weight-bold">COMMENTS</small>
                <div class="progress progress-xs mt-3 mb-0 bg-flat-color-1" style="width: 40%; height: 5px;"></div>
              </div>
            </div>
          </div>
        </div>
      </div>

        <div class="row">

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3">Yearly Sales </h4>
                        <canvas id="sales-chart"></canvas>
                    </div>
                </div>
            </div><!-- /# column -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3">Team Commits </h4>
                        <canvas id="team-chart"></canvas>
                    </div>
                </div>
            </div><!-- /# column -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3">Bar chart </h4>
                        <canvas id="barChart"></canvas>
                    </div>
                </div>
            </div><!-- /# column -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3">Rader chart </h4>
                        <canvas id="radarChart"></canvas>
                    </div>
                </div>
            </div><!-- /# column -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3">Line Chart </h4>
                        <canvas id="lineChart"></canvas>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mb-3">Doughut Chart </h4>
                            <canvas id="doughutChart"></canvas>
                        </div>
                    </div>
                </div><!-- /# column -->

            </div><!-- /# column -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3">Pie Chart </h4>
                        <canvas id="pieChart"></canvas>
                    </div>
                </div>
            </div><!-- /# column -->


            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3">Polar Chart </h4>
                        <canvas id="polarChart"></canvas>
                    </div>
                </div>
            </div><!-- /# column -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3">Single Bar Chart </h4>
                        <canvas id="singelBarChart"></canvas>
                    </div>
                </div>
            </div><!-- /# column -->
        </div>
    </div><!-- .animated -->
</div>
@endsection

@endsection
