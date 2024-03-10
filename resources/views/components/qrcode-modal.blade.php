<style>
    @media print {
        #dataTable {
            margin-top: 20px;
        }
    }
</style>

<div id="myModal1" class="modal fade d-flex-justify-content-center" role="dialog" style=" height: 610px; margin-top: 150px">
    <div class="modal-dialog">
        <!-- Modal content -->
        <div class="modal-content" style="border-radius:30px">
            <div class="modal-body d-flex justify-content-center">
                <div id="printContent">
                    {!! QrCode::size(200)->generate(json_encode(session('qrCodeData'))) !!}
                </div>
                
            </div>
            <div class="d-flex justify-content-center mb-3">
                <button type="button" class="btn btn-primary " onclick="printQRCode()">@lang('file.print')</button>
            </div>
        </div>
    </div>
</div>

<script>
    function printQRCode() {
        var printWindow = window.open('', '_blank');
        var qrCodeData = {!! json_encode(session('qrCodeData')) !!};

        // Convert each key-value pair to a string and join them with newline characters
        var qrCodeContent = Object.entries(qrCodeData)
            .map(function([key, value]) {
                return key + ': ' + value;
            })
            .join('\n');

        printWindow.document.write('<html><head><title>QR Code and Data</title></head><body>');
        printWindow.document.write('<pre id="printContent">' + qrCodeContent + '</pre>');
        printWindow.document.write('</body></html>');

        printWindow.document.close();
        printWindow.print();
        printWindow.onafterprint = function() {
            printWindow.close();
        };
    }
</script>
