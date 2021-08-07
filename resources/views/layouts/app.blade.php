<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
        <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Dashboard - HRMS admin template</title>
        
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        
        <!-- Lineawesome CSS -->
        <link rel="stylesheet" href="css/line-awesome.min.css">
        
            <!-- Select2 CSS -->
        <link rel="stylesheet" href="css/select2.min.css">
        
        <!-- Datetimepicker CSS -->
        <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
        
        <!-- Calendar CSS -->
        <link rel="stylesheet" href="css/fullcalendar.min.css">

        <!-- Tagsinput CSS -->
        <link rel="stylesheet" href="plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">

        <!-- Datatable CSS -->
        <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
        
        <!-- Chart CSS -->
        <link rel="stylesheet" href="plugins/morris/morris.css">

        <!-- Summernote CSS -->
        <link rel="stylesheet" href="plugins/summernote/dist/summernote-bs4.css">
        
        <!-- Main CSS -->
        <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="{{ mix('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ mix('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css">
    <!-- <link rel="stylesheet" href="{{ mix('assets/css/coreui.min.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('assets/icheck/skins/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/datetime-picker.css') }}"/>

    <link rel="stylesheet" href="{{ mix('assets/css/jquery.toast.min.css') }}">
    <script src="{{ mix('assets/js/jquery.min.js') }}"></script>

    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    @if(Auth::user()->is_subscribed)
        @include('layouts.one_signal')
    @endif

    @livewireStyles
    <link rel="stylesheet" href="{{ mix('assets/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/emojionearea.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dropzone.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ekko-lightbox.css') }}">
    <link rel="stylesheet" href="{{ mix('assets/css/video-js.css') }}">
    <link rel="stylesheet" href="{{ mix('assets/css/new-conversation.css') }}">
</head>
<body>

        @yield('content')

</body>
<!-- jQuery 3.1.1 -->
<script src="{{ mix('assets/js/popper.min.js') }}"></script>
<script src="{{ mix('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ mix('assets/js/coreui.min.js') }}"></script>
<script src="{{ mix('assets/js/jquery.toast.min.js') }}"></script>
<script src="{{ mix('assets/js/sweetalert2.all.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
<script src="{{ asset('js/moment.min.js') }}"></script>
<script src="{{ asset('js/moment-timezone.min.js') }}"></script>
<script src="{{ asset('assets/icheck/icheck.min.js') }}"></script>
<script src="https://www.jsviews.com/download/jsviews.min.js"></script>
<script src="{{ asset('js/emojionearea.js') }}"></script>
<script src="{{ mix('assets/js/emojione.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/datetime-picker.js') }}"></script>
<script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>

    <script src="{{ asset('js/dropzone.min.js') }}"></script>
    <script src="{{ asset('js/ekko-lightbox.min.js') }}"></script>
    <script src="{{ mix('assets/js/video.min.js') }}"></script>
<script>
    let setLastSeenURL = '{{url('update-last-seen')}}';
    let pusherKey = '{{ config('broadcasting.connections.pusher.key') }}';
    let pusherCluster = '{{ config('broadcasting.connections.pusher.options.cluster') }}';
    let messageDeleteTime = '{{ config('configurable.delete_message_time') }}';
    let changePasswordURL = '{{ url('change-password') }}';
    let baseURL = '{{ url('/') }}';
    let conversationsURL = '{{ route('conversations') }}';
    let notifications = JSON.parse(JSON.stringify({!! json_encode(getNotifications()) !!}));
    let loggedInUserId = '{{Auth::id()}}';
    let loggedInUserStatus = '{!! Auth::user()->userStatus !!}';
    if (loggedInUserStatus != '') {
        loggedInUserStatus = JSON.parse(JSON.stringify({!! Auth::user()->userStatus !!}));
    }
    let setUserCustomStatusUrl = '{{ route('set-user-status') }}';
    let clearUserCustomStatusUrl = '{{ route('clear-user-status') }}';
    let updateLanguageURL = "{{ url('update-language')}}";
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        },
    });
    (function ($) {
        $.fn.button = function (action) {
            if (action === 'loading' && this.data('loading-text')) {
                this.data('original-text', this.html()).html(this.data('loading-text')).prop('disabled', true);
            }
            if (action === 'reset' && this.data('original-text')) {
                this.html(this.data('original-text')).prop('disabled', false);
            }
        };
    }(jQuery));
    $(document).ready(function () {
        $('.alert').delay(4000).slideUp(300);
    });
</script>
<script src="{{ mix('assets/js/app.js') }}"></script>
<script src="{{ mix('assets/js/custom.js') }}"></script>
<script src="{{ mix('assets/js/notification.js') }}"></script>
<script src="{{ mix('assets/js/set_user_status.js') }}"></script>
<script src="{{ mix('assets/js/set-user-on-off.js') }}"></script>
<script src="{{mix('assets/js/profile.js')}}"></script>
    <script>
        let userURL = '{{url('users')}}/';
        let userListURL = '{{url('users-list')}}';
        let conversationListURL = '{{url('conversations-list')}}';
        let archiveConversationListURL = '{{url('archive-conversations')}}';
        let chatSelected = false;
        let sendMessageURL = '{{route('conversations.store')}}';
        let fileUploadURL = '{{route('file-upload')}}';
        let imageUploadURL = '{{route('image-upload')}}';
        let csrfToken = '{{csrf_token()}}';
        let authUserName = '{{ Auth::user()->name }}';
        let readMessageURL = '{{url('read-message')}}';
        let authImgURL = '{{Auth::user()->photo_url}}';
        let deleteConversationUrl = '{{url('conversations')}}/';
        let deleteMessageUrl = '{{url('conversations/message')}}/';
        let createGroupURL = '{{url('groups')}}';
        let getUsers = '{{url('get-users')}}';
        let groupsList = '{{url('groups')}}';
        let appName = '{{ getAppName() }}';
        let conversationId = '{{ $conversationId }}';
        let sendChatReqURL = '{{route('send-chat-request')}}';
        let acceptChatReqURL = '{{route('accept-chat-request')}}';
        let declineChatReqURL = '{{route('decline-chat-request')}}';
        let enableGroupSetting = '{{ isGroupChatEnabled() }}';
        let reportUserURL = '{{route('report-user.store')}}';
        let authRole = "{{ Auth::user()->role_name }}";
        
        /** Icons URL */
        let pdfURL = '{{ asset('assets/icons/pdf.png') }}';
        let xlsURL = '{{ asset('assets/icons/xls.png') }}';
        let textURL = '{{ asset('assets/icons/text.png') }}';
        let docsURL = '{{ asset('assets/icons/docs.png') }}';
        let videoURL = '{{ asset('assets/icons/video.png') }}';
        let youtubeURL = '{{ asset('assets/icons/youtube.png') }}';
        let audioURL = '{{ asset('assets/icons/audio.png') }}';
        let zipURL = '{{ asset('assets/icons/zip.png') }}';
        let isUTCTimezone = '{{(config('app.timezone') == 'UTC') ? 1  :0 }}';
        let timeZone = '{{config('app.timezone')}}';
        let blockedUsersListObj = JSON.parse('{!! json_encode($blockUserIds) !!}');
        let myContactIdsObj = JSON.parse('{!! json_encode($myContactIds) !!}');
        let groupMembers = [];
    </script>
    <script src="{{ mix('assets/js/chat.js') }}"></script>

</html>
