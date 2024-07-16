<x-layout>
	<x-slot name="title">Dashboard</x-slot>
	<x-slot name="page_heading">Dashboard</x-slot>

	<div class="row">
		<div class="col-lg-3 col-md-6 col-sm-6 col-12">
			<div class="card card-statistic-1">
				<div class="card-icon bg-primary">
					<i class="fas fa-columns"></i>
				</div>
				<div class="card-wrap">
					<div class="card-header">
						<h4>Total Barang</h4>
					</div>
					<div class="card-body">
						{{ $commodity_counts['commodity_in_total'] }}
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6 col-12">
			<div class="card card-statistic-1">
				<div class="card-icon bg-success">
					<i class="fas fa-fw fa-check-circle"></i>
				</div>
				<div class="card-wrap">
					<div class="card-header">
						<h4>Kondisi Baik</h4>
					</div>
					<div class="card-body">
						{{ $commodity_counts['commodity_in_good_condition'] }}
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6 col-12">
			<div class="card card-statistic-1">
				<div class="card-icon bg-warning">
					<i class="fas fa-fw fa-exclamation-circle"></i>
				</div>
				<div class="card-wrap">
					<div class="card-header">
						<h4>Kondisi Rusak Ringan</h4>
					</div>
					<div class="card-body">
						{{ $commodity_counts['commodity_in_not_good_condition'] }}
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6 col-12">
			<div class="card card-statistic-1">
				<div class="card-icon bg-danger">
					<i class="fas fa-fw fa-times-circle"></i>
				</div>
				<div class="card-wrap">
					<div class="card-header">
						<h4>Kondisi Rusak Berat</h4>
					</div>
					<div class="card-body">
						{{ $commodity_counts['commodity_in_heavily_damage_condition'] }}
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-lg-12">
			<div class="card">
				<x-bar-chart chartTitle="Grafik Barang Berdasarkan Kondisi" chartID="chartCommodityCondition"
					:series="$charts['commodity_condition_count']['series']"
					:categories="$charts['commodity_condition_count']['categories']" :colors="['#47C363', '#FFA426', '#FC544B']">
				</x-bar-chart>
			</div>
		</div>
	</div>



	@push('modal')
	@include('commodities.modal.show')
	@endpush

	@push('js')
	@include('_script');
	@endpush
</x-layout>
