<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
        <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="csrf-token" content="{{ csrf_token() }}" /> 
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
    <link rel="stylesheet" href="css/chat.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css">
    <!-- <link rel="stylesheet" href="assets/css/coreui.min.css') }}"> -->
    <link rel="stylesheet" href="assets/icheck/skins/all.css">
    <link rel="stylesheet" href="css/datetime-picker.css"/>

    <link rel="stylesheet" href="assets/css/jquery.toast.min.css">
    <script src="assets/js/jquery.min.js"></script>

    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    @if(Auth::user()->is_subscribed)
        @include('layouts.one_signal')
    @endif

    @livewireStyles
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="css/emojionearea.min.css">
    <link rel="stylesheet" href="css/dropzone.css">
    <link rel="stylesheet" href="css/ekko-lightbox.css">
    <link rel="stylesheet" href="assets/css/video-js.css">
    <link rel="stylesheet" href="assets/css/new-conversation.css">
</head>
<body>


<div class="main-wrapper">
<div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
                    <div id="sidebar-menu" class="sidebar-menu">
                        <ul>
                            <li class="menu-title"> 
                                <span>Admin</span>
                            </li>
                            
            <li class="{{ Request::is('index') ? 'active' : '' }}" href="{{ url('index') }}"><a  href="{{ url('index') }}"><i class="la la-dashboard"></i> <span>Dashboard</span></a></li>
                        <li class="{{ Request::is('clients') ? 'active' : '' }}"><a  href="{{ url('clients-list') }}"><i class="la la-users"></i> <span>Clients</span></a></li> 
                                            <li class="{{ Request::is('clients') ? 'active' : '' }}"><a  href="{{ url('clients-support') }}"><i class="la la-users"></i> <span>Support Contract</span></a></li>     
                <li class="{{ Request::is('employees') ? 'active' : '' }}" href="{{ url('employees') }}"><a  href="{{ url('employees-list') }}"><i class="la la-users"></i> <span>Employees</span></a></li>
    <li class="{{ Request::is('tickets') ? 'active' : '' }}"><a  href="{{ url('tickets') }}"><i class="la la-ticket"></i><span>SR Common Area</span></a></li>   
            <li class="{{ Request::is('leave-reports') ? 'active' : '' }}" href="{{ url('leave-reports') }}"><a  href="{{ url('leave-reports') }}"><i class="la la-dashboard"></i> <span>Reports</span></a></li>
                    
                    
                        <li class="submenu">
                                <a href="#"><i class="la la-user"></i> <span> Settings </span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">


                                <li>
        <a class="{{ Request::is('profile') ? 'active' : '' }}" href="{{ url('profile') }}"> Dynamic Forms  </a></li>

        <li>
        <a class="{{ Request::is('client-profile') ? 'active' : '' }}" href="{{ url('roles-permissions') }}"> Roles & Permissions </a></li>
    <li>
        <a class="{{ Request::is('client-profile') ? 'active' : '' }}" href="{{ url('client-profile') }}"> Notifications</a></li>
                                
                                </ul>
                            </li>
                    
                    
                    
                        <!--    <li class="submenu">
                                <a href="#"><i class="la la-dashboard"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a  class="{{ Request::is('index') ? 'active' : '' }}" href="{{ url('index') }}">Admin Dashboard</a></li>
                                    <li><a class="{{ Request::is('employee-dashboard') ? 'active' : '' }}" href="{{ url('employee-dashboard') }}">Employee Dashboard</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-cube"></i> <span> Apps</span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;"> -->
                                <!-- <li class="{{ Request::is('chat') ? 'active' : '' }}">
        <a  href="{{ url('chat') }}">Chat</a></li> -->
                                    
                                    <!-- <li class="submenu">
                                        <a href="#"><span> Calls</span> <span class="menu-arrow"></span></a>
                                        <ul style="display: none;">
                                        <li class="{{ Request::is('voice-call') ? 'active' : '' }}">
        <a  href="{{ url('voice-call') }}">Voice Call</a></li>

        <li class="{{ Request::is('video-call') ? 'active' : '' }}">
        <a  href="{{ url('video-call') }}">Video Call</a></li>
                                            
        <li class="{{ Request::is('outgoing-call') ? 'active' : '' }}">
        <a  href="{{ url('outgoing-call') }}">Outgoing Call</a></li>

        <li class="{{ Request::is('incoming-call') ? 'active' : '' }}">
        <a  href="{{ url('incoming-call') }}">Incoming Call</a></li>
                                            
                                            
                                        </ul>
                                    </li> -->

        <!-- <li><a class="{{ Request::is('events') ? 'active' : '' }}" href="{{ url('events') }}">Calendar</a></li>

        <li><a class="{{ Request::is('contacts') ? 'active' : '' }}" href="{{ url('contacts') }}">Contacts</a></li>

        <li><a class="{{ Request::is('inbox') ? 'active' : '' }}" href="{{ url('inbox') }}">Email</a></li>                      
                                    
        <li><a class="{{ Request::is('file-manager') ? 'active' : '' }}"  href="{{ url('file-manager') }}">File Manager</a></li>                                 -->
        <!-- </ul> -->
                            </li>
                            <li class="menu-title"> 
                                <span>Client</span>
                            </li>
                                <li class="{{ Request::is('index') ? 'active' : '' }}" href="{{ url('index') }}"><a  href="{{ url('index') }}"><i class="la la-dashboard"></i> <span>Dashboard</span></a></li>
                        
                        
                
    <li class="{{ Request::is('tickets') ? 'active' : '' }}"><a  href="{{ url('tickets') }}"><i class="la la-ticket"></i><span>Service Request</span></a></li>  
            <li class="{{ Request::is('index') ? 'active' : '' }}" href="{{ url('chat') }}"><a  href="{{ url('chat') }}"><i class="la la-dashboard"></i> <span>Chat</span></a></li>

                            
                            <li class="menu-title"> 
                                <span>Employees</span>
                            </li>
                        
                            <li class="{{ Request::is('index') ? 'active' : '' }}" href="{{ url('index') }}"><a  href="{{ url('index') }}"><i class="la la-dashboard"></i> <span>Dashboard</span></a></li>
                        
    <li class="{{ Request::is('tickets') ? 'active' : '' }}"><a  href="{{ url('tickets') }}"><i class="la la-ticket"></i><span>SR Common Console</span></a></li>    
    
        <li class="{{ Request::is('tickets') ? 'active' : '' }}"><a  href="{{ url('tickets') }}"><i class="la la-ticket"></i><span>Assigned Tickets</span></a></li> 
            <li class="{{ Request::is('index') ? 'active' : '' }}" href="{{ url('conversations') }}"><a  href="{{ url('conversations') }}"><i class="la la-dashboard"></i> <span>Chat</span></a></li>
                        
                        </ul>
                    </div>
                </div>
            </div>
            </div>


            

