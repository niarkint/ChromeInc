<?php $this->load->view('include/header');?>

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Ini Dashboard</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v3</li> -->
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content 1 -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-info">
						<div class="inner">
							<h3>150</h3>

							<p>New Orders</p>
						</div>
						<div class="icon">
							<i class="ion ion-bag"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-success">
						<div class="inner">
							<h3>53<sup style="font-size: 20px">%</sup></h3>

							<p>Bounce Rate</p>
						</div>
						<div class="icon">
							<i class="ion ion-stats-bars"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-warning">
						<div class="inner">
							<h3>44</h3>

							<p>User Registrations</p>
						</div>
						<div class="icon">
							<i class="ion ion-person-add"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-danger">
						<div class="inner">
							<h3>65</h3>

							<p>Unique Visitors</p>
						</div>
						<div class="icon">
							<i class="ion ion-pie-graph"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
			</div>
		</div>
	</section>
	<!-- /.content 1 -->

	<!-- Main content 2 -->
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header border-0">
							<div class="d-flex justify-content-between">
								<h3 class="card-title">Ini Chart</h3>
								<div class="card-tools">
									<button type="button" class="btn btn-primary btn-sm daterange" data-toggle="tooltip"
										title="Date range">
										<i class="far fa-calendar-alt"></i>
									</button>
									<button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" data-toggle="tooltip"
										title="Collapse">
										<i class="fas fa-minus"></i>
									</button>
								</div>
								<!-- <a href="javascript:void(0);">View Report</a> -->
							</div>
						</div>
						<div class="card-body">
							<!-- <div class="d-flex">
								<p class="d-flex flex-column">
									<span class="text-bold text-lg">820</span>
									<span>Visitors Over Time</span>
								</p>
								<p class="ml-auto d-flex flex-column text-right">
									<span class="text-success">
										<i class="fas fa-arrow-up"></i> 12.5%
									</span>
									<span class="text-muted">Since last week</span>
								</p>
							</div> -->
							<!-- /.d-flex -->

							<div class="position-relative mb-4">
								<canvas id="custom-chart" height="200"></canvas>
							</div>

							<div class="d-flex flex-row justify-content-end">
								<span class="mr-2">
									<i class="fas fa-square text-primary"></i> This Week
								</span>

								<span>
									<i class="fas fa-square text-gray"></i> Last Week
								</span>
							</div>
						</div>
					</div>
					<!-- /.card -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container-fluid -->
		</div>
		<!-- /.content 2 -->
	</div>
	<!-- /.content 2 -->
</div>
<?php $this->load->view('include/footer',array(
  'extra_script'=>array(
    '<script src="'.base_url().'assets/controllers/dashboard.js"></script>',
    '<script src="'.base_url().'assets/plugins/chart.js/Chart.min.js"></script>'
  )
));?>
