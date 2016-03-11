<div class="col-md-2">
    <h4>Navigation</h4>
    <hr />
    <form method="POST" action="/admin/search">
        <input type="text" name="searchInput">
        <button type="submit">Search</button>
    </form>
    <br />
    <a href="/admin"><button class="btn btn-success col-md-6">All Users</button></a>
    <br /><br />
    <a href="/admin/hosts"><button class="btn btn-success col-md-6">Hosts</button></a>
    <br /><br />
    <a href="/admin/stus"><button class="btn btn-success col-md-6">Students</button></a>
    <br /><br />
    <a href="/admin/rooms"><button class="btn btn-success col-md-6">All rooms</button></a>
    <br /><br />
    <a href="/admin/create"><button class="btn btn-primary col-md-6">添加用户</button></a>
    <br /><br />
    <a href="/host/room/create"><button class="btn btn-primary col-md-6">添加房源</button></a>
    <br /><br />
    <a href="/admin/grade"><button class="btn btn-info col-md-6">成绩排名</button></a>
    <br /><br />
    <a href="{{ URL::route('download_stu_list_excel') }}"><button class="btn btn-default">下载名单</button></a>
    <br /><br />
    <a href="{{ URL::route('download_grade_list_excel') }}"><button class="btn btn-default">导出成绩</button></a>
</div>