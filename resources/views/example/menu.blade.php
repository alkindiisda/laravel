
<ul>
    <li>
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        <div class="sidebar-toggler hidden-phone"></div>
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
    </li>
    <li>
        <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
        <form class="sidebar-search">
            <div class="input-box">
                <a href="javascript:;" class="remove"></a>
                <input type="text" placeholder="Search..." />
                <input type="button" class="submit" value=" " />
            </div>
        </form>
        <!-- END RESPONSIVE QUICK SEARCH FORM -->
    </li>
    <li class="">
        <a href="#">
            <i class="icon-home"></i>
            <span class="title">Dashboard</span>
            <span class="selected"></span>
        </a>
    </li>
        @foreach(Session::get('menu') as $menu)

        <li @if(count($menu->child)>0)
                @if(Session::get('cur')==$menu->display_name)
                    class="has-sub start active">
                    @else
                    class="has-sub">
                    @endif
            @endif
           <a href="javascript:;">
               <i class="{{$menu->icon}}"></i>
               <span class="title">{{$menu->display_name}}</span>
               <span class="arrow "></span>
           </a>
            @if(count($menu->child)>0)
            <ul class="sub">
                @foreach($menu->child as $child)

              {{--  <li ><a href="{{$child->display_name}}">{{$child->display_name}}</a></li>--}}
                  {{-- <li> {!!link_to_route('menu',$child->display_name,array($menu->name.'/'.$child->name))!!}</li>--}}
                  <li>  <a href="{{ url('/'.$menu->display_name.'/'.$child->name) }}">{{$child->display_name}}</a></li>
                @endforeach
            </ul>
            @endif
        </li>
        @endforeach
    
</ul>