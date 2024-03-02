<style>
    @media print {
        #dataTable {
            margin-top: 20px;
        }
    }
</style>

<div id="myModal1" class="modal fade d-flex-justify-content-center" role="dialog" style="width: ; height: 610px; margin-top: 200px">
    <div class="modal-dialog">
        <!-- Modal content -->
        <div class="modal-content" style="border-radius:30px">
            <div class="modal-body d-flex justify-content-center">
                <div id="printContent">
                    {!! QrCode::size(200)->generate(json_encode(session('qrCodeData'))) !!}
                </div>
                
            </div>
            <div class="d-flex justify-content-center mb-3">
                <button type="button" class="btn btn-primary " onclick="printQRCode()">Print</button>
            </div>
        </div>
    </div>
</div>

<!-- Table to display the decoded data -->
{{-- <table id="dataTable" style="display: none;">
    <thead>
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
    </thead>
    <tbody>
        <!-- Data will be dynamically populated here -->
    </tbody>
</table> --}}

<script>
    function printQRCode() {
        var printWindow = window.open('', '_blank');
        var qrCodeData = {!! json_encode(session('qrCodeData')) !!};
        var dataTable = '<thead><tr><th>Field</th><th>Value</th></tr></thead><tbody>';
        for (var key in qrCodeData) {
            dataTable += '<tr><td>' + key + '</td><td>' + qrCodeData[key] + '</td></tr>';
        }
        dataTable += '</tbody>';
        document.getElementById('dataTable').innerHTML = dataTable;

        printWindow.document.write('<html><head><title>QR Code and Data</title></head><body>');
        printWindow.document.write('<div id="printContent">' + document.getElementById('printContent').innerHTML +
            '</div>');
        printWindow.document.write('<table border="1">' + document.getElementById('dataTable').innerHTML + '</table>');
        printWindow.document.write('</body></html>');

        printWindow.document.close();
        printWindow.print();
        printWindow.onafterprint = function() {
            printWindow.close();
        };
    }
</script>
