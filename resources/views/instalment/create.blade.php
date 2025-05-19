@extends('layouts.base')
@section('contents')
    <div class="container-fluid">
        <div class="row margin-10 w-100" style="padding: 20px;">
            <div class="panel float">
                <div class="panel-body">
                    <h5>Create New Kontrak</h5>
                </div>
                <form action="{{ route('instalment.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="row">
                            <label for="client_name" class="col-md-2 control-label">Client Name</label>
                            <div class="col-md-10">
                                <input type="text" name="client_name" id="client_name" class="form-control" autocomplete="off" autofocus placeholder="Client Name">
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 25px;">
                        <div class="row">
                            <label for="otr" class="col-md-2 control-label">OTR</label>
                            <div class="col-md-10">
                                <input type="number" name="otr" id="otr" class="form-control" autocomplete="off" autofocus placeholder="OTR">
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 25px;">
                        <div class="row">
                            <label for="jangka_waktu" class="col-md-2 control-label">Jangka Waktu</label>
                            <div class="col-md-10">
                                <input type="number" name="jangka_waktu" id="jangka_waktu" class="form-control" autocomplete="off" autofocus placeholder="Jangka Waktu">
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 25px;">
                        <div class="row">
                            <label for="down_payment" class="col-md-2 control-label">Down Payment</label>
                            <div class="col-md-10">
                                <input type="number" name="down_payment" id="down_payment" class="form-control" autocomplete="off" autofocus placeholder="Down Payment">
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 25px;">
                        <div class="row">
                            <label for="" class="col-md-2 control-label">Down Payment</label>
                            <div class="col-md-10">
                                <input type="number" name="" id="" class="form-control" autocomplete="off" autofocus placeholder="Down Payment">
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success btn-md" type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
