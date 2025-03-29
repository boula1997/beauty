<!-- GetButton.io widget -->
<div class="d-none" id="settings" whatsapp="{{ contacts('whatsapp')[0]->contact }}" phone="{{ contacts('phone')[0]->contact }}"></div>
@push('js')
    <script type="text/javascript">
    let whatsapp =$('#settings').attr('whatsapp');
    let phone =$('#settings').attr('phone');
    console.log();
        (function () {
            var options = {
                call: phone, // Call phone number
                whatsapp: whatsapp, // WhatsApp number
                call_to_action: "{{__('general.contact_us')}}", // Call to action
                button_color: "#7cbcce", // Color of button
                position: "{{ app()->getLocale()=='ar'? 'right' : 'left' }}", // Position may be 'right' or 'left'
                order: "call,whatsapp", // Order of buttons
            };ث
            var proto = 'https:', host = "getbutton.io", url = proto + '//static.' + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>
@endpush
<!-- /GetButton.io widget -->