<div class="header">
            
            <!-- Logo -->
            <div class="header-left">
                <a href="index" class="logo">
                    <img src="img/logo.png" width="40" height="40" alt="">
                </a>
            </div>
            <!-- /Logo -->
            
            <a id="toggle_btn" href="javascript:void(0);">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>
            
            <!-- Header Title -->
            <div class="page-title-box">
                <h3>Shahgaron</h3>
            </div>
            <!-- /Header Title -->
            
            <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
            
            <!-- Header Menu -->
            <ul class="nav user-menu">
            
                <!-- Search -->
                <li class="nav-item">
                    <div class="top-nav-search">
                        <a href="javascript:void(0);" class="responsive-search">
                            <i class="fa fa-search"></i>
                       </a>
                        <form action="search">
                            <input class="form-control" type="text" placeholder="Search here">
                            <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </li>
                <!-- /Search -->
            
                <!-- Flag -->
             
                <!-- /Flag -->
            
                <!-- Notifications -->
        <li class="nav-item dropdown notification">
            <a class="nav-link " data-toggle="dropdown" href="#" role="button"
               aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-bell"></i>
                <span class="totalNotificationCount badge badge-pill" data-total_count="0"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right notification__popup">
                <div class="dropdown-header text-center">
                    <div class="header-heading">
                        <strong>Notifications</strong>
                        <span class="totalNotificationCount" data-total_count="0" style="display: none"></span>
                    </div>
                    <div class="header-button">
                        <a href="conversations" >Read All</a>
                    </div>
                </div>
                <a class="dropdown-item read" id="noNewNotification">
                    No Notifications Yet...
                </a>
            </div>
        </li>
                <li class="nav-item dropdown">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i> <span class="badge badge-pill">3</span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="activities">
                                        <div class="media">
                                            <span class="avatar">
                                                <img alt="" src="img/profiles/avatar-02.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities">
                                        <div class="media">
                                            <span class="avatar">
                                                <img alt="" src="img/profiles/avatar-03.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities">
                                        <div class="media">
                                            <span class="avatar">
                                                <img alt="" src="img/profiles/avatar-06.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
                                                <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities">
                                        <div class="media">
                                            <span class="avatar">
                                                <img alt="" src="img/profiles/avatar-17.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
                                                <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities">
                                        <div class="media">
                                            <span class="avatar">
                                                <img alt="" src="img/profiles/avatar-13.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
                                                <p class="noti-time"><span class="notification-time">2 days ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="activities">View all Notifications</a>
                        </div>
                    </div>
                </li>
                <!-- /Notifications -->
                
                <!-- Message Notifications -->
                <li class="nav-item dropdown">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="fa fa-comment-o"></i> <span class="badge badge-pill">8</span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Messages</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="chat">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">
                                                    <img alt="" src="img/profiles/avatar-09.jpg">
                                                </span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Richard Miles </span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="chat">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">
                                                    <img alt="" src="img/profiles/avatar-02.jpg">
                                                </span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">John Doe</span>
                                                <span class="message-time">6 Mar</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="chat">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">
                                                    <img alt="" src="img/profiles/avatar-03.jpg">
                                                </span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author"> Tarah Shropshire </span>
                                                <span class="message-time">5 Mar</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="chat">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">
                                                    <img alt="" src="img/profiles/avatar-05.jpg">
                                                </span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Mike Litorus</span>
                                                <span class="message-time">3 Mar</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="chat">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">
                                                    <img alt="" src="img/profiles/avatar-08.jpg">
                                                </span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author"> Catherine Manseau </span>
                                                <span class="message-time">27 Feb</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="chat">View all Messages</a>
                        </div>
                    </div>
                </li>
                <!-- /Message Notifications -->

                <li class="nav-item dropdown has-arrow main-drop">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <span class="user-img"><img src="img/profiles/avatar-21.jpg" alt="">
                        <span class="status online"></span></span>
                        <span>Admin</span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile">My Profile</a>
                        <a class="dropdown-item" href="settings">Settings</a>
                        <a class="dropdown-item" href="login">Logout</a>
                    </div>
                </li>
            </ul>
            <!-- /Header Menu -->
            
            <!-- Mobile Menu -->
            <div class="dropdown mobile-user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile">My Profile</a>
                    <a class="dropdown-item" href="settings">Settings</a>
                    <a class="dropdown-item" href="login">Logout</a>
                </div>
            </div>
            <!-- /Mobile Menu -->
            
        </div>

