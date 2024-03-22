   @if (app()->getLocale() == 'ar')
       <div id="event-full-text-modal" class="modal" tabindex="-1" role="dialog"
           aria-labelledby="event-full-text-modal-label">
           <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">
                   <div class="modal-body">
                       <div class="center pr-0 text-left">
                           <img src="{{ asset('images/Vector (1).svg') }}">
                           <span
                               style="font-family: Cairo;color: #091157; font-size: 16px; font-weight: 667; line-height: 45px; letter-spacing: -0.01em; text-align: end;">
                               <span id="event-full-text-title"></span>
                           </span>
                       </div>
                       <p id="event-full-text" class="mt-3"
                           style="font-family: Cairo; font-size: 14px; font-weight: 400; line-height: 25px; letter-spacing: 0em; text-align: left; color:#121743;">
                           <!-- Full event text will be displayed here -->
                       </p>
                   </div>
               </div>
           </div>
       </div>
   @else
       <div id="event-full-text-modal" class="modal" tabindex="-1" role="dialog"
           aria-labelledby="event-full-text-modal-label">
           <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">
                   <div class="modal-body">
                       <div class="center pr-0 text-right">
                           <img src="{{ asset('images/Vector (1).svg') }}">
                           <span
                               style="font-family: Cairo;color: #091157; font-size: 16px; font-weight: 667; line-height: 45px; letter-spacing: -0.01em; text-align: start;">
                               <span id="event-full-text-title"></span>
                           </span>
                       </div>
                       <p id="event-full-text" class="mt-3"
                           style="font-family: Cairo; font-size: 14px; font-weight: 400; line-height: 25px; letter-spacing: 0em; text-align: right; color:#121743;">

                       </p>
                   </div>
               </div>
           </div>
       </div>
   @endif

   <script>
       function openEventModal(title, fullText) {
           document.getElementById('event-full-text-title').innerText = title;
           document.getElementById('event-full-text').innerText = fullText;
           $('#event-full-text-modal').modal('show');
       }
   </script>
   <script>
       function openEvent2Modal(title, fullText) {
           document.getElementById('event-full-text-title').innerText = title;
           document.getElementById('event-full-text').innerText = fullText;
           $('#event-full-text-modal').modal('show');
       }
   </script>
