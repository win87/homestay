<?php

/*
|--------------------------------------------------------------------------
| Routes
|--------------------------------------------------------------------------
*/

#测试
Route::get('/test', 'TestController@index');
Route::post('/test', ['as' => 'test_upload', 'uses' => 'TestController@post']);
Route::get('/users/export', 'TestController@export');
Route::get('users', 'TestController@users');

#主页
Route::get('/', ['as' => '/', 'uses' => 'WelcomeController@index']);

#注册后跳转主页
Route::get('welcome', ['as' => 'welcome', 'uses' => 'WelcomeController@index']);


####################################################
#用户注册
####################################################
Route::get('register', [
    'middleware' => 'guest', 'as' => 'register', 'uses' => 'registerController@registerGet']);
Route::post('register', [
    'middleware' => 'guest', 'uses' => 'registerController@registerPost']);


####################################################
#登录，登出, 自动跳转, 密码重置
####################################################
Route::get('login', [
    'middleware' => 'guest', 'as' => 'login', 'uses' => 'loginController@loginGet']);
Route::post('login', [
    'middleware' => 'guest', 'uses' => 'loginController@loginPost']);
Route::get('logout', [
    'middleware' => 'auth', 'as' => 'logout', 'uses' => 'loginController@logout']);
Route::controller('password', 'PasswordController');


####################################################
#Host的详情
####################################################

Route::get('host/profile', [
    'as' => 'host_profile', 'uses' => 'Host\HostController@profile']);
Route::get('host/profile_photo', [
    'as' => 'host_profile_photo', 'uses' => 'Host\HostController@profile_photo']);
Route::post('host/update', [
    'as' => 'host_update', 'uses' => 'Host\HostController@update']);

Route::get('rooms', [
    'as' => 'rooms', 'uses' => 'Host\RoomController@rooms']);
Route::get('rooms/new', [
    'as' => 'rooms_new', 'uses' => 'Host\RoomController@create']);
Route::get('rooms/{id}', [
     'as' => 'rooms', 'uses' => 'Host\RoomController@show']);
Route::get('rooms/{id}/preview', [
    'as' => 'rooms_preview', 'uses' => 'Host\RoomController@preview']);
Route::post('rooms/del/{id}', [
     'as' => 'rooms_del', 'uses' => 'Host\RoomController@delRoom']);

#修改房源
Route::post('host/room/update_room', [
    'as' => 'host_room_update_room', 'uses' => 'Host\RoomController@update_room']);
Route::post('host/room/update_accommodation', [
    'as' => 'host_room_update_accommodation', 'uses' => 'Host\RoomController@update_accommodation']);
Route::post('host/room/update_description', [
    'as' => 'host_room_update_description', 'uses' => 'Host\RoomController@update_description']);
Route::post('host/room/update_location', [
    'as' => 'host_room_update_location', 'uses' => 'Host\RoomController@update_location']);
Route::post('host/room/update_calendarPrice', [
    'as' => 'host_room_update_calendarPrice', 'uses' => 'Host\RoomController@update_calendarPrice']);
Route::post('host/room/update_amenities', [
    'as' => 'host_room_update_amenities', 'uses' => 'Host\RoomController@update_amenities']);
Route::post('host/room/change_status', [
    'as' => 'host_room_change_status', 'uses' => 'Host\RoomController@changeStatus']);


#搜索房源列表
Route::get('accommodation', [
    'as' => 'accommodation', 'uses' => 'Host\RoomController@accommodation']);



#资源路由,Room的增删改查
Route::resource('host/room', 'Host\RoomController');

#修改Host个人信息
Route::post('host/update_info', [
    'as' => 'host_update_info', 'uses' => 'Host\HostController@update_info']);


####################################################
#Student的登录详情(包括资料修改，分数查询)
####################################################
Route::get('stu/home', [
    'as' => 'stu_home', 'uses' => 'Stu\StudentController@home']);
Route::get('stu/edit', [
    'as' => 'stu_edit', 'uses' => 'Stu\StudentController@edit']);
Route::post('stu/update', [
    'as' => 'stu_update', 'uses' => 'Stu\StudentController@update']);


####################################################
# Admin Entrance -- Admin/
####################################################

Route::post('admin/search', [
    'as' => 'admin_search', 'uses' => 'Admin\AdminController@search']);

#查看成绩排名
Route::get('admin/grade', [
    'as' => 'grade_list', 'uses' => 'Admin\GradeController@index']);
# Show all Host users
Route::get('admin/hosts', [
    'as' => 'admin_hosts', 'uses' => 'Admin\AdminController@showHosts']);
# Show all Student users
Route::get('admin/stus', [
    'as' => 'admin_stus', 'uses' => 'Admin\AdminController@showStus']);
# Show all rooms
Route::get('admin/rooms', [
    'as' => 'admin_rooms', 'uses' => 'Admin\RoomController@showRooms']);
# Show One Host's all Rooms
Route::get('admin/hosts/rooms/{id}', [
    'as' => 'admin_hosts_rooms', 'uses' => 'Admin\RoomController@showHostRooms']);
# Show One Host's One Specific Room
Route::get('Admin/host/room/{id}', [
    'as' => 'admin_host_room', 'uses' => 'Admin\RoomController@showOneHostOneRoom']);

# Show A Host's Profile
Route::get('admin/hosts/profile/{id}', [
    'as' => 'admin_hosts_profile', 'uses' => 'Admin\AdminController@showHostProfile']);
# Show A Student's Profile
Route::get('admin/stu/profile/{id}', [
    'as' => 'admin_stu_profile', 'uses' => 'Admin\StuController@showStuProfile']);
# Update Student's Info
Route::post('admin/stu/update_info', [
    'as' => 'admin_stu_update_info', 'uses' => 'Admin\StuController@updateInfo']);
# Update Student's Preferences
Route::post('admin/stu/update_preferences', [
    'as' => 'admin_stu_update_preferences', 'uses' => 'Admin\StuController@updatePreferences']);
# Update Student's Destination
Route::post('admin/stu/update_destination', [
    'as' => 'admin_stu_update_destination', 'uses' => 'Admin\StuController@updateDestination']);

#资源路由,学生的增删改查
Route::resource('admin', 'Admin\AdminController');
#上传分数
Route::post('admin/upload_grade', [
    'as' => 'upload_grade', 'uses' => 'Admin\AdminController@upload_grade']);

####################################################
#管理员下载上传学生名单，成绩表
####################################################

#下载学生名单
Route::get('download/stuList', [
    'as' => 'download_stu_list_excel', 'uses' => 'Admin\ExcelController@stuList']);
Route::get('download/grade', [
    'as' => 'download_grade_list_excel', 'uses' => 'Admin\ExcelController@grade']);


### Images upload ###
// Route::get('host/room/upload', [
//     'as' => 'host_room_upload', 'uses' => 'uploadController@show']);

Route::post('rooms/{id}/photos', 'Host\RoomController@addPhoto');
Route::post('hosts/{id}/profile_photo', 'Host\HostController@addProfilePhoto');
Route::delete('photos/{id}', 'Host\RoomController@delPhoto');

#访客访问accommodation list
Route::get('rooms/{id}/details', [
    'as' => 'rooms_details', 'uses' => 'Host\RoomController@public_preview']);
