<!-- resources/views/components/your-component-name.blade.php -->

<div>
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog" style="width: ;
height: 610px;
">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">

                <div class="modal-body d-flex justify-content-center">

                    <div>
                        {!! QrCode::generate('Make me into a QrCode!') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
