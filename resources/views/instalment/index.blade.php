@extends('layouts.base')
@section('contents')
    <div class="container-fluid">
        <div class="row margin-10  w-100" style="padding: 20px">
            <div class="panel float">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12" >
                    </div>
                </div>
                <div class="panel-body">
                    <h5>Data Kontrak</h5>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
                        <table class="table table-hover" id="master_table_contract">
                            <thead>
                                <tr class="theader">
                                    <th>Kontrak No.</th>
                                    <th>Client Name</th>
                                    <th>OTR</th>
                                    <th>Down Payment</th>
                                    <th>Jangka Waktu</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="panel-body">
                    <h5>Data Angsuran</h5>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
                        <table class="table table-hover" id="master_table_instalment">
                            <thead>
                                <tr class="theader">
                                    <th>Kontrak No.</th>
                                    <th>Angsuran Ke</th>
                                    <th>Angsuran Perbulan</th>
                                    <th>Sudah Bayar</th>
                                    <th>Tanggal Jatuh Tempo</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            var table = $('#master_table_instalment').DataTable({
                "processing": true,
                "serverSide": true,
                "searching": false,
                "paging": true,
                "ajax": "{{ route('instalment.search') }}",
            });
        });

        $(document).ready(function() {
            var table = $('#master_table_contract').DataTable({
                "processing": true,
                "serverSide": true,
                "searching": false,
                "paging": true,
                "ajax": "{{ route('instalment.search_kontrak') }}",
            });
        });
    </script>
@endsection
