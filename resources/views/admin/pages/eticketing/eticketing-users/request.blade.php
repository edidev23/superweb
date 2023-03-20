@extends('admin._layouts.template')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Pengajuan Admin Eticketing ( Destinasi )</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">
                            <a href="javascript: void(0);">Eticketing</a>
                        </li>
                        <li class="breadcrumb-item active">Pengajuan Admin</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Data Pengajuan admin Eticketing</h4>
                </div>

                <div class="card-body">
                    {{-- <p class="text-muted">Rekap data tiket di semua destinasi</p> --}}

                    <div class="table-responsive">
                        <table class="table table-hover table-striped-columns align-middle table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="text-center" scope="col">No</th>
                                    <th scope="col">Tgl. Pengajuan</th>
                                    <th scope="col">Destinasi</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Whatsapp</th>
                                    <th scope="col">Device</th>
                                    <th scope="col">Brand</th>
                                    <th scope="col">Hardware</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>23-02-2023</td>
                                    <td>Museum Blambangan</td>
                                    <td>Edi Siswanto</td>
                                    <td>est23.edi@gmail.com</td>
                                    <td>6282302002407 </td>
                                    <td>CP01</td>
                                    <td>OPPO</td>
                                    <td>mt6781</td>
                                    <td>
                                        <div class="hstack gap-3 fs-20">
                                            <a href="javascript:void(0);" title="Accept" class="link-success">
                                                <i class="ri-checkbox-circle-line"></i>
                                            </a>
                                            <a href="javascript:void(0);" title="Reject" class="link-warning">
                                                <i class="ri-close-circle-line"></i>
                                            </a>
                                            <a href="javascript:void(0);" title="Delete" class="link-danger">
                                                <i class="ri-delete-bin-5-line"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td>23-02-2023</td>
                                    <td>Museum Blambangan</td>
                                    <td>Edi Siswanto</td>
                                    <td>est23.edi@gmail.com</td>
                                    <td>6282302002407 </td>
                                    <td>CP01</td>
                                    <td>OPPO</td>
                                    <td>mt6781</td>
                                    <td>
                                        <div class="hstack gap-3 fs-20">
                                            <a href="javascript:void(0);" class="link-success">
                                                <i class="ri-checkbox-circle-line"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="link-warning">
                                                <i class="ri-close-circle-line"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="link-danger">
                                                <i class="ri-delete-bin-5-line"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td>23-02-2023</td>
                                    <td>Museum Blambangan</td>
                                    <td>Edi Siswanto</td>
                                    <td>est23.edi@gmail.com</td>
                                    <td>6282302002407 </td>
                                    <td>CP01</td>
                                    <td>OPPO</td>
                                    <td>mt6781</td>
                                    <td>
                                        <div class="hstack gap-3 fs-20">
                                            <a href="javascript:void(0);" class="link-success">
                                                <i class="ri-checkbox-circle-line"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="link-warning">
                                                <i class="ri-close-circle-line"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="link-danger">
                                                <i class="ri-delete-bin-5-line"></i>
                                            </a>
                                        </div>
                                    </td>
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
