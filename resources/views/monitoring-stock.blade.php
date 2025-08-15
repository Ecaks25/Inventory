@section('title', __('Monitoring Terima TTPB'))
<x-layouts.app :title="__('Monitoring Terima TTPB')">
<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">{{ __('Ringkasan Terima TTPB') }}</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive text-nowrap">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Role</th>
                        <th>Total QTY</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $role => $qty)
                        <tr>
                            <td>{{ ucfirst(str_replace('_', ' ', $role)) }}</td>
                            <td>{{ $qty }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</x-layouts.app>
