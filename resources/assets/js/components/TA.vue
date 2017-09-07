<template>
    <div>
        <div class="col-sm-3">
            <div class="panel panel-default">
                <div class="panel-heading">Technical Analysis</div>
                <div class="panel-body">
                    <ul class="list-group text-center">
                        <li class="list-group-item" data-toggle="modal" data-target=".bs-example-modal-sm"> BTC &nbsp;<i
                                class="fa fa-minus-circle pull-right" aria-hidden="true"></i></li>

                    </ul>
                    <div class="text-center">
                        <i class="fa fa-plus-circle" aria-hidden="true" data-toggle="modal" data-target="#myModal"></i>
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

        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    asdf
                </div>
            </div>
        </div>

        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Coin Information</h4>
                    </div>
                    <div class="modal-body col-sm-8 col-sm-offset-2">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">Coin</div>
                                    <input type="text" class="form-control" id="coinName">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">Symbol</div>
                                    <input type="text" class="form-control" id="coinSymbol">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">Description</div>
                                    <input type="text" class="form-control" id="coinDescription">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">Trading View</div>
                                    <input type="text" class="form-control" id="coinDescription">
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- Modal -->

</template>


<script>
    export default {
        data() {
            return {
                test: '',
            }
        }
    }
</script>