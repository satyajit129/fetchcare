@extends('layout.master')
@section('title', 'Settings')

@section('styles')
@endsection

@section('content')
    <div class="content__header">
        <h2 class="content__title">Settings</h2>
    </div>
    <div class="content__overview">
        <div class="settings_container">
            <!-- Sidebar -->
            <div class="settings_menu">
                <a href="{{ route('settings', ['form' => 'profile']) }}"
                    class="settings_menu_item {{ request('form', 'profile') == 'profile' ? 'active' : '' }}">
                    Profile
                </a>
                <a href="{{ route('settings', ['form' => 'clinic']) }}"
                    class="settings_menu_item {{ request('form') == 'clinic' ? 'active' : '' }}">
                    Clinic Info
                </a>
                <a href="{{ route('settings', ['form' => 'notifications']) }}"
                    class="settings_menu_item {{ request('form') == 'notifications' ? 'active' : '' }}">
                    Notifications
                </a>
                <a href="{{ route('settings', ['form' => 'team']) }}"
                    class="settings_menu_item {{ request('form') == 'team' ? 'active' : '' }}">
                    Team
                </a>
                <a href="{{ route('settings', ['form' => 'billing']) }}"
                    class="settings_menu_item {{ request('form') == 'billing' ? 'active' : '' }}">
                    Billing
                </a>
                <a href="{{ route('settings', ['form' => 'security']) }}"
                    class="settings_menu_item {{ request('form') == 'security' ? 'active' : '' }}">
                    Security
                </a>
            </div>


            <!-- Content -->
            <div class="settings_content">


                <div class="profile_card">
                    <!-- Profile photo -->
                    @if ($form_type == 'profile')
                        <div class="settings_content_header">
                            <h3 class="settings_content_title">Profile</h3>
                            <img src="{{ asset('svg/edit_settings.svg') }}" class="btn_edit" alt="">
                        </div>
                        <div class="profile_photo">
                            <div class="photo_circle"></div>
                            <div class="upload_section">
                                <button class="upload_btn">
                                    <img src="{{ asset('svg/document-upload.svg') }}"  alt="">
                                    <span>Upload Your Photo</span>
                                </button>
                                <div class="upload_note">

                                    <p>File size up to 2MB</p>
                                    <p>JPG, PNG and JPEG suggested</p>
                                </div>
                            </div>
                        </div>

                        <!-- Form -->
                        <form class="profile_form">
                            <input type="text" placeholder="Full Name">
                            <input type="email" placeholder="Email Address">
                            <input type="password" placeholder="Password">
                            <input type="text" placeholder="Your Role">

                            <div class="form_actions" style="display: none;">
                                <button type="submit" class="btn_update">Update</button>
                                <button type="button" class="btn_cancel">Cancel</button>
                            </div>
                        </form>
                    @endif

                    @if ($form_type == 'clinic')
                        <div class="settings_content_header">
                            <h3 class="settings_content_title">Client</h3>
                            <img src="{{ asset('svg/edit_settings.svg') }}" class="btn_edit" alt="">
                        </div>
                        <div class="profile_photo">
                            <div class="photo_circle"></div>
                            <div class="upload_section">
                                <button class="upload_btn">
                                    <img src="{{ asset('svg/document-upload.svg') }}"  alt="">
                                    <span>Upload Clinic Logo</span>
                                </button>
                                <div class="upload_note">

                                    <p>File size up to 2MB</p>
                                    <p>JPG, PNG and JPEG suggested</p>
                                </div>
                            </div>
                        </div>

                        <!-- Form -->
                        <form class="profile_form">
                            <input type="text" placeholder="Clinic Name">
                            <input type="email" placeholder="Location">
                            <input type="password" placeholder="Number Of Stuff">

                            <div class="form_actions" style="display: none;">
                                <button type="submit" class="btn_update">Update</button>
                                <button type="button" class="btn_cancel">Cancel</button>
                            </div>
                        </form>
                    @endif
                    @if ($form_type == 'notifications')
                        <div class="settings_content_header">
                            <h3 class="settings_content_title">Notification</h3>
                            <img src="{{ asset('svg/edit_settings.svg') }}" class="btn_edit" alt="">
                        </div>
                        <!-- Form -->
                        <form class="profile_form">
                            <div class="notifications_container">

                                <div class="notification_item">
                                    <p>Appointment Reminders</p>
                                    <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </div>

                                <div class="notification_item">
                                    <p>Weekly Performance Summary</p>
                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </div>

                                <div class="notification_item">
                                    <p>AI Insights Notification</p>
                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </div>

                                <div class="notification_item">
                                    <p>Email Notifications</p>
                                    <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </div>

                            </div>

                            <div class="form_actions" style="display: none;">
                                <button type="submit" class="btn_update">Update</button>
                                <button type="button" class="btn_cancel">Cancel</button>
                            </div>
                        </form>
                    @endif
                    @if ($form_type == 'team')
                        <div class="settings_content_header">
                            <h3 class="settings_content_title">Team</h3>
                            <img src="{{ asset('svg/edit_settings.svg') }}" class="btn_edit" alt="">
                        </div>
                        <div class="invitation_section">
                            <p class="invitation_title">Invite Team Member</p>
                            <div class="input_group">
                                <input type="text" placeholder="Enter Email Address">
                                <button class="btn_send">Send Invite</button>
                            </div>
                        </div>
                        <div class="member_section">
                            <h6>Existing Members</h6>
                            <div class="member_profile">
                                <img src="{{ asset('images/01376a01f8898b4d066033af55f17b0f52d39b46.jpg') }}"
                                    alt="Dr. Emily Ross" class="member_avatar">
                                <div class="member_info">
                                    <h5 class="name">Dr. Emily Ross</h5>
                                    <p class="profession">Veterinarian</p>
                                    <p class="last_login">Last Login: July 18, 2025 09:12 AM</p>
                                </div>
                                <button class="btn_remove remove_btn_font">Remove</button>
                            </div>
                            <div class="member_profile">
                                <img src="{{ asset('images/50e2bbc23961dfb1fb031d40ddc0d9f18d6f6392.jpg') }}"
                                    alt="Dr. Emily Ross" class="member_avatar">
                                <div class="member_info">
                                    <h5 class="name">Dr. Emily Ross</h5>
                                    <p class="profession">Veterinarian</p>
                                    <p class="last_login">Last Login: July 18, 2025 09:12 AM</p>
                                </div>
                                <button class="btn_remove remove_btn_font">Remove</button>
                            </div>
                            <div class="member_profile">
                                <img src="{{ asset('images/0268974cebb9bd24900021477625fd8820da438b.jpg') }}"
                                    alt="Dr. Emily Ross" class="member_avatar">
                                <div class="member_info">
                                    <h5 class="name">Dr. Emily Ross</h5>
                                    <p class="profession">Veterinarian</p>
                                    <p class="last_login">Last Login: July 18, 2025 09:12 AM</p>
                                </div>
                                <button class="btn_remove remove_btn_font">Remove</button>
                            </div>
                            <div class="member_profile">
                                <img src="{{ asset('images/51a2667788ebcdbeeab9f107b69a80d1053e1aa1.jpg') }}"
                                    alt="Dr. Emily Ross" class="member_avatar">
                                <div class="member_info">
                                    <h5 class="name">Dr. Emily Ross</h5>
                                    <p class="profession">Veterinarian</p>
                                    <p class="last_login">Last Login: July 18, 2025 09:12 AM</p>
                                </div>
                                <button class="btn_remove remove_btn_font">Remove</button>
                            </div>
                            <div class="member_profile">
                                <img src="{{ asset('images/6064c0a1eb3065519f49205e5a65e2381d2958ab.jpg') }}"
                                    alt="Dr. Emily Ross" class="member_avatar">
                                <div class="member_info">
                                    <h5 class="name">Dr. Emily Ross</h5>
                                    <p class="profession">Veterinarian</p>
                                    <p class="last_login">Last Login: July 18, 2025 09:12 AM</p>
                                </div>
                                <button class="btn_remove remove_btn_font">Remove</button>
                            </div>
                            <div class="member_profile">
                                <img src="{{ asset('images/9a83ac795aefbab435ee13cdafe40ae87db0b62f.jpg') }}"
                                    alt="Dr. Emily Ross" class="member_avatar">
                                <div class="member_info">
                                    <h5 class="name">Dr. Emily Ross</h5>
                                    <p class="profession">Veterinarian</p>
                                    <p class="last_login">Last Login: July 18, 2025 09:12 AM</p>
                                </div>
                                <button class="btn_remove remove_btn_font">Remove</button>
                            </div>
                        </div>
                        <div class="form_actions" style="display: none;">
                                <button type="submit" class="btn_update">Update</button>
                                <button type="button" class="btn_cancel">Cancel</button>
                            </div>
                    @endif
                    @if ($form_type == 'billing')
                        <div class="settings_content_header">
                            <h3 class="settings_content_title">Subscription & Billing</h3>
                            <img src="{{ asset('svg/edit_settings.svg') }}" class="btn_edit" alt="">
                        </div>

                        <div class="billing_content">
                            <div class="billing_item">
                                <p class="billing_content_label">Plan Type</p>
                                <div class="billing_content_body">
                                    <select>
                                        <option value="">Enterprise</option>
                                    </select>
                                </div>
                            </div>

                            <div class="billing_item">
                                <p class="billing_content_label">Payment Method</p>
                                <div class="billing_content_body">
                                    <input type="text" placeholder="•••• 2345">
                                </div>
                            </div>

                            <div class="billing_item">
                                <p class="billing_content_label">Billing Cycle</p>
                                <div class="billing_content_body">
                                    <div class="billing_buttons">
                                        <button type="button" class="billing_btn active">Monthly</button>
                                        <button type="button" class="billing_btn">Yearly</button>
                                    </div>
                                </div>
                            </div>

                            <div class="billing_item">
                                <p class="billing_content_label">Invoice History</p>
                                <div class="billing_content_body">
                                    <button class="download_btn">
                                        <img src="{{ asset('svg/document-download.svg') }}" alt="">
                                        <span>Download Invoices</span>
                                    </button>
                                </div>
                            </div>

                            <div class="form_actions" style="display: none;">
                                <button type="submit" class="btn_update">Update</button>
                                <button type="button" class="btn_cancel">Cancel</button>
                            </div>
                        </div>
                    @endif
                    @if ($form_type == 'security')
                        <div class="settings_content_header">
                            <h3 class="settings_content_title">Security</h3>
                            <img src="{{ asset('svg/edit_settings.svg') }}" class="btn_edit" alt="">
                        </div>
                        <div class="authentication_container">

                            <div class="authentication">
                                <p>Two-Factor Authentication</p>
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="login_history">
                                <h4>Last Login History</h4>
                                <button class="history_remove_btn remove_btn_font">Remove From All Devices</button>
                            </div>

                        </div>
                        <div class="authentication_content">
                            
                            <img class="app_icon" src="{{ asset('images/chrome.png') }}" alt="Google Chrome">
                            
                            <div class="app_details">
                                <h6 class="">Google Chrome</h6>
                                <p class="ip">IP: 105.173.134.161</p>
                                <p class="last_login">Last Login: July 18, 2025 09:12 AM</p>
                            </div>
                            <button class="app_remove remove_btn_font">Remove</button>
                        </div>
                        <div class="authentication_content">
                            
                            <img class="app_icon" src="{{ asset('images/chrome.png') }}" alt="Google Chrome">
                            
                            <div class="app_details">
                                <h6 class="">Google Chrome</h6>
                                <p class="ip">IP: 105.173.134.161</p>
                                <p class="last_login">Last Login: July 18, 2025 09:12 AM</p>
                            </div>
                            <button class="app_remove remove_btn_font">Remove</button>
                        </div>
                        <div class="authentication_content">
                            
                            <img class="app_icon" src="{{ asset('images/chrome.png') }}" alt="Google Chrome">
                            
                            <div class="app_details">
                                <h6 class="">Google Chrome</h6>
                                <p class="ip">IP: 105.173.134.161</p>
                                <p class="last_login">Last Login: July 18, 2025 09:12 AM</p>
                            </div>
                            <button class="app_remove remove_btn_font">Remove</button>
                        </div>
                        <div class="form_actions" style="display: none;">
                            <button type="submit" class="btn_update">Update</button>
                            <button type="button" class="btn_cancel">Cancel</button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $(".billing_btn").on("click", function() {
            $(".billing_btn").removeClass("active"); 
            $(this).addClass("active");
        });
    });
</script>

<script>
$(document).ready(function() {
    // When edit button is clicked
    $('.btn_edit').on('click', function() {
        var $card = $(this).closest('.profile_card');       // find the parent card
        var $actions = $card.find('.form_actions');        // find form actions inside this card

        // Hide all other form actions inside this card
        $card.find('.form_actions').not($actions).slideUp(150).removeClass('active');

        // Toggle this section's form actions
        $actions.slideToggle(150).toggleClass('active');
    });

    // Cancel button hides its own form actions
    $('.btn_cancel').on('click', function() {
        $(this).closest('.form_actions').slideUp(150).removeClass('active');
    });
});

</script>

@endsection
