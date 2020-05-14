<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card card-info">
						<div class="card-body">
							<table id="datatable" class="table table-bordered table-hover">
								<thead>
									<tr>
                                        <th>Id Transaksi</th>
										<th>Tgl Masuk</th>
										<th>Tgl Keluar</th>
										<th>Id Customer</th>
										<th>Id Pegawai</th>
										<th>Status</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									$no = 1;
									foreach ($transaksi as $value): ?>
										<tr>
											<td><?php echo $value->id_transaksi?></td>
											<td><?php echo $value->tanggal_masuk?></td>
											<td><?php echo $value->tanggal_keluar?></td>
											<td><?php echo $value->id_customer ?></td>
											<td><?php echo $value->id_pegawai ?></td>
											<td><?php echo $value->status ?></td>
											<td>
												<a href="<?php echo base_url("detail_transaksi/cek/{$value->id_transaksi}") ?>" class="btn btn-sm btn-info"><i class="fas fa-edit"></i> Lihat Detail</a>
										</tr>
									<?php 
									$no++;
									endforeach;?>

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
