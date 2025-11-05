<!DOCTYPE html>
<html lang="en">

<head>
    @include('global.css_support')
    @yield('styles')
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>
    <div class="container-fluid">
        @include('layout.sidebar')

        <div class="content">
            @yield('content')
        </div>
        <div class="chat-with-fetchai">
            <img src="{{ asset('svg/message.svg') }}" alt="message">
            <p>Chat With FetchAi</p>
        </div>
    </div>
    <div id="chat-box">
        <div class="chat-content">
            <div class="chat-header">
                <div class="chat-title">
                    <img src="{{ asset('images/fetch-ai-icon.png') }}" alt="AI Icon">
                    <span>AI Assistant</span>
                </div>
                <img class="chat-close" src="{{ asset('images/close.png') }}" alt="Close">
            </div>
            <div class="chat-messages">
                <div class="chat-welcome">
                    <img class="welcome-avatar" src="{{ asset('images/Logo_small_copy.png') }}" alt="Website Icon">
                    <h6>What do you want to know about your clinic?</h6>
                </div>
            </div>
        </div>


        <div class="chat-input">
            <img src="{{ asset('images/attach-file.png') }}" alt="Attachment">
            <input type="text" id="chatText" placeholder="Ask anything..." />
            <img src="{{ asset('images/send.png') }}" alt="">
        </div>
    </div>
    @include('global.js_support')
    @yield('scripts')

</body>

</html>
