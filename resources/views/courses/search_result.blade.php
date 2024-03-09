@if ($filteredCourses !== null)
    @if ($filteredCourses->isEmpty())
        <div class="col-md-12 mt-5">
            <p class="text-center" style="font-family: Cairo; font-size: 18px; color: rgba(18, 23, 67, 1);">
                No courses found.
            </p>
        </div>
    @else
        @foreach ($filteredCourses as $course)
            <div class="col-md-4 mt-5">
                <div class="qrcode-container">
                    <div class="qrcode-image d-flex justify-content-center mb-3" id="qrcodeImage">
                        {!! QrCode::size(200)->generate($course->reservations->first()->get()) !!}
                    </div>
                    <div id="output" style="display: none;"></div>
                    <a class="btn btn-primary mt-3 mb-3" id="downloadLink" style="display: none;">Download QrCode</a>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary download-button mt-3 mb-3"
                            onclick="takeshot()">Screenshot</button>
                    </div>
                </div>
                {{-- <div class="justify-content-center">
                    <span class="d-flex justify-content-center mb-2 ">
                        <img src="{{ asset('app/public/' . $course->media()->first()->file_path) }}"
                            style="width:100%;height:258px" alt="First Image">
                    </span>

                    <div class="d-flex justify-content-end pr-1"
                        style="font-family: Cairo;
                                    font-size: 18px;
                                    font-weight: 667;
                                    line-height: 34px;
                                    letter-spacing: 0em;
                                    text-align: right;
                                    color: rgba(18, 23, 67, 1);

                                    ">
                        {{ $course->name }}</div>
                    <div class="mt-2  pr-1"
                        style="font-family: Cairo;
                                        font-size: 16px;
                                        font-weight: 400;
                                        line-height: 25px;
                                        letter-spacing: 0em;
                                        text-align: right;

                                    color: rgba(102, 102, 102, 1);
                                    margin: 0;
                                    ">
                        م/{{ $course->professor_name }}
                        <img src="{{ asset('images/Vector (6).svg') }}">
                    </div>
                    <div class="mt-2  pr-1"
                        style="font-family: Cairo;
                                        font-size: 16px;
                                        font-weight: 400;
                                        line-height: 25px;
                                        letter-spacing: 0em;
                                        text-align: right;

                                    color: rgba(102, 102, 102, 1);
                                    margin: 0;
                                    ">
                        المدة : {{ $course->time_duration }}
                        <img src="{{ asset('images/Vector (5).svg') }}">
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-between">
                    <a href="{{ route('reservation.create') }}" id="ServButton2" class="btn btn-primary"
                        style="width:155px;height:35px;font-family: Cairo;
                                font-family: Cairo;
                                font-size: 15px;
                                font-weight: 600;
                                line-height: 28px;
                                letter-spacing: 0em;
                                text-align: center;
                                background:#121743;
                                border:#121743;
                                color:#FFFFFF;
                                ">
                        أنضم الان

                    </a>

                    <div class="mt-2  pr-0"
                        style="font-family: Cairo;
                                        font-size: 16px;
                                        font-weight: 400;
                                        line-height: 25px;
                                        letter-spacing: 0em;
                                        text-align:;

                                    color: rgba(102, 102, 102, 1);
                                    margin: 0;
                                    ">
                        {{ $course->location }}
                        <img src="{{ asset('images/location1.svg') }}">
                    </div>
                </div> --}}
            </div>
        @endforeach

    @endif
@endif
<script type="text/javascript">
    function takeshot() {
        let div = document.getElementById('qrcodeImage');
        html2canvas(div).then(function(canvas) {
            document.getElementById('output').appendChild(canvas);
            document.getElementById('output').style.display = 'block';
            var dataURL = canvas.toDataURL('image/png');
            var downloadLink = document.getElementById('downloadLink');
            downloadLink.href = dataURL;
            downloadLink.download = 'screenshot.png';
            downloadLink.style.display = 'block';
            document.querySelector('.download-button').style.display = 'none';
        });
    }
</script>
