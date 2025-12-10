<!-- Start Table Responsive -->
<div class="table-responsive">
    <table class="table mb-0 table-hover table-borderless border-0">
        <thead>
        <tr class="userDatatable-header">

            <th>
                <span class="userDatatable-title">Advertiser</span>
            </th>
            <th>
                <span class="userDatatable-title">Advertiser URL</span>
            </th>

            <th>
                <span class="userDatatable-title">Tracking Short Link</span>
            </th>

            <th>
                <span class="userDatatable-title">Tracking Link</span>
            </th>

            <th>
                <span class="userDatatable-title">Sud ID</span>
            </th>

            <th>

            </th>
        </tr>
        </thead>
        <tbody>
            @if(count($links))
                @foreach($links as $key => $link)
                    <tr>
                        <td>
                            <div class="orderDatatable-title">
                                {{ $link->name }} <br>
                                <span class="fs-12 color-gray">({{ $link->sid }})</span>
                            </div>
                        </td>
                        <td>
                            <div class="orderDatatable-title">
                                <a href="{{ $link->url }}" target="_blank">{{ \Illuminate\Support\Str::limit($link->url, 30, $end='...') }}</a>
                            </div>
                        </td>
                        <td>
                            <div class="orderDatatable-title">
                                <a href="{{ $link->tracking_url_short }}" id="trackingURL{{ $key }}" target="_blank">{{ $link->tracking_url_short ?? "-" }}</a>
                            </div>
                        </td>
                        <td>
                            <div class="orderDatatable-title">
                                <a href="{{ $link->tracking_url_long }}" id="trackingURL{{ $key }}" target="_blank">{{ \Illuminate\Support\Str::limit($link->tracking_url_long ?? "-", 30, $end='...') }}</a>
                            </div>
                        </td>
                        <td>
                            <div class="orderDatatable-title">
                                {{ $link->sub_id ?? "-" }}
                            </div>
                        </td>
                        <td>
                            <a href="javascript:void(0)" onclick="copyLink('{{ $key }}')" class="btn btn-xs btn-outline-dashed" >
                                Copy Link
                            </a>
                        </td>
                    </tr>
                    <!-- End: tr -->
                @endforeach
            @else
                <tr>
                    <td colspan="5">
                        <h6 class="text-center mt-5">Text Link Data Not Exist</h6>
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
<!-- Table Responsive End -->

@if(count($links) && $links instanceof \Illuminate\Pagination\LengthAwarePaginator)
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex justify-content-sm-end justify-content-star mt-1 mb-30 border-top">

                {{ $links->withQueryString()->links() }}

            </div>
        </div>
    </div>
@endif
