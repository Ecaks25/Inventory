@section('title', __('Mixing Barang Jadi'))
<x-layouts.app :title="__('Mixing Barang Jadi')">
  <div class="card">
    <div class="card-header">
      <h5 class="card-title mb-0">{{ __('Barang Jadi') }}</h5>
    </div>
    <div class="card-body">
      <div class="table-responsive text-nowrap">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>{{ __('Nama Barang') }}</th>
              <th>{{ __('QTY') }}</th>
            </tr>
          </thead>
          <tbody>
            @forelse($records as $item)
              <tr>
                <td>{{ $item->nama_barang }}</td>
                <td>{{ $item->total_qty }}</td>
              </tr>
            @empty
              <tr>
                <td colspan="2" class="text-center">{{ __('Belum ada data') }}</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</x-layouts.app>
