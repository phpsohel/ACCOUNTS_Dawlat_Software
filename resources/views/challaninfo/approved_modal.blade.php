                                        <!---Modal start----->
        <div class="modal" id="approved{{ $item->id }}">
            <div class="modal-dialog">
                <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Approved item</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="{{ route('approvedChallan',$item->id) }}" method="post">
                    @csrf
                    
                <!-- Modal body -->
                <div class="modal-body">
                    Are you sure to Approved it ?
                    <input type="hidden" value="{{ $item->id }}" name="id">
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" >Yes</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                </div>
                </form>

                </div>
            </div>
            </div>

        </div>
                                              <!---Modal end----->