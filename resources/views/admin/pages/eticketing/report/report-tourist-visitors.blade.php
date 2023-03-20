@extends('admin._layouts.template')

@section('style')
    <!-- daterangepicker -->
    <script src="https://tax.banyuwangikab.go.id/assets/js/jquery.min.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <style>
        .date-range {
            background: #fff;
            cursor: pointer;
            padding: 5px 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }


        .no, td {
            text-align: center
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Laporan Jumlah Kunjungan Wisata</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">
                            <a href="javascript: void(0);">Eticketing</a>
                        </li>
                        <li class="breadcrumb-item active">Report Destinations</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Rekap jumlah wisatawan di semua destinasi</h4>
                </div>

                <div class="card-body">
                    {{-- <p class="text-muted">Rekap data tiket di semua destinasi</p> --}}

                    <div class="row pb-3">
                        <div class="col-lg-5">
                            <div>
                                <label class="form-label mb-0">Pilih Tanggal</label>
                                <div id="reportrange" class="date-range">
                                    <i class="ri-calendar-event-fill px-1"></i>
                                    <span>{{ $start }} - {{ $end }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="d-flex justify-content-end mt-3">
                                <button type="button" class="btn btn-warning btn-label"
                                    onclick="document.getElementById('print-form').submit();">
                                    <i class="ri-printer-fill label-icon align-middle fs-16 me-2 "></i>
                                    Print
                                </button>

                                <form id="print-form" action="{{ url('admin/report/all-destination/print') }}"
                                    method="POST" class="d-none">
                                    @csrf
                                    <input type="hidden" name="start" value="{{ $start }}">
                                    <input type="hidden" name="end" value="{{ $end }}">
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover table-striped-columns align-middle table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="no" scope="col">No</th>
                                    <th scope="col">Destinasi</th>
                                    <th scope="col">Domestik</th>
                                    <th scope="col">Manca</th>
                                    <th scope="col">Dalam Kota</th>
                                    <th scope="col">Luar Kota</th>
                                    <th scope="col">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="text-start" >Museum blambangan</td>
                                    <td>15</td>
                                    <td>5</td>
                                    <td>10</td>
                                    <td>10</td>
                                    <td>20</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(function() {

            $.urlParam = function(name) {
                var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
                if (results == null) {
                    return null;
                }
                return decodeURI(results[1]) || 0;
            }

            let start_params = $.urlParam('start');
            let end_params = $.urlParam('end');

            var start = start_params ? moment(start_params) : moment().subtract(7, 'days');
            var end = end_params ? moment(end_params) : moment();
            $('#reportrange span').html(start.format('D MMMM YYYY') + ' - ' + end.format('D MMMM YYYY'));

            $('#reportrange').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                        'month').endOf(
                        'month')]
                }
            }, cb);

            function cb(start, end) {
                $('#reportrange span').html(start.format('D MMMM YYYY') + ' - ' + end.format('D MMMM YYYY'));
                var d = new Date(start.format('YYYY-M-D'));
                // console.log(formatHari(d));

                var start = start.format('YYYY-MM-DD');
                var last = end.format('YYYY-MM-DD');

                console.log(start, last);

                let origin = location.origin;
                location.href = origin + '/admin/report/all-destination?start=' + start + '&end=' + last;
            }
        })
    </script>
@endsection
