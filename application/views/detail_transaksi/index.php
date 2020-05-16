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
                                        <th>Id Detail</th>
										<th>Id Transaksi</th>
										<th>Id Barang</th>
										<th>Jumlah</th>
										<th>Harga Total</th>
										<th>Estimasi</th>
										<!-- <th>Aksi</th> -->
									</tr>
								</thead>
								<tbody>
									<?php 
									$no = 1;
									foreach ($detail_transaksi as $value): ?>
										<tr>
											<td><?php echo $value->id_detail_transaksi?></td>
											<td><?php echo $value->id_transaksi?></td>
											<td><?php echo $value->id_barang?></td>
											<td><?php echo $value->jumlah_barang ?></td>
											<td><?php echo $value->harga_total ?></td>
											<td><?php echo $value->estimasi ?></td>
											<!-- <td>
												<a href="<?php echo base_url("detail_transaksi/cek/{$value->id_transaksi}") ?>" class="btn btn-sm btn-info"><i class="fas fa-edit"></i> Lihat Detail</a> -->
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
