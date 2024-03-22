<!-- Modal -->
<div class="modal fade" id="courseFullModal" tabindex="-1" role="dialog" aria-labelledby="courseFullModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="border-radius: 20px ">

            <div class="modal-body">
                <div class="d-flex justify-content-between mb-4">
                    <h5 class="modal-title" id="courseFullModalLabel"
                        style="font-family: Cairo;
                                    font-size: 26px;
                                    font-weight: 667;
                                    line-height: 34px;
                                    letter-spacing: 0em;
                                    text-align: right;
                                    color: rgba(18, 23, 67, 1);

                                    ">
                        @lang('file.Sorry')!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="d-flex-justify-content-center mb-4 text-center"
                    style="font-family: Cairo;
                                        font-size: 17px;
                                        font-weight: 400;
                                        line-height: 25px;
                                        letter-spacing: 0em;
                                        text-align:;

                                    color: rgba(102, 102, 102, 1);
                                    margin: 0;
                                    ">
                    @lang('file.This course is currently full. Please choose another course!!')
                </div>
                <div class="d-flex justify-content-end text-center">
                    <button type="button" class="btn btn-primary text-center" data-dismiss="modal"
                        style="width:100px;font-family: Cairo; font-family: Cairo; font-size: 15px; font-weight: 600; line-height: 30px; letter-spacing: 0em; text-align: center; background:#121743; border:#121743; color:#FFFFFF;">@lang('file.Close')</button>
                </div>
            </div>

        </div>
    </div>
</div>
