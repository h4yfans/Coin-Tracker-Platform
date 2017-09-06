@extends('layouts.app')

@section('content')

    <div class="col-sm-3">
        <div class="panel panel-default">
            <div class="panel-heading">Technical Analysis</div>
            <div class="panel-body">
                <ul class="list-group text-center">
                    <li class="list-group-item" data-toggle="modal" data-target=".bs-example-modal-sm">  BTC &nbsp;<i class="fa fa-minus-circle pull-right" aria-hidden="true"></i></li>
                    <li class="list-group-item">  PAY &nbsp;<i class="fa fa-minus-circle pull-right" aria-hidden="true"></i></li>
                    <li class="list-group-item">  STRAT &nbsp;<i class="fa fa-minus-circle pull-right" aria-hidden="true"></i></li>
                    <li class="list-group-item">  PTOY &nbsp;<i class="fa fa-minus-circle pull-right" aria-hidden="true"></i></li>
                    <li class="list-group-item">  DTB &nbsp;<i class="fa fa-minus-circle pull-right" aria-hidden="true"></i></li>
                </ul>
                <div class="text-center">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="panel panel-default">
            <div class="panel-heading">Watch List</div>
            <div class="panel-body">
                <ul class="list-group text-center">
                    <li class="list-group-item" data-toggle="modal" data-target=".bs-example-modal-sm">  BTC &nbsp;<i class="fa fa-minus-circle pull-right" aria-hidden="true"></i></li>
                    <li class="list-group-item">  PAY &nbsp;<i class="fa fa-minus-circle pull-right" aria-hidden="true"></i></li>
                    <li class="list-group-item">  STRAT &nbsp;<i class="fa fa-minus-circle pull-right" aria-hidden="true"></i></li>
                    <li class="list-group-item">  PTOY &nbsp;<i class="fa fa-minus-circle pull-right" aria-hidden="true"></i></li>
                    <li class="list-group-item">  DTB &nbsp;<i class="fa fa-minus-circle pull-right" aria-hidden="true"></i></li>
                </ul>
                <div class="text-center">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="panel panel-default">
            <div class="panel-heading">Success</div>
            <div class="panel-body">
                <ul class="list-group text-center">
                    <li class="list-group-item" data-toggle="modal" data-target=".bs-example-modal-sm">  BTC &nbsp;<i class="fa fa-minus-circle pull-right" aria-hidden="true"></i></li>
                    <li class="list-group-item">  PAY &nbsp;<i class="fa fa-minus-circle pull-right" aria-hidden="true"></i></li>
                    <li class="list-group-item">  STRAT &nbsp;<i class="fa fa-minus-circle pull-right" aria-hidden="true"></i></li>
                    <li class="list-group-item">  PTOY &nbsp;<i class="fa fa-minus-circle pull-right" aria-hidden="true"></i></li>
                    <li class="list-group-item">  DTB &nbsp;<i class="fa fa-minus-circle pull-right" aria-hidden="true"></i></li>
                </ul>
                <div class="text-center">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="panel panel-default">
            <div class="panel-heading">Failed</div>
            <div class="panel-body">
                <ul class="list-group text-center">
                    <li class="list-group-item" data-toggle="modal" data-target=".bs-example-modal-sm">  BTC &nbsp;<i class="fa fa-minus-circle pull-right" aria-hidden="true"></i></li>
                    <li class="list-group-item">  PAY &nbsp;<i class="fa fa-minus-circle pull-right" aria-hidden="true"></i></li>
                    <li class="list-group-item">  STRAT &nbsp;<i class="fa fa-minus-circle pull-right" aria-hidden="true"></i></li>
                    <li class="list-group-item">  PTOY &nbsp;<i class="fa fa-minus-circle pull-right" aria-hidden="true"></i></li>
                    <li class="list-group-item">  DTB &nbsp;<i class="fa fa-minus-circle pull-right" aria-hidden="true"></i></li>
                </ul>
                <div class="text-center">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </div>


    <!-- Small modal -->
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
asdf
            </div>
        </div>
    </div>



@endsection

@section('_style')
    <style>

        body{
            background: #414563;
        }
        .list-group-item{
            padding: 5px 15px;
        }

        .list-group-item:hover {
            cursor: pointer;
            background-color: rgb(38, 57, 83);
            color: #fff;
        }

        .fa.fa-minus-circle {
            color: rgb(212, 17, 0);
            display: none;
            margin-top: 4px;
        }

        .list-group-item:hover > .fa.fa-minus-circle {
            display: inline;
        }

        .text-center .fa-plus-circle {
            font-size: 40px;
            color: #71e679;
            cursor: pointer;
        }
    </style>
@endsection