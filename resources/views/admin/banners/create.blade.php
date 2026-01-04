@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h6>Banner Creator</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div style="width: 100%; height: calc(100vh - 250px); min-height: 600px;">
                        <iframe src="http://localhost:8080" style="width: 100%; height: 100%; border: none;"
                            title="Banner Creator"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // Optional: Handle iframe communication if needed
        window.addEventListener('message', function (event) {
            if (event.origin !== 'http://localhost:8080') return;

            // Handle messages from React app
            console.log('Message from canvas creator:', event.data);
        });
    </script>
@endpush