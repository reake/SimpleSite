<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>登陆</title>
    <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <base href="../webapp/dist/">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- for ios 7 style, multi-resolution icon of 152x152 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" href="../assets/images/logo.png">
    <meta name="apple-mobile-web-app-title" content="Flatkit">
    <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" sizes="196x196" href="../assets/images/logo.png">

    <!-- style -->
    <link rel="stylesheet" href="../assets/animate.css/animate.min.css" type="text/css"/>
    <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css" type="text/css"/>
    <link rel="stylesheet" href="../assets/material-design-icons/material-design-icons.css" type="text/css"/>

    <link rel="stylesheet" href="../assets/bootstrap/dist/css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="../assets/styles/app.min.css">
    <link rel="stylesheet" href="../assets/styles/font.css" type="text/css"/>
</head>
<body>
<div class="app" id="app">

    <!-- ############ LAYOUT START-->
    <div class="center-block w-xxl w-auto-xs p-y-md">
        <div class="navbar">
            <div class="pull-center">
                <div ui-include="'../views/blocks/navbar.brand.html'"></div>
            </div>
        </div>
        <div class="p-a-md box-color r box-shadow-z1 text-color m-a">
            <div class="m-b text-sm">
                让建站更加简单!
            </div>
            <form name="form">
                <div class="md-form-group float-label">
                    <input type="email" class="md-input" ng-model="user.email" required>
                    <label>邮箱</label>
                </div>
                <div class="md-form-group float-label">
                    <input type="password" class="md-input" ng-model="user.password" required>
                    <label>密码</label>
                </div>
                <div class="m-b-md">
                    <label class="md-check">
                        <input type="checkbox"><i class="primary"></i> 保持登陆状态
                    </label>
                </div>
                <button type="submit" class="btn primary btn-block p-x-md">登陆</button>
            </form>
        </div>

        <div class="p-v-lg text-center">
            <div class="m-b"><a ui-sref="access.forgot-password" href="/manage/forgot-password"
                                class="text-primary _600">忘记密码?</a></div>
            <div>注册账户? <a ui-sref="access.signup" href="/manage/register" class="text-primary _600">注册</a></div>
        </div>
    </div>

    <!-- ############ LAYOUT END-->

</div>
<script src="scripts/app.html.js"></script>
<script src="scripts/login.js"></script>
</body>
</html>
