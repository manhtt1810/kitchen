{{--search--}}
<div>
    <form id="form-search" method="get" action="{{route('customer.index')}}">
        <div class="form-row">
            <div class="col-md-4">
                <input id="search_input" type="text" class="form-control" name="keyword" placeholder="Nhập số điện thoại và họ tên" value="{{request('keyword')}}">
            </div>
            <div class="col-md-1">
                <button class="btn btn-inverse btn-sm" type="submit" title="Tìm kiếm">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </form>
</div>
{{--end search--}}
