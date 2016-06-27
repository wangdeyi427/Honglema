@extends('didi.banner')

@section('content')

<div class="page_title">
    <h2 class="fl">活动信息详情</h2>
</div>
<section>
    <ul class="admin_tab">
        <li><a class="active">活动信息</a></li>
        <li><a>商品信息</a></li>
    </ul>
    <!--tabCont-->
    <div class="admin_tab_cont" style="display:block;">
        <!--左右分栏：左侧栏目-->
        <table border="2" width="95%" height="300" style="margin: 20px;">
            <tr>
                <th width="15%">商家名称：</th>
                <td width="17%">{{ $merchant->name}}</td>
                <th width="15%">活动标题：</th>
                <td width="17%">{{ $activity->title}}</td>
                <th width="15%">活动要求：</th>
                <td>{{ $activity->claim}}</td>
            </tr>
            <tr>
                <th>活动时间：</th>
                <td>{{ $activity->time_within}}</td>
                <th>推广费用：</th>
                <td>{{ $activity->total_price}}</td>
                <th>活动状态：</th>
                <td>{{ $activity->activity_status}}</td>
            </tr>
            <tr>
                <th>付款状态：</th>
                <td>{{ $activity->payment_status}}</td>
                <th>创建时间：</th>
                <td>{{ $activity->created_at}}</td>
                <th></th>
                <td></td>
            </tr>
            <tr>
                <th>活动缩略图：</th>
                <td><img src="{{ $activity->picture }}" style="width: 80px; height: 80px;"/></td>
                <th>活动标题图：</th>
                <td colspan="3"><img src="{{ $activity->banner_picture }}" style="width: 240px; height: 80px;"/></td>
            </tr>
        </table>
        <a href="/didi/ActivityList" style="float: right; margin-right: 50px;"><input type="button" value="返回" class="link_btn"/></a>
    </div>
    <div class="admin_tab_cont">
        <table border="2" width="95%" style="margin: 20px;">
            <tr>
                <th width="15%" height="40px;">商品名称：</th>
                <th width="35%" height="40px;">商品简介：</th>
                <th width="35%">商品链接：</th>
                <th width="15%">创建时间：</th>
            </tr>
            @foreach ($commodities as $commodity)
            <tr>
                <td height="40px;">{{ $commodity->name}}</td>
                <td>{{ $commodity->introduction}}</td>
                <td><a href="{{ $commodity->url}}" target="_blank">{{ $commodity->url}}</a></td>
                <td>{{ $commodity->created_at}}</td>
            </tr>
            @endforeach
        </table>
        <a href="/didi/ActivityList" style="float: right; margin-right: 50px;"><input type="button" value="返回" class="link_btn"/></a>
    </div>
</section>
<!--tabStyle-->

<script type="text/javascript" src="http://y.wcc.cn/statics/amazeui/js/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        //tab
        $(".admin_tab li a").click(function(){
            var liindex = $(".admin_tab li a").index(this);
            $(this).addClass("active").parent().siblings().find("a").removeClass("active");
            $(".admin_tab_cont").eq(liindex).fadeIn(150).siblings(".admin_tab_cont").hide();
        });
    });

</script>
@endsection