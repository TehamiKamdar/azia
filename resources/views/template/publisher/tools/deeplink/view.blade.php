@extends("layouts.publisher.publisher_panel")

@pushonce('styles')

@endpushonce

@pushonce('scripts')

@endpushonce

@section("content")

    <div class="az-content az-content-dashboard">

        <div class="container-fluid">
            <div class="az-content-body">
                <div class="col-lg-12">

                        @php
                            $title = "Deep Link Generator";
                            $description = "Create a Link with our super fast deep link generator tool and promote any brand easily.";
                        @endphp
                        @include("template.publisher.widgets.deeplink")

                </div><!-- End: .col -->
            </div>
        </div>

    </div>

@endsection