<div class="page-wrapper">
    <audio id="notificationSound">
        <source src="{{ isset($notification_sound) ? $notification_sound : ''}}" type="audio/mp3">
    </audio>
    <div class="content container-fluid">
    
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Chat</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                        <li class="breadcrumb-item active">Chat</li>
                    </ul>
                </div>
<!--                 <div class="col-auto float-right ml-auto">
                    <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_ticket"><i class="fa fa-plus"></i> Add Ticket</a>
                </div> -->
            </div>
        </div>
    <div class="">
        <div class="chat-container chat">
            <div class="chat__inner">
                <!-- left section of chat area (chat person selection area) -->
                <div class="chat__people-wrapper chat__people-wrapper--responsive">
                    <div class="chat__people-wrapper-header">
                        <span class="h3 mb-0">Chat</span>
                        <div class="d-flex chat__people-wrapper-btn-group">
                            <i class="nav-icon fa fa-bars align-top chat__people-wrapper-bar"></i>
                            @if($enableGroupSetting == 1)
                                @if(Auth::user()->hasRole('Admin'))
                                    <div class="chat__people-wrapper-button btn-create-group mr-2" data-toggle="modal"
                                         data-target="#createNewGroup">
                                        <i class="nav-icon group-icon color-green" data-toggle="tooltip"
                                           data-placement="bottom"
                                           title="{{ __('messages.create_new_group') }}"><img
                                                    src="{{asset('assets/icons/group30.png')}}"></i>
                                    </div>
                                @elseif($membersCanAddGroup == 1)
                                    <div class="chat__people-wrapper-button btn-create-group mr-2" data-toggle="modal"
                                         data-target="#createNewGroup">
                                        <i class="nav-icon group-icon color-green" data-toggle="tooltip"
                                           data-placement="bottom"
                                           title="{{ __('messages.create_new_group') }}"><img
                                                    src="{{asset('assets/icons/group30.png')}}"></i>
                                    </div>
                                @endif
                            @endif
                            <div class="chat__people-wrapper-button" data-toggle="modal"
                                 data-target="#addNewChat">
                                <i class="nav-icon " data-toggle="tooltip" data-placement="bottom"
                                   title="{{ __('messages.new_conversation') }}"><img
                                            src="{{asset('assets/icons/chat30.png')}}"></i>
                            </div>
                        </div>
                    </div>
                    <div class="chat__search-wrapper">
                        <div class="chat__search clearfix chat__search--responsive">
                            <i class="fa fa-search"></i>
                            <input type="search" placeholder="{{ __('messages.search') }}" class="chat__search-input"
                                   id="searchUserInput">
                            <i class="fa fa-search d-lg-none chat__search-responsive-icon"></i>
                        </div>
                    </div>
                    <ul class="nav nav-tabs chat__tab-nav" id="chatTabs">
                        <li class="nav-item">
                            <a data-toggle="tab" id="activeChatTab" class="nav-link active" href="#chatPeopleBody">{{__('messages.chats.active_chat')}}</a>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="tab" id="archiveChatTab" class="nav-link" href="#archivePeopleBody">{{__('messages.chats.archive_chat')}}</a>
                        </li>
                    </ul>
                    <div class="tab-content chat__tab-content">
                        <div class="chat__people-body tab-pane fade in active show" id="chatPeopleBody">
                            <div id="infyLoader" class="infy-loader chat__people-body-loader">
                                @include('partials.infy-loader')
                            </div>
                            <div class="text-center no-conversation" style="display: none">
                                <div class="chat__no-conversation">
                                    <div class="text-center"><i class="fa fa-2x fa-commenting-o" aria-hidden="true"></i></div>
                                    {{ __('messages.no_conversation_found') }}
                                </div>
                            </div>
                            <div class="text-center no-conversation-yet" style="display: none">
                                <div class="chat__no-conversation">
                                    <div class="text-center"><i class="fa fa-2x fa-commenting-o" aria-hidden="true"></i></div>
                                    {{ __('messages.no_conversation_added_yet') }}
                                </div>
                            </div>
                            <div id="loadMoreConversationBtn" style="display: none">
                                <a href="javascript:void(0)" class="load-more-conversation">Load More</a>
                            </div>
                        </div>
                        <div class="chat__people-body tab-pane fade in active" id="archivePeopleBody">
                            <div class="text-center no-archive-conversation">
                                <div class="chat__no-archive-conversation">
                                    <div class="text-center"><i class="fa fa-2x fa-commenting-o" aria-hidden="true"></i></div>
                                    {{ __('messages.no_conversation_found') }}
                                </div>
                            </div>
                            <div class="text-center no-archive-conversation-yet">
                                <div class="chat__no-archive-conversation">
                                    <div class="text-center"><i class="fa fa-2x fa-commenting-o" aria-hidden="true"></i></div>
                                    {{ __('messages.no_conversation_added_yet') }}
                                </div>
                            </div>
                            <div id="loadMoreArchiverConversationBtn" style="display: none">
                                <a href="javascript:void(0)" class="load-more-archive-conversation">{{__('messages.chats.load_more')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ left section of chat area -->


                <!-- right section of chat area (chat conversation area)-->
                <div class="chat__area-wrapper">
                    @include('chat.no-chat')
                </div>
                <!--/ right section of chat area-->

                <!-- profile section (chat profile section)-->
            @include('chat.chat_profile')
            @include('chat.msg_info')
            <!--/ profile section -->
            </div>
        </div>
        <!-- Modal -->
        <div id="addNewChat" class="modal fade" role="dialog" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <!-- Modal content-->
                <div class="modal-content modal-new-conversation">
                    <div class="modal-header border-0 pb-0">
                        <h5 class="modal-title">
                            <i class="ti-user"></i>{{__('messages.group.new_conversations')}} @if($enableGroupSetting == 1) / {{__('messages.group.groups')}} @endif</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            &times;
                        </button>
                    </div>
                    <div class="modal-body">
                        <nav class="nav nav-tabs" id="myTab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-my-contacts-tab" data-toggle="tab"
                               href="#nav-my-contacts" role="tab" aria-controls="nav-my-contacts-tab"
                               aria-expanded="true"> <i class="ti-user"></i>{{ __('messages.my_contacts') }}
                            </a> 
                            <a
                                    class="nav-item nav-link wrap-text" id="nav-users-tab" data-toggle="tab"
                                    href="#nav-users"
                                    role="tab" aria-controls="nav-users" aria-expanded="true">
                                <i class="ti-user"></i>{{ __('messages.new_conversation') }}
                            </a>
                            @if($enableGroupSetting == 1)
                            <a
                                    class="nav-item nav-link" id="nav-groups-tab" data-toggle="tab" href="#nav-groups"
                                    role="tab" aria-controls="nav-groups">{{ __('messages.group.groups') }}</a>
                            @endif
                                <a
                                    class="nav-item nav-link" id="nav-blocked-users-tab" data-toggle="tab"
                                    href="#nav-blocked-users" role="tab"
                                    aria-controls="nav-blocked-users">{{ __('messages.blocked_users') }}</a>
                        </nav>

                        <div class="tab-content search-any-member" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-my-contacts" role="tabpanel"
                                 aria-labelledby="nav-my-contacts-tab">
                                @livewire('my-contacts-search', ['myContactIds' => $myContactIds, 'blockUserIds' => $blockUserIds])
                            </div>
                            <div class="tab-pane fade" id="nav-users" role="tabpanel" aria-labelledby="nav-users-tab">
                                @livewire('search-users', ['myContactIds' => $myContactIds, 'blockUserIds' => $blockUserIds])
                            </div>
                            @if($enableGroupSetting == 1)
                            <div class="tab-pane fade" id="nav-groups" role="tabpanel" aria-labelledby="nav-groups-tab">
                                @livewire('group-search')
                            </div>
                            @endif
                            <div class="tab-pane fade show" id="nav-blocked-users" role="tabpanel"
                                 aria-labelledby="nav-blocked-users-tab">
                                @livewire('blocked-user-search', ['blockedByMeUserIds' => $blockedByMeUserIds])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('chat.group_modals')
        @include('chat.edit_group_modals')
        @include('chat.report_user_modal')
    </div>
    @include('chat.templates.conversation-template')
    @include('chat.templates.message')
    @include('chat.templates.no-messages-yet')
    @include('chat.templates.no-conversation')
    @include('chat.templates.group_details')
    @include('chat.templates.user_details')
    @include('chat.templates.group_listing')
    @include('chat.templates.group_members')
    @include('chat.templates.single_group_member')
    @include('chat.group_members_modal')
    @include('chat.templates.blocked_users_list')
    @include('chat.templates.add_chat_users_list')
    @include('chat.templates.badge_message_template')
    @include('chat.templates.member_options')
    @include('chat.templates.single_message')
    @include('chat.templates.contact_template')
    @include('chat.templates.conversations_list')
    @include('chat.templates.common_templates')
    @include('chat.templates.my_contacts_listing')
    @include('chat.templates.conversation-request')
    @include('chat.copyImageModal')
</div>
<!-- Modal -->
<div class="modal fade" id="fileUpload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <h5 class="file-upload-heading">Upload Files</h5>
            <button type="button" class="close file-upload-close-btn" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
                <form action="file-upload"
                      class="dropzone conversation-dropzone"
                      id="dropzone">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
                <div class="d-flex mt-3 float-right">
                    <button id="submit-all" class="upload-file-btn btn btn-primary mr-2">Upload</button>
                    <button type="reset" id="cancel-upload-file"
                            class="upload-file-btn btn btn-secondary">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="setCustomStatusModal" class="modal fade" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header border-0 pb-0">
                <h5 class="modal-title">
                    <i class="ti-user"></i>Set a status
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    &times;
                </button>
            </div>
            <div class="modal-body">
                <div class="mb-2 col-sm-12">
                    <div class="input-group">
                        <div class="input-group-prepend user-status-emoji">
                            <input type="text" class="form-control" id="userStatusEmoji">
                        </div>
                        <input type="text" class="form-control" id="userStatus"
                               placeholder="What&#039;s your status?...">
                    </div>
                    <div class="col-sm-12 my-2 p-0 text-right">
                        <button type="button" class="btn btn-primary" id="setUserStatus">Save</button>
                        <button type="button" class="btn btn-secondary" id="clearUserStatus">Clear Status</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<!-- jQuery 3.1.1 -->
    <script src="js/dropzone.min.js"></script>
    <script src="js/ekko-lightbox.min.js"></script>
    <script src="assets/js/video.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/coreui.min.js"></script>
<script src="assets/js/jquery.toast.min.js"></script>
<script src="assets/js/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/moment-timezone.min.js"></script>
<script src="assets/icheck/icheck.min.js"></script>
<script src="https://www.jsviews.com/download/jsviews.min.js"></script>
<script src="js/emojionearea.js"></script>
<script src="assets/js/emojione.min.js"></script>
<script type="text/javascript" src="js/datetime-picker.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>

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
        let pdfURL = 'assets/icons/pdf.png';
        let xlsURL = 'assets/icons/xls.png';
        let textURL = 'assets/icons/text.png';
        let docsURL = 'assets/icons/docs.png';
        let videoURL = 'assets/icons/video.png';
        let youtubeURL = 'assets/icons/youtube.png';
        let audioURL = 'assets/icons/audio.png';
        let zipURL = 'assets/icons/zip.png';
        let isUTCTimezone = '{{(config('app.timezone') == 'UTC') ? 1  :0 }}';
        let timeZone = '{{config('app.timezone')}}';
        let blockedUsersListObj = JSON.parse('{!! json_encode($blockUserIds) !!}');
        let myContactIdsObj = JSON.parse('{!! json_encode($myContactIds) !!}');
        let groupMembers = [];
    </script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/notification.js"></script>
    <script src="assets/js/set_user_status.js"></script>
    <script src="assets/js/set-user-on-off.js"></script>
    <script src="assets/js/profile.js"></script>
    <script src="assets/js/chat.js"></script>

</html>
